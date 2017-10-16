<?php
	if(isset($_GET['user_id'])){
		$url = file_get_contents("http://localhost/week6/restserveruser.php?user_id=".$_GET['user_id']);//if upload at server change in url take live url.
		$var = json_decode($url,true);
		echo "<table>";
			foreach($var as $k=>$v)
    		echo "<tr><td>$k</td><td>$v</td></tr>";
		echo "</table>";

	}
?>