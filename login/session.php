<?php
	include "koneksi.php";
	if (!isset($_SESSION)) {
		session_start();
	}

	if(!isset($_SESSION['user']) || trim($_SESSION['user']) == ''){
		header('location: index.php');
	}
	
	$sql = "SELECT * FROM tb_admin where id = '".$_SESSION['user']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	
?>