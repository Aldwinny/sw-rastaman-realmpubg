<?php

session_start();

function db_init()
{
    $link = mysqli_connect("localhost", "root") or die(mysqli_error($link));

    mysqli_select_db($link, "realm_pubg") or die(mysqli_error($link));
    return $link;
}


function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

class Account
{

    static function create($firstname, $lastname, $username, $email, $pass, $contact, $address)
    {
        $link = db_init();

        mysqli_query($link, "INSERT INTO `accounts` VALUES (NULL, '$firstname', '$lastname', '$username','$email', '$pass', '$contact', '$address', 0)");
    }

    static function delete($id)
    {
        $link = db_init();

        mysqli_query($link, "DELETE FROM accounts WHERE id=$id");
    }

    static function update($id, $firstname, $lastname, $username, $email, $contact, $address, $pass)
    {
        $link = db_init();

        mysqli_query($link, "UPDATE accounts SET `firstname`='$firstname', `lastname`='$lastname', `username`='$username', `email`='$email', `contact`='$contact', `address`='$address' WHERE `id`='$id' AND `password`='$pass'");
    }

    static function updateNoPass($id, $firstname, $lastname, $username, $email, $contact, $address, $admin)
    {
        $link = db_init();

        mysqli_query($link, "UPDATE accounts SET `firstname`='$firstname', `lastname`='$lastname', `username`='$username', `email`='$email', `contact`='$contact', `address`='$address', `access`=$admin WHERE `id`='$id'");
    }

    static function updatePass($id, $firstname, $lastname, $username, $email, $contact, $address, $pass, $admin)
    {
        $link = db_init();

        mysqli_query($link, "UPDATE accounts SET `firstname`='$firstname', `lastname`='$lastname', `username`='$username', `email`='$email', `contact`='$contact', `address`='$address', `password`='$pass', `access`=$admin WHERE `id`='$id'");
    }

    static function get($id)
    {
        $link = db_init();
        $res = mysqli_query($link, "SELECT * FROM accounts WHERE id=$id");

        return mysqli_fetch_array($res);
    }

    static function list()
    {
        $link = db_init();
        $res = mysqli_query($link, "SELECT * FROM `accounts`");

        return $res;
    }

    static function find($email, $pass)
    {
        $query = "SELECT * FROM accounts WHERE email='$email' AND password='$pass'";

        return mysqli_query(db_init(), $query);
    }

    static function search($email)
    {
        $query = "SELECT * FROM accounts WHERE email='$email'";

        return mysqli_query(db_init(), $query);
    }

    static function searchByUsername($username)
    {
        $query = "SELECT * FROM accounts WHERE username='$username'";

        return mysqli_query(db_init(), $query);
    }

    static function getAccess($id)
    {
        $link = db_init();
        $res = mysqli_query($link, "SELECT * FROM accounts WHERE id=$id");

        return mysqli_fetch_array($res)['access'];
    }
}