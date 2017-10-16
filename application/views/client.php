<?php
	if(isset($_GET['id'])){
		$url = file_get_contents("http://localhost/week6/rest.php?id=".$_GET['id']);//get link for consuming to json.//if upload at server change in url
		$var = json_decode($url,true);//json data decode to normal value.
		echo "<table>";//data show on table.
			foreach($var as $k=>$v)
    		echo "<tr><td>$k</td><td>$v</td></tr>";
		echo "</table>";
	}
?>
