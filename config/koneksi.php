<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "pendaftaran");

if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
