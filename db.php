<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'db_senibettafish';

	$conn =mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung')
?>