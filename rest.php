
<?php 
	header('Content-Type: application/json');

  if(isset($_GET['id'])){
  	$var = $_GET['id'];
  	  $con=mysqli_connect("localhost","root","","test");
	  if (mysqli_connect_errno()){
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  $sql="select * from contact where id = $var";
	if($result = mysqli_query($con, $sql)){
	    if(mysqli_num_rows($result) > 0){
	    	while($row = mysqli_fetch_array($result)){
	    		echo json_encode($row, JSON_PRETTY_PRINT);
	    	}
	    }
	}
  }
?>