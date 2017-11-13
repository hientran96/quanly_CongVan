<?php
	session_start();
	$link = mysqli_connect("localhost", "root", "root", "ql_congvan") or die ("no connect");
	mysqli_query($link, "SET NAMES 'utf8'");
?>