 <!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Music Login Form Responsive Widget Template :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Music Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<!-- <link href="//fonts.googleapis.com/css?family=Reem+Kufi&amp;subset=arabic" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> -->
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<h1>
		<span>M</span>usic
		<span>L</span>ogin
		<span>F</span>orm</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form action="" method="post">
			<div class="form-style-agile">
					
			<label>
					Username
					<i class="fas fa-user"></i>
				</label>
				<input placeholder="Username" name="Name" type="text">
			</div>
			<div class="form-style-agile">
				<label>
					Password
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input placeholder="Password" name="Password" type="password">
			</div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<label class="anim">
							<input type="checkbox" class="checkbox">
							<span>Remember me</span>
						</label>
					</li>
					<li>
						<a href="../../index.php">Home-></a>
					</li>
				</ul>
			</div>
			<!-- //checkbox -->
			<input type="submit" value="Log In" name="logIn">
			<input type="submit" value="Sign Up" name="signUp">
			<!-- social icons -->
			
			<div class="footer-social">
				<h2>Or</h2>
				<ul>
					<li>
						<a href="#">
							<i class="fab fa-facebook-f icon_facebook"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter icon_twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-dribbble icon_dribbble"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-google-plus-g icon_g_plus"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- //social icons -->
		</form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>&copy; 2018 Music Login Form. All rights reserved | Design by
			<a href="http://w3layouts.com">W3layouts</a>
		</p>
	</div>
	<!-- //copyright -->

</body>

</html>

<?php
	require_once("../../config/connection.php");
	if (isset($_POST['logIn']) && !empty($_POST['logIn'])) {
		if (isset($_POST['Name']) && !empty($_POST['Name']) &&
		isset($_POST['Password']) && !empty($_POST['Password'])) {
			$name = $_POST['Name'];
			$password = $_POST['Password'];
			if ($name == "adminFazliddin" && $password == "adminAchilov") {
				$_SESSION['is_login'] = 1;
				$_SESSION["logIn"] = "1";
				header("Location: ../../minimal_admin_panel/web/index.php");
			}
			$query = "SELECT * FROM users WHERE username = '$name' AND password = '$password'";
			$result = mysqli_query($conn, $query);
			$isset = mysqli_num_rows($result);
			if($isset) {
				$_SESSION['is_login'] = 1;
				$_SESSION["logIn"] = "1";
				header("Location: ../../index.php");
			} else {
				echo "Error";
			}
		}
	} else if (isset($_POST["signUp"]) && !empty($_POST["signUp"])) {
		header("Location: ../../Registrate/web/index.php");
	}
?>