<?php 
	$host = "localhost";
	$user = "ucp2pkw_laelawulida";
	$pass = "laela278";
	$db = "ucp2pkw_TokoBukuLaela";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysql_connect_error());
	}
?>