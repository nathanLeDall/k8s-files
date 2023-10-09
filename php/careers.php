<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="google-site-verification" content="n423G73o-9eVM2j2yBahZQmEGYhO7ncznblloZt_Ymo" />
	<meta charset="UTF-8">
	<title>Careers - Nexlanding</title>
	<meta name="author" content="Nexlanding">
	<link rel="stylesheet" href=https://use.typekit.net/amh3cvm.css>
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
	<script src="submit.js"></script>
	<meta name="description" content="Join the Nexlanding team and ignite your career! Explore exciting opportunities for marketing specialists, business development experts, and passionate professionals. Empower your personal and professional growth with Nexlanding.">
	<meta name="keywords" content="Nexlanding careers, marketing specialist jobs, business development careers, professional growth, dynamic team, digital landscape, success stories">

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


		/*.p4_contained {
			margin-left: 200px;
			padding-top: 0px;
		}*/

		.top_con {
			padding-top: 50px;
			display: flex;
			padding-left: 60px;
			padding-right: 35px;
			padding-bottom: 10px;
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
			margin-top: 20px;
			width: 200px;
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 20px;
			cursor: pointer;
			box-shadow: 5px 5px 10px gray;
			border-radius: 15px;
		}

		#top_con_header {
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 66px;
			padding-top: 0;
			margin-top: 0;
		}

		#top_con_text {
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 22px;
			display: block;
			width: 90%;
			font-weight: lighter;
			margin-bottom: 30px;
		}

		.bottom_con_container {
			padding-left: 60px;
			padding-top: 0px;
			width: 85%;
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 27px;
		}

		.bottom_con {
			width: 50%;
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
		
		blockquote {
			font-family: "neuzeit-grotesk", sans-serif;
			position: relative;
			margin: 0.5em;
			padding: 0.5em 2em 0.5em 3em;
		}
		blockquote:before {
			font-family: "neuzeit-grotesk", sans-serif;
			position: absolute;
			font-size: 6em;
			line-height: 1;
			top: 0;
			left: 0;
			content: "\201C";
		}
		blockquote:after {
			font-family: "neuzeit-grotesk", sans-serif;
			position: absolute;
			float:right;
			font-size:6em;
			line-height: 1;
			right:0;
			bottom:-0.5em;
			content: "\201D";
		}
		blockquote footer {
			padding: 0 2em 0 0;
			text-align:right;
		}
		blockquote cite:before {
			content: "\2013";
		}
		.quote{
			margin-left: -125px;
			padding-left: 125px;
			margin-right: -680px;
			padding-right: 680px;
			width: 100%;
			height: 150px;
			background-color: grey;
		}
		.quoted{
			padding-top: 10px;
			width: 900px;
		}
		
		#first-name, #last-name, #phone-number, #email{
			width: 50%;
			height: 50px;
			border: 1.5px black solid;
			box-shadow: 5px 5px 10px gray;
			border-radius: 15px;
		}
		#email{
			margin-bottom: 20px;
		}
		.input-group{
			position: relative;
			margin-top: 30px;
		}
		label{
			position: absolute;
			left: 0;
			top: 0;
			margin: 13px;
			transition: 0.2s;
			cursor: text;
			z-index: -1;
			font-size: 23px;
		}
		input, textarea{
			background: transparent;
		}
		input:focus~label,
		textarea:focus~label,
		input:valid~label,
		textarea:valid~label
		{
			top: -38px;
			font-size: 23px;
		}
		#careers_img{
			width: 100%;
			height: auto;

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
					<h1 id="top_con_header">Join the Nexlanding Team</h1>
					
					<p1 id="top_con_text">Are you a marketing specialist, 
						business development expert, 
						or a passionate professional eager to thrive in a fast-paced and energetic environment? 
						Nexlanding is the place for you to unleash your potential and be a part of an ever-expanding digital journey.</p1>
						<img src="../Archive/pexels-fauxels-3184634.jpg" id="careers_img">
						<p1 id="top_con_text" style="margin-top: 30px;">If you are driven by innovation, 
						value collaboration, and are ready to take on exciting challenges, 
						we invite you to share your CV and join our dynamic team. At Nexlanding, 
						we believe in empowering our employees to grow both personally and professionally, 
						while collectively making a meaningful impact on the digital landscape.</p1>
					<p1 id="top_con_text">Send us your CV or attach your resume here, 
						and let's embark on an extraordinary journey together at Nexlanding! 
						Join us as we shape the future of business development and create success stories that inspire.</p1>
				</div>
			</div>
			<div class="bottom_con_container">
				<div class="bottom_con">
					<form class="form-careers">
						<div class="input-group">
							
							<input id="first-name" type="text" name="fname" required>
							<label>First Name</label>
						</div>
						<div class="input-group">
							
							<input id="last-name" type="text" name="lname" required>
							<label>Last Name</label>
						</div>
						<div class="input-group">
							
							<input id="phone-number" type="tel" name="tel" required>
							<label>Phone Number</label>
						</div>
						<div class="input-group">
							
							<input id="email" type="email" name="email" required>
							<label>Email</label>
						</div>
						<div class="input-group">
							<div class="captcha_error" style="display:none; padding-bottom:20px;">
								<p1>Please complete the CAPTCHA before submitting.</p1>
							</div>
							<div class="g-recaptcha" data-sitekey="6Ld23AwoAAAAAOuOPR2iswssUECZC5vO5ZF07mEV"></div>
						</div>
						<button type="submit" id="pretty_button">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<?php include("assets/php/footer.html"); ?>
	</div>
</body>

</html>