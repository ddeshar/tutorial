<?php
	include "dbconnect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
	session_start();

	if (isset($_SESSION["session_id"]) == false) {
		echo "ยังบ่ได้ Login นะงับ<br>";
		echo "<a href='login.php'>เข้าสูระบบ</a>";
		exit;
	}

	if ($_SESSION["username"] != "admin") {
		echo "Admin Only<br>";
		echo "<a href='login.php'>เข้าสู้ระบบ</a>";
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
