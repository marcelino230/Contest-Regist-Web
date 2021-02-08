<?php
include_once 'config/koneksi.php';

if(isset($_POST['submit'])) {
  $nis = $mysqli->real_escape_string(trim($_POST['nis']));
  $nama = $mysqli->real_escape_string(trim($_POST['nama']));
  $umur = $mysqli->real_escape_string(trim($_POST['umur']));
  $alamat = $mysqli->real_escape_string(trim($_POST['alamat']));
  $jk = $mysqli->real_escape_string(trim($_POST['jk']));
  $agama = $mysqli->real_escape_string(trim($_POST['agama']));
  //$created=date("Y-m-d H:i:s");       
  
  $query = "INSERT INTO tb_transaksi (nis, nama, umur, alamat, jk, agama) VALUES('$nis', '$nama', '$umur', '$alamat', '$jk', '$agama')";
  

	if($mysqli->query($query)) {

    $msg = "
    <div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sukses !
    </div>";

    } else {

      $msg = "
      <div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; coba isi kembali !
      </div>";
    } 

  $mysqli->close();

} 
?>