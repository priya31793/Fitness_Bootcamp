<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
	  	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Students Example</title> 
	    <link rel = "stylesheet" type = "text/css"  href = "<?php echo base_url(); ?>css/style.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/mobiles.css">
		<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/mobile.js"></script>
   </head>
	
   <body> 
   <div id="header">
		<h1><a href="index.html">Boot Camp <span> Gym</span></a></h1>
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
				<a href="../stud/add_view">Classes</a>
			</li>
			<li>
				<a href="view">View</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h2>Update Personal Info</h2> 		
       <?php 
            echo form_open('Stud_controller/update_student'); 
            echo form_hidden('id',$records[0]->id);
			echo "<label for='Name'>";
			echo "	<span>Name</span>";
			echo form_error('name','<span class="error">','</span>'); 
			echo form_input(array('id'=>'name','name'=>'name','value'=>$records[0]->name)); 
			echo "</label>";	
            echo "<br/>";
            echo "<label for='Email'>";
			echo "	<span>Email</span>";
			echo form_error('email','<span class="error">','</span>'); 
            echo form_input(array('id'=>'email','name'=>'email','value'=>$records[0]->email));
			echo "</label>";		
			echo "<br/>";
			echo "<label for='Address'>";
			echo "	<span>Address</span>";
			echo form_error('address','<span class="error">','</span>');
			echo form_input(array('id'=>'address','name'=>'address','value'=>$records[0]->address));			
			echo "</label>";
			echo "<br/>";
			echo "<label for='City'>";
			echo "	<span>City</span>";
			echo form_error('city','<span class="error">','</span>');		
			echo form_input(array('id'=>'city','name'=>'city','value'=>$records[0]->city)); 
			echo "</label>";
			echo "<br/>";
			echo "<label for='State'>";
			echo "	<span>State</span>";
			echo form_error('state','<span class="error">','</span>');						
			echo form_input(array('id'=>'state','name'=>'state','value'=>$records[0]->state)); 
			echo "</label>";
			echo "<br/>";
			echo form_submit(array('id'=>'submit','value'=>'Update')); 
			echo form_close();
         ?> 	
 </div>
   </body>
	
</html>