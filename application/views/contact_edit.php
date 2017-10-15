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

<!-- Start: Search box css -->
<style>
  * {
  box-sizing: border-box;
}

#search {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#table th, #table td {
  text-align: left;
  padding: 12px;
}

#table tr {
  border-bottom: 1px solid #ddd;
}

#table tr.header, #table tr:hover {
  background-color: #f1f1f1;
}
</style>
<!-- End: Search box css -->

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
								<li class="active"><a href="<?=base_url()?>user/login_user"></a></li>
								<li><a href="#"><?php echo $this->session->userdata('user_email');  ?></a></li>
								<li><a class="btn btn-primary" href="<?php echo base_url('user/user_logout');?>" >  Logout</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
<!-- End: Menu -->
<!-- Start: Login Info  -->
		<div class="fh5co-parallax" style="background-image: url(<?php echo base_url(); ?>images/c4.jpeg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center"><?php echo $this->session->userdata('user_name'); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div><br>
<!-- End: Login Info  -->	
	<div class="container">
	<!-- container class is used to centered  the body of the browser with some decent width-->
		<div class="row">
		<!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4">
		  <!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Update Contact</h3>
                  </div>
			  <div class="panel-body">				 
				<div id="body">	
				   <!-- End: Update Contact Page -->
				   <?php 
						echo form_open('user/update_contact'); 
						echo form_hidden('id',$records[0]->id);
						echo "<div class='form-group'>";			
						echo form_error('name','<span class="error">','</span>'); 
						echo form_input(array('id'=>'name','class'=>"form-control",'name'=>'name','value'=>$records[0]->name)); 
						echo "</div>";	
						echo "<br/>";
						echo "<div class='form-group'>";			
						echo form_error('email','<span class="error">','</span>'); 
						echo form_input(array('id'=>'email','class'=>"form-control",'name'=>'email','value'=>$records[0]->email));
						echo "</div>";		
						echo "<br/>";
						echo"<div class='form-group' id='locationField'>";
						echo form_error('address','<span class="error">','</span>');
						echo form_input(array('id'=>'autocomplete','name'=>'address','type'=>'text','onFocus'=>'geolocate()','value'=>$records[0]->address,'class'=>"form-control"));			
						echo "</div>";
						echo "<br/>";
						echo form_submit(array('id'=>'submit','value'=>'Update','class'=>"btn btn-lg btn-success btn-block")); 
						echo form_close();
					 ?> 	
				<!-- End: Update Contact Page -->
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
</div>
</div>
<!-- Start: Footer -->
<div class="row copy-right">
	<div class="col-md-6 col-md-offset-3 text-center">
		<p class="fh5co-social-icons">
			<a href="https://twitter.com/dbfitness7"><i class="icon-twitter2"></i></a>
			<a href="https://www.facebook.com/DBfitness-1662780963766595/?ti=as"><i class="icon-facebook2"></i></a>
			<a href="#"><i class="icon-instagram"></i></a>
			<a href="#"><i class="icon-dribbble2"></i></a>
			<a href="https://www.youtube.com/watch?v=DPhh8voLrC8"><i class="icon-youtube"></i></a>
		</p>
		<p>Copyright 2017 <a href="#">DB Fitness</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://uts.com/" target="_blank">UTS Student</a> </p>
	</div>
</div>
<!-- End: Footer -->
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
<!-- Main JS  -->
<script src="<?=base_url()?>js/main.js"></script>
<!-- Search Box  -->
<script src="<?=base_url()?>js/search.js"></script>
<!-- Location Autocomplete -->
<?php $this->load->view('location'); ?> 
</body>
</html>
