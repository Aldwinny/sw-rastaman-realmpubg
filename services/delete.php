<?php
include '../services/db_products.php';

if (!isset($_SESSION['email'])) {
    header("location: /pages/login.php");
    exit();
}

if (!Account::getAccess($_SESSION['id'])) {
    header("location: /pages/me.php");
    exit();
}

if (isset($_GET['product'], $_GET['prodid'])) {
    Products::remove($_GET['prodid']);

    header("Location: /pages/products.php");
    exit();
}

if (isset($_GET['product'])) {
    header("Location: /pages/products.php");
    exit();
}

if (isset($_GET['id'])) {

    if ($_GET['id'] == $_SESSION['id']) {
        echo 'REDIRECTING..';
        header("Location: /services/logout.php?delete&id=$_SESSION[id]");
        exit();
    }

    Account::delete($_GET['id']);
}
header("Location: /pages/accounts.php");
exit();