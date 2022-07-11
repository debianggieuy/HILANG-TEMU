<?php
include("koneksi.php");
if (isset($_POST["simpan_hilang"])) {
    # proses insert new data
    $nopol_hilang = $_POST["nopol_hilang"];
    $kendaraan=$_POST["kendaraan"];
    $jenis = $_POST["jenis"];
    $warna =$_POST["warna"];
    $merek=$_POST["merek"]
    $tanggal_kejadian = $_POST["tanggal_kejadian"];
    $keterangan=$_POST["keterangan"]

    // membuat perintah SQL utk insert data ke tbl hilang
    $sql = "insert into hilang values ('$nopol_hilang',
    '$kendaraan','$jenis','$warna','$merek','$tanggal_kejadian','$keterangan')";

    // eksekusi perintah / menjalankan perintah SQL
    mysqli_query($connect, $sql);

    // direct / dikembalikan ke halaman list hilang
    header("location:list-hilang.php");
}

if (isset($_POST["update_hilang"])) {
    # tampung data yg akan diupdate
    $nopol_hilang = $_POST["nopol_hilang"];
    $kendaraan=$_POST["kendaraan"];
    $jenis = $_POST["jenis"];
    $warna=$_POST["warna"];
    $merek=$_POST["merek"];
    $tanggal_kejadian = $_POST["tanggal_kejadian"];
    $keterangan=$_POST["keterangan"];

    # eksekusi perintah SQL
    mysqli_query($connect, $sql);

    # direct / dikembalikan ke halaman list hilang
    header("location:list-hilang.php");
}
elseif (isset($_GET["nopol_hilang"])) {
    $nopol_hilang = $_GET["nopol_hilang"];
    
    # hapus data yg ada di tabel hilang
    $sql = "delete from hilang where nopol_hilang='$nopol_hilang'";
    if (mysqli_query($connect, $sql)) {
        header("location:list-hilang.php");
    } else {
        echo mysqli_error($connect);
    }
}
?>
 