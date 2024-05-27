<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Jadwal | RPS</title>
</head>
<body>


    <style>
        @media (max-width: 1200px) {
  .details {
    grid-template-columns: 1fr;
  }
  .cardprofile{
    overflow-x: auto;
  }
 
  .recentOrders {
    overflow-x: auto;
  }
  .status.inProgress {
    white-space: nowrap;
  }
}

.halaman{
  height: 100%;
  padding: 24px 24px 24px 24px;
}

.details {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: 2fr 1fr;
  grid-gap: 30px;
  
  /* margin-top: 10px; */
}

.details .recentOrders {
  position: relative;
  display: grid;
  min-height: 500px;
  background: var(--white);
  padding: 20px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.5);
  border-radius: 20px;
}
.details .cardHeader {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;

}
.cardHeader h2 {
  font-weight: 600;
  color: var(--blue);
}
.cardHeader .btn {
  position: relative;
  padding: 5px 10px;
  background: var(--blue);
  text-decoration: none;
  color: var(--white);
  border-radius: 6px;
}

.details table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}
.details table thead td {
  font-weight: 600;
}
.details .recentOrders table tr {
  color: var(--black1);
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.details .recentOrders table tr:last-child {
  border-bottom: none;
}
.details .recentOrders table tbody tr:hover {
  background: var(--blue);
  color: var(--white);
}
.details .recentOrders table tr td {
  padding: 10px;
}
.details .recentOrders table tr td:last-child {
  text-align: end;
}
.details .recentOrders table tr td:nth-child(2) {
  text-align: end;
}
.details .recentOrders table tr td:nth-child(3) {
  text-align: center;
}
.print{
  font-size: 25px;
  margin-top: 30px;
}
.navbar{
            background-color: rgb(139, 15, 173);
        }
        .navbar-brand{
            margin-left: 10px;
            display: flex;
        }
        .logout{
            outline: rgb(139, 15, 173);
        }
        .btn1{
            color: rgb(181, 36, 36);
            text-decoration: none;
            padding: 1rem;
            font-weight: 700;
            border: 1px solid #dc2222;
            transition: 0.3s;
            display: flex;
            justify-content: flex-end;
        }
        .btn1:hover{
            background: rgb(181, 36, 36);
            color: rgb(0, 0, 0);
            border-radius: 5px;
            box-shadow: 0 0 5px rgb(181, 36, 36);

        }
        .nav-pills li a:hover{
            background-color: rgb(150, 53, 177);
        }
        .divbar{
            background-color: rgb(109, 10, 136);
        }
        
        .isibar{
            background-color: rgb(109, 10, 136);
        }
        .univ{
            margin-top: 7px;
            margin-left: 5px;
        }


</style>

<section class="vh-100 gradient-custom">
<div><nav class="navbar">
         <a class="navbar-brand" href="https://home.amikom.ac.id/">
             <img src="https://amikom.ac.id/template/assets_dashboard/img/amikom.png" width="35" height="35" class="d-inline-block align-text-top">
             <h6 class="univ text-white">Universitas AMIKOM Yogyakarta</h6>
         </a>
         <a href="form_login.php">
                 <button class="btn1 btn1-lg">
                     <img class="logoutikon" src="https://cdn-icons-png.flaticon.com/128/9070/9070510.png" width="25" height="25">
                     LOGOUT
                 </button>
         </a>
    </nav></div>
    <div style="margin-top:10px;" class="row col-md-3">
    <a href="dashboard.php">
                 <button class="btn1 btn1-lg">
                     <img class="logoutikon" src="https://t4.ftcdn.net/jpg/02/44/10/73/240_F_244107399_NAbR1gRjvR4OD0e87bJl4dxPyWO5rUq4.jpg" width="25" height="25">
                     KEMBALI
                 </button>
         </a>
    </div>
    <div class="row col-sm-3">
      <div class="rpss">
      <a href="tambah_rps.php"><button class="RPS1">+ Tambah RPS </button></a>
      </div>
    </div>
   

    <!--div class="details">
    <div class="recentOrders">
      <div class="cardheader">
        <h2>Deskrpsi</h2>
      </div>
    <div class="recentOrders">
      <div class="cardheader">
        <h2>Materi Perkuliahan</h2>
      </div>
        <table-->
        <div>
        <table class="table table-hover" style="border: 5px;">
        <!--thead width="100%">
              
                <td>
                NO
                <td >KODE MATKUL
                <td>MATA KULIAH
                <td>DESKRIPSI
                <td>MATERI
                <td>DESKRIPSI MATERI
                <td>AKSI
          </thead-->
          <?php

include 'connection.php';
$sql = "SELECT * FROM table_matkul ";
$query = mysqli_query($connect, $sql);
$nomor = 1;
while ($dosen = mysqli_fetch_array($query)) {
  echo "<th>";
  echo "<tr>" . "<td>" . "<p> NO         " . "<td>" . $nomor . "</tr>";
  echo "<tr>" . "<td>" . "<p> KODE MATKUL" . "<td>" . $dosen['kode_matkul'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> MATA KULIAH" . "<td>" . $dosen['matkul'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> SEMESTER" . "<td>" . $dosen['semester'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PRODI" . "<td>" . $dosen['prodi'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> DESKRIPSI  " . "<td>" . $dosen['deskripsi'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 1 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per1'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 2 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per2'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 3 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per3'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 4 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per4'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 5 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per5'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 6 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per6'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 7 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per7'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 8 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per8'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 9 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a> " . "<td>" . $dosen['materi_per9'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 10 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per10'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 11 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per11'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 12 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per12'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 13 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per13'] . "</tr>";
  echo "<tr>" . "<td>" . "<p> PERTEMUAN 14 <a href='hapus.php?materi1=" . $dosen['materi_per1'] . "'>Hapus</a>" . "<td>" . $dosen['materi_per14'] . "</tr>";
  //echo "<tr>" . $dosen['deskripsi'] . "</tr>";
  //echo "<tr>" . "<select>" . "<option>" . $dosen['deskripsi'] . "</tr>";
  echo "<td><a href='edit_rps.php?kode_matkul=" . $dosen['kode_matkul'] . "'>Edit</a> |";
  //echo "<tr>". "<td><a href='controller_hapus.php?nik=" . $dosen['matkul'] . "'>Hapus</a>";
  echo "</th>";
  //echo "</tr>";
  $nomor++;

?>
<!--td><a href="edit_rps.php?kode_matkul=<?php echo $dosen['kode_matkul']; ?>">Edit</a> </td-->
<tr><td><a href="controller_hapus.php?kode_matkul=<?php echo $dosen['kode_matkul']; ?>">Hapus</a> </td>
<tr>
    <a class="print" href="lihat_resmi.php?kode_matkul=<?php echo $dosen['kode_matkul']; ?>">PRINT RPS</a>
</dtr>
<?php } ?>
</table>
          <!--thead>
            <tr>
              <td>Materi</td>
              <td>Pertemuan</td>
              <td>Waktu</td>
              <td>Ruangan</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Algoritma</td>
              <td>Senin</td>
              <td>09.00</td>
              <td>10.2.7</td>
            </tr>
            <tr>
              <td>Kalkulus</td>
              <td>Senin</td>
              <td>07.00 - 08.40</td>
              <td><span>5.3.1</span></td>
          </tr>
          
          <tr>
              <td>Kalkulus</td>
              <td>Senin</td>
              <td>07.00 - 08.40</td>
              <td><span>5.3.1</span></td>
          </tr>

          <tr>
              <td>Kalkulus</td>
              <td>Senin</td>
              <td>07.00 - 08.40</td>
              <td><span>5.3.1</span></td>
          </tr>

          <tr>
              <td>Cyber Security</td>
              <td>Senin</td>
              <td>07.00 - 08.40</td>
              <td><span>5.3.1</span></td>
          </tr>
          
          <tr>
              <td>Cyber Security</td>
              <td>Senin</td>
              <td>07.00 - 08.40</td>
              <td><span>5.3.1</span></td>
          </tr>
          
          <tr>
              <td>Perancangan WEB I</td>
              <td>Senin</td>
              <td>07.00 - 08.40</td>
              <td><span>5.3.1</span></td>
          </tr>
          </tbody>
        </table-->

    </div>
  </div>
</section>
</div>
</body>
</html>