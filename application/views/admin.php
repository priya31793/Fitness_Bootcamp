<?php
$user_id=$this->session->userdata('user_id');
if(!$user_id){
  redirect('user/login_view');
}
?>
<?php $this->load->view('header'); ?>
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
 <div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="login.php">DB &nbsp;<span>Fitness</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="<?=base_url()?>user/login_user"></a>
								</li>
								<li ><a href=""><?php echo $this->session->userdata('user_email');  ?></a></li>
								<li><a class="btn btn-primary" href="<?php echo base_url('user/user_logout');?>" >  Logout</a>
								</li>
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
							<h1 class="text-center"><?php echo $this->session->userdata('user_name'); ?></h1>
							
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		
		<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
		<div class="row"><!-- row class is used for grid system in Bootstrap-->
          <br>
      
		  
	<div id="body">
		<h2>Enquiry View</h2>
		<input type="text" id="search" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
         <?php 
		 
            echo form_open('user/admin_view');
			echo "<table border='0' cellpadding='4' id='table' cellspacing='0' width=100%>";
            $i = 1; 
            echo "<tr>"; 
            echo "<td>S.No</td>"; 
            echo "<td>Name</td>";
            echo "<td>Email</td>";
            echo "<td>Address</td>"; 
            
            echo "<td>Feedback</td>";
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
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
			   echo "<td><a href = '".base_url()."contact_view/edit/".$r->id."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."contact_view/delete/".$r->id."'>Delete</a></td>"; 
               echo "</tr>"; 
            } 
	}
			echo " </table>";
			echo form_close();
         ?>
		<br><br>
		</div></div></div>
<script>
	function myFunction() {
	  var input, filter, table, tr, td, i;
	  input = document.getElementById("search");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("table");
	  tr = table.getElementsByTagName("tr");
	  for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[1];
		if (td) {
		  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
			tr[i].style.display = "";
		  } else {
			tr[i].style.display = "none";
		  }
		}       
		}
	}
	
	
</script>
<!-- Footer -->
<?php $this->load->view('footer'); ?> 
