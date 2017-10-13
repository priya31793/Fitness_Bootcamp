<?php
	if(isset($_GET['id'])){
		$url = file_get_contents("http://localhost/week6-master/rest.php?id=".$_GET['id']);
		$var = json_decode($url,true);
		echo "<table>";
			foreach($var as $k=>$v)
    		echo "<tr><td>$k</td><td>$v</td></tr>";
		echo "</table>";
	}
?>