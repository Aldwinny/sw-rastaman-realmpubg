<?php

include 'db.php';

if (isset($_POST['fname'], $_POST['lname'], $_POST['uname'], $_POST['email'], $_POST['contact'], $_POST['address'], $_POST['password'])) {

    $fname = validate($_POST['fname']);
    $lname = validate($_POST['lname']);
    $uname = validate($_POST['uname']);
    $email = validate($_POST['email']);
    $contact = validate($_POST['contact']);
    $address = validate($_POST['address']);
    $pass = validate($_POST['password']);

    if (empty($fname) or empty($lname) or empty($uname) or empty($email) or empty($contact) or empty($address) or empty($pass)) {
        header('location: /pages/login.php?reg&err=incomplete credentials!');
        exit();
    } else {
        $res = Account::search($email);
        $resUs = Account::searchByUsername($uname);

        if (mysqli_num_rows($res) === 1) {
            header('location: /pages/login.php?reg&err=email already in use!');
            exit();
        } else if (mysqli_num_rows($resUs) === 1) {
            header('Location: /pages/login.php?reg&err=username already in use!');
        } else {
            Account::create($fname, $lname, $uname, $email, $pass, $contact, $address);

            $res = Account::find($email, $pass);
            if (mysqli_num_rows($res) === 1) {

                $row = mysqli_fetch_assoc($res);

                $_SESSION['email'] = $row['email'];
                $_SESSION['fname'] = $row['firstname'];
                $_SESSION['lname'] = $row['lastname'];
                $_SESSION['uname'] = $row['username'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['contact'] = $row['contact'];
                $_SESSION['id'] = $row['id'];
                header('Location: /index.php');
                exit();
            }
            header('Location: /pages/login.php?reg&err=an unknown error has occurred!');
            exit();
        }
    }
} else if (isset($_POST['email'], $_POST['password'])) {
    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email) or empty($pass)) {
        header('Location: /pages/login.php?err=missing credentials!');
        exit();
    } else {
        $res = Account::find($email, $pass);

        if (mysqli_num_rows($res) === 1) {
            $row = mysqli_fetch_assoc($res);

            if ($row['email'] === $email && $row['password'] === $pass) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['fname'] = $row['firstname'];
                $_SESSION['lname'] = $row['lastname'];
                $_SESSION['uname'] = $row['username'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['contact'] = $row['contact'];
                $_SESSION['id'] = $row['id'];

                header('Location: /index.php');
                exit();
            } else {
                header('Location: /pages/login.php?err=Invalid Credentials!');
                exit();
            }
        } else {
            header('Location: /pages/login.php?err=User not found!');
            exit();
        }
    }
} else {
    header('Location: /pages/login.php');
    exit();
}