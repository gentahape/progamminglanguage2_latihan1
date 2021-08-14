<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->connect();

	$query = mysqli_query($con, "DELETE FROM mahasiswa WHERE id = '".$_GET['id']."'");
	header("location:latihan1.php");

?>