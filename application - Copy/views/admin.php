<!-- Start: Check User Session -->
<?php
	$user_id=$this->session->userdata('user_id');
	if(!$user_id){
	  redirect('user/login_view');
	}
?>
<!-- Start: Header -->
<?php $this->load->view('header'); ?>
<!-- End: Header -->
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
								<!-- Admin Email ID -->
								<li><a href="#"><?php echo $this->session->userdata('user_email');  ?></a></li>
								<!-- Logout -->
								<li><a class="btn btn-primary" href="<?php echo base_url('user/user_logout');?>" >  Logout</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
<!-- End: Menu -->
<!-- Start: Welcome Page -->
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
</div>
<!-- End: Welcome Page -->
<div class="container">
	<!-- container class is used to centered  the body of the browser with some decent width-->
	<div class="row">
	<!-- row class is used for grid system in Bootstrap-->
	<br>
	<div id="body">
		<h2>Enquiry View</h2>
		<!-- Start: Search Box -->
		<div class="input-group margin-bottom-sm">
			<span class="input-group-addon"><i class="fa fa-search"></i></span>
			<input type="text" id="search" onkeyup="myFunction()"  placeholder="Search for names.." title="Type in a name">
		</div>
		<!-- End: Search Box -->
		<!-- Start: Contact View -->
		<?php 
			echo form_open('user/admin_view');
			echo "<table border='0' cellpadding='4' id='table' cellspacing='0' width=100%>";
			$i = 1; 
			echo "<tr>"; 
			echo "<td><b>S.No</b></td>"; 
			echo "<td><b>Name</b></td>";
			echo "<td><b>Email</b></td>";
			echo "<td><b>Address</b></td>"; 
			echo "<td><b>Feedback</b></td>";
			echo "<td><b>Edit</b></td>"; 
			echo "<td><b>Delete</b></td>"; 
			echo "</tr>"; 
			if(!empty($records))
			{
			  foreach($records as $r) // user is an object.
			  {	
			   echo "<tr>"; 
			   echo "<td>".$i++."</td>"; 
			   echo "<td>".$r->name."</td>"; 
			   echo "<td>".$r->email."</td>"; 
			   echo "<td>".$r->address."</td>";
			   echo "<td>".$r->feedback."</td>"; 
			   echo "<td><a href = '".base_url()."contact_view/edit/".$r->id."'><i class='fa fa-edit'></i></a></td>"; 
			   echo "<td><a href = '".base_url()."contact_view/delete/".$r->id."'><i class='fa fa-trash'></i></a></td>"; 
			   echo "</tr>"; 
			  } 
			}
			echo " </table>";
			echo form_close();
		?>
		<!-- End: Contact View -->
		<br><br>
		</div>
	</div>
</div>
</div>
</div>
<!-- Start: Social Media Sites -->
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
<!-- End: Social Media Sites -->
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
