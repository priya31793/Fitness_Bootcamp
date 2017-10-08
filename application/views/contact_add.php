<?php $this->load->view('header'); ?>
	<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <style>
      #locationField, #controls {
        position: relative;
        width: auto;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
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
			echo"<div class='form-group' id='locationField'>";
			echo form_input(array('id'=>'autocomplete','name'=>'address','type'=>'text','onFocus'=>'geolocate()','placeholder'=>"Please Enter address",'class'=>"form-control")); 
			echo "</div>";
            echo "<br/>";
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

<script type="text/javascript">
	var centreGot = false;
</script>
<?php echo $map['js']; ?>
<script>
  // This example displays an address form, using the autocomplete feature
  // of the Google Places API to help users fill in the information.

  // This example requires the Places library. Include the libraries=places
  // parameter when you first load the API. For example:
  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

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
<!-- Footer -->
<?php $this->load->view('footer'); ?> 
