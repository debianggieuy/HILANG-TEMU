<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PELAPOR</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="Hilang-temu/list-pelapor.php">HILANG TEMU</a>
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
                <h4 class="text-white">FORM PELAPOR</h4>
            </div>

            <div class="card-body">
                <?php
                if(isset($_GET["id_pelapor"])) {
                    include "koneksi.php";
                    $id = $_GET["id_pelapor"];
                    $sql = "select * from pelapor where id_pelapor='$id_pelapor'";
                    $hasil = mysqli_query($connect, $sql);
                    $pelapor = mysqli_fetch_array($hasil);
                    ?>
                    <form action="process-pelapor.php" method="post"
                    onsubmit="return comfirm('Apakah anda yakin untuk mengubah data ini?')">
                    
                    ID PELAPOR
                    <input type="text" name="id_pelapor" 
                    class="form-control mb-2" required
                    value="<?=$pelapor["id_pelapor"];?>" />

                    NAMA
                    <input type="text" name="nama" 
                    class="form-control mb-2" required
                    value="<?=$pelapor["nama"];?>" />

                    ALAMAT
                    <input type="text" name="alamat" 
                    class="form-control mb-2" required
                    value="<?=$pelapor["alamat"];?>" />


                    USIA
                    <input type="text" name="usia" 
                    class="form-control mb-2" required
                    value="<?=$pelapor["usia"];?>"/>


                    NO TELEPON
                    <input type="number" name="no_telp" 
                    class="form-control mb-2" required
                    value="<?=$pelapor["no_telp"];?>"/>

                    <button type="submit" class="btn btn-success btn-block"
                    name="edit_pelapor">
                        SIMPAN
                    </button>
                    </form>
                    <?php
                }else{
                    // jika false, maka identitas pemilik digunakan untuk insert
                    ?>
                    <form action="process-identitas_pemilik.php" method="post">
                    ID PELAPOR
                    <input type="text" name="id_pelapor" 
                    class="form-control mb-2" required />

                    NAMA
                    <input type="text" name="nama" 
                    class="form-control mb-2" required />

                    ALAMAT
                    <input type="text" name="alamat" 
                    class="form-control mb-2" required />

                     USIA
                     <input type="text" name="usia" 
                    class="form-control mb-2" required />


                    NO TELEPON
                    <input type="text" name="no_telp" 
                    class="form-control mb-2" required />

                    <button type="submit" class="btn btn-success btn-block"
                    name="simpan_pelapor">
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
