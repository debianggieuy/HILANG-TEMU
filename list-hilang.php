<?php
session_start();
# jika saat load halaman ini, pastikan telah login sebagai user
if (!isset($_SESSION["user"])) {
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR HILANG</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="Hilang-temu/form-hilang.php"> HILANG TEMU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link active" href="list-temu.php"> TEMU <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="list-identitas_pemilik.php"> IDENTIAS PEMILIK <span class="sr-only">(current)</span></a>
 <a class="nav-item nav-link active" href="list-user.php"> USER <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="list-pelapor.php"> PELAPOR<span class="sr-only">(current)</span></a>


    </div>
  </div>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
        <div class="card">
            <div class="card-header bg-dark">
                <h3 class="text-white text-center">
                    DAFTAR HILANG
                </h3>
                <a href="form-paket.php">
                    <button class="btn btn-success form-control"> 
                        ADD HILANG
                    </button>
                </a>
            </div>

            <div class="card-body">
                <form action="list-hilang.php" method="get">
                    <input type="text" name="search"
                    class="form-control mb-2" placeholder="cari">
                </form>

                <ul class="list-group"> 
                <?php
                include("koneksi.php");
                if (isset($_GET["search"])) {
                    $cari = $_GET["search"];
                    $sql = "select * from hilang where
                    nopol_hilang like '%$cari%'
                   or kendaraan like '%$cari%
                    or jenis like '%$cari%'
                    or warna like '%$cari%'
                    or merek like '%$cari%'
                    or tanggal_kejadian '%$cari%'
                    or keterangan like '%$cari%'";

                }else{
                    $sql = "select * from hilang";
                }

                # eksekusi SQL
                $hasil = mysqli_query($connect, $sql);
                while ($hilang = mysqli_fetch_array($hasil)) {
                ?>
                    <li class="list-group-item ">
                        <div class="row">
                            

                            <div class="col-lg-6 mt-2">
                                <!-- untuk deskripsi -->
                                <h6>NOPOL HILANG: <?=$hilang["nopol_hilang"]?></h6>
                                <h6>KENDARAAN: <?=$hilang["kendaraan"]?></h6>
                                <h6>JENIS: <?=$hilang["jenis"]?></h6>
                                <h6>WARNA: <?=$hilang["warna"]?></h6> 
                                <h6>MEREK: <?=$hilang["merek"]?></h6>
                                <h6>TANGGAL KEJADIAN: <?=$hilang["tanggal_kejadian"]?></h6>
                                <h6>KETERANGAN: <?=$hilang["keterangan"]?></h6>



                            </div>

                            <div class="col-lg-2">
                                <a href="form-hilang.php?nopol_hilang=<?=$hilang["nopol_hilang"]?>">
                                    <button class="btn btn-info btn-block mb-2">
                                        Edit
                                    </button>
                                </a>

                                <a href="delete-hilang.php?nopol_hilang=<?=$hilang["nopol_hilang"];?>"
                                    onclick="return confirm('Are you sure delete this person?')">
               <?php
session_start();
if (!isset($_SESSION["identitas_pemilik"])) {
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR TEMU</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="Hilang-temu/form-hilang.php"> HILANG TEMU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link active" href="list-hilang.php"> HILANG <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="list-temu.php"> TEMU <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="list-identitas_pemilik.php"> IDENTIAS PEMILIK <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="list-user.php"> USER <span class="sr-only">(current)</span></a>


    </div>
  </div>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
        <div class="card">
            <div class="card-header bg-dark">
                <h3 class="text-white text-center">
                    DAFTAR HILANG
                </h3>
                <a href="form-temu.php">
                    <button class="btn btn-success form-control"> 
                        ADD HILANG
                    </button>
                </a>
            </div>

            <div class="card-body">
                <form action="list-hilang.php" method="get">
                    <input type="text" name="search"
                    class="form-control mb-2" placeholder="cari">
                </form>

                <ul class="list-group"> 
                <?php
                include("koneksi.php");
                if (isset($_GET["search"])) {
                    $cari = $_GET["search"];
                    $sql = "select * from hilang where
                    nopol_hilang like '%$cari%'
                    or kendaraan like '%$cari%
                     or jenis like '%$cari%'
                     or warna like '%$cari%'
                     or merek like '%$cari%'
                     or tanggal_kejadian '%$cari%'
                     or keterangan like '%$cari%'";
 

                }else{
                    $sql = "select * from temu";
                }

                # eksekusi SQL
                $hasil = mysqli_query($connect, $sql);
                while ($hilang = mysqli_fetch_array($hasil)) {
                ?>
                    <li class="list-group-item ">
                        <div class="row">
                            

                            <div class="col-lg-6 mt-2">
                                <!-- untuk deskripsi -->

                                <h6>NOPOL HILANG: <?=$hilang["nopol_hilang"]?></h6>
                                <h6>KENDARAAN: <?=$hilang["kendaraan"]?></h6>
                                <h6>JENIS: <?=$hilang["jenis"]?></h6>
                                <h6>WARNA: <?=$hilang["warna"]?></h6> 
                                <h6>MEREK: <?=$hilang["merek"]?></h6>
                                <h6>TANGGAL KEJADIAN: <?=$hilang["tanggal_kejadian"]?></h6>
                                <h6>KETERANGAN: <?=$hilang["keterangan"]?></h6>

                            </div>

                            <div class="col-lg-2">
                                <a href="form-hilang.php?nopol_hilang=<?=$hilang["nopol_hilang"]?>">
                                    <button class="btn btn-info btn-block mb-2">
                                        EDIT
                                    </button>
                                </a>

                                <a href="delete-hilang.php?nopol_hilang=<?=$hilang["nopol_hilang"];?>"
                                    onclick="return confirm('Are you sure delete this person?')">
                                    <button class="btn btn-danger btn-block">

                                        DELETE
                                    </button>
                                    </a>
                                    </a>
                            </div>
                        </div>
                    </li>
                    <?php
                }
                ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
                     <button class="btn btn-danger btn-block">

                                        DELETE
                                    </button>
                                    </a>
                                    </a>
                            </div>
                        </div>
                    </li>
                    <?php
                }
                ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
