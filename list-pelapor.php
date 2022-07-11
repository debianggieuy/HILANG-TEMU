<?php 
session_start();
# jika saat load halaman ini, pastikan telah login sebagai user
if (!isset($_SESSION["user"])) {
} 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>LIST PELAPOR</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="Hilang-temu/list-pelapor.php">PELAPOR</a>
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
                <h4 class="text-white">

                DAFTAR PELAPOR
                </h4>
            </div>

            <div class="card-body">
                <form action="list-pelapor.php" method="get">
                    <input type="text" name="search"
                    class="form-control mb-2" placeholder="Pencarian" />
                </form>
                <ul class="list-group">
                    <?php
                    include "koneksi.php";
                    if (isset($_GET["search"])) {
                        $search = $_GET["search"];
                        $sql = "select * from pelapor
                        where id_pelapor like '%$search%'
                        or nama '%$search%'
                        or alamat '%$search%'
                        or usia '%$search%'
                         or no_telp like'%$search%'";
                    } else {
                        $sql =" select * from pelapor";
                    }
                    $hasil = mysqli_query($connect, $sql);
                    while ($pelapor= mysqli_fetch_array($hasil)) {
                        ?>
                        <li class="list-group-item mb-2">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4>
                                        <?=($pelapor["id_pelapor"])?>
                                    </h4>
                                    <h6>NAMA: <?=($pelapor["nama"])?></h6>
                                    <h6>ALAMAT: <?=($pelapor["alamat"])?></h6>
                                    <h6>USIA: <?=($pelapor["usia"])?></h6>
                                    <h6>NO TELEPON: <?=($pelapor["no_telp"])?></h6>


                                </div>
                                <div class="col-lg-3">
                                <a href="form-pelapor.php?id=<?php echo $pelapor["id_pelapor"];?>">
                                        <button class="btn btn-info btn-block mb-2">
                                            EDIT
                                        </button>
                                </a>

                                </a>
                                
                                    <a href="delete-pelapor.php?id_pemilik=<?=$pelapor["id_pelapor"]?>"
                                    onClick="return confirm('Apakah Anda Yakin?')">

                                <button class="btn btn-block btn-danger">
                                    HAPUS
                                    </button>
                                </a>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                    
                </ul>

                <!-- button tambah data -->
                <a href="form-pelapor.php">
                    <button class="btn btn-success">
                        TAMBAH IDENTITAS PEMILIK           
                     </button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>










