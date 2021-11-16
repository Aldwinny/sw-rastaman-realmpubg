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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
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
    <main class="about-section">
        <div>
            <h1>About Us Page</h1>
            <p>RASTAMAN2022</p>
            <p>The online marketplace is developed and published by RASTAMAN Inc. inspired by PUBG
                Battle Royale. REALM PUBG creative direction led to the development of an online system. In the system,
                players can choose from a variety of scavenging skins for weapons and equipment to equip in-game. The
                website contains systems of searching, purchasing, checking out, and convenient way to give players
                ultimate experience regarding service and choosing products that best promotes the game.

                In just one click away, Realm PUBG website will fully serve your needs executing various products to
                choose from. Over 1million+ players made Realm PUBG's history grow and become the outstanding website
                who can give the best experience when it comes to online transactions.
            </p>
        </div>

        <h2>Our Team</h2>
        <div class="d-flex flex-wrap flex-row justify-content-around">
            <div class="card">
                <img class="img-fluid card-img-top" src="/assets/company/Jem.jpg" alt="Jem">
                <div class="card-body">
                    <h2>Jemelyn Cagalawan</h2>
                    <p class="card-title">CEO & Founder</p>
                    <p class="card-text">I am thrilled to be here, and I’m excited about many of the things my
                        team and I have been working on in the near future. Over the past two years I was
                        SVP and General Manager of the whole team in PUBJE , which followed PUBJE’s purchase of
                        NitroSecurity, where I was
                        CEO.</p>
                </div>
            </div>

            <div class="card">
                <img class="img-fluid card-img-top" src="/assets/company/Nica.jpg" alt="Nica">
                <div class="card-body">
                    <h2>Danica Aquino</h2>
                    <p class="card-title">Business Manager</p>
                    <p class="card-text">Effective business manager with 2+ years of experience. Skilled in
                        marketing and financial management. Seeking to
                        increase profitability by 35% at PowerPuff Corporation. At Hex National Group, raised
                        profits 35% in 2 years by controlling costs through
                        directed employee idea programs at all business levels and strategic product development.</p>
                </div>
            </div>

            <div class="card">
                <img class="img-fluid card-img-top" src="/assets/company/Aldwin.jpg" alt="Aldwin">
                <div class="card-body">
                    <h2>Aldwin Dennis Reyes</h2>
                    <p class="card-title">Software Engineer</p>
                    <p class="card-text">Sits infront of the computer and does the magic. I make coffee for my higher
                        ups, write documents and spreadsheets. I prepare presentations to be used in meetings. I also
                        help convert the design provided to me into websites and mobile applications.</p>
                </div>
            </div>

            <div class="card">
                <img class="img-fluid card-img-top" src="/assets/company/Arjohn.png" alt="Arjohn">
                <div class="card-body">
                    <h2>Arjohn Malabanan</h2>
                    <p class="card-title">Assistant Manager</p>
                    <p class="card-text">The Assistant Manager of Realm Pubg. I always support my Manager
                        thoughts
                        even though it is wrong. I love this position so I really work hard in this company.</p>
                </div>
            </div>

            <div class="card">
                <img class="img-fluid card-img-top" src="/assets/company/Brian.jpg" alt="Brian">
                <div class="card-body">
                    <h2>Brian Llever</h2>
                    <p class="card-title">Art Director</p>
                    <p class="card-text">Art director should have a well-planned procedure for generating and
                        executing the project. The mechanics aren't as crucial as the fact that you created a system
                        that works. Having said that, there are a few elements that should be included in the
                        workflow
                        of every professional art director. </p>
                </div>
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