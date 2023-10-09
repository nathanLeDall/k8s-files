<!DOCTYPE html>
<html lang="en">

<head>
<meta name="google-site-verification" content="n423G73o-9eVM2j2yBahZQmEGYhO7ncznblloZt_Ymo" />
	<meta charset="UTF-8">
	<title>Case Studies - Nexlanding</title>
	<meta name="author" content="Nexlanding">
	<link rel="stylesheet" href=https://use.typekit.net/amh3cvm.css>
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Explore in-depth case studies of companies that have partnered with Nexlanding to achieve remarkable results">

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

		#no_button, #articles_btn, #videos_btn, #podcast_btn {
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
		
		#articles_btn, #videos_btn, #podcast_btn {
			font-size: 20px;
			font-weight: bold;
			margin: 0 10px 0 0;
			padding: 0;
			
		}
		#articles_btn{
			border-bottom: 2px black solid;
		}
		.articles{
			height: auto;
		}
		.article{
			display: inline-block;
			margin: 50px 50px 10px 50px;
			width: 300px;
			height: 416px;
			border-radius: 5px;
			vertical-align: top; /* Add this line */
			cursor: pointer;
			transition: 0.3s;
			
		}
		.article:hover{
			transform: translateY(-15px);
		}
		#article_text{
			display: block;
			width: 100%;
		}
		.test_read_more {
			display: flex;
			width: 300px;
			height: 200px;
			object-fit:contain;
			background-repeat: no-repeat;
			border-radius: 5px;
			background-size: 96% 47%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		#article_title{ 
			font-weight: lighter;
			display: block;
			font-size: 25px;
			margin-bottom: 0;
			margin-top: 10px;
			padding-left: 5px;
			cursor: pointer;
		}
		#article_title:hover{
			text-decoration: underline;
		}
		.article h3{
			padding-left: 5px;
		}
		#insights, #burg_insights{
			border-bottom: 1px black solid;
		}
		@media only screen and (max-width: 1400px){
			.main_website{
				width: 100% !important;
				left: 0;
			}
		}
		@media only screen and (max-width: 768px){
			.article{
				display: inline-block;
				margin: 40px 25px 20px 25px;
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
					<h1 id="top_con_header">Case Studies</h1>
					<button id="articles_btn">Companies</button>
				</div>
			</div>
			<div class="articles" >
				<div class="article" onclick="redirect('pixid-group');" >
					<div class="test_read_more" style="background-size: 90% ; background-image: url('../Archive/10-Logo\ Pixid.png'); background-position: center center;"></div>
					<h1 id="article_title">Pixid</h1>
				</div>
				<div class="article" onclick="redirect('dataglance');">
					<div class="test_read_more" style="background-size: 90% ; background-image: url('../Archive/11-Logo\ Dataglance.png'); background-position: center center;"></div>
					<h1 id="article_title">DataGlance</h1>
				</div>
			</div>
		</div>
		<?php include("assets/php/footer.html"); ?>
	</div>
</body>

</html>
