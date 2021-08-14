<h1>Edit Mahasiswa</h1>
<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->connect();

	if (isset($_POST['proses'])) {
		$query = mysqli_query($con, "UPDATE mahasiswa SET 
			npm = '".$_POST['npm']."',
			nama = '".$_POST['nama']."'
			WHERE id = '".$_GET['id']."'
		");
		if ($query) {
			header("location:latihan1.php");
		} else {
			echo $con->error;
			echo '<br> edit data gagal';
		}
		
	}

	$query = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id = '".$_GET['id']."'");
	while ($data = mysqli_fetch_array($query)) {

?>

<form action="" method="POST">
	<input type="text" name="npm" value="<?= $data['npm'] ?>">
	<input type="text" name="nama" value="<?= $data['nama'] ?>">
	<input type="submit" name="proses" value="Simpan">
	<a href="latihan1.php">Kembali</a>
</form>

<?php } ?>