<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="google-site-verification" content="n423G73o-9eVM2j2yBahZQmEGYhO7ncznblloZt_Ymo" />
	<meta charset="UTF-8">
	<title>Contact Us - Nexlanding</title>
	<meta name="author" content="Nexlanding">

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<link rel="stylesheet" href=https://use.typekit.net/amh3cvm.css>
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
	<script src="submit.js"></script>
	<meta name="description" content="Connect with Nexlanding: Partner, inquire, and collaborate. We value meaningful connections and partnerships. Fill out the form below to get in touch with our team.">
	<meta name="keywords" content="Contact Nexlanding, Partner with Nexlanding, Inquire with Nexlanding, Collaborate with Nexlanding, Business partnerships, Connect with Nexlanding">

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
			padding-top: 100px;
			width: 90%;
			display: flex;
			padding-left: 5%;
			padding-right: 5%;
			padding-bottom: 0px;
		}

		.left {
			float: 0;
			width: 75%;
			margin-right: 0px;
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

		#pretty_button {
			padding: 20px 40px 20px 40px;
			background: none;
			margin-top: 50px;
			width: 200px;
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 22px;
			cursor: pointer;
			border-radius: 7px;
			/*box-shadow: 5px 5px 10px grey;*/
			transition: all 0.3s;

		}
		#pretty_button:hover{
			background-color: #1E3760;
			color: white;
			border: none;
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
			padding: 10px 0 10px 0;
		}

		.bottom_con_container {
			padding-bottom: 100px;
			padding-top: 50px;
			width: 100%;
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 22px;
		}
		.flex_con{
			display: flex;
		}
		.bottom_con {
			width: 50%;
			padding-left: 5%;
			padding-bottom: 50px;
			padding-right: 180px;
			flex: left;
			box-sizing: border-box;
		}
		.bottom_con2{
			display: block;
			width: 90%;
			padding-left: 5%;
			padding-right: 5%;
			margin: 130px 0 100px 0;

		}

		#bottom_con_titles {
			padding-top: 10px;
			padding-bottom: 10px;
		}

		#bottom_con_content{
			display: block;
			width: 100%;
			margin-bottom: 20px;
			font-size: 22px;
		}

		.mid_con{
			height: 2px;
			width: 86%;
			margin-left: 7%;
			margin-right: 7%;
			background-color: grey;
			display: none;
		}
		.form{
			margin-left: 0;
			width: 100%;
			max-width: 700px;
			padding-right: 40px;
			padding-bottom: 40px;
			position: relative;
			box-sizing: border-box;
		}
		
		.input-group{
			position: relative;
			margin-top: 0px;
			width: 99%;
			margin-left:1%;
		}
		#form_comment{
			box-sizing: border-box;
			vertical-align: text-top;
			width: 100%;
			height: 250px;
			margin-bottom: 20px;
			padding-left: 2%;
			border-radius: 7px;
			border: 1.5px black solid;
			/*box-shadow: 5px 5px 10px grey;*/

		}
		#form_name, #form_email, #form_comp_name{
			box-sizing: border-box;
			width: 100%;
			height: 70px;
			border: 1.5px black solid;
			padding: 2%;
			padding-bottom: 0;
			padding-top: 0;
			border-radius: 7px;
			font-size: 22px;
			/*box-shadow: 5px 5px 10px grey;*/
		}

		.lname-group{
			/*position: absolute;
			top: 0px;
			left: 52%;*/
			margin-top: 30px;
			width: 99%;
		}
		.email-group{
			/*position: absolute;
			top: 94px;
			
			left: 52%;*/
			margin-top: 30px;
			width: 99%;
		}
		.comp_name{
			margin-top: 30px;
		}
		.form_comment{
			margin-top: 30px;
		}
		label{
			position: absolute;
			left: 0;
			top: 3px;

			margin: 20px;
			transition: 0.2s;
			cursor: text;
			z-index: 1;

		}
		
		input, textarea{
			background-color: transparent;
			z-index: 2;
		}
		input:focus~label,
		textarea:focus~label,
		input:valid~label,
		textarea:valid~label
		{
			top: -45px;
			font-size: 23px;
		}
		
		#burg_contact_us, #contact_us{
			border-bottom: 1px black solid;
		}
		
		.input-group2{
			position: relative;
			background: none;
		}

		.submit-btn{
			position: absolute;
			right: 0px;
			top: -47px;
		}

		.captcha{
			margin-left: 1%;
			
		}

		.processing{
			position: absolute;
			left: 42%;
			bottom: 30px;
			border: 1px grey solid;
			border-radius: 15px;
			padding: 30px 15px 30px 15px;
			box-shadow: 30px 30px 20px gray;
			background-color: white;
			display:none;
		}

		.completed{
			position: absolute;
			left: 44%;
			bottom: 30px;
			border: 1px grey solid;
			border-radius: 15px;
			padding: 30px 15px 30px 15px;
			box-shadow: 30px 30px 20px gray;
			background-color: white;
			display: none;
		}

		.error{
			position: absolute;
			left: 24%;
			bottom: 30px;
			border: 1px grey solid;
			border-radius: 15px;
			padding: 30px 15px 30px 15px;
			box-shadow: 30px 30px 20px gray;
			background-color: white;
			display: none;
			
		}

		.contact{
			height: 500px;
			background-color: white;
			width: 500px;
			display: block;
			position: relative;
			display: flex;
			margin-right: 20px;
			justify-content: center;
			box-shadow: 3px 3px 3px 3px #EEEEEE;
			box-shadow: -5px 0px 5px -3px #616161;
			box-shadow: 0 0 3px #CCCCCC;
		}

		#calandly-tag{
			background-color: #5C94FF;
			color: white; 
			padding: 30px 20px 30px 20px;
			border-radius: 25px;
			font-size: 25px;
			box-shadow: 0px 0px 20px #5C94FF;
		}

		.r-con{
			/*margin-top: 30%;*/
			position: absolute;
			bottom: 50px;
			left: calc(7vw);
		}

		.img_contact{
			position: absolute;
			background-image: url("../Archive/consult-img.png");
			top: 10px;
			height: 200px;
			width: 300px;
			border: 2px white solid;
			background-size: 100% 100%;
		}

		#text{
			position: absolute;
			top: 200px;
		}

		#text2{
			position: absolute;
			top: 300px;
			font-size: 20px;
			padding-left: 31px;
			padding-right: 31px;
			color: #333333;
			text-align: center;
		}
		.form_con{
			width: 50%;  
			position: relative;
		}
		@media only screen and (max-width: 1400px){
			.main_website{
				width: 100% !important;
				left: 0;
			}
		}
		@media only screen and (max-width: 1206px){
			.submit-btn{
				position: inherit;
				margin-top: 20px;
			}
		}
		@media only screen and (max-width: 900px){
			.bottom_con{
				padding-right: 90px;
			}
		}
		@media only screen and (max-width: 768px){
			.flex_con{
				flex-direction: column;
			}
			.bottom_con{
				flex: left;
				width: 90%;
				padding-right: 5%;
			}
			.form{
				width: 91%;
				margin-left: 4%;
				margin-right: 5%;
				padding-right: 0;
				padding-bottom: 40px;
			}
			.input-group2{
				margin-left: 1%;
			}
			.top_con{
				flex-direction: column;
			}
			
			.right{
				width: 100%;
			}
			.contact{
				margin-left: 5%;
				margin-bottom: 50px;
			}
			.r-con{
				margin-top: 50px;
				left: 90px;
			}
			.form_con{
				flex: right;
				width: 100%;
			}
		}
		@media only screen and (max-width: 743px){
			.captcha{
				margin-left: 0;
			}
			.form{
				height: auto;
			}
		}
		@media only screen and (max-width: 564px){
			.form{
				width: 100%;
				margin-left: 2px;
				margin-right: 0;
			}
			.input-group{
				margin-left: 0;
			}
			#form_comment{
				width: 98%;
			}
		}
	</style>
</head>

<body>
	<div class="main_website_container">
	<?php include("assets/php/header.html"); ?>
		<div class="main_website">
			<div class="top_con">
				<h1 id="top_con_header">Contact Us</h1>
				<!--<div class="left">
					
				</div>
				<div class="right">
					<div class="r-con">
						 Calendly link widget begin 
						<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
						<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
						<a style="text-decoration: none;"href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/nexlanding/30min'});return false;"><p1 id="calandly-tag">Schedule time with us</p1></a>
						 Calendly link widget end 
					</div>
				</div>-->
			</div>
			<div class="mid_con">
			</div>
			<div class="bottom_con_container">
				<div class="flex_con">
					<div class="bottom_con">
						<p1 id="bottom_con_content">Connect with Nexlanding: Partner, Inquire, Collaborate</p1>
						<!-- insert video here-->
						<p1 id="bottom_con_content">We believe in the power of collaboration and look forward to building strong partnerships.</p1>
						<!--<p1 id="bottom_con_content">Together, we can achieve extraordinary outcomes and shape the future of business development.</p1>-->
						<p1 id="bottom_con_content">We value meaningful connections and partnerships. 
							Whether you're interested in exploring partnership opportunities, 
							have inquiries, or simply want to connect with us, we would love to hear from you. 
						</p1>
						<p1 id="bottom_con_content">Please 
							<!-- Calendly link widget begin -->
							<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
							<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
							<a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/nexlanding/30min'});return false;">schedule a discovery call</a>
							<!-- Calendly link widget end -->
							 or fill out the form below, and our team will get back to you promptly.</p1>
					</div>
					
					<!--<div class="contact">
						<div class="img_contact"></div>
						<h3 id="text">Let's Talk Growth!</h3>
						<p1 id="text2">Click “Schedule A Discovery Call” below, then select the day and time that works best for you.</p1>
						<div class="r-con">
							<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
							<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
							<a style="text-decoration: none;"href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/nexlanding/30min'});return false;"><p1 id="calandly-tag">Schedule A Discovery Call</p1></a>
						</div>
					</div>-->
					<div class="form_con">
						<form class="form">
							<div class="input-group">
								<input type="text" id="form_name" name="name" required>
								<label>First Name</label>
							</div>
							<div class="input-group lname-group">
								<input type="text" id="form_name" name="name" required>
								<label>Last Name</label>
							</div>
							<div class="input-group email-group">
								<input type="text" id="form_email" name="email" required>
								<label>Email</label>
							</div>
							<div class="input-group comp_name">
								<input type="text" id="form_comp_name" name="name" required>
								<label>Company Name</label>
							</div>
							<div class="input-group form_comment">
								<textarea type="text" id="form_comment" name="comment" required></textarea>
								<label>Comment</label>
							</div>
							<div class="input-group2">
								<div class="captcha">
									<div class="captcha_error" style="display:none; padding-bottom:20px;"></div>
									<div class="g-recaptcha" data-sitekey="6Ld23AwoAAAAAOuOPR2iswssUECZC5vO5ZF07mEV"></div>
								</div>

								<div class="submit-btn">
									<button type="submit" id="pretty_button">Submit</button>
								</div>
							</div>
							<div>
								<div class="processing">processing ...</div>
								<div class="completed">submitted</div>
								<div class="error">Please try again</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php include("assets/php/footer.html"); ?>
	</div>
</body>

</html>