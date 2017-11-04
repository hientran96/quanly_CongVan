<?php
	session_start();
	$link = mysqli_connect("localhost", "root", "root", "ql_congvan");
	mysqli_query($link, "SET NAMES 'utf8'");
?>