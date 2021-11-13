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

    static function create($firstname, $lastname, $email, $contact, $address)
    {
        $link = db_init();

        mysqli_query($link, "INSERT INTO accounts VALUES(NULL, $firstname, $lastname, $email, $contact, $address)");
    }

    static function delete($id)
    {
        $link = db_init();

        mysqli_query($link, "DELETE FROM accounts WHERE id=$id");
    }

    static function update($id, $firstname, $lastname, $email, $contact, $address)
    {
        $link = db_init();

        mysqli_query($link, "UPDATE accounts SET firstname=$firstname, lastname=$lastname, email=$email, contact=$contact, address=$address WHERE id=$id");
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
        $res = mysqli_query($link, "SELECT * FROM accounts");

        return mysqli_fetch_array($res);
    }

    static function find($email, $pass)
    {
        $link = db_init();
        $query = "SELECT * FROM accounts WHERE email='$email' AND password='$pass'";

        return mysqli_query(db_init(), $query);
    }
}
