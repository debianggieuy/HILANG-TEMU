<?php
include("koneksi.php");
if (isset($_POST["simpan_identitas_pemilik"])) {
    // tampung data input identitas pemilik dari user
    

    $id_pemilik = $_POST["id_pemilik"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $usia=$_POST["usia"];
    $no_telp= $_POST["no_telp"];


        //membuat perintah sql untuk insert data ke table identitas_pemilik
         $sql = "insert into identitas_pemilik values
        ('id_pelapor','$nama','$alamat','$usia','$no_telp')";

        

        //eksekusi perintah sql
    

    //direct ke halaman list-identitas_pemilik 
    if (mysqli_query($connect, $sql)) {
        header('Location:list-identitas_pemilik.php');
    } else {
        printf('Gagal'.mysqli_error($connect));
        exit();
    }

# untuk update

}else if(isset($_POST["edit_identitas_pemilik"])){
        # menampung dulu data yang akan di update
        $id_pemilik = $_POST["id_pemilik"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $usia = $_POST["usia"];
        $no_telp= $_POST["no_telp"];
        
        $sql = "update identitas_pemilik set id_pemilik='$id_pemilik',
        nama='$nama', alamat='$alamat',usia='$usia',
        no_telp='$no_telp' where id_pemilik='$id_pemilik'";        

        
        if (mysqli_query($connect, $sql)) {
            echo
            header('Location:list-identitas_pemilik.php');
        } else {
            printf('Gagal'.mysqli_error($connect));
            exit();
        }
        
}
?>
