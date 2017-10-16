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
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a data-scroll href="<?=base_url()?>home">Home</a></li>
							<li><a data-scroll href="#home">About</a></li>
							<li><a data-scroll href="#program" class="fh5co-sub-ddown">Program</a></li>
							<li><a data-scroll href="#class">Schedule</a></li>
							<li><a data-scroll href="#trainer">Trainers</a></li>
							<li><a data-scroll href="#contact">Contact</a></li>
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
<!-- End: Header Background -->
<!-- Start: About US -->
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
						WITH OUR WORKOUTS YOU WILL<br>
						* have fun<br>
						* feel great<br>
						* lose weight<br>
						* tone up<br>
						* flatten you stomach<br>
						* and much more<br>				  
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
<!-- End: About us -->
<!-- Start: Class Schedule -->
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
						<!-- Start: Scheduled content - Monday -->
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
						<!-- End Scheduled content - Monday -->
						<!-- Start: Scheduled content - Tuesday-->
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
						<!-- End: Scheduled content - Tuesday -->
						<!-- Start: Scheduled content - Wednesday -->
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
						<!-- End: Scheduled content - Wednesday -->
						<!-- Start: Scheduled content - Thursday-->
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
						<!-- End: Scheduled content - Thursday -->
						<!-- Start: Scheduled content - Friday -->
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
						<!-- End: Scheduled content -->
					</div>
				</div>
			</div>
		</div>
		</div>
	</section >
<!-- End: Class Schedule -->
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
<!-- End: Commit to be fit -->
<!-- Start: About Programs -->
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
							<p>HIGH INTENSITY INTERVAL training (HIIT) designed to torch maximum calories in minimum amount of time.</p>
							<span><a href="<?=base_url()?>user/login_view" class="btn btn-default">Register</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="<?php echo base_url(); ?>images/cardio.jpeg" alt="">
							<h3>Cardio Circuit</h3>
							<p>The 30-minute workout will get your heart rate up while strengthening your body without the use of equipment.</p>
							<span><a href="<?=base_url()?>user/login_view" class="btn btn-default">Register</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="<?php echo base_url(); ?>images/fit-swimming.svg" alt="">
							<h3>Kick your Booty</h3>
							<p>Quick, intense bursts of exercise, followed by short, active, recovery periods.</p>
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
<!-- End: About Programs -->
<!-- Start: Trainer Information -->
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
<!-- End: Trainer Information -->
<!-- Start: Offers -->
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
<!-- End: offers -->
<!-- Start: Pricing plan -->
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
								<li class="color">Cardio Circuit</li><br><br>
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
								<li class="color">Nutrition</li><br>
							</ul>
							<a href="<?=base_url()?>user/login_view" class="btn btn-select-plan btn-sm">Register</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End: Pricing plan -->
<!-- Start: Google map -->
	<iframe width="600" height="450" frameborder="0" style="border:0; width:100%;" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB8qHRtj6PEF2PtBhK9XP6jxqaQTsjvRHM &q=UTS,Syney" allowfullscreen></iframe>
<!-- End: Google map -->
<!-- Start: Footer -->
	<?php $this->load->view('footer'); ?> 
<!-- End: Footer -->
