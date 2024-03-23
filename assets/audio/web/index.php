<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Equalizer Audio Player Widget Template | Home :: w3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<!-- <link href='//fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'> -->
		<!-- <link href='//fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'> -->
		<link rel="stylesheet" href="css/jquery.equalizer.css" />
	<!-- For-Mobile-Apps-and-Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content=" Equalizer Audio Player Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->
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
	<body>
	<h1>Equalizer Audio Player Widget</h1>
		<section id="main_section">		<!-- BestOfjQueryPlugins main section -->
			
			<div class="relative_left">
				
				<h2 id="title">Music <front style="color: #fff; text-decoration: underline;"><?=$_GET['id'];?></front></h2>
				
				<div id="equalizer">
					<audio autoplay controls loop>
						<source src="../../musics/<?php echo $_GET['id']; ?>" type='audio/mpeg'>
						<source src="music/Enigma_Endless-Quest.mp3" type='audio/mpeg'>	
					</audio>
				</div>
				<div class="clear"></div>
				<br>
				<form action="../../../musics.php" method="get">
				<button type="submit" class="stylish-button">
					Home
				</button>
				</form>
    		</div>
			<div class="clear"></div>
			<div class="footer">
				<p> &copy; 2016 Equalizer Audio Player Widget. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</section>		<!-- /BestOfjQueryPlugins main section -->

		
<!-- scripts needed for equalizer -->
		
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.reverseorder.js"></script>
		<script type="text/javascript" src="js/jquery.equalizer.js"></script>
		<script>
			$(document).ready(function(){
				
				$("#ad_container span").click(function(){
					$("#ad_container").fadeOut(400);
				});
				
			});
		</script>
<!-- /scripts needed for equalizer -->
	
	</body>
</html>
