<html>
<body>
<?php
echo "hello world";	
session_start();
 
// Accessing session data
echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];
?>
</body>
</html>