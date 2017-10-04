<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>

<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DB Fitness</title>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<!-- Animate.css -->
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/bootstrap.css">
	<!-- Superfish -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/superfish.css">
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/style.css">
	<!-- Modernizr JS -->
	<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/modernizr-2.6.2.min.js"></script>
  </head>
  <body>

  <div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="login.php">DB &nbsp;<span>Fitness</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="<?=base_url()?>user/login_user"></a>
								</li>
								<li ><a href="<?=base_url()?>user/profile.php"><?php echo $this->session->userdata('user_email');  ?></a></li>
								<li><a class="btn btn-primary" href="<?php echo base_url('user/user_logout');?>" >  Logout</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
  <!--<div class="wrapper">
<span id="usernav"><a href="#">Logout</a> - <a href="#">Settings</a> - <a href="#">My Profile<span><img src="" /></span></a></span>
</div>-->
  <!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(../images/f9.jpeg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Welcome <?php echo $this->session->userdata('user_name'); ?></h1>
						</div>
					</div>
				</div>
			</div>
    </div><!-- end: fh5co-parallax -->
		
    <div id="fh5co-schedule-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Calculate your Body Mass Index</h2>
						</div>
					</div>
				</div>
				<div style="margin-left:20%;">
					<iframe src="https://bmicalculatoraustralia.com/widgets/widget.php?t=720x300" width="720" height="300" frameborder="0"></iframe><p style=" font-family: sans-serif; font-size: 14px"> <a style="color: #009247;" href=""></a></p>
				</div>
				<br>
				
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>"Kick your Booty" Boot Camp</h2>
							<p>Complete each circuit as fast as you can withgood form & then continue to the next circuit. Repeat entire workout againif time permits.
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="row text-center">
						<div class="col-md-12 schedule-container">
							<div class="schedule-content active" data-day="sunday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?=base_url()?>images/fit-dumbell.svg" alt="Cycling">
										<h3>Circuit 1</h3>
										<span>50 air squats</span><br>
										<span>40 pushups</span><br>
										<span>30 second plank</span><br>
										<span>20 chair dips</span><br>
										<span>10 curtsy squats </span><br>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?=base_url()?>images/fit-yoga.svg" alt="">
										<h3>Circuit 2</h3>
										<span>50 burpees</span><br>
										<span>40 reverse lungs </span><br>
										<span>30 crossbody climbers</span><br>
										<span>20 high knees</span><br>
										<span>10 inchworms</span><br>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?=base_url()?>images/fit-cycling.svg" alt="">
										<h3>Circuit 3</h3>
										<span>50 jump squats</span><br>
										<span>40 triceps pushups</span><br>
										<span>30 bicycle crunches</span><br>
										<span>20 superman flies</span><br>
										<span>10 donkey kicks</span><br>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?=base_url()?>images/fit-boxing.svg" alt="Cycling">
										<h3>Circuit 4</h3>
										<span>50 alternating lunge jumps</span><br>
										<span>40 plie squats </span><br>
										<span>30 knees to elbows</span><br>
										<span>20 1 legged deadlift</span><br>
										<span>10 calms</span><br>
									</div>
								</div>
							</div>
							<!-- END sched-content -->
						</div>
			</div>
		</div>
		
		<br>
		<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Video Series</h2>
						</div>
					</div>
				</div>
				<div style="margin-left:20%;">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/hI8oHhmuWkc" frameborder="0" allowfullscreen></iframe>
				</div>
    </div>
  </div>
</div>
<footer>
	<div id="footer">
		<div class="container">
			<div class="row">
					<div class="col-md-4 animate-box">
						<h3 class="section-title">About Us</h3>
						<p>
						The objectives of DB Fitness are to promote and provide a diverse and exciting range of professionally-provided, affordable sporting and physical recreation participation opportunities for all of our members.
						With a focus on your health and wellbeing, our programs are designed to increase your personal health and fitness in a friendly environment.
						</p>
					</div>

					<div class="col-md-4 animate-box">
						<h3 class="section-title">Our Address</h3>
						<ul class="contact-info">
							<li><i class="icon-map-marker"></i>DB Fitness, Penrith, NSW</li>
							<li><i class="icon-phone"></i>+61 423 392 114</li>
							<li><i class="icon-envelope"></i>DBfitness1587@gmail.com</li>
							<li><i class="icon-globe2"></i><a href="#">www.dbfitness.com</a></li>
						</ul>
					</div>
					<div class="col-md-4 animate-box">
						<h3 class="section-title">Drop us a line</h3>
						<form class="contact-form">
							<div class="form-group">
								<label for="name" class="sr-only">Name</label>
								<input type="name" class="form-control" id="name" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="message" class="sr-only">Message</label>
								<textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
							</div>
						</form>
					</div>
				</div>
				<div class="row copy-right">
					<div class="col-md-6 col-md-offset-3 text-center">
						<p class="fh5co-social-icons">
							<a href="#"><i class="icon-twitter2"></i></a>
							<a href="https://www.facebook.com/DBfitness-1662780963766595/?ti=as"><i class="icon-facebook2"></i></a>
							<a href="#"><i class="icon-instagram"></i></a>
							<a href="#"><i class="icon-dribbble2"></i></a>
							<a href="#"><i class="icon-youtube"></i></a>
						</p>
						<p>Copyright 2018 <a href="#">DB Fitness</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://uts.com/" target="_blank">UTS Student</a> </p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
</div>
	<script src="<?=base_url()?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=base_url()?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url()?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=base_url()?>js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="<?=base_url()?>js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?=base_url()?>js/hoverIntent.js"></script>
	<script src="<?=base_url()?>js/superfish.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="<?=base_url()?>js/main.js"></script>
  </body>
</html>
