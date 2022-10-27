



<!DOCTYPE html>
<html lang="zxx">

	<head>
	    
<!-- aug 24 Event snippet for Submit lead form11 conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-10781250376/Cnk4CMP00tgDEMim85Qo',
      'event_callback': callback
  });
  return false;
}
</script>	    
	    
	<!-- 22 08 2022 Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MF5CH26');</script>
<!-- End Google Tag Manager -->

	    
<!-- Global site tag (gtag.js) - Google Ads: AW-10781250376 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10781250376"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10781250376');
</script>	    
	    
	    
	    
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-30RV7SM531"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-30RV7SM531');
</script>

	    
	 
<!--LeadSquared Tracking Code Start-->
<script type="text/javascript" src="https://web-in21.mxradon.com/t/Tracker.js"></script>
<script type="text/javascript">
      pidTracker('55939');
</script>
<!--LeadSquared Tracking Code End-->

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<link rel="shortcut icon" href="assets/fav.png">
		<link rel="icon" href="assets/fav.png" type="image/gif" sizes="16x16">
		<title>Jackfruithomz- We Construct Quality Homes</title>
		<meta name="description" content="Jackfruithomz offers customized home construction right from designing, sourcing materials, on site construction along with interiors for your new home.">
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">				
		<!-- Google Font -->	
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">		
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet"> 
		<!-- fonts CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">	
		<!-- animate CSS -->		
		<link rel="stylesheet" href="assets/css/animate.css">		
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!-- Venobox CSS -->
		<link rel="stylesheet" href="assets/css/venobox.css">				
		<!-- Style CSS -->				
		<link rel="stylesheet" href="assets/css/style.css">		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		
		<style>
		    
		    /*!
 * Bootstrap Steps v1.0.3 (https://github.com/ycs77/bootstrap-steps)
 * Copyright 2020 Lucas Yang <yangchenshin77@gmail.com>
 * Licensed under MIT (https://github.com/ycs77/bootstrap-steps/blob/master/LICENSE)
 */
 .bggray{
     background-color:#efefef;
 }
 img.responsive {
    width: 100% !important;
}
.steps {
  padding: 0;
  margin: 0;
  list-style: none;
  display: flex;
  overflow-x: auto;
}
.steps .step:first-child {
  margin-left: auto;
}
.steps .step:last-child {
  margin-right: auto;
}

.step:first-of-type .step-circle::before {
  display: none;
}
.step:last-of-type .step-content {
  padding-right: 0;
}

.step-content {
  box-sizing: content-box;
  display: flex;
  align-items: center;
  flex-direction: column;
  width: 9rem;
  min-width: 9rem;
  max-width: 9rem;
  padding-top: 0.5rem;
  padding-right: 1rem;
}

span.step-text {
    text-align: center;
    font-weight:700;
}

.step-circle {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 2.5rem;
  height: 2.5rem;
  color: #adb5bd;
  border: 2px solid #adb5bd;
  border-radius: 100%;
  background-color: #fff;
}
.step-circle::before {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: -2px;
  width: calc(9rem + 1rem - 2.7rem);
  height: 2px;
  transform: translate(-100%, -50%);
  color: #adb5bd;
  background-color: currentColor;
}

.step-text {
  color: #adb5bd;
  word-break: break-all;
  margin-top: 0.25em;
}

.step-active .step-circle {
  color: #fff;
  background-color: #96c93d;
  border-color: #96c93d;
}
.step-active .step-circle::before {
  color: #000;
}
.step-active .step-text {
  color: #000;
}

.step-error .step-circle {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.step-error .step-circle::before {
  color: #dc3545;
}
.step-error .step-text {
  color: #dc3545;
}

.step-success .step-circle {
  color: #000;
  background-color: #fff;
  border-color: #000;
}
.step-success .step-circle::before {
  color: #000;
}
.step-success .step-text {
  color: #000;
}

/*# sourceMappingURL=bootstrap-steps.css.map */
		</style>
	</head>
	
    <body data-spy="scroll" data-offset="80">
        
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5N4RZD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

		<!-- START PRELOADER -->
		<!--<div class="preloader">-->
		<!--	<div class="spinner">-->
		<!--		<div class="double-bounce1"></div>-->
		<!--		<div class="double-bounce2"></div>-->
		<!--	</div>-->
		<!--</div>-->
		<!-- END PRELOADER -->		

		  <!-- START NAVBAR -->
		  <nav class="navbar navbar-toggleable-sm fixed-top navbar-light bg-faded site-navigation">
			<div class="container">
			   <a class="navbar-brand" href="index.html"><img src="assets/img/logo-two.png" alt=""></a>      
			   <a class="navbar-brand" href="index.html"><img src="assets/img/logo-two.png" class="logo-hidden" alt=""></a>      
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
				<ul class="navbar-nav">
				   





				  <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
				  <li class="nav-item"><a class="nav-link" href="#about">Why Us</a></li>			
				  <li class="nav-item"><a class="nav-link" href="#features">How it works</a></li>	
				  
				  <!--<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>		-->
				  <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
				  
				  <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
				</ul>
			  </div>
			</div><!--- END CONTAINER -->	
		  </nav>      
		  <!-- END NAVBAR -->
							
							
		
		<!-- 22 08 22 Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF5CH26"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


		<!-- START HOME -->
		<section id="home" class="home_bg ripple" style="background-image: url(assets/img/bg/bgbanner.jpg);  background-size:cover; background-position: center center;">		
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-sm-12 col-xs-12">
						<div class="hero-text">
							<!--- <h2>We construct hasslefree and luxury homes at affordable price</h2> -->
							
						<h2>	Book Now And Get </br> Free Modular Kitchen </h2>
						
				<!--	<h2> Designs Starts @ <strike> 1650 </strike> 1550 sft Limited offer</h2> -->
							
					 <p>Jackfruithomz offers customized home construction right from designing, sourcing materials, on site construction along with interiors for your new home. We have a professional team of well experienced civil engineers, architects, project managers and interior designers</p> 
						
							<!--	 <div class="home_btn">
								<a href="#contact" class="get_btn wow bounceIn page-scroll" data-wow-delay=".4s" > Book Now </a>
							</div>  -->
						 </div> 
					</div><!-- END COL-->
					<div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="register">
							<h4 class="login_register_title">Get Free Consultation</h4>
							<form method="POST" action="cons.php">
							<div class="form-group">
								<input type="text" class=" form-control requiredField input-label" placeholder="Name*" name="name" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control requiredField input-label" placeholder="Email Id*" name="email" required>
							</div>
							<div class="form-group">
								<input type="text" class=" form-control requiredField input-label" placeholder="Mobile Number*" name="mobile" required>
							</div>
							<div class="form-group">
								<input type="number" class=" form-control requiredField input-label" placeholder="Plot Size*" name="size" required>
							</div>
							<div class="form-group">
								<select class="form-control" name="select" required>
								  <option disabled selected value>When do you want to start*</option>
								  <option value="Immediately">Immediately</option>
								  <option value="After 3 months">After 3 months</option>
								  <option value="After 6 months">After 6 months</option>
								  <option value="Don't Know">Don't Know</option>
								</select>
							</div>
							
							<input type="hidden" name="source" value="">
			                    <input type="hidden" name="SourceMedium" value="">
			                    <input type="hidden" name="term" value="">
			                    <input type="hidden" name="content" value="">
			                    <input type="hidden" name="SourceCampaign" value="">
			                    <input type="hidden" name="page_url" value="http://www.jackfruithomz.com/">
			                    
							<div class="form-group mbnone text-center">
								<button class="btn btn-register-bg" type="submit" name="submit1">Submit</button>
							</div>
							</form>
						</div>
					</div><!-- END COL-->
				</div><!-- END ROW-->
			</div><!--- END CONTAINER -->			
		</section>
		<!-- END  HOME -->			
		
		<!-- START WORK PROCESS -->
		<section id="about" class="process-content section-padding">
			<div class="container">	
			<div class="section-title text-center">
						<h1>Why Choose Jackfruithomz?</h1>
						<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices. Duis dictum eget dolor vel blandit.</p>-->
					</div>
				<div class="row text-center">				
										
					<div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single-process">
							<span class="ti-thumb-up"></span>
							<h4>Immersive Presentation</h4>
							<p>Experience your completed home from the inside before finalising the designs.</p>
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single-process single-process-bg">
							<span class="ti-home"></span>
							<h4>Ready to Move in Home</h4>
							<p>We provide interior designs and fit it out for you to move in with suitcases.</p>
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single-process">
							<span class="ti-crown"></span>
							<h4>Quality Construction</h4>
							<p>We maintain a strict quality check throughout the construction process, from sourcing the materials to using it in the construction.</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single-process">
							<span class="ti-alarm-clock"></span>
							<h4>On-Time Delivery</h4>
							<p>We build and deliver the home on time. Our IT enable Project Management tracking tool helps us to maintain zero delays.</p>
						</div>
					</div> <!--- END COL -->			  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END WORK PROCESS -->

		<!-- START FEATURES -->
		<section id="feature" class="feature_area section-padding">
		   <div class="container">
				<div class="row">										
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_feature">
							<h2>Track project progress through regular updates.</h2>
							<ul>
								<li><span class="ti-check"></span>Assured 10 Years of warranty on structure</li>
								<li><span class="ti-check"></span>Track project progress through a smart app</li>
								<li><span class="ti-check"></span>Transparent process of quotation, advance and post-work payment</li>
								<li><span class="ti-check"></span>No price escalation once the quotation is finalized  </li>
							</ul>
							<a href="#contact">Talk To us</a>
						</div>	
					</div><!-- END COL -->	
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="feature_img">
							<img src="assets/img/professional.png"  class="img-fluid" alt="" />
						</div>	
					</div><!-- END COL -->							
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END FEATURES -->
		
			<!--  START FEATURES -->
		<section id="features" class="our_feature">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h1>How it Works</h1>
						<p>Check out our detailed work process from Initial meet to delivery of the home. Our entire process is very transparent and we involve experienced professionals at every step of the process.</p>
					</div>	
					<div class="desk">
					<ul class="steps">
  <li class="step step-active">
    <div class="step-content">
      <span class="step-circle">1</span>
      <span class="step-text">Meet our team</span>
    </div>
  </li>
  <li class="step step-active">
    <div class="step-content">
      <span class="step-circle">2</span>
      <span class="step-text">Design finalization</span>
    </div>
  </li>
  <li class="step step-active">
    <div class="step-content">
      <span class="step-circle">3</span>
      <span class="step-text">On Site Work</span>
    </div>
  </li>
  <li class="step step-active">
    <div class="step-content">
      <span class="step-circle">4</span>
      <span class="step-text">Track Project<br> Progress</span>
    </div>
  </li>
   <li class="step step-active">
    <div class="step-content">
      <span class="step-circle">5</span>
      <span class="step-text">Interior Designing</span>
    </div>
  </li>
   <li class="step step-active">
    <div class="step-content">
      <span class="step-circle">6</span>
      <span class="step-text">Installation</span>
    </div>
  </li>
   <li class="step step-active">
    <div class="step-content">
      <span class="step-circle">7</span>
      <span class="step-text">Move in the New <br>Home</span>
    </div>
  </li>
</ul>
</div>
					<div class="mob col-lg-12 col-sm-12 col-xs-12">
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_feature">
							<div class="feature_icon how"><i class="ti-user"></i></div>
							<h4>Meet our team</h4>
							
						</div>				
					</div><!--- END COL -->	
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_feature">
							<div class="feature_icon how"><i class="ti-money"></i></div>
							<h4>Design finalization</h4>
							
						</div>				
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_feature">
							<div class="feature_icon how"><i class="ti-check"></i></div>
							<h4>On Site Work </h4>
							
						</div>					
					</div><!--- END COL -->	
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="single_feature">
							<div class="feature_icon how"><i class="ti-ruler-alt-2"></i></div>
							<h4>Track Project Progress </h4>
						
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="single_feature">
							<div class="feature_icon how"><i class="ti-pencil-alt"></i></div>
							<h4>Interior Designing</h4>
						
						</div>				
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
						<div class="single_feature">
							<div class="feature_icon how"><i class="ti-thumb-up"></i></div>
							<h4>Installation </h4>
						
						</div>		
					</div><!--- END COL -->	
						<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
						<div class="single_feature">
							<div class="feature_icon how"><i class="ti-new-window"></i></div>
							<h4>Move in the New Home</h4>
							
						</div>		
					</div><!--- END COL -->	
					<!--	<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">-->
					<!--	<div class="single_feature">-->
					<!--		<div class="feature_icon how"><i class="ti-key"></i></div>-->
					<!--		<h4>Deliver the Home</h4>-->
						
					<!--	</div>		-->
					<!--</div>-->
					<!--- END COL -->	
					</div>
					<!--<div class="desk">-->
					<!--    <div class="feature_img">-->
					<!--		<img src="assets/img/How-we-work.png"  class="img-fluid" alt="" />-->
					<!--	</div>-->
					<!--</div>-->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END FEATURES -->
		
		<!-- START PORTFOLIOS -->
		<!--<section id="portfolio" class="works_area section-padding">-->
		<!--   <div class="container">-->
		<!--		<div class="row">										-->
		<!--			<div class="section-title text-center">-->
		<!--				<h1>Latest works</h1>-->
		<!--				<p>Team Jackfruithomz has delivered 150+ projects and we have a long list of delighted clients. Check out some of our recently completed Home construction projects in Bangalore.</p>-->
		<!--			</div>						-->
		<!--			<div class="col-lg-12 col-sm-12 col-xs-12">-->
		<!--				<div id="work-slider" class="owl-carousel">-->
		<!--					<div class="single_portfolio">-->
		<!--						<div class="box">-->
		<!--							<img src="assets/img/portfolio/newimage.jpg" alt="">-->
		<!--							<div class="box-content">-->
		<!--								<div class="content">-->
		<!--									<ul class="work_icon">-->
		<!--										<li><a href="assets/img/portfolio/newimage.jpg" class="port-icon lightbox" data-gall="gall-work"><span class="ti-plus"></span></a></li>-->
		<!--									</ul>-->
		<!--								</div>-->
		<!--							</div>-->
		<!--						</div>-->
		<!--						<h4 class="port-title"><a href="#">Bangalore</a></h4>-->
							
		<!--					</div>-->
		<!--					<div class="single_portfolio">-->
		<!--						<div class="box">-->
		<!--							<img src="assets/img/portfolio/newimage.jpg" alt="">-->
		<!--							<div class="box-content">-->
		<!--								<div class="content">-->
		<!--									<ul class="work_icon">-->
		<!--										<li><a href="assets/img/portfolio/newimage.jpg" class="port-icon lightbox" data-gall="gall-work"><span class="ti-plus"></span></a></li>-->
		<!--									</ul>-->
		<!--								</div>-->
		<!--							</div>-->
		<!--						</div>-->
		<!--						<h4 class="port-title"><a href="#">Bangalore</a></h4>-->
							
		<!--					</div>-->
		<!--					<div class="single_portfolio">-->
		<!--						<div class="box">-->
		<!--							<img src="assets/img/portfolio/newimage.jpg" alt="">-->
		<!--							<div class="box-content">-->
		<!--								<div class="content">-->
		<!--									<ul class="work_icon">-->
		<!--										<li><a href="assets/img/portfolio/newimage.jpg" class="port-icon lightbox" data-gall="gall-work"><span class="ti-plus"></span></a></li>-->
		<!--									</ul>-->
		<!--								</div>-->
		<!--							</div>-->
		<!--						</div>-->
		<!--						<h4 class="port-title"><a href="#">Bangalore</a></h4>-->
							
		<!--					</div>-->
		<!--					<div class="single_portfolio">-->
		<!--						<div class="box">-->
		<!--							<img src="assets/img/portfolio/4.jpg" alt="">-->
		<!--							<div class="box-content">-->
		<!--								<div class="content">-->
		<!--									<ul class="work_icon">-->
		<!--										<li><a href="assets/img/portfolio/4.jpg" class="port-icon lightbox" data-gall="gall-work"><span class="ti-plus"></span></a></li>-->
		<!--									</ul>-->
		<!--								</div>-->
		<!--							</div>-->
		<!--						</div>-->
		<!--						<h4 class="port-title"><a href="#">Sales and Implementation</a></h4>-->
		<!--						<p class="port-info">Client Project</p>-->
		<!--					</div>-->
		<!--					<div class="single_portfolio">-->
		<!--						<div class="box">-->
		<!--							<img src="assets/img/portfolio/5.jpg" alt="">-->
		<!--							<div class="box-content">-->
		<!--								<div class="content">-->
		<!--									<ul class="work_icon">-->
		<!--										<li><a href="assets/img/portfolio/5.jpg" class="port-icon lightbox" data-gall="gall-work"><span class="ti-plus"></span></a></li>-->
		<!--									</ul>-->
		<!--								</div>-->
		<!--							</div>-->
		<!--						</div>-->
		<!--						<h4 class="port-title"><a href="#">Performance Improvement</a></h4>-->
		<!--						<p class="port-info">Product Promotion</p>-->
		<!--					</div>-->
		<!--					<div class="single_portfolio">-->
		<!--						<div class="box">-->
		<!--							<img src="assets/img/portfolio/6.jpg" alt="">-->
		<!--							<div class="box-content">-->
		<!--								<div class="content">-->
		<!--									<ul class="work_icon">-->
		<!--										<li><a href="assets/img/portfolio/6.jpg" class="port-icon lightbox" data-gall="gall-work"><span class="ti-plus"></span></a></li>-->
		<!--									</ul>-->
		<!--								</div>-->
		<!--							</div>-->
		<!--						</div>-->
		<!--						<h4 class="port-title"><a href="#">Consulting Services</a></h4>-->
		<!--						<p class="port-info">Video Making</p>-->
		<!--					</div>							-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</section>-->
		<!-- END PORTFOLIOS -->

		
		

		
		
	
		
		<!-- START PRICING -->
		<section id="pricing" class="pricing-content section-padding">
			<div class="container">					
				<div class="row text-center">				
					<div class="section-title text-center">
						<h1>Home Construction Package</h1>
						<p>Select the package which suits the best to build your gorgeous. Talk to use for the customized home construction package if you are not happy with our listed home construction packages.</p>
					</div>	
					<!--	<div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single-pricing">
							<div class="price-head">								
								<h2>Basic </h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<h1 class="price">₹ 1,550</h1>
							<h5>/per Sqft incl. GST</h5>
							<div class="single_feature mt-3">
							<a href="#contact">Know More</a>
							</div>  -->
<!--							<ul>-->
<!--								<li><b>Structure</b> - branded and high-quality cement, steel, concrete, bricks-->
<!--</li>-->
<!--								<li><b>Bare shell</b> – W/O Interior</li>-->
								
<!--							</ul>-->
							<!--<a href="#">Get start</a>-->
					<!--	</div>
					</div>   -->
					
					<!--- END COL -->	
				
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single-pricing">
							<div class="price-head">								
								<h2> Basic </h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<h1 class="price">₹ 1,550</h1>
							<h5>/per Sqft incl. GST</h5>
							<div class="single_feature mt-3">
							<a href="#contact">Know More</a>
							</div>

						</div>
					</div>  <!--- END COL -->	
				
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single-pricing">
							<div class="price-head">								
								<h2>Premium </h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<h1 class="price">₹ 1,850</h1>
							<h5>/per Sqft incl. GST</h5>
							<div class="single_feature mt-3">
							<a href="#contact">Know More</a>
							</div>
<!--							<ul>-->
<!--								<li><b>Structure</b> - branded and high-quality cement, steel, concrete, bricks-->
<!--</li>-->
<!--								<li><b>Bare shell</b> – W/O Interior</li>-->
								
<!--							</ul>-->
							<!--<a href="#">Get start</a>-->
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single-pricing">
							<div class="price-head">								
								<h2>Super Premium </h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<h1 class="price">₹ 2,000</h1>
							<h5>/per Sqft incl. GST</h5>
							<div class="single_feature  mt-3">
							<a href="#contact">Know More</a>
							</div>
<!--							<ul>-->
<!--								<li><b>Structure</b> – branded and high-quality cement, steel, concrete, bricks</li>-->
<!--<li>-<b>With Interior</b></li>-->
							
<!--							</ul>-->
							<!--<a href="#">Get start</a>-->
						</div>
					</div><!--- END COL -->	
					
					
						<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single-pricing">
							<div class="price-head">								
								<h2>Luxury </h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<h1 class="price">₹ 2,200</h1>
							<h5>/per Sqft incl. GST</h5>
							<div class="single_feature mt-3">
							<a href="#contact">Know More</a>
							</div>  
<!--							<ul>-->
<!--								<li><b>Structure</b> - branded and high-quality cement, steel, concrete, bricks-->
<!--</li>-->
<!--								<li><b>Bare shell</b> – W/O Interior</li>-->
								
<!--							</ul>-->
							<!--<a href="#">Get start</a>-->
						</div>
					</div>  
					
					<div class="col-lg-4 col-sm-4 col-xs-42 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single-pricing single-pricing-white">
							<div class="price-head">								
								<h2> Super Luxury </h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<h1 class="price">₹ 2,500</h1>
							<h5>/per Sqft incl. GST</h5>
							<div class="single_feature white mt-3">
							<a href="#contact">Know More</a>
							</div>
							
							
								
<!--							<ul>-->
<!--								<li><b>Structure</b> – branded and high-quality cement, steel, concrete, bricks</li>-->
<!--	<li>-<b>With Interior</b>-->
<!--</li>-->
								
<!--							</ul>-->
							<!--<a href="#" class="price_wht_btn">Get start</a>-->
						</div>
					</div><!--- END COL -->	
					
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		
		
		
			<section id="" class="pricing-content section-padding bggray">
			<div class="container">					
				<div class="row text-center">
				    	<div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					   			
					<div class="section-title text-center">
						<h1>Awards</h1>
						<p>Times Business Awards Bengaluru 2021 for Emerging House Construction Service Company.</p>
					</div>	
					 </div>	
					<div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					    </div>
						<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<img src="assets/img/JFH_award_1200.jpg" class="responsive" />
					</div><!--- END COL -->	
							<div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					    </div>  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END PRICING -->	

	
		<!-- END BLOG -->	
		
			<!-- START TESTIMOIALS -->	
		<!--<section id="testimonial" class="testimonial-area section-padding" style="background-image: url(assets/img/bg/testimonial-bg.jpg);  background-size:cover; background-position: center center;">-->
		<!--	<div class="container">-->
		<!--	    	<div class="section-title text-center">-->
		<!--				<h1 style="color:#fff;">What our clients say about us</h1>-->
					
		<!--			</div>-->
		<!--		<div class="row">-->
		<!--			<div class="col-lg-8 offset-lg-2 col-sm-12 col-xs-12">-->
		<!--				<div id="testimonial-slider" class="owl-carousel">-->
		<!--					<div class="testimonial">-->
		<!--						<div class="testimonial-content">-->
		<!--							<div class="pic">-->
		<!--								<img src="assets/img/testimonial/img-1.jpg" alt="">-->
		<!--							</div>-->
		<!--							<h3 class="title">Naveen C</h3>-->
									<!--<span class="post">SEO Specialist</span>-->
		<!--						</div>-->
		<!--						<p class="description">-->
		<!--						My friend recommended Jackfruithomz for my house construction. I had an excellent experience with the team, they charged me lower than what the company quoted and delivered the house on time-->
		<!--						</p>-->
		<!--					</div>		 -->
							<!--<div class="testimonial">-->
							<!--	<div class="testimonial-content">-->
							<!--		<div class="pic">-->
							<!--			<img src="assets/img/testimonial/img-2.jpg" alt="">-->
							<!--		</div>-->
							<!--		<h3 class="title">Masum Billah</h3>-->
							<!--		<span class="post">Marketing Specialist</span>-->
							<!--	</div>-->
							<!--	<p class="description">-->
							<!--		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dolor tellus, efficitur ut tortor id, molestie egestas nibh. In blandit ex at erat vehicula molestie. Mauris vel volutpat nulla. Suspendisse lorem ex, congue at elit id, tincidunt tempor orci. Nullam nec augue ac tellus rhoncus tincidunt nec ut ligula. Praesent.-->
							<!--	</p>-->
							<!--</div>-->
							<!--<div class="testimonial">-->
							<!--	<div class="testimonial-content">-->
							<!--		<div class="pic">-->
							<!--			<img src="assets/img/testimonial/img-3.jpg" alt="">-->
							<!--		</div>-->
							<!--		<h3 class="title">Sefat Ullah</h3>-->
							<!--		<span class="post">Manager</span>-->
							<!--	</div>-->
							<!--	<p class="description">-->
							<!--		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dolor tellus, efficitur ut tortor id, molestie egestas nibh. In blandit ex at erat vehicula molestie. Mauris vel volutpat nulla. Suspendisse lorem ex, congue at elit id, tincidunt tempor orci. Nullam nec augue ac tellus rhoncus tincidunt nec ut ligula. Praesent.-->
							<!--	</p>-->
							<!--</div>-->
							<!--<div class="testimonial">-->
							<!--	<div class="testimonial-content">-->
							<!--		<div class="pic">-->
							<!--			<img src="assets/img/testimonial/img-4.jpg" alt="">-->
							<!--		</div>-->
							<!--		<h3 class="title">Kazi Luna</h3>-->
							<!--		<span class="post">Support Specialist</span>-->
							<!--	</div>-->
							<!--	<p class="description">-->
							<!--		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dolor tellus, efficitur ut tortor id, molestie egestas nibh. In blandit ex at erat vehicula molestie. Mauris vel volutpat nulla. Suspendisse lorem ex, congue at elit id, tincidunt tempor orci. Nullam nec augue ac tellus rhoncus tincidunt nec ut ligula. Praesent.-->
							<!--	</p>-->
							<!--</div>-->
		<!--				</div>-->
		<!--			</div>		  -->
		<!--		</div>-->
		<!--	</div>-->
		<!--</section>-->
	
		
		<!-- START CONTACT -->
		<section id="contact" class="contact_us section-padding" style="background-image: url(assets/img/bg/contact-bg.jpg); background-position: center center;">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h1 class="section-title-white">Talk to us for Home Construction</h1>
						<p class="section-title-white">Meet our expert team and get free consultation about your dream construction, from design to materials. Our expert team will walk you through the entire process of home construction.</p>
					</div>				
					<div class="text-center col-xs-12 col-lg-8 offset-lg-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					    
					   <!--<div class="single_feature mt-3">
							<a href="#home">GET FREE CONSULTATION</a>
							</div>-->
							
							<div class="register" style="margin-top: 10px; border: 5px solid #94d60a;">
						    
							<h4 class="login_register_title">Get Free Consultation</h4>
							    
								<form method="POST" action="cons.php">
							<div class="form-group">
								<input type="text" class=" form-control requiredField input-label" placeholder="Name*" name="name" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control requiredField input-label" placeholder="Email Id*" name="email" required>
							</div>
							<div class="form-group">
								<input type="text" class=" form-control requiredField input-label" placeholder="Mobile Number*" name="mobile" required>
							</div>
							<div class="form-group">
								<input type="number" class=" form-control requiredField input-label" placeholder="Plot Size*" name="size" required>
							</div>
							
						    	<div class="form-group">
								<select class="form-control" name="select" required>
								  <option disabled selected value>When do you want to start*</option>
								  <option value="Immediately">Immediately</option>
								  <option value="After 3 months">After 3 months</option>
								  <option value="After 6 months">After 6 months</option>
								  <option value="Don't Know">Don't Know</option>
								</select>
							</div>
							
							<input type="hidden" name="source" value="">
			                    <input type="hidden" name="SourceMedium" value="">
			                    <input type="hidden" name="term" value="">
			                    <input type="hidden" name="content" value="">
			                    <input type="hidden" name="SourceCampaign" value="">
			                    <input type="hidden" name="page_url" value="http://www.jackfruithomz.com/">
			                    
							<div class="form-group mbnone text-center">
								<button class="btn btn-lg btn-contact-bg" type="submit" name="submit1">Submit</button>
							</div>
							</form>
							</div>
							
						
					</div><!-- END COL  -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END CONTACT -->
		
		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">		
				<div class="row">						
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>About Us</h4>
							<p>Jackfruithomz is a home construction solution where we manage the entire project. Right from designing the floor plan to actual construction at the site. We even go further and design the interiors of your home even before the ground breaking.</p>
							<!--<ul>-->
							<!--	<li><a href="#">Search engine Optimization</a></li>-->
							<!--	<li><a href="#">Social Media Marketing</a></li>-->
							<!--	<li><a href="#">Off Page & on page SEO</a></li>-->
							<!--	<li><a href="#">Website audit and analysis</a></li>-->
							<!--	<li><a href="#">Website Security</a></li>-->
							<!--	<li><a href="#">Bug Fixing and solve</a></li>-->
							<!--</ul>-->
						</div>
					</div><!--- END COL -->	
					<!--<div class="col-lg-3 col-sm-6 col-xs-12">-->
					<!--	<div class="single_footer single_footer_address">-->
					<!--		<h4>Company</h4>-->
					<!--		<ul>-->
					<!--			<li><a href="#">Terms & Conditions</a></li>-->
					<!--			<li><a href="#">Licenses</a></li>-->
					<!--			<li><a href="#">market API</a></li>-->
					<!--			<li><a href="#">Become an Affiliate</a></li>-->
					<!--			<li><a href="#">Careers and job</a></li>-->
					<!--			<li><a href="#">Need any Help?</a></li>-->
					<!--		</ul>-->
					<!--	</div>-->
					<!--</div>-->
					<!--- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="single_footer single_footer_address">
							<h4>Our Address</h4>
							<p><a href="https://goo.gl/maps/UHXini2ncEzywaJE9" target="_blank">4th Floor, #88, 27th Main Road, HSR Layout, Bangalore - 560102</a></p>
						<a href="tel:1800 123 002 002">1800 123 002 002 </a><br/>
							<a href="mailto:info@jackfruithomz.com">info@jackfruithomz.com</a>
							<p></p>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="single_footer single_footer_address">
							<h4>Get Instant Call Back</h4>
							<div class="signup_form">							
								<form action="sub.php" method="POST" class="subscribe">
									<input type="tel" name="mobile" class="subscribe__input" placeholder="Enter Mobile Number">
									<button type="submit" name="submit1" class="subscribe__btn"><i class="fa fa-paper-plane-o"></i></button>
								</form>
							</div>
						</div>
						<div class="social_profile">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
								<!--<li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
							</ul>
						</div>							
					</div><!--- END COL -->			
				</div><!--- END ROW -->	
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<p class="copyright">Copyright © 2020 Jackfruithomz.</p>
					</div><!--- END COL -->					
				</div><!--- END ROW -->					
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->	
		 
		<!-- Latest jQuery -->
			<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="assets/bootstrap/js/bootstrap.js"></script>
			<script src="assets/js/popper.min.js"></script>
		<!-- modernizer JS -->		
			<script src="assets/js/modernizr-2.8.3.min.js"></script>																		
		<!-- ripples JS -->				
			<script src="assets/js/ripples-min.js"></script>			
		<!-- jquery nav JS -->		
			<script src="assets/js/jquery.nav.js"></script>
		<!-- jquery smooth-scroll JS -->
			<script src="assets/js/smooth-scroll.js"></script>		
		<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>							
		<!-- scrolltopcontrol js -->
			<script src="assets/js/scrolltopcontrol.js"></script>						
		<!-- MAGNIFICANT JS -->
			<script src="assets/js/jquery.magnific-popup.min.js"></script>		
		<!-- Venobox JS -->	
			<script src="assets/js/venobox.min.js"></script>															
		<!-- stellar js -->
			<script src="assets/js/jquery.stellar.min.js"></script>	
		<!-- WOW - Reveal Animations When You Scroll -->
			<script src="assets/js/wow.min.js"></script>			
		<!-- form-contact js -->
			<script src="assets/js/form-contact.js"></script>								
		<!-- scripts js -->
			<script src="assets/js/scripts.js"></script>
    </body>
</html>