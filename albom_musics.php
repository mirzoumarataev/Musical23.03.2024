<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Musical - Music Category Bootstrap Responsive Website Template - Classes : W3Layouts</title>
    <!-- Google fonts -->
    <!-- <link href=//fonts.googleapis.com/css2?family=Londrina+Outline&display=swap" rel="stylesheet"> -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- Подключение FontAwesome (можно загрузить с CDN) -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <style>
        .music-button {
            padding: 15px 30px;
            font-size: 1.2em;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .music-button:hover {
            background: linear-gradient(45deg, #c0392b, #e74c3c);
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        .music-button:active {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            transform: scale(0.95);
            box-shadow: none;
        }
        .bright-music-button {
            width: 1000px !important;
            padding: 15px 30px;
            font-size: 1.5em;
            margin-left: 140px;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(45deg, #ff00cc, #ff6666, #ffff66, #66ff66, #00ccff, #ff00cc);
            background-size: 600% 600%;
            animation: gradientAnimation 10s infinite;
            border: none;
            border-radius: 5px;
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            overflow: hidden;
        }

        .bright-music-icon {
            float: left;
            margin-right: 10px;
            animation: rotate 2s infinite linear;
        }

        @keyframes rotate {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .bright-music-button:hover {
            background: linear-gradient(45deg, #ff00cc, #ff6666, #ffff66, #66ff66, #00ccff, #ff00cc);
            background-size: 600% 600%;
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        .bright-music-button:active {
            background: linear-gradient(45deg, #ff00cc, #ff6666, #ffff66, #66ff66, #00ccff, #ff00cc);
            background-size: 600% 600%;
            transform: scale(0.95);
            box-shadow: none;
        }
    </style>
</head>

<body>
    <!-- top header -->
    <section class="w3l-top-header">
        <div class="container">
            <div class="top-content-w3ls d-flex align-items-center justify-content-between">
                <div class="top-headers">
                    <ul>
                        <li>
                            <p class="d-md-block d-none">Have any question ?</p>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:+1(21) 234 4567">+1(21) 234 4567</a>
                        </li>
                        <li class="me-0">
                            <i class="fa fa-envelope"></i><a href="mailto:mail@example.com">mail@example.com</a>
                        </li>
                    </ul>
                </div>
                <div class="top-headers top-headers-2">
                    <ul>
                        <li>
                            <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                        </li>
                        <li>
                            <a href="#twitter"><span class="fab fa-twitter"></span></a>
                        </li>
                        <li>
                            <a href="#instagram"><span class="fab fa-instagram"></span></a>
                        </li>
                        <li class=" me-0">
                                    <a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //top header -->
    <!-- header -->
     <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
             <a class="navbar-brand" href="index.php">
                    <i class="fas fa-music me-1"></i>Musical
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alboms.php">Альбомы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="artists.php">Артисты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="musics.php">Музыки</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Контакт</a>
                        </li>
                    </ul>
                    <form action="#error" method="GET" class="d-flex search-header ms-lg-2">
                        <input class="form-control" type="search" placeholder="Введите ключевое слово..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <?php
                if (isset($_SESSION["logIn"]) && $_SESSION["logIn"] != "1") {
                ?>
                <div class="cont-ser-position">
                    <nav class="navigation">
                            <!-- <input type="button" class="btn btn-primary" id="checkbox" value="enter"> -->
                           <a href="Login/web/index.php" class="btn btn-danger ">Вход</a>     
                        </nav>
                </div>
                <div style="margin-right: 10px;"></div>
                <div class="cont-ser-position">
                    <nav class="navigation">
                            <!-- <input type="button" class="btn btn-primary" id="checkbox" value="enter"> -->
                           <a href="Registrate/web/index.php" class="btn btn-danger ">Регистрация</a>    
                        
                        </nav>
                </div>
                <?php
                }
                else {
                    ?>
                    <form action="logout.php" method="post">
                        <div class="cont-ser-position">
                        <nav class="navigation">
                                <!-- <input type="button" class="btn btn-primary" id="checkbox" value="enter"> -->
                            <input type="submit" class="btn btn-danger " value="Выход"></a>     
                            </nav>
                        </div>
                    </form>
                <?php
                }
                ?>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-5 pb-sm-4 pb-2">
                <h4 class="inner-text-title font-weight-bold pt-5">Music Classes</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Classes</li>
                </ul>
                
            </div>

        </div>
    </section>
    <div style="margin: 30px 30px; width: 100%">
        <?php
                require_once("config/connection.php");
                $nnn = $_POST['nameOfAlbom'];
                $sql = "SELECT id from alboms WHERE fullname = '$nnn';";
                $w = mysqli_query( $conn, $sql);
                $roww = mysqli_fetch_array($w);
                $id = $roww['id'];
                $query = "SELECT fullname FROM music
                WHERE albom_id = '$id';";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) == 0) {
                    ?>
                    <h1 style="text-align: center">No any music in this album!</h1>
                        <?php
                }
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <form action="assets/audio/web/index.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $row['fullname']; ?>">
                        <button type="submit" name="Music" class="bright-music-button">
                            <i class="bright-music-icon fas fa-music"></i>
                            <?=$row['fullname']?>
                         </button>
                        </form>

                    <?php

                }
                ?>
            <!-- <button type="submit" class="bright-music-button">
                <i class="bright-music-icon fas fa-music"></i>
                Play Music
            </button> -->
    </div>
    <!-- Подключение скриптов Bootstrap (можно загрузить с CDN) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- //inner banner -->
    
    <!-- classes section -->
    <!-- //classes section -->

    <!-- pricing block -->
    <!-- <section class="pricing-w3l py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center py-2">
                <div class="col-lg-4">
                    <h3 class="title-style">Our <span>Pricing</span> Plan!</h3>
                    <p class="mt-3">Aptent taciti sociosqu ad litora
                        conubia nostra, per inceptos himenaeos. Aenean volutpat elementum ante, id eleifend eros
                        luctus sit.</p>
                    <a href="#prices" class="btn btn-style mt-4">See all Prices</a>
                </div>
                <div class="col-lg-8 ps-xl-5 mt-lg-0 mt-sm-5 mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-pricing featured">
                                <h3 class="text-price">Standard Plan</h3>
                                <h4>$39<span>per month</span></h4>
                                <ul>
                                    <li><i class="fas fa-check-circle"></i> Basic Techniques</li>
                                    <li><i class="fas fa-check-circle"></i> Types of Music</li>
                                    <li><i class="fas fa-check-circle"></i> Jazz Basics</li>
                                    <li class="na"><span><i class="fas fa-check-circle"></i> Effective Mixing</span>
                                    </li>
                                </ul>
                                <a href="#pricing" class="btn btn-style mt-4">Choose Plan</a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-4">
                            <div class="box-pricing">
                                <h3 class="text-price">Extended Plan</h3>
                                <h4>$69<span>per month</span></h4>
                                <ul>
                                    <li><i class="fas fa-check-circle"></i> Basic Techniques</li>
                                    <li><i class="fas fa-check-circle"></i> Types of Music</li>
                                    <li><i class="fas fa-check-circle"></i> Jazz Basics</li>
                                    <li><i class="fas fa-check-circle"></i> Effective Mixing</li>
                                </ul>
                                <a href="#pricing" class="btn btn-style mt-4">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //pricing block -->

    <!-- footer -->
    <footer class="w3l-footer9">
        <div class="footer-inner-main py-5">
            <div class="container pt-lg-5 pt-md-4 pt-2 pb-2">
                <div class="row">
                    <div class="col-lg-4 sub-one-left pe-lg-5">
                        <h6>About </h6>
                        <p class="footer-phny">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                            ultrices in ligula. Semper at tempufddfel.Lorem ipsum dolor sit,l. Lorem ipsum dolor sit,
                            amet elit.</p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                </li>
                                <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                                </li>
                                <li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                                </li>
                                <li><a href="#google"><span class="fab fa-google-plus-g"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 sub-two-right mt-lg-0 mt-5">
                        <h6>Links</h6>
                        <ul>
                            <li><a href="index.php">Home</a> </li>
                            <li><a href="about.php">About Us</a> </li>
                            <li><a href="classes.php">Classes</a> </li>
                            <li><a href="#blog">Blog Posts</a> </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 sub-two-right mt-lg-0 mt-5">
                        <h6>Explore</h6>
                        <ul>
                            <li><a href="#support">Support</a></li>
                            <li><a href="#privacypolicy">Privacy policy</a></li>
                            <li><a href="#offers">Offers</a></li>
                            <li><a href="#support">Support</a></li>
                            <li><a href="#career">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 sub-one-left mt-lg-0 mt-5">
                        <h6>Twitter Feed</h6>
                        <ul>
                            <li class="w3tweet-holder-grids">
                                <div class="w3-twitter-icon"><i class="fab fa-twitter"></i></div>
                                <div class="w3tweet-text">
                                    <a target="_blank" href="#twitter">@Honynilf</a> Hi <a target="_blank"
                                        href="#twitter">@Honynilf</a> , can you please submit a ticket at <a
                                        target="_blank" href="#twitter">https://v.co/ij123A34J45A</a> <br>
                                    1 year ago.
                                </div>
                            </li>
                            <li class="w3tweet-holder-grids">
                                <div class="w3-twitter-icon"><i class="fab fa-twitter"></i></div>
                                <div class="w3tweet-text">
                                    <a target="_blank" href="#twitter">@Honynilf</a> Hi <a target="_blank"
                                        href="#twitter">@Honynilf</a> , can you please submit a ticket at <a
                                        target="_blank" href="#twitter">https://v.co/ij123A34J45A</a> and one of our
                                    support agent… <a target="_blank" href="#twitter">https://v.co/ij123A34J45A</a>
                                    2 year ago.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="copyright-footer mt-lg-5 mt-sm-4 mt-2 text-center">
                    <p class="copy-text">&copy; 2022 Musical. All rights reserved. Design by <a
                            href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>