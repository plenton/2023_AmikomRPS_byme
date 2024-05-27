<?php
include("connection.php");

if(isset($_POST['daftar'])){

    $kode = $_POST['kode_matkul'];
    $matkul = $_POST['matkul'];
    $semester = $_POST['semester'];
    $prodi = $_POST['prodi'];
    $desc = $_POST['deskripsi'];
    $materi1 = $_POST['materi_per1'];
    $materi2 = $_POST['materi_per2'];
    $materi3 = $_POST['materi_per3'];
    $materi4 = $_POST['materi_per4'];
    $materi5 = $_POST['materi_per5'];
    $materi6 = $_POST['materi_per6'];
    $materi7 = $_POST['materi_per7'];
    $materi8 = $_POST['materi_per8'];
    $materi9 = $_POST['materi_per9'];
    $materi10 = $_POST['materi_per10'];
    $materi11 = $_POST['materi_per11'];
    $materi12 = $_POST['materi_per12'];
    $materi13 = $_POST['materi_per13'];
    $materi14 = $_POST['materi_per14'];
    //$sk = $_POST['skill_dosen'];

    $sql = "INSERT INTO `table_matkul`(`kode_matkul`,`matkul`,`semester`, `prodi`, `deskripsi`, `materi_per1`, `materi_per2`, `materi_per3`, `materi_per4`, `materi_per5`, `materi_per6`, `materi_per7`, `materi_per8`, `materi_per9`, `materi_per10`, `materi_per11`, `materi_per12`, `materi_per13`, `materi_per14`) VALUE ( '$kode','$matkul', '$semester', '$prodi', '$desc', '$materi1', '$materi2', '$materi3', '$materi4', '$materi5', '$materi6', '$materi7', '$materi8', '$materi9', '$materi10', '$materi11', '$materi12', '$materi13', '$materi14' )";
    $query = mysqli_query($connect, $sql);

    if( $query ){
        header('Location: dashboard.php');
    }else{
        header('Location: tambah rps.php');
    }
} else {
    die("akses dilarang..");
}
?>