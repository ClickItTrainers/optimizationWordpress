<?php 
	require('validaciones.php');
	require('email.php');


	//Guarda los campos en variables, si no se hace la petiçión se guardara como nulo
	$email =  isset($_POST['email']) ? $_POST['email'] : null;
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$url =  isset($_POST['siteUrl']) ? $_POST['siteUrl'] : null;
	$u = "http://" . $url;
	$errores = array();
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		
		//Valida que el campo email no sea nulo
	 	if (!required_field($name))
	 	{
      		$errores[] = 'The field name is required.';
   		}
   		//Valida que el campo email sea correcto.
   		if (!validate_email($email))
   		{
      		$errores[] = 'That is not a valid email';
   		}

   		if(!url_valid($u))
   		{
   			$errores[] = "That's not a valid url";
   		}

   		//Valida que el campo url no sea nulo
   		if(!required_field($url))
   		{
   			$errores[] = 'The field url is required';
   		}

   		//Valida que el campo email no sea nulo
   		if(!required_field($email))
   		{
   			$errores[] = 'The field email is required';
   		}

   		if(!$errores)
   		{
   			$result = send_email($email, $name , $u);
   			header('Location: thank_you.php');
   		}

	}	


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ClickIT-Wordpress Speed Optimization</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="distribution" content="global"/>
	<meta http-equiv="Content-Language" content="en"/>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<meta name="description" content="Optimize your wordpress site and increase your revenue">
	<meta name="keywords" content="wordpress,optimization,web,cms">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/img/icon-clickit.png">
	<!-- boostrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- normalize min-->
	<link href="assets/css/normalize.min.css" rel="stylesheet">
    <!-- main min css -->
    <link href="assets/css/main.min.css" rel="stylesheet">

    <!-- font google -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700|Raleway:700|Karla" rel="stylesheet">
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- js animation -->
    <script type="text/javascript">
    	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		 ga('create', 'UA-54461634-1', 'auto');
		 ga('send', 'pageview');
    </script>
</head>
<body>
	<section id="contactUs">
		<div class="container-fluid">
			<!-- <img src="/assets/img/header.jpg" alt="ClickIT" class="img-responsive height-img"> -->


			<div class="row banner">
				<div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-3  col-sm-offset-3 col-xs-4 col-xs-offset-2">
					<img src="assets/img/banner1.jpg" alt="ClickIT" class="banner-height img-responsive">
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
					<img src="assets/img/banner2.jpg" alt="ClickIT" class="banner-height banner-margin banner2 img-responsive">
				</div>
				<div class="col-lg-4 col-md-3 col-sm-3 col-xs-4 ">
					<img src="assets/img/banner3.jpg" alt="ClickIT" class="banner-height banner-margin img-responsive">
				</div>
			</div>



			<div class="row label-font">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 full">
					<img src="assets/img/contact.jpg" alt="ClickIT" class="img-responsive img-contact relative height-img">
					<img src="assets/img/responsive.png" alt="ClickIT" class="img-responsive img-contact2 relative height-img">
					<h1 class="absolute">Wordpress Speed Optimization</h1>
					<p class="absolute">Enter your email now to get the Wordpress Optimization Package right now! </p>
					<form id="sendEmail" method="POST" action="">
					<!-- input email -->
					<div class="input-group absolute email">
						<div>
							<input id="email" name="email" type="text" placeholder="Enter your email" class="form-control input-md">
						</div>
					</div>
					<div class="input-group-addon absolute icon-email">
						<i class="fa fa-envelope"></i>
					</div>
					<!-- input name -->
					<div class="input-group absolute name">
						<input id="name" name="name" type="text" placeholder="Enter your name" class="form-control input-md">
					</div>
					<div class="input-group-addon absolute icon-name">
						<i class="fa fa-user"></i>
					</div>
					<!-- input website-->
					<div class="input-group absolute website">
						<input id="siteUrl" name="siteUrl" type="text" placeholder="Enter your website" class="form-control input-md">
					</div>
					<button id="" name="" class="btn absolute button-style">Contact Us</button>
						
						<?php if ($errores): ?>
			  			 <ul style="color: #f00;">
			      		<?php foreach ($errores as $error): ?>
			         	<li> <?php echo $error ?> </li>
			      		<?php endforeach; ?>
			   			</ul>
						<?php endif; ?>
					</form>
				</div><!-- end col -->
			</div> <!--end row -->
		</div> <!--end container -->
	</section> <!--end section -->

	<section id="content">
		<div class="container container-padding">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1 class="title">Increase The Monthly Traffic of Your Business or Website and Increase Your Income </h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<!-- Reduce Your Website  -->
					<div class="col-lg-4 col-md-4 col-sm-3 col-xs-4">
						<img src="assets/img/icon1.png" alt="icon" class="icon1">
					</div>
					<div class="col-lg-8 col-md-8 col-sm-9 col-xs-8 icon1">
						<h3>Reduce Your Website Load Time</h3>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text1">
						<p>The average customer won't wait more than 2 seconds on your page to load. With us you can have all those visitors you were missing and increase your visits and revenue.</p>
					</div>
					<!-- end Reduce Your Website  -->

					<!-- Reduce Your Site in MB -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="assets/img/icon3.png" alt="icon" class=" margin-top icon3">
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 margin-top icon3">
						<h3>Reduce Your Site in MB</h3>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text3">
						<p>By enabling compression and optimization techniques, your site size will be reduced so it will fly against your competitors and you will be making your site even more user friendly.</p>
					</div>
					<!-- end Reduce Your Site in MB -->
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin-top-text">
					<!-- Reduce Your Site Requests -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="assets/img/icon2.png" alt="icon" class="icon2">
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 icon2">
						<h3 class="margin-top-media" >Reduce Your Site Requests</h3>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text2">
						<p>Every item on your website is being downloaded to your clients computer, a lot of request mean a bad optimization. Here we help you to reduce the requests per visitor/load. </p>
					</div>
					<!-- end Reduce Your Site Requests -->

					<!-- Improve Your Score on Google PageSpeed -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="assets/img/icon4.png" alt="icon" class=" margin-top icon4">
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 margin-top icon4">
						<h3>Improve Your Score on Google PageSpeed</h3>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text4">
						<p>Improve any site score on the most popular search engines like Google, Bing, Yahoo, and others!</p>
					</div>
					<!-- end Improve Your Score on Google PageSpeed -->
				</div>
			</div> <!--end row -->
		</div> <!--end container -->
	</section> <!--end section -->

	<section id="optimization">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background ">
					<img src="assets/img/Google.png" alt="Google" class="google img-responsive">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<p class="before">BEFORE OPTIMIZATION</p>
					<img src="assets/img/before.jpg" alt="before" class ="img-responsive">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<p class="after">AFTER OPTIMIZATION</p>
					<img src="assets/img/after.jpg" alt="after" class="img-responsive">
				</div>
			</div> <!--end row -->
		</div> <!--end container -->
	</section> <!--end section -->

	<!-- section packages optimization -->
	<section id="packages">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background-package">
					<h2>Wordpress Optimization Packages</h2>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<em>We have the according Wordpress optimization plan for every client needs.</em>
					<em>Depending on the type of access you have, to your cPanel, WHM, or SSH access.</em>
				</div>
			</div> <!--end row -->
		</div> <!--end container -->
		<div class="container container-padding-packages">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pack">
					<div class="background-gray padding-space">
						<p>WORDPRESS BOOSTER PACK</p>
						<span>$</span>
						<h5>75</h5>
						<p class="margin-bottom">Billed annually, no set up fee.</p>
						<ul>
							<li>Performance Audit</li>
							<li>Security Audit</li>
							<li>Image Optimization</li>
							<li>Image Compression</li>
							<li>Gzip Compression</li>
							<li>CSS / JS Minification</li>
							<li>HTML Minification</li>
							<li>Leverage Browser Caching</li>
							<li>Expire Headers</li>
						</ul>
					</div>
				<a href="#"><button id="" name="" class="btn margin-top">Contact Us now!</button></a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 all">
					<div class="background-gray">
						<p>WORDPRESS ALL-IN-ONE</p>
						<span>$</span>
						<h5>160</h5>
						<p class="margin-bottom">Billed annually, no set up fee.</p>
						<ul>
							<li>Detailed Performance Audit</li>
							<li>Detailed Security Audit</li>
							<li>Reduce Redirects</li>
							<li>Make AJAX Cachable</li>
							<li>APC / Memcached Setup</li>
							<li>CDN Setup (MaxCDN, Cloudflare)</li>
							<li>Remove Repeated JS / CSS</li>
							<li>Minimize Requests</li>
							<li>Web Server Optimization</li>
							<li>Database Optimization</li>
						</ul>
					</div>
				<a href="#"><button id="" name="" class="btn button2">Contact Us now!</button></a>
				</div>
				
			</div> <!--end row -->
		</div> <!--end container -->
	</section> <!--end section -->
	<!-- section service -->
	<div class="line"></div>
	<section id="service">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-5 col-sm-5 col-xs-12 container-black">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/ViDM71JpOM8" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-lg-6 col-md-7 col-sm-7 col-xs-12 margin-left">
				<i class="fa fa-plus"></i><h4>Do you want to know more about our Services?</h4>
				<p>Feel free to contact ClickIT to assess you in your needs.
					<br>
					If you are not sure about which <strong>WordPress Speed Optimization</strong> package is right for you, please contactus.</p>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<a href="https://www.clickittech.com/contact"><button id="" name="" class="btn button2 col-center">Contact Us</button></a>
				</div>
				<i class="fa fa-plus"></i><h4>We Deliver 24/7 Support to Our Customers</h4>
				<p>ClickIT customers have no need to wait for support, you will always have a dedicated account manager 24/7/365 there for you.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end section service -->
	<!-- footer -->
	<footer id="footer">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p>Copyright 2016. All Rights Reserved ClickIT Smart Technologies.</p>
		</div>
	</footer>
	<!-- end footer -->
	<!-- GoogleAnalytics -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
	<script src="assets/js/main.min.js"></script>
</body>
</html>