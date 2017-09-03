
<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
	  	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Students Example</title> 
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/mobiles.css">
		<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/mobile.js"></script>
   </head>
	
   <body> 
   <div id="header">
		<h1><a href="index.html">Boot Camp <span> Gym</span></a></h1>
		<ul id="navigation">
			<li>
				<a href="add_view">Home</a>
			</li>
			<li>
				<a href="about.html">About</a>
			</li>
			<li>
				<a href="../index.php/stud/add_view">Classes</a>
				<ul>
					<li>
						<a href="instructors.html">Instructors</a>
					</li>
				</ul>
			</li>
			<li class="current">
				<a href="add_view">Contact</a>
			</li>
			<li>
				<a href="view">View</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h2>Contact</h2>
			<?php if (isset($message)) { ?>
				<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
			<?php } ?>		
		<?php
            echo form_open('Stud_controller/add_student');
			echo "<label for='Name'>";
			echo "	<span>Name</span>";
			echo form_error('name','<span class="error">','</span>'); 
            echo form_input(array('id'=>'name','name'=>'name','placeholder'=>"Please Enter Name")); 
			echo "</label>";
            echo "<br/>"; 
			echo "<label for='email'>";
			echo "	<span>Email</span>";
			echo form_error('email','<span class="error">','</span>');
            echo form_input(array('id'=>'email','name'=>'email','type'=>'email','placeholder'=>"Please Enter Email")); 
			echo "</label>";
            echo "<br/>"; 
			echo "<label for='Address'>";
			echo "	<span>Address</span>";
			echo form_error('address','<span class="error">','</span>');
            echo form_input(array('id'=>'address','name'=>'address','placeholder'=>"Please Enter Address")); 
			echo "</label>";
            echo "<br/>"; 
			echo "<label for='City'>";
			echo "	<span>City</span>";
            echo form_input(array('id'=>'city','name'=>'city','placeholder'=>"Please Enter City")); 
			echo "</label>";
            echo "<br/>"; 
			echo "<label for='State'>";
			echo "	<span>State</span>";
            echo form_input(array('id'=>'state','name'=>'state','placeholder'=>"Please Enter State")); 
			echo "</label>";
            echo "<br/>"; 
			echo "<label for='Feedback'>";
			echo "	<span>Message</span>";
			echo form_error('feedback','<span class="error">','</span>');
            echo form_textarea(array('id'=>'feedback','name'=>'feedback','placeholder'=>"Please Enter Feedback")); 
			echo "</label>";
            echo "<br/>";
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?> 
		 
		</div>
		<div id="footer">
		<div>
			<span>UTS Sydney, Australia</span>
			<p>
				&copy; 2017 by Boot Camp &amp; Gym. All rights reserved.
			</p>
		</div>
		<div id="connect">
			<a href="" id="facebook" target="_blank">Facebook</a>
			<a href="" id="twitter" target="_blank">Twitter</a>
			<a href="" id="googleplus" target="_blank">Google&#43;</a>
			<a href="" id="pinterest" target="_blank">Pinterest</a>
		</div>
	</div>
   </body>
	
</html>
