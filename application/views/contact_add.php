
<!DOCTYPE html> 
<html lang = "en">
   <head> 
	<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/modernizr-2.6.2.min.js"></script>	
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
    <script type="text/javascript">
		var centreGot = false;
	</script>
	<?php echo $map['js']; ?>
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
								<li><a href="about.html">About</a></li>
								<li><a href="<?=base_url()?>contact_add">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(<?php echo base_url(); ?>images/c4.jpeg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Contact Us</h1>
							<p>Made with love by the fine folks at <a href="">UTS Students</a></p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<br>
		<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
		<div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Contact US</h3>
                  </div>
		  <div class="panel-body">				 
			<div id="body">
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
			<?php
            echo form_open('contact/add_contact');
			echo "<fieldset>";
			echo "<div class='form-group'>";
			echo form_error('name','<span style="color:red;" class="error">','</span>'); 
            echo form_input(array('id'=>'name','name'=>'name','placeholder'=>"Name",'class'=>"form-control")); 
			echo "</div>";
            echo "<br/>"; 
			echo "<div class='form-group'>";
			echo form_error('email','<span style="color:red;" class="error">','</span>');
            echo form_input(array('id'=>'email','name'=>'email','type'=>'email','placeholder'=>"Please Enter Email",'class'=>"form-control")); 
			echo "</div>";
            echo "<br/>"; 
			echo "<div class='form-group'>";
			echo form_error('address','<span style="color:red;" class="error">','</span>');
            echo form_input(array('id'=>'address','name'=>'address','placeholder'=>"Please Enter Address",'class'=>"form-control")); 
			echo "</div>";
            echo "<br/>"; 
			echo "<div class='form-group'>";
            echo form_input(array('id'=>'city','name'=>'city','placeholder'=>"Please Enter City",'class'=>"form-control")); 
			echo "</div>";
            echo "<br/>"; 
			echo "<div class='form-group'>";
            echo form_input(array('id'=>'state','name'=>'state','placeholder'=>"Please Enter State",'class'=>"form-control")); 
			echo "</div>";
            echo "<br/>";
			echo "<div class='form-group'>";			
			echo form_error('feedback','<span  style="color:red;" class="error">','</span>');
            echo form_textarea(array('id'=>'feedback','name'=>'feedback','placeholder'=>"Please Enter Feedback",'class'=>"form-control")); 
			echo "</div>";
            echo "<br/>";
            echo form_submit(array('id'=>'submit','value'=>'Submit','class'=>"btn btn-lg btn-success btn-block")); 
			echo "</fieldset>";
            echo form_close(); 
         ?> 
		</div>
		</div>
		</div></div></div></div>
		<!-- Google Map -->
		<div>
			<?php echo $map['html']; ?>
		</div>
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
