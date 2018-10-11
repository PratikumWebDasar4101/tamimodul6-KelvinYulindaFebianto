<?php
$sname = "localhost";
$user = "root";
$pass = "";
$db = "mahasiswa";

$conn = mysqli_connect($sname,$user,$pass,$db);
if (!$conn) {
	die("Connection unsuccessfull");
}