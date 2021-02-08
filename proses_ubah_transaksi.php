<?php
include_once 'config/koneksi.php';
if (isset($_POST['update'])) {
	$nis = $mysqli->real_escape_string($_POST['nis']);
	$nama = $mysqli->real_escape_string($_POST['nama']);	
	$umur = $mysqli->real_escape_string($_POST['umur']);
	$alamat = $mysqli->real_escape_string($_POST['alamat']);
	$jk = $mysqli->real_escape_string($_POST['jk']);
	$agama = $mysqli->real_escape_string($_POST['agama']);
 	$id = $mysqli->real_escape_string($_GET['id']);
 	
	$sql = "UPDATE tb_transaksi SET nis='$nis', nama='$nama', umur='$umur', alamat='$alamat', jk='$jk', agama='$agama' WHERE id='$id'";
	$query=$mysqli->query($sql);

	if ($query) {

		$msg = "
		<div class='alert alert-success'>
		    <span class='glyphicon glyphicon-info-sign'></span> sukses mengubah !
		</div>";
		header("Location: transaksi.php");

	} else {

		$msg = "
		<div class='alert alert-danger'>
		    <span class='glyphicon glyphicon-info-sign'></span> terjadi kesalahan !
		</div>";
	}		

 $mysqli->close(); 
	
}
?>