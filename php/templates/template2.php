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

		.our_experts {
			border-top: 2px #DDDDDD solid;
			height: 500px;
		}
		.experts_container{
			border: 2px red solid;
			display: flex;
		}
		.expert{
			width: 300px;
			height: 300px;
			display: block;
			border: 2px solid black;
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

		#experts_title {
			font-family: "neuzeit-grotesk", sans-serif;
			margin-top: 30px;
			font-weight: 400;
			font-size: 55px;
			margin-bottom: 100px;
		}

		#expert_name {
			font-family: "neuzeit-grotesk", sans-serif;;
			font-size: 45px;
			font-weight: lighter;

			margin-top: 20px;
			margin-bottom: 20px;
		}

		#expert_description {
			display: block;
			width: 300px;

			font-size: 20px;
		}
	</style>
</head>

<body>
	<div class="main_website_container">
		<div class="main_website">
		<?php include("assets/php/header.html"); ?>
			


			<div class="top_con">
				<div class="left">
					<h1 id="top_con_header"></h1>
					<p1 id="top_con_text"></p1>
				</div>
				<div class="right">
				</div>
			</div>
			<div class="mid_con">
				<img src="" width="100%">
			</div>
			<div class="bottom_con_container">
				<div class="bottom_con">
					<h3 id="bottom_con_titles"></h3>
					<p1 id="bottom_con_content"></p1>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/qjBwLhc5s7I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>


				<div class="our_experts">
					<h1 id="experts_title">Our Expert</h1>
					<div class="experts_container">
						<div class="expert">
							<div class="expert_info">
								<img src="" id="expert_img">
								<h3 id="expert_name"></h3>
								<p1 id="expert_description"></p1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="insights">
				<div class="p4_contained">
					<h1 id="p2_text">Read More Insights</h1>
					<button id="secondary_buttons">Learn More</button>
				</div>
			</div>

			<?php include("assets/php/footer.html"); ?>
			
		</div>
	</div>
</body>

</html>