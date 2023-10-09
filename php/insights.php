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
	<title>Insights - Nexlanding</title>
	<meta name="author" content="Nexlanding">
	<meta name="description" content="Explore insightful articles on topics like value proposition, sales, and business development. Gain valuable knowledge to navigate your business growth effectively." />

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
			padding-bottom: 20px;

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

		#no_button, #articles_btn, #videos_btn, #podcast_btn, #case_studies_btn{
			border: none;
			background: none;
			font-size: 20px;
			font-weight: bold;
			margin: 0 10px 0 0;
			padding: 0;
			border-bottom: 2px black solid;
			cursor: pointer;
		}
		#case_studies_btn {
			border: none;
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
		
		
		.articles{
			height: auto;
			margin-bottom: 40px;
		}
		.article{
			display: inline-block;
			margin: 50px 50px 10px 50px;
			width: 300px;
			/*height: 350px;*/
			height: auto;
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
			object-fit: hidden;
			border-radius: 5px;
			background-size: 150% 150%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		#article_title{ 
			/*overflow: hidden; 
			text-overflow: ellipsis;
			height: 157.04px;*/
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
		#read_time{
			display: block;
			margin-top: 10px;
			margin-left: 10px;
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
					<h1 id="top_con_header">Insights</h1>
					<a><button id="articles_btn">Articles</button></a>
				</div>
			</div>
			<div class="articles" >
				<div class="article" onclick="redirect('unraveling-the-essence-of-a-value-proposition');" >
					<div class="test_read_more" style="background-image: url('../Archive/2-Diamond.jpg'); background-position: center right;"></div>
					<h1 id="article_title">Unraveling the Essence of a Value Proposition</h1>
					<p1 id="read_time">5 min read</p1>
				</div>
				<div class="article" onclick="redirect('the-distinction-between-sales-and-business-development');">
					<div class="test_read_more" style="background-image: url('../Archive/4-Virtual Trees.jpg'); background-position: bottom right;"></div>
					<h1 id="article_title">The Distinction between Sales and Business Development: Navigating Business Growth</h1>
					<p1 id="read_time">8 min read</p1>
				</div>
				<div class="article" onclick="redirect('the-art-of-questioning-in-sales');">
					<div class="test_read_more" style="background-image: url('../Archive/pexels-andrea-piacquadio-3760263.jpg'); background-position: center right;"></div>
					<h1 id="article_title">The Art of Questioning in Sales</h1>
					<p1 id="read_time">3 min read</p1>
				</div>
			</div>
			<div class="videos">
				
			</div>
			<div class="podcast">
				
			</div>
		</div>
		<?php include("assets/php/footer.html"); ?>
	</div>
</body>

</html>
