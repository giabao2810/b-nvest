<?php 
	$mysqli = new mysqli("localhost","root","","vestman");

	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Oops, đường dẫn database bị thay đổi. Kết nối MYSQLi gặp vấn đề." . $mysqli->connect_error;
	  exit();
	}
?>