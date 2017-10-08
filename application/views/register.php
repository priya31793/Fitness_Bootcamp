<?php $this->load->view('header'); ?>
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
<!-- Footer -->
<?php $this->load->view('footer'); ?> 