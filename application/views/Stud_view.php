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
		<h2>Contact View</h2>
         <?php 
			echo "<table border='1' cellpadding='4' cellspacing='0' width=100%>";
            $i = 1; 
            echo "<tr>"; 
            echo "<td>S.No</td>"; 
            echo "<td>Name</td>";
            echo "<td>Email</td>";
            echo "<td>Address</td>"; 
            echo "<td>City</td>"; 
            echo "<td>State</td>"; 
            echo "<td>Feedback</td>";
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            echo "</tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>"; 
			   echo "<td>".$r->name."</td>"; 
               echo "<td>".$r->email."</td>"; 
               echo "<td>".$r->address."</td>"; 
			   echo "<td>".$r->city."</td>"; 
			   echo "<td>".$r->state."</td>"; 
			   echo "<td>".$r->feedback."</td>"; 
			   echo "<td><a href = '".base_url()."index.php/stud/edit/".$r->id."'>Edit</a></td>"; 

               echo "<td><a href = '".base_url()."index.php/stud/delete/".$r->id."'>Delete</a></td>"; 
               echo "</tr>"; 
            } 
			echo " </table>";
         ?>
      
		</div>
   </body>
	
</html>