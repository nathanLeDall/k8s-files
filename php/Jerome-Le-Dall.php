<!DOCTYPE html>
<html lang='en'>

<head>
	<link rel="stylesheet" href=https://use.typekit.net/amh3cvm.css>
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="script.js"></script>

	<meta name="google-site-verification" content="n423G73o-9eVM2j2yBahZQmEGYhO7ncznblloZt_Ymo" />
	<meta charset="UTF-8">
	<title>Jerome Le Dall - Nexlanding</title>
	<meta name="author" content="Nexlanding">
	<meta name="description" content="Explore the biography of Jerome Le Dall, an accomplished entrepreneur, visionary, and philanthropist. Discover his journey from humble beginnings to becoming a leading figure in the business world. Learn about his ventures, achievements, and commitment to making a positive impact on society.">
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
			width: 75%;
			margin-right: 150px;
		}

		.right {
			float: 1;
			width: 25%;
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
			width: 85%;
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
			width: 100%;
		}
		#bottom_con_content{
			display: block;
			margin-top: 22px;
			font-size: 22px;
		}
		#top_con_menu_option{
			display: block;
			margin-top: 15px;
			font-size: 22px;
		}
		#top_con_menu_header{
			font-size: 24px;
		}
		.person_img{
			background-color: #404040;
			width: 433px;
			height: 289px;
			background-size: 87% 113%;
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
					<h1 id="top_con_header">Jerome Le Dall</h1>
					<div class="person_img">
						<img id="person" src="../Archive/Jerome Le Dall.png" alt='Jerome Le Dall'>
					</div>
					
				</div>
				<!--<div class="right">
					<h3 id="top_con_menu_header">Experience</h3>
					<p1 id="top_con_menu_option">Cisco Systems</p1>
					<p1 id="top_con_menu_option">CA Technology</p1>
					<p1 id="top_con_menu_option">SAS Institute</p1>
					<p1 id="top_con_menu_option">Cap Gemini</p1>
					<p1 id="top_con_menu_option">Nexlanding</p1>
				</div>-->
			</div>
			<div class="bottom_con_container">
				<div class="bottom_con">
					<p1 id="bottom_con_content">Jerome Le Dall is an accomplished entrepreneur, 
						visionary, and philanthropist. 
						With a passion for innovation and a relentless drive to make a positive impact, 
						Jerome has carved a name for himself as a leading figure in the business world.</p1>
					<p1 id="bottom_con_content">Born and raised in a small town, Jerome's journey began with humble origins. 
						However, armed with a sharp mind and a strong work ethic, he embarked on a path of entrepreneurship at an early age. 
						Over the years, he has founded and led several successful ventures across diverse industries, 
						ranging from technology startups to sustainable energy initiatives.</p1>
					<p1 id="bottom_con_content">Jerome's keen eye for emerging trends and his ability to think outside 
						the box have garnered him recognition as a thought leader in the business community. 
						He is often invited to speak at prestigious conferences and seminars, 
						sharing his insights on innovation, leadership, and the future of industries.</p1>
					<p1 id="bottom_con_content">Beyond his professional accomplishments, 
						Jerome is deeply committed to giving back to society. 
						He actively supports various charitable causes and is involved in philanthropic efforts that focus on education, 
						environmental conservation, and empowering underprivileged communities.</p1>
					<p1 id="bottom_con_content">With an unwavering commitment to excellence and a passion for making a difference, 
						Jerome Le Dall continues to inspire others through his entrepreneurial journey and his dedication to creating a better world for all.</p1>
				</div>
			</div>
			
		</div>
		<?php include("assets/php/footer.html"); ?>
	</div>
</body>

</html>