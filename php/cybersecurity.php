<!DOCTYPE html>
<html lang='en'>

<head>
	<link rel="stylesheet" href=https://use.typekit.net/amh3cvm.css>
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../Archive/Logos/Bird Nexlanding.png">
	<script src="script.js"></script>

	<meta name="google-site-verification" content="n423G73o-9eVM2j2yBahZQmEGYhO7ncznblloZt_Ymo" />
	<meta charset="UTF-8">
	<title>Cybersecurity - Nexlanding</title>
	<meta name="author" content="Nexlanding">
	<meta name="description" content="Explore the evolving world of cybersecurity and stay ahead of cyber threats. Discover the use of AI, zero trust security, ransomware prevention, supply chain security, and regulatory compliance. Meet our cybersecurity experts for insights and solutions.">
	<meta name="keywords" content="Cybersecurity, AI in Cybersecurity, Zero Trust Security, Ransomware Prevention, Supply Chain Security, Regulatory Compliance, Cybersecurity Experts, Nexlanding">

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

		.top_con {
			padding-top: 50px;
			display: flex;
			padding-left: 60px;
			padding-right: 35px;
			padding-bottom: 90px;
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
			height: auto;
		}
		.experts_container{
			height: auto;
			display: flex;
		}
		.expert{
			width: 200px;
			height: auto;
			display: block;
			padding-bottom: 20px;
			margin-right: 30px;
			text-decoration: none;
			color: #333333;
			transition: all 0.2s;
		}
		.expert:hover{
			text-decoration: underline;
			transform: translateY(-10px);
			box-shadow: 5px 5px 10px grey;
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

		#top_con_text{
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 25px;
			display: block;
			width: 90%;
			font-weight: lighter;
			line-height: 1.3;
		}
		#bottom_con_content{
			font-size:25px;
			line-height: 1.3;
		}

		.bottom_con_container {
			padding-left: 5%;
			padding-right: 3%;
			padding-top: 50px;
			width: 92%;
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 27px;
		}

		.bottom_con {
			width: 100%;
			padding-left: 0px;
			padding-bottom: 100px;
			display: flex;
		}

		#bottom_con_titles {
			padding-top: 10px;
			padding-bottom: 10px;
			font-size: 50px;
		}

		#experts_title {
			font-family: "neuzeit-grotesk", sans-serif;
			margin-top: 30px;
			font-weight: 400;
			font-size: 55px;
			margin-bottom: 50px;
		}

		#expert_name {
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 22px;
			font-weight: lighter;

			margin-top: 20px;
			margin-bottom: 20px;
		}

		#expert_description {
			display: block;
			width: 200px;

			font-size: 20px;
		}
		#bottom_con_content{
			display: block;
			margin-bottom: 20px;
			font-size: 22px;
		}
		#expert_img{
			width: 200px;
		}
		.test_read_more {
			display: flex;
			width: 200px;
			height: 170px;
			background-size: cover;
			background-size: 100% 100%;
		}
		#vid{
			width:560px; 
			height:315px;
		}
		#industries, #burg_industries{
			border-bottom: 1px black solid;
		}
		.contact{
			height: 550px;
			background-color: white;
			width: 380px;
			position: sticky;
			top:110px;
			display: flex;
			margin-right: 5px;
			justify-content: center;
			box-shadow: 0 0 3px #CCCCCC;
		}
		#calandly-tag{
			background-color: #1E3760;
			color: white; 
			padding: 20px 20px 20px 20px;
			border-radius: 25px;
			font-size: 20px;
			box-shadow: 0px 0px 10px #1E3760;
		}
		.r-con{
			/*margin-top: 30%;*/
			position: absolute;
			bottom: 60px;
			left: 55px;
		}
		.img_contact{
			position: absolute;
			background-image: url("../Archive/consult-img.png");
			top: 30px;
			height: 200px;
			width: 300px;
			border: 2px white solid;
			background-size: 100% 100%;
		}
		#text{
			position: absolute;
			top: 220px;
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
		.bottm-left{
			margin-right: 100px;
		}
		@media only screen and (max-width: 1400px){
			.main_website{
				width: 100% !important;
				left: 0;
			}
		}
		@media only screen and (max-width: 768px){
			.top_con {
				padding-top: 50px;
				
				padding-left: 5%;
				width: 95%;
				padding-right: 0px;
				padding-bottom: 100px;
				flex-direction: column;
			}
			.left {
				float: left;
				width: 100%;
				margin-right: 0px;
			}
			.right{
				width: 100%;
			}
			.contact{
				margin-left: 0;
				margin-bottom: 50px;
			}
			.r-con{
				margin-top: 50px;
				left: 40px;
			}
			.bottom_con_container {
				padding-left: 5%;
				padding-top: 50px;
				width: 92%;
				font-family: "neuzeit-grotesk", sans-serif;
				font-size: 27px;
			}
			.bottom_con {
				width: 95%;
				padding-right: 5%;
				padding-bottom: 20px;
				padding-left: 0;
				flex-direction: column;
			}
			.bottm-left{
				order: 1;
			}
			.bottm_right{
				order: 2;
				position: relative;
			}
			#vid{
				width:100%; 
				height: calc((315px/560px)*100%)px;
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
					<h1 id="top_con_header">Cybersecurity</h1>
					<p1 id="top_con_text">The world of cybersecurity is in a constant state of change 
						as cyber threats continue to evolve. 
						Staying ahead of these threats is a monumental task, 
						but it's essential for individuals, businesses, and governments.</p1>
				</div>
				<div class="right">
					
				</div>
			</div>
			<div class="mid_con">
				<img src="../Archive/7-Cybersecurity.jpg" width="100%" alt='cybersecurity infographic'>
			</div>
			<div class="bottom_con_container">
				<div class="bottom_con">
					<div class="bottm-left">
						<h3 id="bottom_con_titles">AI and Machine Learning in Cybersecurity</h3>
						<p1 id="bottom_con_content">Artificial intelligence (AI) and machine learning (ML) are being increasingly
							used to detect and respond to cyber threats. These technologies can analyze vast amounts of data and
							identify patterns indicative of cyberattacks in real-time.</p1>
						<h3 id="bottom_con_titles">Zero Trust Security</h3>
						<p1 id="bottom_con_content">The traditional perimeter-based security model is giving way to a zero-trust 
							approach. This model assumes that threats exist both inside and outside the network. Consequently, 
							it enforces strict access controls and authentication for all users and devices.</p1>
						<h3 id="bottom_con_titles">Ransomware Attacks</h3>
						<p1 id="bottom_con_content">Ransomware attacks have surged, targeting organizations of all sizes.
							Attackers are becoming more sophisticated, using tactics like double extortion (stealing data 
							before encrypting it) to increase their leverage. Prevention, detection, and response strategies 
							are crucial.</p1>
						<h3 id="bottom_con_titles">Supply Chain Security</h3>
						<p1 id="bottom_con_content">As organizations increasingly rely on third-party vendors and suppliers, 
							supply chain security has become a significant concern. Cybercriminals are exploiting vulnerabilities
							in the supply chain to gain access to larger networks.</p1>
						<h3 id="bottom_con_titles">Regulatory Changes </h3>
						<p1 id="bottom_con_content">Governments worldwide are enacting stricter data protection regulations.
							Compliance with regulations like GDPR, CCPA, and others is not only a legal requirement but also 
							essential for maintaining trust with customers.</p1>

						<p1 id="bottom_con_content">In conclusion, cybersecurity remains a dynamic field where innovation is both
							a gain and a bother. While new technologies can help defend against threats, they also present 
							opportunities for attackers. Staying informed about the latest threats and adopting proactive 
							cybersecurity measures is essential in this ever-evolving landscape.</p1>
						<!--<iframe id="vid" src="https://www.youtube.com/embed/qjBwLhc5s7I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
				
					</div>
					<div class="bottm_right">
						<div class="contact">
							<div class="img_contact"></div>
							<h3 id="text">Let's Talk Growth!</h3>
							<p1 id="text2">Click “Schedule A Discovery Call” below, then select the day and time that works best for you.</p1>
							<div class="r-con">

								<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
								<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
								<a style="text-decoration: none;"href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/nexlanding/30min'});return false;"><p1 id="calandly-tag">Schedule A Discovery Call</p1></a>

							</div>
						</div>
					</div>
				</div>

				<div class="our_experts">
					<h1 id="experts_title">Our Experts</h1>
					<div class="experts_container">
						<a href="Jerome-Le-Dall" class="expert" style="cursor: pointer;">
							<div class="expert_info">
							<div class="test_read_more" style=" background-size: 130% 100%;background-image: url('../Archive/6-JLD2.jpg'); background-position: top center;"></div>
								<!--<img src="../Archive/6-JLD2.jpg" id="expert_img">-->
								<h3 id="expert_name">Jerome Le Dall</h3>
							</div>
						</a>
						<a href="Pierre-Calais" class="expert">
							<div class="expert_info" style="cursor: pointer;">
							<div class="test_read_more" style="background-size: 100% 120%; background-image: url('../Archive/7-Pierre\ Calais.png'); background-position: top center;"></div>
								<!--<img src="../Archive/7-Pierre Calais.png" id="expert_img">-->
								<h3 id="expert_name">Pierre Calais</h3>
							</div>
						</a>
						<!--<div class="expert">
							<div class="expert_info">
								<div class="test_read_more" style="background-size: 100% 120%; background-image: url('../Archive/7-Stephane\ Comte.png'); background-position: top right;"></div>
								<h3 id="expert_name">Stephane Comte</h3>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
		<?php include("assets/php/footer.html"); ?>
	</div>
</body>

</html>