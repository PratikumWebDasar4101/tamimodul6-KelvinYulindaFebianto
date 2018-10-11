<?php
session_start();
require_once("db.php");

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT username, password, nim FROM db WHERE username='$username' and password='$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) == 1) {
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
	$_SESSION["nim"] = $row["nim"];
	header("Location: halawal.php");
}else {
	echo "Gagal Login";
}