i<?php
    include 'db.php';

    if (!isset($_SESSION['email'])) {
        header("location: /pages/login.php");
        exit();
    }

    if (isset($_GET['id']) and Account::getAccess($_SESSION['id'])) {

        $fname = validate($_POST['fname']);
        $lname = validate($_POST['lname']);
        $uname = validate($_POST['uname']);
        $email = validate($_POST['email']);
        $contact = validate($_POST['contact']);
        $address = validate($_POST['address']);
        $pass = validate($_POST['password']);

        if (empty($email)) {
            header("location: /pages/edit.php?id=" . $_GET['id'] . "&err=Email cannot be empty");
            exit();
        } else {

            $res = mysqli_fetch_array(Account::search($email)); //fetches an account with the same email as you
            $info = Account::get($_GET['id']);

            if ($res['id'] !== $info['id'] and !empty($res)) {
                header("location: /pages/edit.php?id=" . $_GET['id'] . "err=Email already in use by another account!");
                exit();
            } else {
                $admin = isset($_POST['admin']) ? 1 : 0;

                if (empty($pass)) {
                    Account::updateNoPass($_GET['id'], $fname, $lname, $uname, $email, $contact, $address, $admin);
                } else {
                    Account::updatePass($_GET['id'], $fname, $lname, $uname, $email, $contact, $address, $pass, $admin);
                }

                if ($_GET['id'] == $_SESSION['id']) {
                    $_SESSION['email'] = $email;
                    $_SESSION['fname'] = $fname;
                    $_SESSION['lname'] = $lname;
                    $_SESSION['uname'] = $uname;
                    $_SESSION['address'] = $address;
                    $_SESSION['contact'] = $contact;
                }


                header("location: /pages/edit.php?id=" . $_GET['id'] . "&err=EDIT SUCCESS!");
                exit();
            }
        }
    }

    if (isset($_POST['fname'], $_POST['lname'], $_POST['uname'], $_POST['email'], $_POST['contact'], $_POST['address'], $_POST['password'])) {

        $fname = validate($_POST['fname']);
        $lname = validate($_POST['lname']);
        $uname = validate($_POST['uname']);
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
            $res = mysqli_fetch_array(Account::search($email)); //fetches an account with the same email as you
            $info = Account::get($_SESSION['id']);

            if ($info['password'] == $pass) {
                if ($res['id'] !== $info['id'] and !empty($res)) {
                    header("location: /pages/edit.php?err=Email already in use by another account!");
                    exit();
                } else {
                    Account::update($_SESSION['id'], $fname, $lname, $uname, $email, $contact, $address, $pass);

                    $_SESSION['email'] = $email;
                    $_SESSION['fname'] = $fname;
                    $_SESSION['lname'] = $lname;
                    $_SESSION['uname'] = $uname;
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