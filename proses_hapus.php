<?php
 include "config/koneksi.php";

 $id = $_GET['id'];
 $sql = "DELETE FROM tb_transaksi WHERE id='$id'";
 $result = $mysqli->query($sql);

 if ($result){
 	echo "berhasil";
 	header("Location: transaksi.php");
 } else {
 	echo "terjadi kesalahan";
 }

 $mysqli->close();
?>
