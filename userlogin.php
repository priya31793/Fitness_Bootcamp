
<html>
<head>

</head>

<body>

<form name="loginform" action="" method="post">
<p>
Username
<input type="text" name="Username" required pattern="^[A-Za-z0-9]+">
</p>
<p>
Password</td>
<input type="password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
</p>
<input type="submit" name="submit1" value="login">

</form>

<?php

if(isset($_POST["submit1"]))
{
$p1=md5($_POST["Password"]);
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"test");
	$count=0;
	$res=mysqli_query($link,"select * from registration where username='$_POST[Username]' && password='$p1'");
	$count=mysqli_num_rows($res);
    if($count>0)
	{
	?>
	<script type="text/javascript">
	window.location="welcome.php";
	</script>
	<?php
	$_SESSION["firstname"]="abhishek";
	$_SESSION["lastname"]="gawande";
	
	}
	else
	{
	?>
	<script type="text/javascript">
	alert("Incorrect credentials");
	</script>
	<?php
	
	}

}

?>


</body>
</html>
