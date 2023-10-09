<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href=https://use.typekit.net/amh3cvm.css>
	<link rel="stylesheet" type="text/css" href="../assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="script.js"></script>
	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
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

		.insights {
			width: 100%;
			height: 150px;
			background-color: #B99E89;
		}

		.insights_contained {
			margin-left: 200px;
			padding-top: 20px;
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

		.p4_contained {
			margin-left: 200px;
			padding-top: 20px;
		}

		.top_con {
			padding-top: 200px;
			display: flex;
			padding-left: 60px;
			padding-right: 35px;
			padding-bottom: 100px;
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

		.read_more {
			border-top: 2px #DDDDDD solid;
			display: flex;
			align-items: center;
			justify-content: center;

			height: 481px;
			padding-bottom: 100px;
		}

		.read_more_right {
			float: 1;
			width: 60%;
			height: inherit;
			display: flex;

			justify-content: flex-end;
			align-items: flex-end;

		}

		.read_more_left {
			float: 0;
			width: 40%;

		}

		#pretty_button {
			padding: 20px 40px 20px 40px;
			background: none;
			margin-top: 50px;
			width: 200px;
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 20px;
		}

		#top_con_header {
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 60px;
			padding-top: 0;
			margin-top: 0;
		}

		#top_con_text {
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 27px;
			display: block;
			width: 90%;
			font-weight: lighter;
		}

		.bottom_con_container {
			padding-left: 100px;
			padding-top: 150px;
			width: 85%;
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 27px;
		}

		.bottom_con {
			width: 50%;
			padding-left: 25px;
			padding-bottom: 100px;
		}

		#bottom_con_titles {
			padding-top: 10px;
			padding-bottom: 10px;
		}

		#read_more_title {
			font-family: "neuzeit-grotesk", sans-serif;
			margin-top: 30px;
			font-weight: 400;
			font-size: 55px;
		}

		#read_more_article_title {
			font-family: "neuzeit-grotesk", sans-serif;;
			font-size: 45px;
			font-weight: lighter;

			margin-top: 20px;
			margin-bottom: 20px;
		}

		#read_more_sub {
			display: block;
			width: 300px;

			font-size: 20px;
		}
	</style>
</head>

<body>
	<div class="main_website_container">
		<div class="main_website">
		<?php include("../assets/php/header.html"); ?>
			<div class="top_con">
				<div class="left">
					<h1 id="top_con_header"></h1>
					<img id="person" src="">
				</div>
				<div class="right">
					<h3 class="top_con_menu_header"></h3>
					<p1 class="top_con_menu_option"></p1>
				</div>
			</div>
			<div class="bottom_con_container">
				<div class="bottom_con">
					<p1 id="bottom_con_content"></p1>
				</div>
			</div>
			<?php include("../assets/php/footer.html"); ?>
		</div>
	</div>
</body>

</html>