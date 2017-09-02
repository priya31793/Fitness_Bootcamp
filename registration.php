<html>
<head>
 
</head>
 
<body>
<div  style="margin:0 auto;width:75%;text-align:left">
<form name="registrationform" action="" method="post">
<p>
Firstname
<input type="text" name="Firstname"  required pattern="^[A-Za-z]+" title="Username should only contain alphabets">
</p>
<p>
Lastname
<input type="text" name="Lastname" required pattern="^[A-Za-z]+" title="Username should only contain alphabets">
</p>
<p>
Username
<input type="text" name="Username" required pattern="^[A-Za-z0-9]+" title="Username should only contain combination of alphabets and numbers">
</p>
<p>
Password
	
<input type="password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
</p>
<p>
Gender
<input type="radio" name="Gender" value="male" checked>Male<input type="radio" name="Gender" value="female">Female
</p>

<input type="submit" name="submit1" value="submit">


 

</form>
</div>
 
<?php
if(isset($_POST["submit1"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"test");
$count=0;
$res=mysqli_query($link,"select * from registration where username='$_POST[Username]'");
$count=mysqli_num_rows($res);
 
 if($count>0)
 {
 ?>
 <script type="text/javascript">
 alert("This username already exist please choose another");
 </script>
 <?php
 
 }
 else
 {
 $p1=md5($_POST["Password"]);
 mysqli_query($link,"insert into registration values('','$_POST[Firstname]','$_POST[Lastname]','$_POST[Username]','$p1','$_POST[Gender]')"); 
 ?>
 <script type="text/javascript">
 alert("Registered successfully");
 </script>
 <?php
 
 }
}
 
?>
 
 
</body>
</html>