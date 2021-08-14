<h1>Input Mahasiswa</h1>
<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->connect();

	if (isset($_POST['proses'])) {
		$query = mysqli_query($con, "INSERT INTO mahasiswa (npm,nama) VALUES(
			'".$_POST['npm']."',
			'".$_POST['nama']."'
		)");
		if ($query) {
			header("location:latihan1.php");
		} else {
			echo $con->error;
			echo '<br> input data gagal';
		}
		
	}

?>

<form action="" method="POST">
	<input type="text" name="npm">
	<input type="text" name="nama">
	<input type="submit" name="proses" value="Simpan">
	<a href="latihan1.php">Kembali</a>
</form>