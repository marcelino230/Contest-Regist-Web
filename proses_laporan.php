<?php
include_once 'config/koneksi.php';

if(isset($_POST['submit'])) {
  $bulan = $mysqli->real_escape_string(trim($_POST['bulan']));  
  
  $query = "SELECT * FROM tb_transaksi where month(created)='$bulan' ";

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