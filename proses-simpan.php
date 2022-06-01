<?php 

	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$angkatan = $_POST['angkatan'];
	$asal = $_POST['asal'];

	include 'koneksi.php';

	$sql = "INSERT INTO mhs_tb VALUES ('$nama', '$nim', '$angkatan', '$asal')";

	if (mysqli_query($conn, $sql)) {
		echo "Data Berhasil Disimpan";
		echo "<br>";
		echo "<a href='../input-mhs.php'>Isi data lagi<a/>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	
?>