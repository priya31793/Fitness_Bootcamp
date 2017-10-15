<section id="contact" class="section contact">
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
						<li><i class="icon-map-marker"></i>Jamison Park, South Penrith</li>
						<li><i class="icon-phone"></i>+61423 392 114</li>
						<li><i class="icon-envelope"></i>DBfitness1587@gmail.com</li>
						<li><i class="icon-globe2"></i><a href="#">www.dbfitness.com</a></li>
					</ul>
				</div>
				<div class="col-md-4 animate-box">
					<h3 class="section-title">Drop us a line</h3>
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
				echo form_open('user/add_contact#contact');
				echo "<fieldset>";
				echo "<div class='form-group'>";
				echo form_error('name','<span style="color:red;" class="error">','</span>'); 
				echo form_input(array('id'=>'name','name'=>'name','value'=>'','placeholder'=>"Name",'class'=>"form-control")); 
				echo "</div>";
				echo "<br/>"; 
				echo "<div class='form-group'>";
				echo form_error('email','<span style="color:red;" class="error">','</span>');
				echo form_input(array('id'=>'email','name'=>'email','type'=>'email','placeholder'=>"Please Enter Email",'class'=>"form-control")); 
				echo "</div>";
				echo "<br/>"; 
				echo"<div class='form-group' id='locationField'>";
				echo form_error('address','<span style="color:red;" class="error">','</span>');
				echo form_input(array('id'=>'autocomplete','name'=>'address','type'=>'text','onFocus'=>'geolocate()','placeholder'=>"Please Enter address",'class'=>"form-control")); 
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
		<div class="row copy-right">
			<div class="col-md-6 col-md-offset-3 text-center">
				<p class="fh5co-social-icons">
					<a href="https://twitter.com/dbfitness7"><i class="icon-twitter2"></i></a>
					<a href="https://www.facebook.com/DBfitness-1662780963766595/?ti=as"><i class="icon-facebook2"></i></a>
					<a href="#"><i class="icon-instagram"></i></a>
					<a href="#"><i class="icon-dribbble2"></i></a>
					<a href="https://www.youtube.com/user/bodybuildingcomvideo"><i class="icon-youtube"></i></a>
				</p>
				<p>Copyright 2017 <a href="#">DB Fitness</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://uts.com/" target="_blank">UTS Student</a> </p>
			</div>
		</div>
	</div>
</div>
</footer>
</section>
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
<!-- Main JS  -->
<script src="<?=base_url()?>js/main.js"></script>
<!-- Search Box  -->
<script src="<?=base_url()?>js/search.js"></script>
<!-- Location Autocomplete -->
<?php $this->load->view('location'); ?> 
</body>
</html>
