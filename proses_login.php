<?php
// session_start();
include_once 'config/koneksi.php';
if(isset($_SESSION['userSession'])!="")
{
  header("Location: index.php");
  exit;
}

if(isset($_POST['submit']))
{
  $nama = $mysqli->real_escape_string(trim($_POST['nama']));
  $pass = $mysqli->real_escape_string(trim($_POST['pass']));
  
  $query = $mysqli->query("SELECT id, nama, pass, level FROM tb_user WHERE pass='$pass'");
  // $row = $query->fetch_object();
  $row = $query->fetch_array();

  if(!empty($row)) {
    $_SESSION['userSession'] = $row['id'];
    $_SESSION['level'] = $row['level'];
    header("Location: index.php");
  } else {
    $msg = "
      <div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; nama atau password salah !
      </div>";
  }  
  $mysqli->close();
 }
 ?>