<?php
session_start();
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- JQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css" />

    <!-- Local CSS -->
    <link rel="stylesheet" href="../styles/style.css" />
    <title>Login | Realm PUBG</title>
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
                    <?php if (isset($_SESSION['email'])) { ?>
                        <a href="/pages/login.php" class="nav-link"><span class="material-icons">account_circle</span><?php echo $_SESSION['fname'] ?></a>
                    <?php } else { ?>
                        <a href="/pages/login.php" class="nav-link"><span class="material-icons">account_circle</span> Login /
                            Register</a>
                    <?php }  ?>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <?php if (isset($_SESSION['email'])) { ?>
            <p style="color:white">I am <?php echo "$_SESSION[fname] $_SESSION[lname]"; ?></p>
            <p style="color:white">my email and contact is <?php echo "$_SESSION[email] $_SESSION[contact]"; ?></p>
            <p style="color:white">my address is <?php echo "$_SESSION[address]"; ?></p>
        <?php } else { ?>
            <p> Are you lost? </p>
        <?php } ?>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
</body>

</html>