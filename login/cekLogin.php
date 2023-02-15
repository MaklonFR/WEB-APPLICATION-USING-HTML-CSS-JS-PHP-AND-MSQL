<?php
    include "../koneksi.php";
    if (!isset($_SESSION)) {
		session_start();
	}
    $user        = $_POST['user'];
    $pass        = $_POST['pass'];

    $sql = "SELECT * FROM tb_admin WHERE 
            (( email = '$user') AND (password='$pass'))";
    $query = $conn->query($sql);

    if($query->num_rows < 1){	
        $data = "Login Error";
        echo $data;
    } 
    else
    {
        $data = "Login sukses..!";
        echo $data;
        $row = $query->fetch_assoc();
        //echo"OK";
        $_SESSION['user'] = $row['id'];
    
    }
?>