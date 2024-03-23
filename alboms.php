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
                            <a href="#instagram"><span class="fab fa-instagram""></span></a>
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
                            <a class="nav-link active" href="alboms.php">Альбомы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="artists.php">Артисты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="musics.php">Музыки</a>
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
                <h4 class="inner-text-title font-weight-bold pt-5">Альбомы музыков</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Главная</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Альбомы</li>
                </ul>

            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- classes section -->
    <div class="w3l-grids-block-5 classes-bg-cont py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <header id="site-header" style="color: black">
                <div class="container">
                    <nav class="navbar  navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse  mt-12" id="navbarScroll">
                            <ul class="navbar-nav ms my-2 my-lg-0 navbar-nav-scroll">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Поп-рокя</a>
                                </li>
                                <li class="nav-item" style="margin-right: 32px;">
                                    <a class="nav-link" href="about.php" id="1">Фолк-рок</a>
                                </li>
                                <li class="nav-item" style="margin-right: 32px;">
                                    <a class="nav-link" href="artists.php" id="2">Хард-рок</a>
                                </li>
                                <li class="nav-item"style="margin-right: 32px;" >
                                    <a class="nav-link" href="alboms.php" id="3">Панк-рок</a>
                                </li>
                                <li class="nav-item" style="margin-right: 32px;">
                                    <a class="nav-link" href="musics.php" id="4">симфония</a>
                                </li>
                                <li class="nav-item" style="margin-right: 32px;">
                                    <a class="nav-link" href="contact.php" id="5">оратория </a>
                                </li>
                                <li class="nav-item" style="margin-right: 32px;">
                                    <a class="nav-link" href="contact.php" id="6">кантата </a>
                                </li>
                                <li class="nav-item" style="margin-right: 32px;">
                                    <a class="nav-link" href="contact.php" id="7">сюита </a>
                                </li>
                                <li class="nav-item" style="margin-right: 32px;">
                                    <a class="nav-link" href="contact.php" id="8">увертюра </a>
                                </li>
                                <li class="nav-item" style="margin-right: 32px;">
                                    <a class="nav-link" href="contact.php" id="9">ноктюрн </a>
                                </li>
                                
                            </ul>
                            
                        </div>
                        
                        <!-- toggle switch for light and dark theme -->
                                                       <!-- //toggle switch for light and dark theme -->
                    </nav>
                </div>
            </header>
            <h3 class="title-style text-center mb-sm-5 mb-4">Наши лучшие <span>Альмбоы</span></h3>
            <div class="row justify-content-center">
                <?php 
                    require_once("config/connection.php");
                    $sql = "SELECT alboms.`fullname` AS fn, artist.`fullname` FROM artist
                    INNER JOIN alboms ON artist.`id` = alboms.`artist_id`;;";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['fn'];
                        $artistN = $row['fullname'];
                        ?>
                <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/c6.jpg" alt="" class="img-fluid" />
                            <div class="course-price-item">
                                <h6>🎹</h6>
                            </div>
                        </div>
                        <form method="post" action="albom_musics.php">
                            <div class="content-main-top">
                                <div class="content-top mb-4 mt-3">
                                    <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                        <li> <i class="fas fa-music"></i>Music</li>
                                        <li> <i class="fas fa-calendar-alt"></i><?=$artistN?></li>
                                    </ul>
                                </div>
                                <h4><a href="packages.php"><?=$name?></a></h4>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                        <ul class="rating-list">
                                            <li><a href="#rate"><i class="fas fa-star" aria-hidden="true"></i>
                                                </a></li>
                                            <li><a href="#rate"><i class="fas fa-star" aria-hidden="true"></i>
                                                </a></li>
                                            <li><a href="#rate"><i class="fas fa-star" aria-hidden="true"></i>
                                                </a></li>
                                            <li><a href="#rate"><i class="fas fa-star" aria-hidden="true"></i>
                                                </a></li>
                                            <li><a href="#rate"><i class="fas fa-star" aria-hidden="true"></i>
                                                </a></li>
                                        </ul>
                                        <input type="hidden" name="nameOfAlbom" value="<?=$name?>">
                                        <input type="submit" name="Asubmit" class="btn btn-style" value="Подробнее">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                        <?php
                    }
                    ?>
                </div>
        </div>
    </div>
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
                                <h4>🎹<span>per month</span></h4>
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