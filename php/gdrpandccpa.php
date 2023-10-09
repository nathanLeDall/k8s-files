<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<link rel="stylesheet" href=https://use.typekit.net/amh3cvm.css>
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
	<script src="submit.js"></script>

	<meta name="google-site-verification" content="n423G73o-9eVM2j2yBahZQmEGYhO7ncznblloZt_Ymo" />
	<meta charset="UTF-8">
	<title>DDRP And CCPA - Nexlanding</title>
	<meta name="author" content="Nexlanding">
	<meta name="description" content="Learn about GDPR (General Data Protection Regulation) and CCPA (California Consumer Privacy Act) compliance with Nexlanding. Understand your rights regarding personal data, the lawful basis for processing, and how we handle international data transfers and breach notifications. Explore CCPA's provisions for notice of collection, right to know and delete, non-discrimination, authorized agents, and the sale of personal information. Discover how Nexlanding ensures data protection and privacy for our users." />

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
			padding-top: 150px;
			display: flex;
			padding-left: 5%;
			width: 100%;
			padding-right: 0px;
			padding-bottom: 100px;
			border-bottom: 2px grey solid;
		}

		.left {
			float: 0;
			width: 100%;
			margin-right: 150px;
		}

		#no_button {
			border: none;
			background: none;
			margin-left: 0;
			padding-left: 0;
			padding-top: 19px;
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
			font-size: 22px;
			display: block;
			width: 90%;
			font-weight: lighter;
		}

		.bottom_con_container {
			padding-left: 5%;
			padding-top: 150px;
			width: 95%;
		}

		.bottom_con {
			width: 100%;
			padding-left: 0px;
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
		@media only screen and (max-width: 1400px){
			.main_website{
				width: 100% !important;
				left: 0;
			}
		}
		@media only screen and (max-width: 768px) {
			.main_website{
				width: 100% !important;
				left: 0;
			}
			.top_con{
				display: flex;
            	flex-direction: column;
				padding-left: 5%;
				padding-right: 0px;
				width: 95%;
				padding-bottom: 20px;
			}
			.left{
				order: 1;
				width: 100%;
				margin-right: 0px;
			}
			.right{
				order: 2;
				width: 100%;
			}
			.bottom_con_container{
				box-sizing: border-box;
				padding-left: 0px;
				padding-top: 150px;
				width: 100%;
				
			}
			.bottom_con{
				box-sizing: border-box;
				width: 95%;
				padding-left: 5%;
				padding-bottom: 100px;
			}
			#bottom_con_content{
				box-sizing: border-box;
				width: 100%;
			}
			#bottom_con_titles{
				box-sizing: border-box;
			}
			.test_read_more {
				display: flex;
				width: 100%;
				height: 300px;
				object-fit: hidden;
				background-image: url("../Archive/3-Cookies.jpg");
				background-position: center right;
			}
			.read_more{
				display: block;
			}
			.read_more_contained{
				height: auto;
				flex-direction: column;
			}
			.read_more_left{
				order: 2;
				width: 95%;
				padding-left: 5%;
				padding-top: 20px;
			}
			.read_more_right{
				order: 1;
				width: 100%;
				height: auto;
				display: flex;
				justify-content: flex-end;
				align-items: flex-end;
			}
			#read_more_title{
				font-family: "neuzeit-grotesk", sans-serif;
				margin-top: 30px;
				font-weight: 400;
				font-size: 55px;
				padding-left: 5%;
			}
			.bottom_con_container{
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
					<h1 id="top_con_title">GDPR Compliance</h1>

					<h1 id="top_con_title">1. Data Controller and Data Protection Officer (DPO)</h1>
					<p1 id="top_con_text">Nexlandings is the data controller for the personal information collected on this website. If you have any questions or concerns about how your data is handled, you can contact our Data Protection Officer.</p1>

					<h1 id="top_con_title">2. Lawful Basis for Processing</h1>
					<p1 id="top_con_text">We process your personal data based on one or more lawful grounds, including your consent, contractual necessity, legal obligations, and legitimate interests pursued by us or third parties.</p1>

					<h1 id="top_con_title">3. Data Subject Rights</h1>
					<p1 id="top_con_text">Under GDPR, you have the right to access, rectify, erase, restrict processing, object to processing, and portability of your personal data. You can exercise these rights by contacting us.</p1>

					<h1 id="top_con_title">4. International Data Transfers</h1>
					<p1 id="top_con_text">Your personal data may be transferred and processed outside the European Economic Area (EEA). We take measures to ensure that such transfers comply with applicable data protection laws.</p1>

					<h1 id="top_con_title">5. Data Breach Notification</h1>
					<p1 id="top_con_text">In the event of a data breach that may pose a risk to your rights and freedoms, we will notify you and relevant authorities within the timelines required by GDPR.</p1>
				</div>
			</div>
			<div class="bottom_con_container">
				<div class="bottom_con">
					<h1 id="top_con_title">CCPA Compliance</h1>

					<h1 id="top_con_title">1. Notice of Collection</h1>
					<p1 id="top_con_text">We collect certain categories of personal information as defined by the California Consumer Privacy Act (CCPA). We collect this information for the purposes disclosed in our Privacy Policy.</p1>

					<h1 id="top_con_title">2. Right to Know and Delete</h1>
					<p1 id="top_con_text">Under CCPA, California residents have the right to request information about the categories and sources of personal information we collect, as well as the right to request deletion of their personal information. You can make such requests by contacting us.</p1>

					<h1 id="top_con_title">3. Non-Discrimination</h1>
					<p1 id="top_con_text">We will not discriminate against you for exercising your CCPA rights, such as denying goods or services, charging different prices, or providing a lower quality of service.</p1>

					<h1 id="top_con_title">4. Authorized Agent</h1>
					<p1 id="top_con_text">You may designate an authorized agent to make requests on your behalf. If you do so, we may require verification of the authorized agent's identity and authorization.</p1>

					<h1 id="top_con_title">5. Sale of Personal Information</h1>
					<p1 id="top_con_text">We do not sell personal information as defined by CCPA. We may share personal information with service providers for the purposes outlined in our Privacy Policy.</p1>
				</div>
			</div>
		</div>
		<?php include("assets/php/footer.html"); ?>
	</div>
</body>
</html>