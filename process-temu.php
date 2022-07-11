<?php
include("koneksi.php");
if (isset($_POST["simpan_temu"])) {
    # proses insert new data
    $nopol_temu = $_POST["nopol_temu"];
    $kendaraan=$_POST["kendaraan"];
    $jenis = $_POST["jenis"];
    $warna =$_POST["warna"];
    $merek=$_POST["merek"]
    $tanggal_kejadian = $_POST["tanggal_kejadian"];
    $keterangan=$_POST["keterangan"]

    // membuat perintah SQL utk insert data ke tbl temu
    $sql = "insert into temu values ('$nopol_temu',
    '$kendaraan','$jenis','$warna','$merek','$tanggal_kejadian','$keterangan')";

    // eksekusi perintah / menjalankan perintah SQL
    mysqli_query($connect, $sql);

    // direct / dikembalikan ke halaman list temu
    header("location:list-temu.php");
}

if (isset($_POST["update_temu"])) {
    # tampung data yg akan diupdate
    $nopol_temu = $_POST["nopol_temu"];
    $kendaraan=$_POST["kendaraan"];
    $jenis = $_POST["jenis"];
    $warna=$_POST["warna"];
    $merek=$_POST["merek"];
    $tanggal_kejadian = $_POST["tanggal_kejadian"];
    $keterangan=$_POST["keterangan"];

    # eksekusi perintah SQL
    mysqli_query($connect, $sql);

    # direct / dikembalikan ke halaman list temu
    header("location:list-temu.php");
}
elseif (isset($_GET["nopol_temu"])) {
    $nopol_temu = $_GET["nopol_temu"];
    
    # hapus data yg ada di tabel temu
    $sql = "delete from temu where nopol_temu='$nopol_temu'";
    if (mysqli_query($connect, $sql)) {
        header("location:list-temu.php");
    } else {
        echo mysqli_error($connect);
    }
}
?>
