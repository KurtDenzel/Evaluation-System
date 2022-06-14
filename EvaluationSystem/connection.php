<?php
//Local connection of Database

	session_start();

	$_SESSION['user_id'] = 1;

	$con = mysqli_connect("localhost","root","","evaluation_db") or die ("Error in Connection");
?>