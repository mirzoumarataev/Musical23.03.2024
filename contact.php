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
    <title>Musical - Music Category Bootstrap Responsive Website Template - Contact Us : W3Layouts</title>
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
                            <p class="d-md-block d-none">Есть вопросы ?</p>
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
                            <a class="nav-link" href="alboms.php">Альбомы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="artists.php">Артисты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="musics.php">Музыки</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Контакт</a>
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
                <h4 class="inner-text-title font-weight-bold pt-5">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->


    <?php
        

        // Подключение к базе данных
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'musical';
        $conn = new mysqli($host, $user, $password, $database);

        // Проверка подключения
        if ($conn->connect_error) {
            die('Ошибка подключения (' . $conn->connect_errno . ') ' . $conn->connect_error);
        }

        // Проверяем, была ли отправлена форма
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Проверяем наличие данных в массиве $_POST
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['massege'])) {
                // Обработка данных из формы
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $massege = $_POST['massege']; // Исправлено на $massege

                // SQL запрос для вставки данных в таблицу
                $sql = "INSERT INTO contact (name, email, subject, massege) VALUES ('$name', '$email', '$subject', '$massege')";

                // Выполнение SQL запроса
                if ($conn->query($sql) === TRUE) {
                    echo "Данные успешно добавлены";
                } else {
                    echo "Ошибка: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Не все данные формы были отправлены.";
            }
        } else {
            echo "Форма не была отправлена.";
        }

        // Закрытие подключения
        $conn->close();
?>





    <!-- contact block -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <h3 class="title-style text-center mb-5">Contact <span>Us</span></h3>
            <div class="row contact-block">
                <div class="col-md-7 contact-right">
                <form action="" method="post" class="signin-form">
                    <div class="input-grids">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="name" id="name" placeholder="Your Name" class="contact-input" required="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="email" id="email" placeholder="Your Email" class="contact-input" required="" />
                            </div>
                        </div>
                        <input type="text" name="subject" id="subject" placeholder="Subject" class="contact-input" required="" />
                    </div>
                    <div class="form-input">
                        <textarea name="massege" id="massege" placeholder="Type your message here" required=""></textarea>
                    </div>
                    <div class="text-start">
                        <button class="btn btn-style btn-style-3">Send Message</button>
                    </div>
                </form>

                </div>
                <div class="col-md-5 ps-lg-5 mt-md-0 mt-5">
                    <div class="contact-left">
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Company Address</h6>
                                    <p>Musical, 10001, 5th Avenue, 12202 street, London.</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+1(21) 234 4567">+1(21) 112 7368</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Customer Support</h6>
                                    <p><a href="mailto:info@support.com" class="mail">info@support.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
    <!-- //contact block -->

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