
<?php 
	header('Content-Type: application/json');

  if(isset($_GET['user_id'])){
  	$var = $_GET['user_id'];
  	  $con=mysqli_connect("localhost","root","","test");//change in database if upload at server.
	  if (mysqli_connect_errno()){
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  $sql="select * from user where user_id = $var";
	if($result = mysqli_query($con, $sql)){
	    if(mysqli_num_rows($result) > 0){
	    	while($row = mysqli_fetch_array($result)){
	    		echo json_encode($row, JSON_PRETTY_PRINT);
	    	}
	    }
	}
  }
?>