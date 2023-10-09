<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href=https://use.typekit.net/amh3cvm.css>
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<script src="script.js"></script>
	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			font-family: "neuzeit-grotesk", sans-serif;
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

		#sub_header_btns {
			width: 100px;
			height: 50px;
			margin-top: 10px;
			background: none;
		}

		.x-button {
			padding-top: 30px;
			cursor: pointer;
			display: flex;
			flex-direction: column;
			height: 50px;
			width: 50px;
			justify-content: space-between;
		}

		.bar1 {
			width: 141%;
			background-color: black;
			height: 2px;
			margin-top: 0;
			padding-top: 0;
			transform-origin: left;
			transform: rotate(45deg);
		}

		.bar2 {
			width: 141%;
			background-color: black;
			height: 2px;
			margin-bottom: 0;
			padding-bottom: 0;
			transform-origin: left;
			transform: rotate(-45deg);
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
			font-family: "neuzeit-grotesk";
			color: white;
		}

		#p2_text {
			color: white;
			font-family: "garamond-premier-pro";
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
			height:543px;
			padding-bottom: 100px;
		}

		.read_more_right{
			float: 1;
			width: 60%;
			height: inherit;
			display: flex;
			justify-content: flex-end;
			align-items: flex-end;
		
		}
		.read_more_left{
			float: 0;
			width: 40%;
		}
		#read_more_img{
			padding-bottom: 50px;
		}
		#pretty_button {
			padding: 20px 40px 20px 40px;
			background: none;
			margin-top: 50px;
			width: 200px;
			font-family: "neuzeit-grotesk";
			font-size: 20px;
		}
		#top_con_header{
			font-family: "neuzeit-grotesk";
			font-size: 60px;
			padding-top: 0;
			margin-top: 0;
		}
		#top_con_text{
			font-family: "neuzeit-grotesk";
			font-size: 27px;
			display: block;
			width: 90%;
			font-weight: lighter;
		}
		.bottom_con_container{
			padding-left: 100px;
			width: 85%;
			font-family: "neuzeit-grotesk";
			font-size: 27px;
		}
		.bottom_con{
			padding-top: 0;
			margin-bottom: 0;
			width: 50%;
			padding-left: 25px;
			padding-bottom: 100px;
		}
		#bottom_con_titles{
			padding-top: 10px;
			padding-bottom: 10px;
		}
		#read_more_title{
			font-family: "neuzeit-grotesk", sans-serif;
			margin-top: 30px;
			font-weight: 400;
			padding-bottom: 30px;
			font-size: 55px;
		}
		
		#read_more_article_title{
			font-family: "garamond-premier-pro";
			font-size: 45px;
			font-weight: lighter;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		#read_more_sub{
			display: block;
			width: 300px;
			font-size: 20px;
		}
		.tmp{
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		.mid_con{
			padding-bottom: 0;
			margin-bottom: 0;
		}
	</style>
</head>

<body>
	<div class="main_website_container">
		<div class="main_website">
			<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/website3/src/assets/php/"; include($IPATH."header.html"); ?>

			

			<div class="top_con">
				<div class="left">
					<h1 id="top_con_header">Growth
						<br>
						Management</h1>
					<p1 id="top_con_text">NexGrowth specializes in helping businesses enhance their
						revenue by setting up efficient customer systems. We understand
						the importance of streamlining processes to achieve growth,
						and our services are tailored to cater to your needs for
						optimizing customer acquisition, success, experience, and
						partner development.</p1>
				</div>
				<div class="right">
					<h3 class="top_con_menu_header">Benefits</h3>
					<button id="no_button">Perfect Your Revenue System</button><br>
					<button id="no_button">Improve Your Sales Performance</button><br>
					<button id="no_button">Access a Team Ready To Sell</button><br>
					<button id="no_button">Get The Flexibility To Offboard</button><br>
					<button id="no_button">Save Time & Money</button>
				</div>
			</div>
			<div class="mid_con">
				<img src="../Archive/4-Sales Team.jpg" width="100%">
			</div>
			<div class="bottom_con_container">
				<div class="bottom_con">
					<div style="width: 900px; height: 500px; overflow: hidden;">
						<img src="../Archive/4-Infographics.png"  class="tmp">
					</div>
					<h3 id="bottom_con_titles">Customer Acquisition</h3>
					<p1 id="bottom_con_content">
						<ul>
							<li>
								Lead Generation: We employ effective lead generation strategies to
								attract potential customers, increasing your chances of converting prospects
								into valuable clients.
							</li>
							<li>
								Business Development: Our expertise in business development enables us
								to identify new opportunities and forge strategic partnerships that contribute
								to your company's growth.
							</li>
						</ul>
					</p1>

					<h3 id="bottom_con_titles">Customer Success</h3>
					<p1 id="bottom_con_content">
						<ul>
							<li>
								Customer Base Analysis: We analyze your customer base to gain insights
								into their preferences and behavior, enabling you to tailor your strategies
								and offerings for higher customer retention and satisfaction.
							</li>
							<li>
								Upsell/Cross-sell Strategies: Our customer success team devises upselling
								and cross-selling strategies to maximize revenue from existing customers,
								driving increased sales and fostering loyalty.
							</li>
							<li>
								Business Development: We continue to explore avenues for your business
								development, ensuring sustainable growth and maintaining customer
								satisfaction.
							</li>
						</ul>
					</p1>

					<h3 id="bottom_con_titles">Customer Experience</h3>
					<p1 id="bottom_con_content">
						<ul>
							<li>
								Customer Support: Deliver exceptional customer support through our
								service, enhancing customer loyalty and ensuring a positive brand image.
							</li>
							<li>
								Back-office: Streamline your back-office operations for greater efficiency,
								allowing you to focus on core business activities and deliver an unparalleled
								customer experience.
							</li>
						</ul>
					</p1>

					<h3 id="bottom_con_titles">Partner Development</h3>
					<p1 id="bottom_con_content">
						<ul>
							<li>
								Partner Qualification: We help you identify and qualify potential partners
								that align with your business goals and values, fostering mutually beneficial
								collaborations.
							</li>
							<li>
								Partner Engagement: Our team facilitates ongoing partner engagement,
								ensuring strong relationships that contribute to mutual growth and success.
							</li>
							<li>
								Partner Animation: We support and animate partners by providing
								resources and assistance, fostering active involvement and participation in
								achieving shared objectives.
							</li>
						</ul>
					</p1>
				</div>
				<div class="read_more">
					<div class="read_more_left">
						<h1 id="read_more_title">Insights</h1>
						<p1 id="read_more_sub">Article</p1>
						<h3 id="read_more_article_title">Build Your Sales
							<br>Machine</h3>
						<p1 id="read_more_sub">Discover the framework you need to consider
							to successfully implement your growth system.</p1>
						<br>
						<button id="pretty_button">Learn More</button>
					</div>
					<div class="read_more_right">
						<img src="../Archive/4-Virtual Trees.jpg" width="650px" style="object-fit: contain;" id="read_more_img">
					</div>
				</div>
			</div>

			

			<div class="insights">
				<div class="p4_contained">
					<h1 id="p2_text">Read More Insights</h1>
					<button id="secondary_buttons">Learn More</button>
				</div>
			</div>

			<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/website3/src/assets/php/"; include($IPATH."footer.html"); ?>
			
		</div>
		
	</div>
</body>

</html>