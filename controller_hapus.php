<?php
include("connection.php");
$id = $_GET['kode_matkul'];
$sql = mysqli_query($connect, "DELETE FROM table_matkul WHERE kode_matkul='$id'");

if ($sql) {
    header('Location: dashboard.php');
    exit;
} else {
    echo "gagal menghapus data.";
}
?>