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
    <title>Musical - Music Category Bootstrap Responsive Website Template - About Us : W3Layouts</title>
    <!-- Google fonts -->
    <!-- <link href=//fonts.googleapis.com/css2?family=Londrina+Outline&display=swap" rel="stylesheet"> -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
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
                            <a class="nav-link active" href="about.php">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alboms.php">Альбомы</a>
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
                <h4 class="inner-text-title font-weight-bold pt-5">О нас</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Главная</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>О нас</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- about section -->
    <section class="w3l-about py-5" id="about">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 section-width pe-xl-5 pt-lg-4">
                    <h3 class="title-style">Добро пожаловать в <span>Musical</span></h3>
                    <p class="mt-4">Дамы и господа, добро пожаловать в удивительный мир музыкала! Сегодня мы собрались здесь, чтобы погрузиться в волшебство музыки, танца и невероятных эмоций. Мюзикл - это не просто спектакль, это путешествие в истории, где каждая нота и каждый шаг расскажут вам удивительный рассказ. Подготовьтесь к тому, чтобы пережить море эмоций, окунуться в мир волшебства и веселья. Добро пожаловать в мюзикл, где мечты становятся реальностью, а каждая нота - волшебным ключом к вашим самым завораживающим фантазиям! Приготовьтесь к незабываемому вечеру!

                    </p>
                    <a href="about.php" class="btn btn-style mt-5"> Знай больше о нас</a>
                </div>
                <div class="col-lg-6 history-info mt-lg-0 mt-5 pt-md-4 pt-2">
                    <div class="position-relative img-border">
                        <img src="assets/images/about.jpg" class="img-fluid radius-image" alt="video-popup">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- timeline -->
    <section class="w3l-timeline-1 py-5">
        <div class="timeline">
            <div class="container py-lg-5 py-md-4 py-2">
                <ul class="timeline">
                    <li class="timeline-item">
                        <figure class="timeline-icon">
                            <span></span>
                        </figure>
                        <div class="dir-r radius-3">
                            <p> Мы основали музыкальную школу «Мелодия», собрав команду профессиональных преподавателей музыки
                            </p>
                        </div>
                        <div class="date-l">
                            Январь 1995</div>
                    </li>
                    <li class="timeline-item">
                        <figure class="timeline-icon">
                        </figure>
                        <div class="dir-l radius-3">
                            <img src="assets/images/about1.jpg" class="img-fluid radius-image" alt="">
                        </div>
                        <div class="date-r">
                            Март 2004</div>
                    </li>
                    <li class="timeline-item">
                        <figure class="timeline-icon">
                            <span></span>
                        </figure>
                        <div class="dir-r radius-3">

                            <p>Введение нового курса: Диджей и битмейкинг; Организация первых публичных мероприятий</p>
                        </div>
                        <div class="date-l">
                            Апрель 2010</div>
                    </li>
                    <li class="timeline-item">
                        <figure class="timeline-icon">
                            <span></span>
                        </figure>
                        <div class="dir-l radius-3">
                            <div class="timeline_video">
                                <iframe src="https://www.youtube.com/embed/gzjasvooSG8"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="date-r">
                            Июль 2016</div>
                    </li>
                    <li class="timeline-item">
                        <figure class="timeline-icon">
                            <span></span>
                        </figure>
                        <div class="dir-r radius-3 mb-0">

                            <p class="font-italic">Получение национального признания: наши первые награды от музыки США
                                Комитет учителей</p>
                        </div>
                        <div class="date-l">
                            Май 2021</div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //timeline -->

    <!-- team section -->
    <div class="team-area pt-5" id="team">
        <div class="container py-md-5 py-md-4 py-2">
            <h3 class="title-style text-capitalize text-center">Наши эксперт <span>Команда</span> Будут помогать <span>Вам</span>
            </h3>
            <div class="row mt-lg-5 mt-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team">
                        <div class="img-area">
                            <img src="assets/images/team1.jpg" class="img-fluid radius-image" alt="">
                            <div class="social">
                                <ul class="list-inline">
                                    <li><a href="#url"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-text">
                            <h4><a href="#team">Olive Yew</a></h4>
                            <p>Учитель гитары</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-sm-0 mt-5">
                    <div class="single-team">
                        <div class="img-area">
                            <img src="assets/images/team2.jpg" class="img-fluid radius-image" alt="">
                            <div class="social">
                                <ul class="list-inline">
                                    <li><a href="#url"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-text">
                            <h4><a href="#team">Aida Joe</a></h4>
                            <p>Учитель Фортепиано</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-lg-0 mt-5">
                    <div class="single-team">
                        <div class="img-area">
                            <img src="assets/images/team4.jpg" class="img-fluid radius-image" alt="">
                            <div class="social">
                                <ul class="list-inline">
                                    <li><a href="#url"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-text">
                            <h4><a href="#team">Teri Dac</a></h4>
                            <p>Учитель Диджей класса</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="single-team">
                        <div class="img-area">
                            <img src="assets/images/team3.jpg" class="img-fluid radius-image" alt="">
                            <div class="social">
                                <ul class="list-inline">
                                    <li><a href="#url"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-text">
                            <h4><a href="#team">Olive Yew</a></h4>
                            <p>Учитель трубы</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="single-team">
                        <div class="img-area">
                            <img src="assets/images/team6.jpg" class="img-fluid radius-image" alt="">
                            <div class="social">
                                <ul class="list-inline">
                                    <li><a href="#url"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-text">
                            <h4><a href="#team">Aida Joe</a></h4>
                            <p>Уроки подписи</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="single-team">
                        <div class="img-area">
                            <img src="assets/images/team5.jpg" class="img-fluid radius-image" alt="">
                            <div class="social">
                                <ul class="list-inline">
                                    <li><a href="#url"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-text">
                            <h4><a href="#team">Teri Dac</a></h4>
                            <p>Учитель гитары</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team section -->

    <!-- button with content section -->
    <section class="w3l-button-sec py-5">
        <div class="container py-5">
            <div class="w3-midhny-sec p-5">
                <div class="row align-items-center p-md-4">
                    <div class="col-xl-8 col-lg-9">
                        <div class="title-content-two pe-lg-5">
                            <h3 class="title-w3l mb-md-1 mb-4 d-md-flex align-items-center">Наш контакт сейчас!
                                <a class="mt-md-0 mt-2" href="tel:+ 12 123 456 789">+ 12 123 456 789</a> </h3>
                            </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 mt-lg-0 mt-sm-5 mt-4 text-lg-end">
                        <a href="about.php" class="btn btn-style ">Контакт Сейчас</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //button with content section -->

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