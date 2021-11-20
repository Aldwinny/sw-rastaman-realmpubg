<?php

include 'db.php';

class Products
{
    static function add($name, $description, $price, $image_link, $type, $rarity)
    {
        $link = db_init();

        mysqli_query($link, "INSERT INTO `products` VALUES (NULL, '$name', '$description', '$price', '$image_link', '$type', '$rarity')");
    }


    static function remove($id)
    {
        $link = db_init();

        $res = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM products WHERE product_id=$id"));
        if ($res['image_link'] != NULL) {
            $chk = Files::load(1, $res['image_link']);

            if ($chk != NULL) {
                unlink($chk);
            }
        }

        mysqli_query($link, "DELETE FROM products WHERE product_id=$id");
    }

    static function set($id, $name, $description, $price, $type, $rarity)
    {
        $link = db_init();

        mysqli_query($link, "UPDATE products SET `name`='$name', `description`='$description', `price`='$price', `type`='$type', `rarity`='$rarity' WHERE `product_id`='$id'");
    }

    static function get($id)
    {
        $link = db_init();

        $res = mysqli_query($link, "SELECT * FROM products WHERE product_id=$id");

        return mysqli_fetch_array($res);
    }

    static function setImage($id, $image_link)
    {
        $link = db_init();

        $res = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM products WHERE product_id=$id"));
        if ($res['image_link'] != NULL) {
            $chk = Files::load(1, $res['image_link']);

            if ($chk != NULL) {
                unlink($chk);
            }
        }

        mysqli_query($link, "UPDATE products SET `image_link`='$image_link' WHERE product_id=$id");
    }
}
/*
if (file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {
    $tm = md5(time());
    $fnm = $_FILES['image']['name'];
    $dst = "../uploads/" . $tm . $fnm;
    $image = "/uploads/" . $tm . $fnm;
    move_uploaded_file($_FILES['image']['tmp_name'], $dst);
}

if (isset($image)) {
    // IMPORTANT: DISPOSES OF OLD IMAGE IF NOT NULL BEFORE STORING NEW IMAGE.
    Products::setImage($_GET['id'], $image);
}*/