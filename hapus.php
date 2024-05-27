<?php
include("connection.php");
$id1 = $_GET['materi1'];
$sql = mysqli_query($connect, " UPDATE table_matkul SET materi_per1 = NULL
WHERE materi_per1='$id1'");

if ($sql) {
    header('Location: dashboard.php');
    exit;
} else {
    echo "gagal menghapus data.";
}
?>