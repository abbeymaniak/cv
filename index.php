<?php
$con = mysqli_connect("localhost","root","","newsletter");

//Test Connection
if(mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}


if(isset($_POST['submit'])) {
  //Get the post variable
  
  $email_address = $_POST['email_address'];
  
  
  $query = "INSERT INTO `newletter_email`(email_address)
			VALUES ('$email_address')";
			
 $query = $con->query($query) or die($con->error.__LINE__);
  if ($query){
                    
				 $msg = 'Email Sent! Thank You';
                }else{
                    
                    die('Error : ('.$con->errno . ') '.$con->error);
                }
                
            }
          ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PrimasTech - Your Path to the Global World.</title>
    <meta name="keywords" content="PrimasTech, primastech, PRIMASTECH, PRIMAS TECH, primas tech, web, web design, web development, graphic design, web design firms in Nigeria, web development company in Nigeria,top developer , cheap website designers in nigeria, list of web design companies in nigeria, web development in ilupeju, web development in mushin, website designers in ilupeju,website designers in Mushin, website designer in lagos, web developer in lagos"/>
    <meta name="description" content="We are a Creative group of people who design influencial brands with digital experiences and core competencies in Web and Mobile Application. We develop Innovative, High impact, Cost effective and Market Oriented Softwares for your business. Our services stand out and turn your ideas into Realities.  We are your Path to the Global World."/>
    <meta name="subject" content="Digital Products & Services">
   	<META HTTP-EQUIV="Window-target" CONTENT="_top">
	   <META NAME="Author" CONTENT="Ogunnaike Abiodun Paul">
    <meta name="copyright" content="PrimasTech">
    <meta name="language" content="EN">
    <meta name="revised" content="Friday, September 21st, 2018, 12:36am" />
    <meta name="abstract" content="">
    <meta name="topic" content="">
    <meta name="summary" content="">
    <meta name="Classification" content="Technology">
    <meta name="author" content="PrimasTech support@primastech.com">
    <meta name="designer" content="">
    <meta name="copyright" content="">
    <meta name="reply-to" content="support@primastech.com.ng">
    <meta name="owner" content="Abbeymaniak paul Hugoboss">
    <meta name="url" content="http://primastech.com">
    <meta name="identifier-URL" content="http://primastech.com">
    <meta name="directory" content="submission">
    <meta name="category" content="">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    
	<!-- include the site stylesheet -->	
	<link rel="shortcut icon" type="image/jpg" href="images/primastechtop.png">
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet"> 
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/icon-fonts.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/plugins.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/colors.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=fire-animation">
</head>
<body>
	
	<div class="loader-container" id="pre-loader">
		<div class="loader">
			<div class="preloader"></div>
		</div>
	</div>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header of the page -->
		<header id="header">
			<div class="bg-dark container-fluid">
				<div class="top-nav text-right">
					<a href="mailto:primastech101@gmail.com" class="mail">support@primastech.com</a>
					<!-- social network of the page -->
					<ul class="list-unstyled social-network">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/primastech/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/primastech/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-behance"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						
					</ul>
					<!-- social network of the page end -->
				</div>
			</div>
			<div class="container-fluid header-holder">
				<!-- logo of the page -->
				<div class="logo">
					<a href="www'primastech.com"><img src="images/logo3.png" alt="PrimasTech"></a>
				</div>
				<!-- logo of the page end -->
				<a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
				<!-- main nav of the page -->
				<nav id="nav">
					<ul class="list-unstyled">
						<li><a class="smooth" href="#wrapper">home</a></li>
						<li><a class="smooth" href="#about">about</a></li>
						<li><a class="smooth" href="#features">features</a></li>
						<!--<li><a class="smooth" href="#works">works</a></li>-->
						<li><a class="smooth" href="#pricing">pricing</a></li>
						<!--<li><a class="smooth" href="#blog">blog</a></li> -->
						<li><a class="smooth" href="#contact">contact</a></li>
					</ul>
				</nav>
				<!-- main nav of the page end -->
			</div>
		</header>
		<!-- header of the page end -->
		<!-- main of the page -->
		<main id="main">
			<!-- main banner of the page -->
			
			<section class="main-banner overlay bg-full" style="background-image: url(images/slider4.jpeg);">
				<div class="caption text-center">
					
					<h1>We are <span class="clr font-effect-fire-animation">PrimasTech</span></h1>
					<span class="sub-title"><i style="color:#c59a37;font-weight: bold; font-size:20px; font-family:'tangerine', 'lato', sans-serif;text-shadow:4px 4px 4px #aaa ">Combining CREATIVITY & TECHNOLOGY into Design and Development</i></span>
					<div id="mybtn">
					<a href="#"  class="bnn btn-full" >learn more</a> <a href="#contact" class="bnn btn-gold">Contact Us</a>
					</div>
				</div>
			</section>
			<!-- main banner of the page end -->
			<!-- main holder of the page -->
			<section id="about" class="main-holder">
				<!-- main header of the page -->
				<div class="main-header bg-dark">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4 text-right col-sm-push-8">
								<h2 class="main-heading" data-heading="01">about</h2>
							</div>
							<div class="col-xs-12 col-sm-8 text-right col-sm-pull-4">
								<div class="txt-wrap">
									<p>We combine the power of CREATIVITY with TECHNOLOGY into Design and Development&nbsp;<br>PRIMASTECH offers wide range of strategic and brandings concepts  <br>  </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main header of the page end -->
				<div class="holder">
					<div class="col">
						<!-- tabset of the page -->
						<ul class="list-unstyled tabset">
							<li>
								<a href="#tab1" class="active">
									<span class="icon"><i class="icon-house"></i><i class="icon-house"></i></span>
									<span class="title">who we are</span>
								</a>
							</li>
							<li>
								<a href="#tab2">
									<span class="icon"><i class="icon-robot"></i><i class="icon-robot"></i></span>
									<span class="title">what we do</span>
								</a>
							</li>
							<li>
								<a href="#tab3">
									<span class="icon"><i class="icon-route"></i><i class="icon-route"></i></span>
									<span class="title">our mission</span>
								</a>
							</li>
							<li>
								<a href="#tab4">
									<span class="icon"><i class="icon-business"></i><i class="icon-business"></i></span>
									<span class="title">our strategy</span>
								</a>
							</li>
						</ul>
						<!-- tabset of the page end -->
					</div>
					<div class="col tab-content overlay bg-full" style="background-image: url(images/slider51.jpeg);">
						<!-- tab1 of the page -->
						<div id="tab1" class="active">
							<div class="txt-holder text-center">
								<h3 class="heading text-uppercase">who we are</h3>
								<p> <strong>PRIMASTECH</strong> is an ICT establishment with core competencies in Web and Mobile Application. We are a Creative group of people who design influencial brands with digital experiences. <br> We develop Innovative, High impact, Cost effective and Market Oriented Softwares for your business. <br><br><strong><i>&#34;We are your Path to the Global World.&#34;</i></strong> </p>
							</div>
						</div>
						<!-- tab1 of the page end -->
						<!-- tab2 of the page -->
						<div id="tab2">
							<div class="txt-holder text-center">
								<h3 class="heading text-uppercase">what we do</h3>
								<p> We Build Innovative, Attractive and User friendly Website and Applications that suits your Business and Protes your Brand with integrated digital Marketing Strategies.  </p>
							</div>
						</div>
						<!-- tab2 of the page end -->
						<!-- tab3 of the page -->
						<div id="tab3">
							<div class="txt-holder text-center">
								<h3 class="heading text-uppercase">our mission</h3>
								<p>The Motive is to Develop that Modern Responsive and User Friendly Website that attracts your Desired Clients/Customer to your Door step and to put a smile on our Customers Face and give you the Branding you Deserve.</p>
							</div>
						</div>
						<!-- tab3 of the page end -->
						<!-- tab4 of the page -->
						<div id="tab4">
							<div class="txt-holder text-center">
								<h3 class="heading text-uppercase">our strategy</h3>
								<p>The Following are the Processes we adopt to reach your desired goal:</p>
									<ul>
									<li>Goal Identification</li>
									<li>Mock-up</li>
									<li>Design and Development</li>
									<li> Testing and Delivery</li>
									<li> Launch!!!</li>
									<li> Maintenance</li>
									
								</ul>
							</div>
						</div>
						<!-- tab4 of the page end -->
					</div>
				</div>
				<div class="holder">
					<div class="col col4">
						<header class="header">
							<h2 class="heading text-uppercase">our best skills</h2>
							<p></p>
						</header>
						<!-- progress bar of the page -->
						<ul class="progress-bar list-unstyled" id="progress-bar">
							<li>
								<span class="txt text-uppercase">design</span>
								<span class="num">91%</span>
								<span class="bar"><span data-percent="91%"  class="over"></span></span>
							</li>
							<li>
								<span class="txt text-uppercase">development</span>
								<span class="num">83%</span>
								<span class="bar"><span data-percent="83%" class="over"></span></span>
							</li>
							<li>
								<span class="txt text-uppercase">branding</span>
								<span class="num">75%</span>
								<span class="bar"><span data-percent="75%" class="over"></span></span>
							</li>
						</ul>
					</div>
					<div class="col col3 overlay bg-full bg-full hidden-xs hidden-sm" style="background-image: url(images/web.jpg);"></div>
				</div>
			</section>
			<!-- main holder of the page end -->
			<!-- feature sec of the page -->
			<section id="features" class="feature-sec">
				<div>			<!-- main header of the page -->
				<div class="main-header left-heading bg-dark">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<h2 class="main-heading" data-heading="02">features</h2>
							</div>
							<div class="col-xs-12 col-sm-8">
								<div class="txt-wrap">
									<p>We give you that Quality Web Content, User-friendly and Professional Project you Desire.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main header of the page end -->
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- tabset of the page -->
							<ul class="list-unstyled tabset">
								<li>
									<a class="active" href="#tab5">
										<span class="icon"><i class="icon-layers"></i><i class="icon-layers"></i></span>
										<span class="title">web design</span>
									</a>
								</li>
								<li>
									<a href="#tab6">
										<span class="icon"><i class="icon-layout"></i><i class="icon-layout"></i></span>
										<span class="title">development</span>
									</a>
								</li>
								<li>
									<a href="#tab7">
										<span class="icon"><i class="icon-idea"></i><i class="icon-idea"></i></span>
										<span class="title">branding</span>
									</a>
								</li>
								<li>
									<a href="#tab8">
										<span class="icon"><i class="icon-settings"></i><i class="icon-settings"></i></span>
										<span class="title">free support</span>
									</a>
								</li>
							</ul>
							<!-- tabset of the page end -->
						</div>
					</div>
					<div class="row">
						<!-- tab content of the page -->
						<div class="col-xs-12 tab-content">
							<div id="tab5">
								<div class="text-wrap text-right">
									<h3 class="heading text-uppercase">Web design</h3>
									<p>We build exceptional websites through creativity with unique and outstanding beauty that gives your business the branding it deserves. We turn your ideas into digital realities.</p>
									<ul class="list-unstyled support-list">
										<li><i class="fa fa-check-square"></i><strong>Quality Web Content</strong></li>
										<li><i class="fa fa-check-square"></i><strong>User and Mobile Friendly websites</strong> </li>
										<li><i class="fa fa-check-square"></i><strong>Simple and professional Web Page</strong> </li>
										<li><i class="fa fa-check-square"></i><strong>Search Engine Optimization</strong> </li>
										
									</ul>
								</div>
								<div class="img-holder">
									<img src="images/typing.jpg" alt="typing picture">
								</div>
							</div>
							<div id="tab6" class="align-left">
								<div class="img-holder">
									<img src="images/right-image.png" alt="hand typing">
								</div>
								<div class="text-wrap">
									<h3 class="heading text-uppercase">Development</h3>
									<p>We deliver Front-end, Back-end and Full stack development which gives your organistion a facelift.</p>
									<ul class="list-unstyled support-list">
										<li><i class="fa fa-check-square"></i><strong>E-commerce</strong> </li>
										<li><i class="fa fa-check-square"></i><strong>Project Management</strong> </li>
										<li><i class="fa fa-check-square"></i><strong>Content Management System</strong> </li>
										<li><i class="fa fa-check-square"></i><strong>Desktop and Mobile Application</strong> </li>
										
									</ul>
								</div>
							</div>
							<div id="tab7">
								<div class="text-wrap text-right">
									<h3 class="heading text-uppercase">Branding & Marketing</h3>
									<p>Branding, integration and full functionality of contents with great User Experience and Interface (UX/UI),High perormance apps with business growth in mind.</p>
									<ul class="list-unstyled support-list">
										<li><i class="fa fa-check-square"></i><strong>Digital Marketing</strong> </li>
										<li><i class="fa fa-check-square"></i><strong>Corporate Advertising</strong></li>
										<li><i class="fa fa-check-square"></i><strong>SEO Audit</strong> </li>
										<li><i class="fa fa-check-square"></i><strong>System Analysis</strong></li>
										
									</ul>
								</div>
								<div class="img-holder">
									<img src="images/marketing.jpeg" alt="ipad-online marketing">
								</div>
							</div>
							<div id="tab8" class="align-left">
								<div class="img-holder">
									<img src="images/support1.jpg" alt="group-support">
								</div>
								<div class="text-wrap">
									<h3 class="heading text-uppercase">free support</h3>
									<p>The most important objectives of <strong>PRIMASTECH</strong> is the support We offer our Clients; our absolute support to helping them achieve their Desired productivity result and desired objectives in the Digital world.<br>Our support is First-Class, Outstanding and 100%..</p>
									<ul class="list-unstyled support-list">
										<li><i class="fa fa-check-square"></i><strong>100% Support to our Happy Customers!!!</strong></li>
										
									</ul>
								</div>
							</div>
						</div>
						<!-- tab content of the page end -->
					</div>
				</div>
				</div>
			</section>
			<!-- feature sec of the page end -->
			<!-- client sec of the page -->
			<section id="pricing" >
				<!-- main header of the page -->
				<div class="main-header left-heading bg-dark">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<h2 class="main-heading" data-heading="03">Pricing</h2>
							</div>
							<div class="col-xs-12 col-sm-8">
								<div class="txt-wrap">
									<p>With our friendly pricing policy and effective customer support we give you breathtaking and outstanding results. These are the Cheap Prices we offer you to assit you on your road to Digital Freedom. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				</section>
			<section class="table-section">
			<div class="row">
                        <div class="col-sm-4">
                            <div class="table-item table-v2">
                                <div class="table-header">
                                    <h2>Basic Website</h2>
                                    <br>
                                    <span>&#x20A6;60,000&#43;</span>
                                </div>
                                <ul>
                                    <li>5+ Pages</li>
                                    <li>User Friendly</li>
                                    <li>Mobile friendly</li>
                                    <li>Fast and Secure</li>
                                    <li>Email </li>
                                    <li>Hosting</li>
                                    <li>Support</li>
                                    <li> &#x2611;</li>
                                    <li> &#x2611;</li>
                                </ul>
                                <div class="table-footer ">
                                    <a href="#contact" class="btn-lightlight">Select Plan</a>
                                </div>
                            </div>
                        </div><!-- END OF /. ULMN -->
                        <div class="col-sm-4">
                            <div class="table-item table-v2">
                                <div class="table-header">
                                    <h2>Advanced Website</h2>
                                    <span>&#x20A6;200,000&#43;</span>
                                </div>
                                <ul>
                                      <li>20+ Pages</li>
                                    <li>&#x2611;</li>
                                    <li>User Friendly</li>
                                    <li>Mobile friendly</li>
                                    <li>Fast and Secure</li>
                                    <li>Email </li>
                                    	<li>Web and Mobile Application </li>
                                    <li>Free Hosting</li>
                                   	<li>100% Support</li>
                                </ul>
                                <div class="table-footer">
                                    <a href="#contact" class="pori-btn">Select Plan</a>
                                </div>
                            </div>
                        </div><!-- END OF /. ULMN -->
                        <div class="col-sm-4">
                            <div class="table-item table-v2">
                                <div class="table-header">
                                    <h2>Custom Web Apps</h2>
                                    <span>&#x20A6;350,000&#43;</span>
                                </div>
                                <ul>
                                    <li>50+ Pages</li>
                                   <li>&#x2611;</li>
                                    <li>User Friendly</li>
                                    <li>Mobile friendly</li>
                                    <li>Fast and Secure</li>
                                    <li>Email </li>
                                    <li>Web, Mobile and Desktop Application </li>
                                    <li>Free Hosting</li>
                                    <li>100% Support</li>
                                </ul>
                                <div class="table-footer">
                                    <a href="#contact" class="pori-btn">Select Plan</a>
                                </div>
                            </div>
						</div>
			</section>
			<!-- portfolio sec of the page end -->
			<!-- newsletter sec of the page -->
			<section class="newsletter-sec">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<header class="header text-center">
								<h4 class="heading2">subscribe to our newsletter now!</h4>
								<p></p>
							</header>
							<!-- Begin MailChimp Signup Form -->
							<div id="mc_embed_signup">
								<form action="index.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter-form">
									<div id="mc_embed_signup_scroll">
										<p ><?php
										   if(isset($msg)) {
											   echo'<p id="success_msg">'.$msg.'</p>';
											   
											   } ?>
										</p>
										<div class="mc-field-group">
											<!-- <label for="mce-EMAIL">Email Address </label> -->
											<input type="email" value="" name="email_address" class="required form-control email" id="mce-EMAIL" placeholder="Enter Your Email">
										</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							    		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cb2d5a07fdf0d86c96f260674_8e2ec675d3" tabindex="-1" value=""></div>
							    		<div class="clear"><input type="submit" value="subscribe" name="submit" id="mc-embedded-subscribe" class="button btn btn2"></div>
							    	</div>
								</form>
							</div>
							<!--End mc_embed_signup-->
						</div>
					</div>
				</div>
			</section>
			<!-- newsletter sec of the page end -->
			<!-- counter sec of the page -->
			<!--<section class="counter-sec overlay bg-full" style="background-image: url()">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- header of the page -->
							<!--<header class="header">
								<h2 class="heading text-uppercase">some fun facts</h2>
								<p>      </p>
							</header>
							<!-- header of the page end -->
						<!--</div>
					</div>
					<div class="row">
						<div class="col-xs-12">	
							<!-- counter holder of the page -->
							<!--<ul class="list-unstyled counter-holder">
								<li class="text-center">
									<span class="icon"><i class="icon-clock"></i></span>
									<span class="count">3451</span>
									<span class="sub-title">hours of work</span>
								</li>
								<li class="text-center">
									<span class="icon"><i class="icon-projection"></i></span>
									<span class="count">273</span>
									<span class="sub-title">finished projects</span>
								</li>
								<li class="text-center">
									<span class="icon"><i class="icon-handshake"></i></span>
									<span class="count">554</span>
									<span class="sub-title">satisfied clients</span>
								</li>
								<li class="text-center">
									<span class="icon"><i class="icon-cup"></i></span>
									<span class="count">2954</span>
									<span class="sub-title">coffee cups</span>
								</li>
							</ul>
							<!-- counter holder of the page end -->
						</div>
					</div>
				</div>
			</section>
			<!-- counter sec of the page end -->
			<!-- team sec of the page -->
	<!--		<section id="team" class="team-sec">
				<!-- main header of the page -->
			<!--	<div class="main-header left-heading bg-dark">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<h2 class="main-heading" data-heading="04">team</h2>
							</div>
							<div class="col-xs-12 col-sm-8">
								<div class="txt-wrap">
									<p>Our Team of Experts</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main header of the page end -->
				<!-- team holder of the page -->
				<!--<div class="container team-holder">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<!-- team of the page -->
						<!--	<div class="team">
								<img src=" " alt="image description">
								<div class="over text-center">
									<h3 class="heading text-uppercase"><a href="#">jonathan doe</a></h3>
									<span class="sub-title">web designer</span>
									<ul class="list-unstyled social-network">
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>	
								</div>
							</div>
							<!-- team of the page end -->
					<!--	</div>
				<!--	</section> 
			<!-- blog sec of the page -->
		<!--	<section id="blog" class="blog-sec">
				<!-- main header of the page -->
				<!--<div class="main-header bg-dark">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4 text-right col-sm-push-8">
								<h2 class="main-heading" data-heading="05">blog</h2>
							</div>
							<div class="col-xs-12 col-sm-8 text-right col-sm-pull-4">
								<div class="txt-wrap">
									<p> </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main header of the page end -->
			<!--</section>
			<!-- blog sec of the page end -->
			<!-- contact sec of the page -->
			<section id="contact" class="contact-sec">
				<!-- main header of the page -->
				<div class="main-header left-heading bg-dark">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<h2 class="main-heading" data-heading="06">contact</h2>
							</div>
							<div class="col-xs-12 col-sm-8">
								<div class="txt-wrap">
									<p>For any Enquiries, Requests and Suggestions.. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main header of the page end -->
				<div class="contact-holder overlay bg-full" style="background-image: url(images/slider5.jpeg); background-repeat: no-repeat; background-size: cover;">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h3 class="main-heading text-center text-uppercase">say hello!</h3>
								<!-- contact list of the page -->
								<ul class="list-unstyled contact-list">
									<li>
										<i class="icon icon-telephone"></i>
										<span class="tel">
											<a href="tel:+2348022538893">+2348022538893</a>
											<a href="tel:+2348022538893">+2348022538893</a>
										</span>
									</li>
									<li>
										<i class="icon icon-worldwide"></i>
										<span class="mail">
											<a href="www.primastech.com">www.primastech.com</a>
											<a href="mailto:primastech101@gmail.com;">support@primastech.com</a>
										</span>
									</li>
									<li>
										<i class="icon icon-map"></i>
										<address>29, Iseyin Street,<br>Ilupeju, Palmgrove, Lagos<br> 23401</address>
									</li>
								</ul>
								<!-- contact list of the page end -->
								<!-- contact form of the page -->
					
								<form action="process.php" method="post" class="contact-form" style="margin-bottom: 20px;">
									
									<div class="col">
										<div class="form-group">
											<input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required>
											
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
											
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter Subject" name="subject">
											
										</div>
									</div>
									<div class="col textarea">
										<label for="message">Your Message</label>
										<textarea id="message" name="comment"id="comment" required></textarea>
										
										<button type="submit" class="btn btn4"  name="submit"  value="Send">Send</button>
										
									</div>
									
									</form>
								
								<!-- contact form of the page end -->
								</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>
				
			</section>
			<!-- contact sec of the page end -->
		</main>
		<!-- main of the page end -->
		<!-- footer of the page -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<p>Copyright © 2018 <a href="#">PrimasTech</a>. All Rights Reserved.</p>
					</div>
					<div class="col-xs-12 col-sm-6">
						<!-- social network of the page -->
						<ul class="list-unstyled social-network">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/primastech/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/primastech/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-behance"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						
						</ul>
						<!-- social network of the page end -->
					</div>
				</div>
			</div>
			
		</footer>
		<!-- footer of the page end -->
		<!-- Back Top of the page -->
	    <span id="back-top" class="fa fa-chevron-up"></span>
	</div>
	<!-- include jQuery -->
	<script src="js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="js/jquery.main.js"></script
	<script type="text/javascript" defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuYrTpyrSuM32JCjwsk7lHAYGE7UoKbK0"></script>

</body>
</html>