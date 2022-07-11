<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>FORM TEMU</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="Hilang-temu/list-temu.php">HILANG TEMU</a>
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
                    FORM TEMU
                </h4>
            </div>

            <div class="card-body">
                <?php
                if (isset($_GET["nopol_temu"])) {
                    # form untuk edit
                    $nopol_temu = $_GET["nopol_temu"];
                    $sql = "select * from temu where nopol_temu='$nopol_temu'";

                    include "koneksi.php";
                    #ekseukusi SQL
                    $hasil = mysqli_query($connect, $sql);

                    #konversi ke array
                    $temu = mysqli_fetch_array($hasil);
                    ?>
                    <form action="process-temu.php" method="post" enctype="multipart/form-data">
                    NOPOL TEMU
                    <input type="text" name="nopol_temu" class="form-control mb-2" required
                    value="<?=$temu["nopol_temu"];?>" readonly>
                      
                      KENDARAAN
                    <input type="text" name="kendaraan" class="form-control mb-2" 
                    value="<?=$temu["kendaraan"];?>">

                    JENIS
                    <input type="text" name="jenis" class="form-control mb-2" 
                    value="<?=$temu["jenis"];?>">

                    WARNA
                    <input type="text" name="warna" class="form-control mb-2" 
                    value="<?=$temu["warna"];?>">


                    MEREK
                    <input type="text" name="merek" class="form-control mb-2" 
                    value="<?=$temu["merek"];?>">

                    TANGGAL KEJADIAN
                    <input type="date" name="tanggal_kejadian" class="form-control mb-2" 
                    value="<?=$temu["tanggal_kejadian"];?>">

                    KETERANGAN
                    <input type="text" name="keterangan" class="form-control mb-2" 
                    value="<?=$temu["keterangan"];?>">


                    <button type="submit" class="btn btn-info btn-block" name="update_temu">
                        SIMPAN
                    </button>
                </form>
                    <?php
                } else {
                    # form untuk insert
                    ?>
                    <form action="process-hilang.php" method="post" enctype="multipart/form-data">
                    NOPOL TEMU
                    <input type="text" name="nopol_temu" class="form-control mb-2" required>

                    KENDARAAN
                    <input type="text" name="kendaraan" class="form-control mb-2" >

                    JENIS
                    <input type="text" name="jenis" class="form-control mb-2">

                    WARNA
                    <input type="text" name="warna" class="form-control mb-2">

                    MEREK
                    <input type="text" name="merek" class="form-control mb-2" >

                    TANGGAL KEJADIAN
                    <input type="date" name="tanggal_kejadian" class="form-control mb-2">

                    KETERANGAN
                    <input type="text" name="keterangaan" class="form-control mb-2" >


                    <button type="submit" class="btn btn-info btn-block" name="simpan_temu">
                        SIMPAN
                    </button>
                </form>
                    <?php
                }
                
                ?>
                
            </div>
        </div>
    </div>
</body>
</html>
