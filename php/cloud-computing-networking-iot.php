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
	<title>Cloud Computing Networking IoT - Nexlanding</title>
	<meta name="author" content="Nexlanding">
	<meta name="description" content="Explore the impact of cloud computing, networking, and IoT convergence on industries. Learn about edge computing, 5G, cloud-native technologies, hybrid clouds, and security challenges. Meet our expert Jerome Le Dall.">
	<meta name="keywords" content="Cloud computing, Networking, IoT, Edge computing, 5G, Cloud-native technologies, Hybrid clouds, Security challenges, Jerome Le Dall, Nexlanding expert">

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
			font-size: 66px;
			padding-top: 0;
			margin-top: 0;
		}

		#top_con_text{
			font-family: "neuzeit-grotesk", sans-serif;
			font-size: 22px;
			display: block;
			width: 90%;
			font-weight: lighter;
			line-height: 1.3;
		}
		#bottom_con_content{
			font-size:22px;
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
			font-size: 28px;
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
		}
		#expert_img{
			width: 200px;
		}
		#vid{
			width:560px; 
			height:315px;
		}
		#industries, #burg_industries{
			border-bottom: 1px black solid;
		}
		.test_read_more {
			display: flex;
			width: 200px;
			height: 170px;
			background-size: cover;
			background-size: 100% 100%;
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
			margin-right: 20px;
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
					<h1 id="top_con_header">Cloud Computing, <br>Networking, <br>IoT</h1>
					<p1 id="top_con_text">In recent years, the merging of cloud computing, 
						networking, and the Internet of Things (IoT) has had a profound impact on various industries.
						This convergence represents a crucial shift in how businesses operate,
						communicate, and deliver services. </p1>
				</div>
				<div class="right">
				</div>
			</div>
			<div class="mid_con">
				<img src="../Archive/8-AdobeStock_211770741.jpeg" width="100%" alt='networking image'>
			</div>
			<div class="bottom_con_container">
				<div class="bottom_con">
					<div class="bottm-left">
						<h3 id="bottom_con_titles">Edge Computing and IoT</h3>
						<p1 id="bottom_con_content">With the explosive growth of IoT devices, 
							edge computing has become a critical component of the network infrastructure.
							Edge computing enables data processing closer to the source, 
							reducing latency and improving real-time decision-making for IoT applications. Industries such as manufacturing, 
							healthcare, and logistics are leveraging edge computing to enhance operational efficiency and innovation.</p1>
						<h3 id="bottom_con_titles">5G Connectivity</h3>
						<p1 id="bottom_con_content">The rollout of 5G networks has accelerated the adoption of IoT applications.
							This high-speed, low-latency connectivity is essential for enabling real-time data exchange between devices,
							making it ideal for autonomous vehicles, smart cities, and augmented reality experiences.</p1>
						<h3 id="bottom_con_titles">Cloud-Native Technologies</h3>
						<p1 id="bottom_con_content">Cloud-native technologies, including containers and microservices, 
							are transforming how applications are developed and deployed. This shift allows for greater scalability, 
							flexibility, and resilience in cloud-based systems. 
							As a result, businesses are increasingly migrating their workloads to cloud-native architectures.</p1>
						<h3 id="bottom_con_titles">Hybrid and Multi-Cloud Environments</h3>
						<p1 id="bottom_con_content">Many organizations are adopting hybrid and multi-cloud strategies to optimize cost, 
							performance, and redundancy. These strategies involve using a combination of public and private clouds to achieve 
							the desired balance of resources and control.</p1>
						<h3 id="bottom_con_titles">Security Challenges</h3>
						<p1 id="bottom_con_content">The increased connectivity brought about by IoT devices and cloud services also introduces new security challenges.
							Protecting sensitive data and ensuring the integrity of IoT devices is paramount. 
							As a result, cybersecurity in these areas has become a top priority.</p1>
						<p1 id="bottom_con_content">In summary, the convergence of cloud computing, networking, 
							and IoT is restructuring industries across the board. This trend is driven by advancements in edge computing, 
							5G connectivity, cloud-native technologies, and the need for secure, scalable, and agile infrastructure.</p1>
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
								<h3 id="expert_name">Jerome Le Dall</h3>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<?php include("assets/php/footer.html"); ?>
	</div>
</body>

</html>