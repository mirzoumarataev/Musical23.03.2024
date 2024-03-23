<!--global$conn; global$conn; global$conn; Author: W3layouts-->
<!--Author URL: http://w3layouts.com-->
<!--License: Creative Commons Attribution 3.0 Unported-->
<!--License URL: http://creativecommons.org/licenses/by/3.0/-->

<!DOCTYPE HTML>
<html>

<head>
    <title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Blank :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/jquery.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>

    <!-- Mainly scripts -->
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/custom.js"></script>
    <script src="js/screenfull.js"></script>
    <script>
        $(function() {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }



            $('#toggle').click(function() {
                screenfull.toggle($('#container')[0]);
            });



        });
    </script>
    <style>

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[id="addd"],select[id="addd"],file {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .add-music-button {
            width: 100%;
            padding: 10px;
            font-size: 1.2em;
            font-weight: bold;
            color: #fff;
            background: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .add-music-button:hover {
            background: #e55f50;
        }

        .music-list {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }

        .music-list li {
            background: #ecf0f1;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .music-list li i {
            margin-right: 10px;
            color: #3498db;
        }
    </style>
</head>

<body>
<div id="wrapper">
    <!----->
    <nav class="navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1> <a class="navbar-brand" href="index.html">Minimal</a></h1>
        </div>
        <div class=" border-bottom">
            <div class="full-left">
                <section class="full-top">
                    <button id="toggle"><i class="fa fa-arrows-alt"></i></button>
                </section>
                <form class=" navbar-left-right">
                    <input type="text" value="Search..." onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Search...';}">
                    <input type="submit" value="" class="fa fa-search">
                </form>
                <div class="clearfix"> </div>
            </div>


            <!-- Brand and toggle get grouped for better mobile display -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="drop-men">
                <ul class=" nav_1">

                    <li class="dropdown at-drop">
                        <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i
                                class="fa fa-globe"></i> <span class="number">5</span></a>
                        <ul class="dropdown-menu menu1 " role="menu">
                            <li><a href="#">

                                    <div class="user-new">
                                        <p>New user registered</p>
                                        <span>40 seconds ago</span>
                                    </div>
                                    <div class="user-new-left">

                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-new">
                                        <p>Someone special liked this</p>
                                        <span>3 minutes ago</span>
                                    </div>
                                    <div class="user-new-left">

                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-new">
                                        <p>John cancelled the event</p>
                                        <span>4 hours ago</span>
                                    </div>
                                    <div class="user-new-left">

                                        <i class="fa fa-times"></i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-new">
                                        <p>The server is status is stable</p>
                                        <span>yesterday at 08:30am</span>
                                    </div>
                                    <div class="user-new-left">

                                        <i class="fa fa-info"></i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-new">
                                        <p>New comments waiting approval</p>
                                        <span>Last Week</span>
                                    </div>
                                    <div class="user-new-left">

                                        <i class="fa fa-rss"></i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a></li>
                            <li><a href="#" class="view">View all messages</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span
                                class=" name-caret">Rackham<i class="caret"></i></span><img src="images/wo.jpg"></a>
                        <ul class="dropdown-menu " role="menu">
                            <li><a href="profile.php"><i class="fa fa-user"></i>Edit Profile</a></li>
                            <li><a href="../../logout.php"><i class="fa fa-envelope"></i>Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="clearfix">

            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="../../index.php" class=" hvr-bounce-to-right"><i class="fa fa-desktop  nav_icon "></i><span class="nav-label">Main-Page(Home)</span> </a>
                        </li>
                        <li>
                            <a href="index.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                        </li>

                        <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Menu of Artists</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="listArtists.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>List of Artists</a></li>

                                <li><a href="addartists.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Add Artist</a></li>
                            </ul>
                        </li>
                        <!-- <li>
                           <a href="inbox.php" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Inbox</span> </a>
                       </li> -->
                        <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Menu of Musics</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="listMusics.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>List of Musics</a></li>

                                <li><a href="addmusics.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Add Music</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Menu of Alboms</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="listAlboms.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>List of Alboms</a></li>

                                <li><a href="addalboms.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Add Albom</a></li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="gallery.php" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span> </a>
                        </li>
                         <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Pages</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="404.php" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Error 404</a></li>
                                <li><a href="faq.php" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>FAQ</a></li>
                                <li><a href="blank.php" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Blank</a></li>
                           </ul>
                        </li>
                         <li>
                            <a href="layout.php" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Grid Layouts</span> </a>
                        </li>

                        <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="forms.php" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Basic forms</a></li>
                                <li><a href="validation.php" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Validation</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="signin.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Signin</a></li>
                                <li><a href="signup.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Singup</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="content-main">

            <!--banner-->
            <div class="banner">
                <h2>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                    <span>Blank</span>
                </h2>
            </div>
            <!--//banner-->
            <!--faq-->
            <div class="blank">
                <div class="blank-page">
                    <!-- <div class="form-container"> -->
                    <h2>Add Music <i class="fas fa-music"></i></h2>

                    <!-- Форма для добавления музыки и песни -->
                    <form action="mupdate.php" method="POST" id="addMusicForm" enctype="multipart/form-data">
                        <label >Music Name: </label>
                        <input type="text" name="musicName" readonly id = "addd" value="<?=$_GET['id']?>">
                        <label>Executor:</label>
                        <select name="artistName" id="addd">
                            <?php
                            require_once("../../config/connection.php");
                            $sql = "SELECT fullname FROM artist;";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <option value="<?=$row['fullname']?>"><?=$row['fullname']?></option>
                                <?php
                            }
                            ?>
                        </select>

                        <label for="songName">Song Albom:</label>
                        <select name="albomName" id="addd">
                            <?php
                            require_once("../../config/connection.php");
                            $sql = "SELECT fullname FROM alboms;";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <option value="<?=$row['fullname']?>"><?=$row['fullname']?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <input type="submit" class="add-music-button" name="submit" value="Save"><i
                                class="fas fa-plus"></i></input>
                    </form>

                    <!-- Список добавленной музыки и песен -->
                    <ul id="musicList" class="music-list"></ul>
                </div>

                <!-- JavaScript код для динамического добавления музыки и песен -->
                <script>
                    function addMusic() {
                        // Получаем значения из формы
                        var musicName = document.getElementById("musicName").value;
                        var artist = document.getElementById("artist").value;
                        var songName = document.getElementById("songName").value;

                        // Создаем новый элемент списка (музыку и песню)
                        var listItem = document.createElement("li");
                        listItem.innerHTML =
                            `<i class="fas fa-music"></i> Music Name: ${musicName} - Artist: ${artist} - Song Name: ${songName}`;

                        // Добавляем элемент в список
                        document.getElementById("musicList").appendChild(listItem);

                        // Очищаем значения формы
                        document.getElementById("musicName").value = "";
                        document.getElementById("artist").value = "";
                        document.getElementById("songName").value = "";
                    }
                </script>
            </div>
        </div>

        <!--//faq-->
        <!---->
        <div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/"
                                                                        target="_blank">W3layouts</a> </p>
        </div>
    </div>
</div>
<div class="clearfix"> </div>
</div>

<!---->
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
</body>

</html>