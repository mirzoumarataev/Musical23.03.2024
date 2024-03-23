<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
    <title>Stylish Deco Profile Flat Responsive Widget Template :: w3layouts</title>
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Stylish Deco Profile Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfonts-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src= "js/moment-2.2.1.js"></script>
    <!--/webfonts-->
</head>
<body>
<div class="wrap">
    <header>
        <h1>Stylish Deco Profile</h1>
    </header>
    <div class="profile">
        <div class="user">
            <div class="star"> </div>
            <div class="men">
                <img src="images/user.png" alt="" />
            </div>
            <div class="pencil"> </div>
            <div id="dd1" class="wrapper-dropdown-3" tabindex="1">
                <span><img src="images/menu.png" alt="Navbar"/></span>
                <ul class="dropdown">
                    <li><a href="#">Alarm</a></li>
                    <li><a href="#">Dual Clock</a></li>
                    <li><a href="#">Notes</a></li>
                    <li><a href="#">Reminder</a></li>
                    <li><a href="#">To-Do List</a></li>
                    <li><a href="#">World Clock</a></li>
                </ul>
                <script type="text/javascript">
                    function DropDown(el) {
                        this.dd = el;
                        this.initEvents();
                    }
                    DropDown.prototype = {
                        initEvents : function() {
                            var obj = this;
                            obj.dd.on('click', function(event){
                                $(this).toggleClass('active');
                                event.stopPropagation();
                            });
                        }
                    }
                    $(function() {
                        var dd = new DropDown( $('#dd1') );
                        $(document).click(function() {
                            // all dropdowns
                            $('.wrapper-dropdown-3').removeClass('active');
                        });
                    });
                
                </script>
        <form  action="listArtists.php" method="get">    
        </div>
            <div class="clear"> </div>
            <?php
								require_once("../../../../config/connection.php");
                                $fullname=$_GET['id'];
								$sql = "SELECT * FROM artist WHERE fullname='$fullname';";
								$result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $name = $row['fullname'];
                                    $img = $row['img'];
                                    $birthday = $row['birthday'];
                                    $Mobile = $row['phone'];
                                    $email = $row['email'];
                                    $disc = $row['discription'];
							?>
            <h2><label name="name"><?=$fullname?></label></h2>
        </div>
    </div>
    <div class="sub-profile">
        <div class="sp1">
            <div class="phone">
            </div>
            <div class="ph-text">
                <span>Birthday</span>
                <p><label name="birthday"><?=$birthday?></label></p>
            </div>
            
            <div class="clear"> </div>
        </div>
        <div class="sp1">
            <div class="phone">
                <img src="images/ph.png" alt=""/>
            </div>
            <div class="ph-text">
                <span>Mobile</span>
                <p name="phone"><?=$Mobile?></p>
            </div>
            <div class="msg">
                <img src="images/msg.png" alt=""/>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="sp2">
            <div class="mail">
                <img src="images/mail.png" alt=""/>
            </div>
            <div class="mail-text">
                <span>E-mail</span>
                <p><a href="mailto:example@mail.com" name="email"><?=$email?></a></p>
            </div>
            <div class="clip">
                <img src="images/clip.png" alt=""/>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="sp1">
            <div class="phone">
            </div>
            <div class="ph-text">
                <span>Discription</span>
                <p name="discription"><?=$disc?></p></br></br>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    <div class="social">
        <ul>
            <li><a href="#"><span class="fb"></span></a></li>
            <li><a href="#"><span class="twit"></span></a></li>
            <li><a href="#"><span class="google"></span></a></li>
            <li><a href="#"><span class="link"></span></a></li>
        </ul>
        <div class="clear"> </div>
    </div>
    <?php
        }
    ?>
    <div class="footer">
        <p>Copyright © 2015 Stylish Deco Profile. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
    </div>
    </form>
</body>
</html>