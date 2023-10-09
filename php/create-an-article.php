<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href=https://use.typekit.net/amh3cvm.css>
	<link rel="stylesheet" type="text/css" href="assets/css/staff-header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/staff-footer.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="script.js"></script>
	<script src="create-artcicle.js"></script>
	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
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
		.mid_con{
			display: flex;
			justify-content: center;
		}
		.top_con_menu_option{
			background: none;
			margin: 0 10px 0 10px;
			padding: 5px 10px 5px 10px;
			border-radius: 25px;
		}
		
	</style>
</head>

<body>
	<div class="main_website_container">
	<?php include("assets/php/staff-header.html"); ?>
		<div class="main_website">
			<div class="top_con">
				<div class="left">
					<h1 id="top_con_header">Article Maker</h1>
					<p1 id="top_con_text">use the options below to add and remove elements</p1>
				</div>
				<div class="right">
				</div>
			</div>
			<div class="mid_con">
				<button class="top_con_menu_option" onclick='addText();'>Add Text</button>
				<button class="top_con_menu_option" onclick='addImg();'>Add Image</button>
				<input type='file' style="display: none;" id='fileInput' accept="image/jpeg, image/png">
				<button class="top_con_menu_option" onclick='addTitle()'>Add Title</button>
				<button class="top_con_menu_option" onclick='removeLast()'>Revmove Last</button>
				<button class="top_con_menu_option" onclick='addBullet()'>Bullet Point</button>
				<button class="top_con_menu_option" onclick='addBulletText()'>Add Bullet</button>
				<button class="top_con_menu_option" onclick='removeLastBullet()'>Remove Last Bullet</button>
				<button class="top_con_menu_option" onclick='addBoldText()'>Add Bold Text</button>
			</div>
			<div class="bottom_con_container">
				<div class="bottom_con">
				</div>
			</div>
			
		</div>
		<?php include("assets/php/staff-footer.html"); ?>
	</div>
</body>

</html>