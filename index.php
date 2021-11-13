<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="icon" href="./assets/icon/icon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- JQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css" />

    <!-- Local CSS -->
    <link rel="stylesheet" href="./styles/style.css" />
    <title>Welcome | Realm PUBG</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a href="/index.php" class="navbar-brand"><img src="./assets/icon/icon+name.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation">
            <span class="material-icons">menu</span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/pages/item.php" class="nav-link" onclick="setContext('head')"><span
                            class="material-icons">store</span> Shop</a>
                </li>
                <li class="nav-item">
                    <a href="/pages/aboutus.php" class="nav-link">
                        <span class="material-icons">groups</span> Company</a>
                </li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['email'])) { ?>
                    <a href="/pages/me.php" class="nav-link"><span
                            class="material-icons">account_circle</span><?php echo " $_SESSION[fname]" ?></a>
                    <?php } else { ?>
                    <a href="/pages/login.php" class="nav-link"><span class="material-icons">account_circle</span> Login
                        /
                        Register</a>
                    <?php }  ?>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="head-card">
            <img src="/assets/floaters/img_pubgguy.png" class="head-card-img" alt="Person with gun" />
            <div>
                <p>PUBG Merch and more</p>
                <p>Show your love for PUBG with these merch</p>
                <a href="#shop">know more</a>
            </div>
        </div>
    </header>
    <main>
        <div class="marketplace" id="shop">
            <p>Marketplace</p>
            <div class="
            items
            d-flex
            flex-row flex-wrap
            justify-content-around
            align-items-center
          ">
                <a href="/pages/item.php" onclick="setContext('head')">
                    <figure title="From stylish caps to sturdy helmets. We have the highest quality available">
                        <figcaption>Head</figcaption>
                        <img src="/assets/items/head_milihead.png" class="img-fluid" alt="Police cap" />
                    </figure>
                </a>
                <a href="/pages/item.php" onclick="setContext('eye')">
                    <figure title="See the world in style with our eyewear">
                        <figcaption>Eyes</figcaption>
                        <img src="/assets/items/eyes_punkglasses.png" class="img-fluid" alt="Police cap" />
                    </figure>
                </a>
                <a href="/pages/item.php" onclick="setContext('mask')">
                    <figure title="Hide your true identity using our masks">
                        <figcaption>Mask</figcaption>
                        <img src="/assets/items/mask_gas.png" class="img-fluid" alt="Police cap" />
                    </figure>
                </a>
                <a href="/pages/item.php" onclick="setContext('hand')">
                    <figure title="Gloves for a cleaner, better, work">
                        <figcaption>Hands</figcaption>
                        <img src="/assets/items/hands_combatgloves.png" class="img-fluid" alt="Police cap" />
                    </figure>
                </a>
                <a href="/pages/item.php" onclick="setContext('belt')">
                    <figure title="Tighten your pants with passion">
                        <figcaption>Belt</figcaption>
                        <img src="/assets/items/belt_battle.png" class="img-fluid" alt="Police cap" />
                    </figure>
                </a>
                <a href="/pages/item.php" onclick="setContext('torso')">
                    <figure title="The stylish things you wear up there">
                        <figcaption>Torso</figcaption>
                        <img src="/assets/items/torso_longsleeved.png" class="img-fluid" alt="Police cap" />
                    </figure>
                </a>
                <a href="/pages/item.php" onclick="setContext('leg')">
                    <figure title="The stylish things you wear down there">
                        <figcaption>Legs</figcaption>
                        <img src="/assets/items/legs_baggybr.png" class="img-fluid" alt="Police cap" />
                    </figure>
                </a>
                <a href="/pages/item.php" onclick="setContext('feet')">
                    <figure title="The stylish things you step the world with">
                        <figcaption>Feet</figcaption>
                        <img src="/assets/items/feet_schoolshoesb.png" class="img-fluid" alt="Police cap" />
                    </figure>
                </a>
                <a href="/pages/item.php" onclick="setContext('outer')">
                    <figure title="All the high quality garments you'll ever need">
                        <figcaption>Outer</figcaption>
                        <img src="/assets/items/outer_blackhoodie.png" class="img-fluid" alt="Police cap" />
                    </figure>
                </a>
                <a href="/pages/item.php" onclick="setContext('set')">
                    <figure title="An entire outfit. All in one!">
                        <figcaption>Set</figcaption>
                        <img src="/assets/items/set_goldrush.png" class="img-fluid" alt="Police cap" />
                    </figure>
                </a>
            </div>
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
                        <br />tipwebteam@tip.edu.ph <br />(+632) 8911-0964 / (+632)
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
    <script src="./script.js"></script>
    <script>
    $(function() {
        $(document).tooltip();
    });
    </script>
</body>

</html>