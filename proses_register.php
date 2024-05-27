<?php
include 'connection.php';
    //$name = $_POST['name'];
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $nama = $_POST['nama_dos'];
    $id_dos = $_POST['id_dos'];
    
    $sql = "INSERT INTO `data_login` (username,password,nama_dos,id_dos) VALUES ('$username','$password','$nama','$id_dos')";
    $query = mysqli_query($connect, $sql);

    if( $query ) {
        header("location:dashboard.php");
        exit;
    }else {
        echo "gagal";
        exit;
    }

?>