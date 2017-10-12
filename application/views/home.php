<?php $this->load->view('header'); ?> 
  <div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="<?=base_url()?>home">DB &nbsp;<span>Fitness</span></a></h1>
						<!-- Start Menu -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a data-scroll href="<?=base_url()?>home">Home</a>
								</li>
								<li><a data-scroll href="#home">About</a></li>
								<li>
									<a data-scroll href="#program" class="fh5co-sub-ddown">Program</a>
								</li>
								<li>
									<a data-scroll href="#class">Schedule</a>
								</li>
								<li><a data-scroll href="#trainer">Trainers</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- Header -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image:url(<?php echo base_url(); ?>images/5.jpg);">
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
								<p><span>Created with <i class="icon-heart3"></i> by the fine folks at <a href="" class="fh5co-site-name">UTS Students</a></span></p>
								<span><a class="btn btn-primary" href="<?=base_url()?>user/login_view">Start Your Journey</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header ends -->
		<!-- About US -->
		<section id="home" class="section home">
		<div id="fh5co-trainer-section" class="fh5co-lightgray-section">
			<div class="container">
					<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div style="margin-top:40px;" class="heading-section text-center animate-box">
							<h2>DB Fitness</h2>
						</div>
					</div>
				</div>
					<div class="col-md-12 col-md-offset-0 animate-box">
						<p>
						If you want to get in shape fast and stay in shape,then this could be just for you
						My name is da Buckley. I own DBFITNESS bootcamps and for the last 3 years I have been traveling around America training people and helping them get a fit lifestyle 
						Our workouts are quick fun inexpensive extremely effective and only take about 45mins and well have you looking amazing in no time no matter what shape you are in now
						</p>
						<blockquote>
						<p>
						WITH OUR WORKOUTS YOU WILL <br>
						* have fun<br>
						* feel great <br>
						* lose weight<br>
						* tone up<br>
						* flatten you stomach <br>
						* and much more	<br>				  
						</p>
						</blockquote>
						<p>
						It is important to you that you get the results you want and deserve and have fun while getting them workouts will vary to keep it fun and you body guessing and our workouts are extremely affordable for everyone 
						There is absolutely no reason to pay such high cost for a personal trainer when you can get better results at a much lower cost  so come join DBFITNESS and lets get results together
						</p>
					</div>
				</div>
				</div>
			</section>
			<!-- About us ends -->
			<!-- Class Schedule starts -->
			<section id="class" class="section class">
			<div id="fh5co-schedule-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Class Schedule</h2>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="schedule">
							<li><a href="#" class="active" data-sched="monday">Monday</a></li>
							<li><a href="#" data-sched="tuesday">Tuesday</a></li>
							<li><a href="#" data-sched="wednesday">Wednesday</a></li>
							<li><a href="#" data-sched="thursday">Thursday</a></li>
							<li><a href="#" data-sched="friday">Friday</a></li>
						</ul>
					</div>
					<div class="row text-center">
						<div class="col-md-12 schedule-container">
							<!-- START sched-content -->
							<div class="schedule-content active" data-day="monday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/fit-yoga.svg" alt="">
										
										<h3>"Yoga Program"</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/fit-dumbell.svg" alt="Cycling">
										<h3>Kick your Booty</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/cardio.jpeg" alt="Cycling">
										<h3>Cardio Circuit</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/nutri.jpeg" alt="">
										<h3>Nutrition</h3>
										<span>Da Buckley</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->
							<!-- Start sched-content -->
							<div class="schedule-content" data-day="tuesday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/fit-dumbell.svg" alt="Cycling">
										<h3>HIIT Workout</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/fit-yoga.svg" alt="">
										<h3>Yoga Programs</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/cardio.jpeg" alt="">
										<h3>Cardio Circuit</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/nutri.jpeg" alt="Cycling">
										<h3>Nutrition</h3>
										<span>Da Buckley</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->
							<!-- Start sched-content -->
							<div class="schedule-content" data-day="wednesday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/fit-yoga.svg" alt="">
										<h3>Yoga Programs</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/fit-dumbell.svg" alt="Cycling">
										<h3>Kick your Booty</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/nutri.jpeg" alt="Cycling">
										<h3>Nutrition</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/cardio.jpeg" alt="">
										<h3>Cardio Circuit</h3>
										<span>Da Buckley</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->
							<!-- Start sched-content - Thursday-->
							<div class="schedule-content" data-day="thursday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/fit-dumbell.svg" alt="Cycling">
										<h3>HIIT Workout</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/fit-yoga.svg" alt="">
										<h3>Yoga Programs</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/cardio.jpeg" alt="">
										<h3>Cardio Circuit</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/nutri.jpeg" alt="Cycling">
										<h3>Nutrition</h3>
										<span>Da Buckley</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->
							<!-- Start sched-content - Friday-->
							<div class="schedule-content" data-day="friday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/fit-yoga.svg" alt="">
										
										<h3>Yoga Programs</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/fit-dumbell.svg" alt="Cycling">
										
										<h3>Kick your Booty</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/nutri.jpeg" alt="Cycling">
										<h3>Nutrition</h3>
										<span>Da Buckley</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="<?php echo base_url(); ?>images/cardio.jpeg" alt="">
										
										<h3>Cardio Circuit</h3>
										<span>Da Buckley</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->
						</div>
					</div>
				</div>
			</div>
		</div>
		</section >
		<!-- Start: Commit to be fit -->
		<div class="fh5co-parallax" style="background-image: url(<?php echo base_url(); ?>images/f2.jpeg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Commit To Be Fit</h1>
							<p>Made with love by the fine folks of <a href="">UTS Students</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end: commit to be fit -->
		<!-- start: programs -->
		<section id="program" class="section program">
		<div id="fh5co-programs-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Our Programs</h2>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="<?php echo base_url(); ?>images/fit-dumbell.svg" alt="Cycling">
							<h3>HIIT Workout</h3>
							<p>
							HIGH INTENSITY INTERVAL training (HIIT) designed to torch maximum calories in minimum amount of time.
							</p>
							<span><a href="<?=base_url()?>user/login_view" class="btn btn-default">Register</a></span>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="<?php echo base_url(); ?>images/cardio.jpeg" alt="">
							<h3>Cardio Circuit</h3>
							<p>The 30-minute workout will get your heart rate up while strengthening your body without the use of equipment.
							</p>
							<span><a href="<?=base_url()?>user/login_view" class="btn btn-default">Register</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="<?php echo base_url(); ?>images/fit-swimming.svg" alt="">
							<h3>Kick your Booty</h3>
							<p>Quick, intense bursts of exercise, followed by short, active, recovery periods.
							</p>
							<span><a href="<?=base_url()?>user/login_view" class="btn btn-default">Register</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="<?php echo base_url(); ?>images/nutri.jpeg" alt="Cycling">
							<h3>Nutrition</h3>
							<p>Customised nutritional advice on dietary habits</p>
							<span><a href="<?=base_url()?>user/login_view" class="btn btn-default">Register</a></span>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="<?php echo base_url(); ?>images/abs.jpeg" alt="">
							<h3>Abs and Core</h3>
							<p>Get rid of that stubborn belly fat and craft your chiselled abs.</p>
							<span><a href="<?=base_url()?>user/login_view" class="btn btn-default">Register</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="<?php echo base_url(); ?>images/fit-yoga.svg" alt="">
							<h3>Yoga Programs</h3>
							<p> Train your Mind, Body and Soul with simple meditation </p>
							<span><a href="<?=base_url()?>user/login_view" class="btn btn-default">Register</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- end:programs -->
		<!-- start: About Trainer -->
		<section id="trainer" class="section trainer">
		<div id="fh5co-team-section" class="fh5co-lightgray-section">
			<div class="container">
			<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div style="margin-top:40px;" class="heading-section text-center animate-box">
							<h2>Meet Our Trainer</h2>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-md-offset-0 animate-box">
					<p>I have been a personal trainer since 2013 I have worked at goodlife gym in Balwyn Melbourne from 2013-2014 I have also ran bootcamps in Balwyn from 2014-2015 under Adonis fitness I have traveled to nurture my craft and knowledge learning new tricks along the way I am a very passionate and caring trainer and know what I have to do to get the best results for my clients - Daniel Buckley
					</p>
				</div>
				<div class="row text-center">
					<div class="col-md-4 col-sm-6" style="margin-left:33%;">
						<div class="team-section-grid animate-box" style="background-image: url(<?php echo base_url(); ?>images/personnal.jpeg);">
							<div class="overlay-section">
								<div class="desc">
									<h3>Daniel Buckley</h3>
									<span>Personal Trainer</span>
									
									<p class="fh5co-social-icons">
										<a href="https://www.facebook.com/daniel.a.buckley.1?fref=ts"><i class="icon-facebook-with-circle"></i></a>
										<a href=" https://www.instagram.com/danielb_1587/?hl=en"><i class="icon-instagram-with-circle"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- END Trainer -->
		<!-- start: Offers -->
		<div class="fh5co-parallax" style="background-image: url(<?php echo base_url(); ?>images/4.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 fh5co-table">
						<div class="fh5co-intro fh5co-table-cell box-area">
							<div class="animate-box">
								<h1>Fitness Classes this summer</h1>
								<p>Pay now and get 25% Discount</p>
								<a href="<?=base_url()?>user/login_view" class="btn btn-primary">Become A Member</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end: offers -->
		<!-- start: Pricing plan -->
		<div id="fh5co-pricing-section" class="fh5co-pricing fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Pricing Plan</h2>
						</div>
					</div>
				</div>
				<div class="row" style="margin-left:10%;">
					<div class="pricing" style="width:90%" >
					<div class="col-md-6 animate-box">
						<div class="price-box animate-box">
							<h2 class="pricing-plan">Basic</h2>
							<div class="price"><sup class="currency">$</sup>15<small>/Session</small></div>
							<ul class="classes">
								<li>HIIT Workout</li>
								<li class="color">Cardio Circuit</li>
								<br>
								<br>
								<li class=""></li>
								
								<li class=""></li>
								<li></li>
							</ul>
							<a href="<?=base_url()?>user/login_view" class="btn btn-default">Register</a>
						</div>
					</div>

					<div class="col-md-6 animate-box">
						<div class="price-box animate-box popular">
							<h2 class="pricing-plan pricing-plan-offer">Intermediate <span>Best Offer</span></h2>
							<div class="price"><sup class="currency">$</sup>20<small>/Session</small></div>
							<ul class="classes">
								<li>HIIT Workout</li>
						       <li class="color">Cardio Circuit</li>
								<li >Kick your Booty</li>
								<li class="color">Nutrition</li>
								<br>
							</ul>
							<a href="<?=base_url()?>user/login_view" class="btn btn-select-plan btn-sm">Register</a>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<!-- END Pricing plan -->
		<!-- Google map -->
		<iframe
				width="600"
				height="450"
				frameborder="0" style="border:0; width:100%;"
				src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB8qHRtj6PEF2PtBhK9XP6jxqaQTsjvRHM
				&q=UTS,Syney" allowfullscreen>
		</iframe>
		<!-- END Google map -->


<!-- start Footer -->
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
								<li><i class="icon-map-marker"></i>University of Technology Sydney</li>
								<li><i class="icon-phone"></i>+ 1235 2355 98</li>
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
            echo form_open('user/add_contact');
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
			echo"<div class='form-group' id='locationField'>";
			echo form_error('address','<span style="color:red;" class="error">','</span>');
			echo form_input(array('id'=>'autocomplete','name'=>'address','type'=>'text','onFocus'=>'geolocate()','placeholder'=>"Please Enter address",'class'=>"form-control")); 
			echo "</div>";
            echo "<br/>";
			//echo "<br/>";
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
	<!-- Main JS (Do not remove) -->
	<script src="<?=base_url()?>js/main.js"></script>
	
	<script>
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };
      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});
        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }
      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }
        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }
      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8qHRtj6PEF2PtBhK9XP6jxqaQTsjvRHM&libraries=places&callback=initAutocomplete"
        async defer></script>
  </body>
</html>
