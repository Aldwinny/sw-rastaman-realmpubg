<?php

include 'db.php';

if (isset($_GET['delete'], $_SESSION['email'])) {
    $acc = Account::get($_GET['id']);

    if ($acc['email'] == $_SESSION['email']) {
        Account::delete($_GET['id']);
    }
}

session_unset();

session_destroy();

header("Location: /index.php");
exit();