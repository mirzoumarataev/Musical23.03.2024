<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Consultancy Profile Widget Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Consultancy Profile Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/sliding.form.js"></script>
<!-- //js -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" />
<!-- <link href="//fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> -->
<style>
			.stylish-button {
            padding: 15px 30px;
            font-size: 1.2em;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(45deg, #3498db, #2980b9);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .stylish-button:hover {
            background: linear-gradient(45deg, #2980b9, #3498db);
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        .stylish-button:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            pointer-events: none;
            z-index: 1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .stylish-button:hover:before {
            opacity: 1;
        }

        .stylish-button:active {
            background: linear-gradient(45deg, #3498db, #2980b9);
            transform: scale(0.95);
            box-shadow: none;
        }
		</style>
</head>

<?php
	require_once("../../../../config/connection.php");
	if (isset($_GET['id']) && !empty($_GET['id'])) {
	$name = $_GET['id'];
	$sql = "SELECT * FROM artist WHERE fullname = '$name';";
	$result = mysqli_query($conn, $sql);
	}
?>

<body>
	<div class="main">
		<form action="../../../../artists.php" method="get">
			<button type="submit" class="stylish-button">Home</button>
		</form>
		<h1>Consultancy Profile Widget</h1>
		<div id="navigation" style="display:none;" class="w3_agile">
			<ul>
				<li class="selected">
					<a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-folder" aria-hidden="true"></i><span>Work</span></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>Contact</span></a>
				</li>
			</ul>
		</div>
		<div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
			<div id="steps" style="margin:0 auto;" class="agileits w3_steps">
				<form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy">
					<?php 
						while ($row = mysqli_fetch_assoc($result)) {

					?>
					<fieldset class="step agileinfo w3ls_fancy_step">
						<legend>About</legend>
						<div class="abt-agile">
						        <img src="../../../../Artists/<?=$row['img']?>" style="width: 100px">
							<div class="abt-agile-right">
								<h3><?=$row['']?></h3>
								<h5></h5>
								<ul class="address">
									<li>
										<ul class="address-text">
											<li><b>D.O.B </b></li>
											<li>: <?=$row['birthday']?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>PHONE </b></li>
											<li>: <?=$row['phone']?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>ADDRESS </b></li>
											<li>: 22 Russell Street, AUSTRALIA.</li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>E-MAIL </b></li>
											<li><a href="mailto:example@mail.com">: <?=$row['email']?></a></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>WEBSITE </b></li>
											<li><a href="http://w3layouts.com">: www.myresume.com</a></li>
										</ul>
									</li>
								</ul>
							</div>
								<div class="clear"></div>
						</div>
					</fieldset>
					<?php
						}
					?>
					<fieldset class="step wthree">
						<legend>Work</legend>
						<div class="work-w3agile">
							<div class="work-w3agile-top">
								<div class="agileits_w3layouts_work_grid1 w3layouts_work_grid1 hover14 column">
									<div class="w3_agile_work_effect">
										<ul>
											<li>
												<a href="images/c1.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="images/c1.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
											<li>
												<a href="images/c2.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="images/c2.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
											<li>
												<a href="images/c3.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="images/c3.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
											<li>
												<a href="images/c4.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="images/c4.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
											<li>
												<a href="images/c5.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="images/c5.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
											<li>
												<a href="images/c6.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="images/c6.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
												<div class="clear"></div>
										</ul> 
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<?php
					?>
					<fieldset class="step w3_agileits">
						<legend>Contact</legend>
							<div class="agilecontactw3ls-grid">
								<div class="agile-con-left">
									<form action="#" method="post">
										<input type="text" name="First Name" placeholder="FIRST NAME" required="">
										<input type="email" name="Email" placeholder="EMAIL" required="">
										<textarea name="Message" placeholder="MESSAGE" required=""></textarea>
										<div class="send-button">
											<input type="submit" value="SEND">
										</div>
									</form>
								</div>
								<div class="agile-con-right">
									<h6>Address :-</h6>
									<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>22 Russell Street, Victoria ,Melbourne AUSTRALIA </p>
									<p><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">E: info [at] domain.com</a> </p>
									<p><span><i class="fa fa-mobile" aria-hidden="true"></i></span>P: +254 2564584 / +542 8245658 </p>
									<p><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="#">W: www.w3layouts.com</a></p>
								</div>
								<div class="clear"></div>
							</div>
					</fieldset>
				</form>
			</div>
		</div>
		<div class="agileits_copyright">
			<p>© 2017 Consultancy Profile Widget. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<script type="text/javascript" src="js/smoothbox.jquery2.js"></script>
</body>
</html>