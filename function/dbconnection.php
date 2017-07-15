<?php
	$mysqli = new mysqli("localhost","root","","banhoa");
	$mysqli->set_charset("utf8_encode");
	if(mysqli_connect_errno()){
		echo "can't connetion to database </br>".mysqli_connect_error();
		exit;
	}
?>