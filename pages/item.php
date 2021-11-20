<?php

include '../services/db_products.php';

if (!isset($_GET['type'])) {
    header('Location: ./item.php?type=head');
    exit();
}

$selected = $_GET['type'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $selected; ?> | Realm PUBG </title>
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
    <link rel="stylesheet" href="../styles/item.css" />

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
        <div class="shop-form d-flex flex-nowrap flex-column align-items-center">
            <h2>Welcome to our shop!</h2>
            <h4>
                Enjoy the quality and durability that our garments offer! All for you!
            </h4>
            <form action="./item.php" method="GET" class="d-flex flex-column align-items-center">
                <fieldset>
                    <label for="type">Select an item</label>
                    <select name="type" id="item">
                        <?php
                        $types = Products::listTypes();

                        while ($row = mysqli_fetch_array($types)) {
                            echo "<option ", $row[0] == $selected ? "selected" : "", ">$row[0]</option>";
                        }
                        ?>
                    </select>
                </fieldset>
                <input type="submit" value="Apply Changes" />
            </form>
        </div>
        <div class="
          d-flex
          flex-wrap
          justify-content-around
          align-items-center
          card-parent
        " id="dynamic-parent">
            <?php
            if (isset($_GET['type'])) {
                $type = $_GET['type'];

                $res = mysqli_query(db_init(), "SELECT * FROM products WHERE `type`='$type'");

                while ($row = mysqli_fetch_array($res)) {
                    if ($row['rarity'] == "legend") {
                        $rarity = "rgb(221, 211, 76)";
                    } else if ($row['rarity'] == "epic") {
                        $rarity = "rgb(209, 57, 240)";
                    } else if ($row['rarity'] == "rare") {
                        $rarity = "rgb(240, 176, 57)";
                    } else {
                        $rarity = "rgb(109, 245, 116)";
                    }

                    $img = $row['image_link'] ?? '/icon/icon.png';

                    echo "<div class='card' style='border: 3px solid $rarity'>
                        <img src='$img' alt='$row[name]' class='card-img-top' />
                            <div class='card-body'>
                                <h4 class='card-title'>$row[name]</h4>
                                <a class='btn btn-primary'><span class='material-icons'>add_shopping_cart</span>$$row[price]</a>
                            </div>
                        </div>";
                }
            } else {
                header('Location: ./item.php?type=head');
                exit();
            }

            ?>
        </div>
    </main>

    <footer class="page-footer">
        <!-- TODO: ADD FOOTER -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">
                        📓Additional information:
                    </h6>
                    <p>
                        Realm PUBG is an online marketplace developed and published by
                        RASTAMAN Inc. Inspired by PUBG Battle Royale, RASTAMAN's creative
                        direction led to the development of an online system. In the
                        system, players can choose from a variety of scavenging skins for
                        weapons and equipment to equip in-game.
                    </p>
                    <h6 class="text-uppercase font-weight-bold">😃Find us on:</h6>
                    <div class="d-flex socmed">
                        <a><img src="/assets/icon/logo_fb.png" alt="facebook" /></a>
                        <a><img src="/assets/icon/logo_twitter.png" alt="twitter" /></a>
                        <a><img src="/assets/icon/logo_ig.png" alt="instagram" /></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">📞Contact us:</h6>
                    <p>
                        938 Aurora Blvd, Cubao, Quezon City, Metro Manila, Philippines
                        <br />RASTAMAN2022@tip.edu.ph<br />(+632) 8911-0964 / (+632)
                        8912-1573<br />
                    </p>
                </div>
            </div>
            <div class="footer-copyright text-center">
                © 2021 Copyright: realmpubg.com
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

</body>

</html>