
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
		<h1><a href="index.html">Boot &amp; Camp <span> Gym</span></a></h1>
		<ul id="navigation">
			<li>
				<a href="index.html">Home</a>
			</li>
			<li>
				<a href="about.html">About</a>
			</li>
			<li>
				<a href="classes.html">Classes</a>
				<ul>
					<li>
						<a href="instructors.html">Instructors</a>
					</li>
				</ul>
			</li>
			<li class="current">
				<a href="contact.html">Contact</a>
			</li>
			<li>
				<a href="blog.html">Blog</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h2>Contact</h2>
		<?php
            echo form_open('Stud_controller/add_student');
			echo "<label for='Name'>";
			echo "	<span>Name</span>";
            echo form_input(array('id'=>'name','name'=>'name')); 
			echo "</label>";
            echo "<br/>"; 
			echo "<label for='email'>";
			echo "	<span>Email</span>";
            echo form_input(array('id'=>'email','name'=>'email','type'=>'email','placeholder'=>"Please Enter Email")); 
			echo "</label>";
            echo "<br/>"; 
			echo "<label for='Address'>";
			echo "	<span>Address</span>";
            echo form_input(array('id'=>'address','name'=>'address')); 
			echo "</label>";
            echo "<br/>"; 
			echo "<label for='City'>";
			echo "	<span>City</span>";
            echo form_input(array('id'=>'city','name'=>'city')); 
			echo "</label>";
            echo "<br/>"; 
			echo "<label for='State'>";
			echo "	<span>State</span>";
            echo form_input(array('id'=>'state','name'=>'state')); 
			echo "</label>";
            echo "<br/>"; 
			echo "<label for='Feedback'>";
			echo "	<span>Message</span>";
            echo form_textarea(array('id'=>'feedback','name'=>'feedback')); 
			echo "</label>";
            echo "<br/>";
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?> 
		<?php if(isset($message))
			{
		?>
		<script>
		   alert('<?php  echo $message ?>');
		</script>
		<?php 
		}
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
			<a href="https://freewebsitetemplates.com/go/facebook/" id="facebook" target="_blank">Facebook</a>
			<a href="https://freewebsitetemplates.com/go/twitter/" id="twitter" target="_blank">Twitter</a>
			<a href="https://freewebsitetemplates.com/go/googleplus/" id="googleplus" target="_blank">Google&#43;</a>
			<a href="https://freewebsitetemplates.com/go/pinterest/" id="pinterest" target="_blank">Pinterest</a>
		</div>
	</div>
   </body>
	
</html>
