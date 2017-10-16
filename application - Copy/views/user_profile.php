<!-- Check User Session -->
<?php
	$user_id=$this->session->userdata('user_id');
	if(!$user_id){
	  redirect('user/login_view');
	}
?>
<!-- Start: Header -->
<?php $this->load->view('header'); ?>
<!-- End: Header -->
<style>
/* CSS for responsive iframe */
/* ========================= */

/* outer wrapper: set max-width & max-height; max-height greater than padding-bottom % will be ineffective and height will = padding-bottom % of max-width */
#Iframe-Family-History-Conference {
  max-width: 600px;
  max-height: 100%; 
  overflow: hidden;
}
#Iframe-Google-Calendar {
  max-height: 600px;
  max-width: 800px;
  overflow: hidden;
}

/* inner wrapper: make responsive */
.responsive-wrapper {
  position: relative;
  height: 0;    /* gets height from padding-bottom */
  
  /* put following styles (necessary for overflow and scrolling handling on mobile devices) inline in .responsive-wrapper around iframe because not stable in CSS:
    -webkit-overflow-scrolling: touch; overflow: auto; */
  
}
 
.responsive-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  
  margin: 0;
  padding: 0;
  border: none;
}

/* padding-bottom = h/w as % -- sets aspect ratio */
/* YouTube video aspect ratio */
.responsive-wrapper-wxh-650x315 {
  padding-bottom: 56.25%;
}
.responsive-wrapper-wxh-600x480 {
  padding-bottom: 80%;
}
.responsive-wrapper-padding-bottom-75pct {
  padding-bottom: 75%;
}

/* general styles */
/* ============== */
.set-border {
  border: 5px inset #4f4f4f;
}
.set-box-shadow { 
  -webkit-box-shadow: 4px 4px 14px #4f4f4f;
  -moz-box-shadow: 4px 4px 14px #4f4f4f;
  box-shadow: 4px 4px 14px #4f4f4f;
}
.set-padding {
  padding: 40px;
}
.set-margin {
  margin: 30px;
}
.center-block-horiz {
  margin-left: auto !important;
  margin-right: auto !important;
}

</style>
 <div id="fh5co-wrapper">
	<div id="fh5co-page">
<!-- Start: Menu -->
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="login.php">DB &nbsp;<span>Fitness</span></a></h1>
						
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
<!-- End: Menu -->

<!-- Start: Welcome Page -->
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
    </div>
<!-- End: Welcome Page -->
<!-- Start: Calculate BMI -->
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
						<!-- Start: Scheduled Content -->
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
							<!-- END scheduled content -->
						</div>
					</div>
				</div>
			<br>
<!-- End: BMI Calculator -->

<!-- Start: iFrame Video -->
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="heading-section text-center animate-box">
					<h2>Video Series</h2>
				</div>
			</div>
		</div>
		<div class="col-md-6 animate-box" style="">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/hI8oHhmuWkc" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 animate-box"><iframe width="560" height="315" src="https://www.youtube.com/embed/ieyzL5OaPZk" frameborder="0" allowfullscreen></iframe>
				</br></br></br>
		</div>
<!-- End: iFrame Video -->
<!-- Start: Calender View -->
		<div class="row">
			<div class="">
				<div class="heading-section text-center animate-box">
					<h2>DB Fitness Calender</h2>
				</div>
				<div id="Iframe-Google-Calendar" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
				<div class="responsive-wrapper 
				 responsive-wrapper-padding-bottom-75pct"
				 style="-webkit-overflow-scrolling: touch; overflow: auto;">
				<iframe src="https://calendar.google.com/calendar/embed?dbfitness1587@gmail.com&ctz=Australia"> 
				</iframe>
			</div>
		</div>
		</div>
		</div>		
<!-- End: Calender View -->
    </div>
  </div>
</div>
<!-- Start: Footer -->
<?php $this->load->view('footer'); ?> 
<!-- End: Footer -->
