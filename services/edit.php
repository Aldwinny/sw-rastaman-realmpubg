i<?php
    include 'db_products.php';

    if (!isset($_SESSION['email'])) {
        header("location: /pages/login.php");
        exit();
    }

    if (isset($_GET['product']) and Account::getAccess($_SESSION['id'])) {
        if (isset($_POST['name'], $_POST['description'], $_POST['price'], $_POST['type'], $_POST['rarity'])) {

            $name = validate($_POST['name']);
            $desc = validate($_POST['description']);
            $price = validate($_POST['price']);
            $type = strtolower(validate($_POST['type']));
            $rarity = strtolower(validate($_POST['rarity']));

            if (file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {
                $fnm = $_FILES['image']['name'];
                $dst = "../assets/items/" . $type . '_' . $fnm;
                $image = "/assets/items/"  . $type . '_' . $fnm;
                move_uploaded_file($_FILES['image']['tmp_name'], $dst);
            }

            if (isset($_GET['prodid'])) {
                $prodid = $_GET['prodid'];

                // EDIT
                Products::set($prodid, $name, $desc, $price, $type, $rarity);
                if (isset($image)) {
                    Products::setImage($prodid, $image);
                }
            } else {
                // CREATE
                Products::add($name, $desc, $price, isset($image) ? $image : NULL, $type, $rarity);
            }
            header('Location: /pages/products.php');
            exit();
        } else {
            header('Location: /pages/edit.php?product');
            exit();
        }
    }

    if (isset($_GET['id']) and Account::getAccess($_SESSION['id'])) {

        $fname = validate($_POST['fname']);
        $lname = validate($_POST['lname']);
        $uname = validate($_POST['uname']);
        $email = validate($_POST['email']);
        $contact = validate($_POST['contact']);
        $address = validate($_POST['address']);
        $pass = validate($_POST['password']);

        if (file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {
            $tm = md5(time());
            $fnm = $_FILES['image']['name'];
            $dst = "../uploads/" . $tm . $fnm;
            $image = "/uploads/" . $tm . $fnm;
            move_uploaded_file($_FILES['image']['tmp_name'], $dst);
        }

        if (empty($email)) {
            header("location: /pages/edit.php?id=" . $_GET['id'] . "&err=Email cannot be empty");
            exit();
        } else {

            if (empty($fname) or empty($lname) or empty($uname) or empty($contact) or empty($address)) {
                header("location: /pages/edit.php?if=" . $_GET['id'] . "&err=Missing Credentials!");
                exit();
            }

            $res = mysqli_fetch_array(Account::search($email)); //fetches an account with the same email as you
            $resUs = mysqli_fetch_array(Account::searchByUsername($uname)); //fetches an account with the same username as you
            $info = Account::get($_GET['id']);


            if ($res['id'] !== $info['id'] and !empty($res)) {
                header("location: /pages/edit.php?id=" . $_GET['id'] . "&err=Email already in use by another account!");
                exit();
            }

            if ($resUs['id'] !== $info['id'] and !empty($resUs)) {
                header("location: /pages/edit.php?id=" . $_GET['id'] . "&err=Username already in use!");
                exit();
            }

            $admin = isset($_POST['admin']) ? 1 : 0;

            if (empty($pass)) {
                Account::updateNoPass($_GET['id'], $fname, $lname, $uname, $email, $contact, $address, $admin);
            } else {
                Account::updatePass($_GET['id'], $fname, $lname, $uname, $email, $contact, $address, $pass, $admin);
            }

            if (isset($image)) {
                // IMPORTANT: DISPOSES OF OLD IMAGE IF NOT NULL BEFORE STORING NEW IMAGE.
                Account::updateImage($_GET['id'], $image);
            }


            if ($_GET['id'] == $_SESSION['id']) {
                $_SESSION['email'] = $email;
                $_SESSION['fname'] = $fname;
                $_SESSION['lname'] = $lname;
                $_SESSION['uname'] = $uname;
                $_SESSION['address'] = $address;
                $_SESSION['image'] = $image;
                $_SESSION['contact'] = $contact;
            }


            header("location: /pages/edit.php?id=" . $_GET['id'] . "&err=EDIT SUCCESS!");
            exit();
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

        if (file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {
            $tm = md5(time());
            $fnm = $_FILES['image']['name'];
            $dst = "../uploads/" . $tm . $fnm;
            $image = "/uploads/" . $tm . $fnm;
            move_uploaded_file($_FILES['image']['tmp_name'], $dst);
        }

        if (empty($pass)) {
            header("location: /pages/edit.php?err=Enter password to confirm changes!");
            exit();
        } else if (empty($fname) or empty($lname) or empty($uname) or empty($email) or empty($contact) or empty($address)) {
            header("location: /pages/edit.php?err=Missing Credentials!");
            exit();
        } else {
            $info = Account::get($_SESSION['id']);

            if ($info['password'] !== $pass) {
                header('location: /pages/edit.php?err=password incorrect!');
                exit();
            }

            $res = mysqli_fetch_array(Account::search($email)); //fetches an account with the same email as you
            $resUs = mysqli_fetch_array(Account::searchByUsername($uname)); //fetches an account with the same username as you

            if ($res['id'] !== $info['id'] and !empty($res)) {
                header("location: /pages/edit.php?err=Email already in use by another account!");
                exit();
            }

            if ($resUs['id'] !== $info['id'] and !empty($resUs)) {
                header("location: /pages/edit.php?err=Username already in use!");
                exit();
            }
            Account::update($_SESSION['id'], $fname, $lname, $uname, $email, $contact, $address, $pass);

            if (isset($image)) {
                // IMPORTANT: DISPOSES OF OLD IMAGE IF NOT NULL BEFORE STORING NEW IMAGE.
                Account::updateImage($_SESSION['id'], $image);
                $_SESSION['image'] = $image;
            }

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
        header('location: /pages/edit.php?err=Missing Credentials!');
        exit();
    }