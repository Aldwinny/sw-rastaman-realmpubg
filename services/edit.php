i<?php
    include 'db.php';

    session_start();


    if (!isset($_SESSION['email'])) {
        header("location: /pages/login.php");
        exit();
    }
    if (isset($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['contact'], $_POST['address'], $_POST['password'])) {

        $fname = validate($_POST['fname']);
        $lname = validate($_POST['lname']);
        $email = validate($_POST['email']);
        $contact = validate($_POST['contact']);
        $address = validate($_POST['address']);
        $pass = validate($_POST['password']);

        if (empty($pass)) {
            header("location: /pages/edit.php?err=Enter password to confirm changes!");
            exit();
        } else if (empty($fname) or empty($lname) or empty($email) or empty($contact) or empty($address)) {
            header("location: /pages/edit.php?err=Missing Credentials!");
            exit();
        } else {
            $res = mysqli_fetch_array(Account::search($email));
            $info = Account::get($_SESSION['id']);

            if ($info['password'] == $pass) {
                if ($res['id'] !== $info['id']) {
                    header('location: /pages/edit.php?err=email already in use!');
                    exit();
                } else {
                    Account::update($_SESSION['id'], $fname, $lname, $email, $contact, $address, $pass);

                    $_SESSION['email'] = $email;
                    $_SESSION['fname'] = $fname;
                    $_SESSION['lname'] = $lname;
                    $_SESSION['address'] = $address;
                    $_SESSION['contact'] = $contact;

                    header('location: /pages/me.php');
                    exit();
                }
            } else {
                header('location: /pages/edit.php?err=password incorrect!');
                exit();
            }
        }
    } else {
        header('location: /pages/edit.php?err=Missing Credentials!');
        exit();
    }