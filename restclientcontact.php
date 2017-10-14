<?php
	if(isset($_GET['id'])){
		$url = file_get_contents("http://localhost/week6/restservercontact.php?id=".$_GET['id']);//if upload at server change in url 
		$var = json_decode($url,true);
		echo "<table>";
			foreach($var as $k=>$v)
    		echo "<tr><td>$k</td><td>$v</td></tr>";
		echo "</table>";

	}
?>