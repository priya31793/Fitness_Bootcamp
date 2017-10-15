<!-- Start Header -->
  <?php $this->load->view('header'); ?> 
<!-- End Header -->
  <div id="fh5co-wrapper">
		<div id="fh5co-page">
<!-- Start: Menu -->
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="<?=base_url()?>home">DB &nbsp;<span>Fitness</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="<?=base_url()?>home"><b>Home</b></a>
								</li>
								<li><a href="<?=base_url()?>user#contact"><b>Contact</b></a></li>
								<li class="active"><a href="<?=base_url()?>user"><b>Register </b></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
<!-- End: Menu -->
<!-- Start: Header Background -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image:url(<?php echo base_url(); ?>images/register.jpg);">
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
<!-- End: Header Background -->
<span style="background-color:red;">
  <div class="container">
  <!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row">
	  <!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4">
		  <!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Registration</h3>
                  </div>
                  <div class="panel-body">
				  <!--Start: Form Validation -->
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
				  <!--End: Form Validation -->
				  <!-- Start: User Registration -->
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
							 <input class="form-control" placeholder='10 Digit Mobile No.' name="user_mobile"  value="<?=set_value('user_mobile')?>">
						  </div>
							<input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >
					  </fieldset>
				  </form>
				  <!-- End: User Registration -->
				  <!-- Start: Loading Login Page -->
				  <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">Login here</a></center><!--for centered text-->
                  <!-- End: Loading Login Page -->
				  </div>
              </div>
          </div>
      </div>
  </div>
</span>
<!-- Start: Footer -->
<?php $this->load->view('footer'); ?>
<!-- End: Footer --> 