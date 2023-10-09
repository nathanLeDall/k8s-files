<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
	<title>Corrine Coppin - Nexlanding</title>
	<meta name="author" content="Nexlanding">
	<link rel="stylesheet" href=https://use.typekit.net/amh3cvm.css>
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Explore the illustrious career of Pierre Calais, a distinguished professional with expertise in microelectronics, software development, and entrepreneurship. From his early days in Paris to leadership roles at renowned companies, Pierre's journey is a testament to his technical prowess and entrepreneurial spirit.">
	<meta name="keywords" content="Pierre Calais career journey, Microelectronics expert Pierre Calais, Software development in microelectronics, Entrepreneurship in technology industry, Pierre Calais at Cadence Design Systems, Stormshield CEO Pierre Calais, Qualys French and EMEA VP role, Cybersecurity startup Egerie and Pierre Calais, Pierre Calais' contributions to French American Foundation, Pierre Calais: Sports car enthusiast and family man">
	<script src="script.js"></script>
	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			font-family: "neuzeit-grotesk", sans-serif;
			background-color: #FAFAFA;
		}

		.main_website_container {
			position: relative;
			overflow: auto;
			height: 100%;
			width: 100%;
		}

		.main_website {
			width: 1400px;
			position: relative;
			left: calc(50% - 1400px/2);
		}

		#secondary_buttons {
			background: none;
			border: none;
			font-family: "neuzeit-grotesk", sans-serif;
			color: white;
		}

		#p2_text {
			color: white;
			font-family: "neuzeit-grotesk", sans-serif;;
			font-size: 40px;
			font-weight: lighter;
		}

		.top_con {
			padding-top: 50px;
			display: flex;
			padding-left: 60px;
			padding-right: 35px;
			padding-bottom: 50px;
		}

		.left {
			float: 0;
			width: 90%;
			margin-right: 150px;
		}

		.right {
			float: 1;
			width: 10%;
		}

		#no_button {
			border: none;
			background: none;
			margin-left: 0;
			padding-left: 0;
			padding-top: 19px;
		}

		#top_con_header {
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 66px;
			padding-top: 0;
			margin-top: 0;
		}

		.bottom_con_container {
			padding-left: 0px;
			padding-top: 0px;
			width: 100%;
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 27px;
		}

		.bottom_con {
			width: 60%;
			padding-left: 60px;
			padding-bottom: 100px;

		}

		#bottom_con_titles {
			padding-top: 10px;
			padding-bottom: 10px;
		}
		#person{
			width: 50%;
		}
		#bottom_con_content{
			display: block;
			margin-top: 20px;
			font-size: 22px;
		}
		#top_con_menu_option{
			display: block;
			margin-top: 15px;
			font-size: 25px;
		}
		#top_con_menu_header{
			font-size: 30px;
		}
		.person_img{
			background-image: url("../Archive/9-Corinne\ Copin.png");
			width: 433px;
			height: 389px;
			background-size: 120% 150%;
			background-position-x: 5px;
		}
		@media only screen and (max-width: 1400px){
			.main_website{
				width: 100% !important;
				left: 0;
			}
		}
		@media only screen and (max-width: 768px){
			.main_website{
				width: 100%;
				left: 0;
			}
			.top_con{
				flex-direction: column;
				height: auto;
				padding-right: 0px;
				padding-left: 5%;
				width: 95%;
				padding-bottom: 0;
			}
			.left{
				order: 1;
				width: 100%;
				padding-bottom: 20px;
				margin-right: 0;
			}
			.right{
				order: 2;
				width: 50%;
			}
			.bottom_con {
				width: 90%;
				padding-left: 5%;
				padding-right: 5%;
				padding-bottom: 20px;
			}
			.bottom_con_container {
				padding-left: 0px;
				padding-top: 40px;
				width: 100%;
				font-size: 27px;
			}
			.p4_contained {
				margin-left: 5%;
				padding-top: 20px;
			}
		}
	</style>
</head>

<body>
	<div class="main_website_container">
	<?php include("assets/php/header.html"); ?>
		<div class="main_website">
		
			<div class="top_con">
				<div class="left">
					<h1 id="top_con_header">Corinne Coppin</h1>
					<div class="person_img"></div>
				</div>
				<div class="right">
					<h3 class="top_con_menu_header"></h3>
					<p1 class="top_con_menu_option"></p1>
				</div>
			</div>
			<div class="bottom_con_container">
				<div class="bottom_con">
					<p1 id="bottom_con_content">Corinne Coppin is a visionary leader and the founder of CCOOKIE, where she excels in optimizing relational and commercial performance. Her journey has been shaped by a rich background and strong education, including a Bac +5 in Strategic Management Functions, HR, and Sales, which laid the foundation for her leadership and business development skills.</p1>
					<p1 id="bottom_con_content">Throughout her career, Corinne has held pivotal roles and continuously progressed. She has honed her expertise in analyzing business needs, profiling partners, defining pedagogical objectives, and formulating commercial metrics. Her innovative approach extends to measuring relational and commercial indicators, ensuring rapid performance improvements.</p1>
					<p1 id="bottom_con_content">Notable achievements include empowering over 3,000 executives, 4,000 sales professionals, and 300 non-sales professionals through her methodology. She also excels in strategic management, consulting, and implementing collaborative tools, contributing to her trusted status in the field.</p1>
					<p1 id="bottom_con_content">Corinne's adaptability shines across diverse sectors, including temporary employment, IT, insurance, distribution, luxury hospitality, banking, pharmaceuticals, chamber of commerce, real estate, and industrial construction. Her journey is a testament to her dedication and expertise in optimizing organizational performance and fostering excellence in business relationships.</p1>
				</div>
			</div>
			
		</div>
		<?php include("assets/php/footer.html"); ?>
	</div>
</body>

</html>