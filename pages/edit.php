<?php

include '../services/db_products.php';

if (!isset($_GET['product'])) {
    if (isset($_GET['id']) and Account::getAccess($_SESSION['id'])) {
        $admin = true;
        $acc = Account::get($_GET['id']);

        $image = $acc['image'];
        $fname = $acc['firstname'];
        $lname = $acc['lastname'];
        $uname = $acc['username'];
        $email = $acc['email'];
        $contact = $acc['contact'];
        $address = $acc['address'];
    } else if (isset($_SESSION['email'])) {
        $admin = false;
        $acc = Account::get($_SESSION['id']);

        $image = $acc['image'];
        $fname = $acc['firstname'];
        $lname = $acc['lastname'];
        $uname = $acc['username'];
        $email = $acc['email'];
        $contact = $acc['contact'];
        $address = $acc['address'];
    } else {
        header('Location: login.php?err=You are not logged in!');
        exit();
    }
} else {
    if (Account::getAccess($_SESSION['id'])) {
        if (isset($_GET['prodid'])) {
            $pro = Products::get($_GET['prodid']);

            $name = $pro['name'];
            $description = $pro['description'];
            $price = $pro['price'];
            $image = $pro['image_link'];
            $type = $pro['type'];
            $rarity = $pro['rarity'];
        }
    } else {
        header('Location: me.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="icon" href="/assets/icon/icon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- JQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css" />

    <!-- Local CSS -->
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/login.css" />
    <title>Edit | Realm PUBG</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a href="/index.php" class="navbar-brand"><img src="/assets/icon/icon+name.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation">
            <span class="material-icons">menu</span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/index.php#shop" class="nav-link"><span class="material-icons">store</span> Shop</a>
                </li>
                <li class="nav-item">
                    <a href="/pages/aboutus.php" class="nav-link">
                        <span class="material-icons">groups</span> Company</a>
                </li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['email'])) { ?>
                    <a href="/pages/me.php" class="nav-link"><span
                            class="material-icons">account_circle</span><?php echo "$_SESSION[uname]" ?></a>
                    <?php } else { ?>
                    <a href="/pages/login.php" class="nav-link"><span class="material-icons">account_circle</span> Login
                        /
                        Register</a>
                    <?php }  ?>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="login">

            <?php if (isset($_GET['product'])) { ?>

            <?php if (isset($_GET['prodid'])) { ?>
            <form action="/services/edit.php?product&prodid=<?php echo $_GET['prodid'] ?>"
                class="d-flex flex-column align-items-center" method="POST" enctype="multipart/form-data">
                <div class="profile-wrapper">
                    <img src="<?php echo $image ?? "/assets/floaters/default-product.jpg"; ?>"
                        alt="default product photo" class="rounded-circle">
                </div>
                <div class="form-group">
                    <input type="file" name="image" accept="image/*">
                </div>
                <div class="form-group">
                    <label>Product Name:</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name ?>"
                        placeholder="Product name">
                    <label>Product Description:</label>
                    <input type="text" name="description" class="form-control" value="<?php echo $description ?>"
                        placeholder="Product Description">
                    <label>Price:</label>
                    <input type="number" name="price" class="form-control" value="<?php echo $price ?>"
                        placeholder="Price (XX.XX)">
                    <label>Type: </label>
                    <input type="text" name="type" class="form-control" value="<?php echo $type ?>"
                        placeholder="Product Type">
                    <label>Rarity: </label>
                    <input type="text" name="rarity" class="form-control" value="<?php echo $rarity ?>"
                        placeholder="Product Rarity">
                    <button type="submit" class="btn btn-danger">Apply Changes</button>
                </div>
            </form>
            <?php  } else { ?>
            <form action="/services/edit.php?product" class="d-flex flex-column align-items-center" method="POST"
                enctype="multipart/form-data">
                <div class="profile-wrapper">
                    <img src="/assets/floaters/default-product.jpg" alt="default product photo" alt="my profile
                    picture" class="rounded-circle">
                </div>
                <div class="form-group">
                    <input type="file" name="image" accept="image/*">
                </div>
                <div class="form-group">
                    <label>Product Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Product name">
                    <label>Product Description:</label>
                    <input type="text" name="description" class="form-control" placeholder="Product description">
                    <label>Price:</label>
                    <input type="number" name="price" class="form-control" placeholder="Price (XX.XX)">
                    <label>Type: </label>
                    <input type="text" name="type" class="form-control" placeholder="Product Type">
                    <label>Rarity: </label>
                    <input type="text" name="rarity" class="form-control" placeholder="Product Rarity">
                </div>
                <button type="submit" class="btn btn-info">Create</button>
            </form>
            <?php  } ?>
            <?php } else { ?>

            <form action="<?php if ($admin) { ?>/services/edit.php?id=<?php echo $_GET['id'];
                                                                        } else { ?>/services/edit.php<?php } ?>"
                class="d-flex flex-column align-items-center" method="POST" enctype="multipart/form-data">
                <img src="/assets/icon/icon+name.png" class="img-fluid" />
                <br>
                <p>You are editing <?php if ($admin and $_SESSION['id'] != $_GET['id']) {
                                            echo "$fname" . "'s";
                                        } else {
                                            echo 'your';
                                        } ?>
                    credentials</p>
                <?php
                    if ($admin and Account::getAccess($_GET['id'])) {
                        echo '<div class="note-msg">This person has administrator priviledges!</div>';
                    } else if (!$admin && Account::getAccess($_SESSION['id'])) {
                        echo '<div class="note-msg">You have administrator priviledges!</div>';
                    }
                    ?>
                <?php if (isset($_GET["err"])) {
                        echo '<div class="err-msg">' . $_GET["err"] . '</div>';
                    } ?>
                <div class="profile-wrapper">
                    <img src="<?php echo $image ?? "/assets/floaters/default.jpg"; ?>" alt="my profile picture"
                        class="rounded-circle">
                </div>
                <div class="form-group">
                    <input type="file" name="image" accept="image/*">
                </div>

                <div class="form-group">
                    <?php if ($admin) {
                        ?>
                    <label>Id: </label>
                    <input name="id" class="form-control" type="text" placeholder="Enter ID"
                        value="<?php echo $_GET['id'] ?>" disabled />
                    <?php
                        } ?>
                    <label>First name:</label>
                    <input name="fname" class="form-control" type="text" placeholder="Enter first name"
                        value="<?php echo $fname ?>" />
                    <label>Last name:</label>
                    <input name="lname" class="form-control" type="text" placeholder="Enter last name"
                        value="<?php echo $lname ?>" />
                    <label>Username:</label>
                    <input name="uname" class="form-control" type="text" placeholder="Enter username"
                        value="<?php echo $uname ?>" />
                </div>
                <div class="form-group">
                    <label>Email Address:</label>
                    <input name="email" class="form-control" type="email" placeholder="Enter Email Address"
                        value="<?php echo $email ?>" />
                    <label>Contact:</label>
                    <input name="contact" class="form-control" type="contact" placeholder="Enter Contact"
                        value="<?php echo $contact ?>" />
                    <label>Address:</label>
                    <input name="address" class="form-control" type="address" placeholder="Enter Address"
                        value="<?php echo $address ?>" />
                </div>
                <?php if ($admin) { ?>
                <div class="form-group">
                    <label>Password:</label><br>
                    <input name="password" class="form-control" type="password"
                        placeholder="<?php echo 'Enter new password or leave empty to keep old' ?>" /><br>
                    <div class="form-check">
                        <input name="admin" type="checkbox" value="1" class="form-check-input" style="position:initial"
                            <?php if (Account::getAccess($_GET['id'])) {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?>>
                        <label class="form-check-label">Admin priviledge</label>
                    </div>
                    <?php } else { ?>

                    <div class="form-group">
                        <label>Password:</label><br>
                        <input name="password" class="form-control" type="password"
                            placeholder="Enter your password to confirm!" />
                    </div>
                    <?php } ?>
                    <br>
                    <button type="submit" class="btn btn-danger">Apply changes</button>
            </form>
            <?php } ?>
        </div>
    </main>
    <footer class="page-footer">
        <!-- TODO: ADD FOOTER -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">
                        ????Additional information:
                    </h6>
                    <p>
                        Realm PUBG is an online marketplace developed and published by
                        RASTAMAN Inc. Inspired by PUBG Battle Royale, RASTAMAN's creative
                        direction led to the development of an online system. In the
                        system, players can choose from a variety of scavenging skins for
                        weapons and equipment to equip in-game.
                    </p>
                    <h6 class="text-uppercase font-weight-bold">????Find us on:</h6>
                    <div class="d-flex socmed">
                        <a><img src="/assets/icon/logo_fb.png" alt="facebook" /></a>
                        <a><img src="/assets/icon/logo_twitter.png" alt="twitter" /></a>
                        <a><img src="/assets/icon/logo_ig.png" alt="instagram" /></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">????Contact us:</h6>
                    <p>
                        938 Aurora Blvd, Cubao, Quezon City, Metro Manila, Philippines
                        <br />RASTAMAN2022@tip.edu.ph<br />(+632) 8911-0964 / (+632)
                        8912-1573<br />
                    </p>
                </div>
            </div>
            <div class="footer-copyright text-center">
                ?? 2021 Copyright: realmpubg.com
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="../script.js"></script>
</body>

</html>