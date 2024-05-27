<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | RPS</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <style>
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
        .circle{
            margin-left: 15px;
            margin-top: 15px;
            width: 150px;
            height: 150px;
            background-color: rgb(226, 28, 28);
            border-radius: 50%;
        }
        .profil{
            width: 150px;
            aspect-ratio: 1/1;
            object-fit: cover;
            border-radius: 50%;
        }
        .namasen{
            margin-top: 20px;
            margin-right: 10px;
        }
        .iddosen{
            margin-top: 10px;
            margin-right: 100px;
        }
        .editprofil{
            border: none;

        }
        .editprofil1{
            margin-top: 50px;
            margin-left: 100px;
            margin-right: 100px;
        }
        .select{
            background-color: #727272;
            margin-top: 20px;
            margin-left: 20px;
            width: 150px;
            height: 50px;
            border-radius: 20px;
        }
        .pilihmatkul{
            margin-top: 100px;
        }
        .rpss{
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }
        .RPS1{
            border: none;
            background-color: rgb(68, 68, 229);
        }
        .ikonedit{
            display: flex;
            justify-content: space-between;
        }
        .idmatkuldosen{
            background-color: rgb(88, 88, 205);
        }
        .listrps{
            margin-top: 5px;
            padding: 10px;
        }
        .univ{
            margin-left: 5px;
            margin-top: 7px;
        }
    </style>
    <section class="vh-100 gradient-custom">
       <nav class="navbar">
            <a class="navbar-brand" href="https://home.amikom.ac.id/">
                <img src="https://amikom.ac.id/template/assets_dashboard/img/amikom.png" width="35" height="35" class="d-inline-block align-text-top">
                <h6 class="univ text-white">Universitas AMIKOM Yogyakarta</h6>
            </a>
            <a href="form_login.php">
                    <button class="btn1 btn1-lg">
                        <img class="logoutikon" src="https://cdn-icons-png.flaticon.com/128/9070/9070510.png" width="25" height="25">
                        logout
                    </button>
            </a>
       </nav>
       <div class="container-fluid">
        <div class="row flex-nowrap">
            <!--ini adalah divisi/colom untuk membuat sidebar-->
            <div class="divbar col-auto col-md-4 col-lg-3 min-vh-100">
                <div class="isibar p-3">
                    <a class="d-flex text-decoration-none mt-1 align-items-center text-white">
                        <span class="fs-4 d-none d-sm-inline">WEB RPS</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item py-2 py-sm-0">
                            <a href="profil dosen.php" class="nav-link text-black">
                                <i class="fs-5 fa fa-users"></i><span class="fs-4 ms-3 d-none d-sm-inline">Profil Dosen</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-black">
                                <i class="fs-5 fa fa-gauge"></i><span class="fs-4 ms-3 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="form_login.php" class="nav-link text-black">
                                <i class="fs-5 fa fa-house"></i><span class="fs-4 ms-3 d-none d-sm-inline">Ganti Akun</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="tambah_rps.php" class="nav-link text-black">
                                <i class="fs-5 fa fa-table-list"></i><span class="fs-4 ms-3 d-none d-sm-inline">Tambah rps</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="semua_tabel.php" class="nav-link text-black">
                                <i class="fs-5 fa fa-users"></i><span class="fs-4 ms-3 d-none d-sm-inline">detail</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <!--ini adalah divisi/colom untuk dasboard-->
            <div class="col-md-9">
                    <div class="row d-felx justify-content-center">
                        <div class="col-2">
                          <div class="circle">
                            <img class="profil" src="https://fotografias.lasexta.com/clipping/cmsimages01/2023/09/03/66ADABF5-3A92-4184-89A9-4381D9CE9937/marc-marquez_92.jpg?crop=1000,562,x0,y15&width=390&height=219&optimize=high&format=webply">
                          </div>
                        </div>
<?php
include ("connection.php");
//if( !isset($_POST['kode_matkul']) ){
$sql = mysqli_query($connect,"SELECT * FROM data_login");
//$query = mysqli_query($connect, $sql);
$dos = mysqli_fetch_assoc($sql);
if(mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan");
}
?>
                        <div class="namasen col-6 bg-light justify-content-center align-items-end">
                          <div class="namadosen row">
                            <div class="card">
                                <div class="card-body">
                                    <p style="color: black;"><?php echo $dos['nama_dos'];?></p>
                                </div>
                            </div>
                          </div>
                          <div class="iddosen row">
                            <div class="card">
                                <div class="card-body">
                                <p style="color: black;"><?php echo $dos['id_dos'];?></p>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-3 bg-light">
                            <div class="editprofil1">
                            <div class="card justify-content-center align-items-center">
                            <a href="profil dosen.html"><button class="editprofil editprofil-lg"><img src="https://cdn-icons-png.flaticon.com/128/9634/9634117.png" width="60px" height="60px"></button></a>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="pilihmatkul">
                        <div>
                            <!--select class="select" aria-label="Default select example">
                                <option selected>Mata Kuliah</option>
                                <option value="1">Desain Visual</option>
                                <option value="2">Calculus</option>
                                <option value="3">Pendidikan Pancasila</option>
                              </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <select class="select" aria-label="Default select example">
                                    <option selected>Semester</option>
                                    <option value="1">Genap</option>
                                    <option value="2">Ganjil</option>
                                  </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="select" aria-label="Default select example">
                                <option selected>Tahun</option>
                                <option value="1">2019</option>
                                <option value="2">2020</option>
                                <option value="3">2021</option>
                                <option value="4">2022</option>
                                <option value="5">2023</option>
                              </select></div-->
                        </div>

                        <div class="row">
                            <div class="rpss">
                                <a href="tambah_rps.php"><button class="RPS1">+ Tambah RPS </button></a>
                            </div>
                        </div>
                    </div>

                <div class="card bg-light text-black">
                    <div class="grading card-body text-center ">
                        <div class="listrps row">
                        
                        <table class="table table-hover" style="width: 100%;">
                        
                        <tr class="tr">
                        <th class="satu" style="width: 10%">No</th>
                        <th style="width: 10%;">KODE</th>
                        <th style="width: 30%;" >MATA KULIAH</th>
                        <th style="width: 30%;" >LIHAT RPS</th>
                        <th style="width: 20%;" >Aksi</th>
                        </tr>
                        
                       

<?php

$sql = "SELECT * FROM `table_matkul`";
$query = mysqli_query($connect, $sql);
$nomor = 1;
while ($dosen = mysqli_fetch_array($query))
{
    //echo "<div class="card">";
    echo "<tr>";
    echo "<td>" . $nomor . "</td>";
    echo "<td>" . $dosen['kode_matkul'] . "</td>";
    echo "<td>" . $dosen['matkul'] . "</td>";
    //echo "<td>" . $dosen['deskripsi'] . "</td>";
    //echo "<td>" . "<select>" . "<option>" . $dosen['deskripsi'] . "</td>";
    echo "<td><a href='selengkapnya.php?kode_matkul= " . $dosen['kode_matkul'] . "'>preview</a> ";
    //echo "<td><a href='edit_rps.php?nik=" . $dosen['matkul'] . "'>Edit</a> | ";
    //echo "<td><a href='controller_hapus.php?nik=" . $dosen['matkul'] . "'>Hapus</a>";
    //echo "</td>";
    //echo "</tr>";
    $nomor++;

?>
<td><a href="edit_rps.php?kode_matkul=<?php echo $dosen['kode_matkul']; ?>">Edit</a>
<a href="controller_hapus.php?kode_matkul=<?php echo $dosen['kode_matkul']; ?>"> | Hapus</a> </td>

<?php }?>
</table>
                        </div>
                        <!--div class="listrps row">
                            <div class="idmatkuldosen col-sm-2">
                                DT-001
                            </div>
                            <div class="col-sm-8 bg-secondary">
                                Pendidikan Pancasila
                            </div>
                            <div class="ikonedit col-2">
                                <div><button href="#"><img src="https://cdn-icons-png.flaticon.com/128/542/542724.png" width="20px" height="20px"></button></div>
                                <div><a href="view_rps.html"><button href=""><img src="https://cdn-icons-png.flaticon.com/128/159/159604.png" width="20px" height="20px"></button></a></div>
                                <div><a href="identitas mata kuliah.html"><button href="#"><img src="https://cdn-icons-png.flaticon.com/128/1827/1827933.png" width="20px" height="20px"></button></a></div>
                            </div>
                        </div>
                        <div class="listrps row">
                            <div class="idmatkuldosen col-sm-2">
                                DT-001
                            </div>
                            <div class="col-sm-8 bg-secondary">
                               Pendidikan Pancasila
                            </div>
                            <div class="ikonedit col-2">
                                <div><button href="#"><img src="https://cdn-icons-png.flaticon.com/128/542/542724.png" width="20px" height="20px"></button></div>
                                <div><a href="view_rps.html"><button href="#"><img src="https://cdn-icons-png.flaticon.com/128/159/159604.png" width="20px" height="20px"></button></a></div>
                                <div><a href="identitas mata kuliah.html"><button href="#"><img src="https://cdn-icons-png.flaticon.com/128/1827/1827933.png" width="20px" height="20px"></button></a></div>
                            </div>
                        </div>
                        <div class="listrps row">
                            <div class="idmatkuldosen col-sm-2">
                                DT-001
                            </div>
                            <div class="col-sm-8 bg-secondary">
                               Pendidikan Pancasila
                            </div>
                            <div class="ikonedit col-2">
                                <div><button href="#"><img src="https://cdn-icons-png.flaticon.com/128/542/542724.png" width="20px" height="20px"></button></div>
                                <div><a href="view_rps.html"><button href="#"><img src="https://cdn-icons-png.flaticon.com/128/159/159604.png" width="20px" height="20px"></button></a></div>
                                <div><a href="identitas mata kuliah.html"><button href="#"><img src="https://cdn-icons-png.flaticon.com/128/1827/1827933.png" width="20px" height="20px"></button></a></div>
                            </div>
                        </div-->
                    </div>
                </div>
            </div>

          </div>
       </div>
       <script src="js/bootstrap.bundle.js"></script>
    </section>
</body>
</html>