<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DB Fitness</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
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
						<h1 id="fh5co-logo"><a href="register.php">DB &nbsp;<span>Fitness</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="<?=base_url()?>home">Home</a>
								</li>
								<li>
									<a href="classes.html" class="fh5co-sub-ddown">Classes</a>
								</li>
								<li>
									<a href="schedule.html">Schedule</a>
								</li>
								<li><a href="trainer.html">Trainers</a></li>
								<li><a href="<?=base_url()?>about">About</a></li>
								<li><a href="<?=base_url()?>contact_add">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image:url(<?php echo base_url(); ?>images/home.jpg);">
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
								<p><span>The DB Fitness Centre offers a range of fitness and wellness services. Our Team provides and delivers high quality training and professionalism across all areas.</span></p>
								<span><a class="btn btn-primary" href="<?=base_url()?>user/login_view">Sign up/ Register</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
<span style="background-color:red;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Registration</h3>
                  </div>
                  <div class="panel-body">
				  <?php
			  $success_msg= $this->session->flashdata('success_msg');
			  $error_msg= $this->session->flashdata('error_msg');
			  if($success_msg){
				?>
				<div class="alert alert-success">
				  <?php echo $success_msg; ?>
				</div>
			  <?php
			  }
			  if($error_msg){
				?>
				<div class="alert alert-danger">
				  <?php echo $error_msg; ?>
				</div>
				<?php
			}
            ?>	
				  <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
					  <fieldset>
						  <div class="form-group">							  
						  <?php echo form_error('user_name','<span style="color:red;" class="error">','</span>')?>
							  <input class="form-control" placeholder="Name" name="user_name" value="<?=set_value('user_name')?>" type="text" autofocus>
						  </div>

						  <div class="form-group">
						     <?php echo form_error('user_email','<span style="color:red;" class="error">','</span>')?>
							<input class="form-control" placeholder="E-mail" value="<?=set_value('user_email')?>" name="user_email" type="email" autofocus>
						  </div>
						  <div class="form-group">
						  	 <?php echo form_error('user_password','<span style="color:red;" class="error">','</span>')?>
							  <input class="form-control" placeholder="Password" value="" name="user_password" type="password" value="">
						  </div>

						  <div class="form-group">
						  	  <?php echo form_error('user_age','<span style="color:red;" class="error">','</span>')?>
							  <input class="form-control" placeholder="Age" name="user_age" type="number" min=10 max=50 value="<?=set_value('user_age')?>">
						  </div>

						  <div class="form-group">
						  		<?php echo form_error('user_mobile','<span style="color:red;" class="error">','</span>')?>
							  <input class="form-control" placeholder="Mobile No" name="user_mobile" type="number" value="<?=set_value('user_mobile')?>">
						  </div>

						  <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >

					  </fieldset>
				  </form>
				  <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">Login here</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>
</span>

<!-- fh5co-blog-section -->
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
								<li><i class="icon-map-marker"></i>University of Technology Sydney</li>
								<li><i class="icon-phone"></i>+ 1235 2355 98</li>
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
							<p>Copyright 2017 <a href="#">DB Fitness</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://uts.com/" target="_blank">UTS Student</a> </p>
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
