<?php
include("connection.php");

if(isset($_POST['edit'])){

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

    $sql = "UPDATE `table_matkul` 
    SET kode_matkul='$kode', matkul='$matkul', semester='$semester', prodi='$prodi', deskripsi='$desc', materi_per1='$materi1', materi_per2='$materi2', materi_per3='$materi3', materi_per4='$materi4', materi_per5='$materi5', materi_per6='$materi6', materi_per7='$materi7', materi_per8='$materi8', materi_per9='$materi9', materi_per10='$materi10', materi_per11='$materi11', materi_per12='$materi12', materi_per13='$materi13', materi_per14='$materi14'
    WHERE kode_matkul='$kode'";

    $query = mysqli_query($connect, $sql);

    if( $query ){
        header('Location: dashboard.php');
    }else{
        die('gagal menyimpan data');
    }
} else {
    die("akses dilarang..");
}

echo $sql;

?>