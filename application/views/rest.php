
<?php 
	header('Content-Type: application/json');

  if(isset($_GET['id'])){//get method implementation. 
  	$var = $_GET['id'];// varible declaration
  	  $con=mysqli_connect("localhost","root","","test");//database connection
	  if (mysqli_connect_errno()){
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  $sql="select * from contact where id = $var";
	if($result = mysqli_query($con, $sql)){
	    if(mysqli_num_rows($result) > 0){
	    	while($row = mysqli_fetch_array($result)){
	    		echo json_encode($row, JSON_PRETTY_PRINT);//result data json encode
	    	}
	    }
	}
  }
?>
