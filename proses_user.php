<?php
include_once 'config/koneksi.php';

if(isset($_POST['submit'])) {
  $nama = $mysqli->real_escape_string(trim($_POST['nama']));
  $pass = $mysqli->real_escape_string(trim($_POST['pass']));
  $level = $mysqli->real_escape_string(trim($_POST['level']));
  //$created=date("Y-m-d H:i:s");       
  
  $query = "INSERT INTO tb_user (nama, pass, level) VALUES('$nama', '$pass', '$level')";

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