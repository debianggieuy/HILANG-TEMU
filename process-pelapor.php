<?php
include("koneksi.php");
if (isset($_POST["simpan_pelapor"])) {
    // tampung data input pelapor dari user
    

    $id_pelapor= $_POST["id_pelapor"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $usia=$_POST["usia"];
    $no_telp= $_POST["no_telp"];


        //membuat perintah sql untuk insert data ke table pelapor
         $sql = "insert into pelapor values
        ('id_pelapor','$nama','$alamat','$usia','$no_telp')";


        //eksekusi perintah sql
    

    //direct ke halaman list-identitas_pemilik
    if (mysqli_query($connect, $sql)) {
        header('Location:list-pelapor.php');
    } else {
        printf('Gagal'.mysqli_error($connect));
        exit();
    }

# untuk update

}else if(isset($_POST["edit_pelapor"])){
        # menampung dulu data yang akan di update
        $id_pelapor = $_POST["id_pelapor"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $usia = $_POST["usia"];
        $no_telp= $_POST["no_telp"];
        
        $sql = "update pelapor set id_pelapor='$id_pelapor',
        nama='$nama', alamat='$alamat',usia='$usia',
        no_telp='$no_telp' where id_pelapor='$id_pelapor'";        

        
        if (mysqli_query($connect, $sql)) {
            header('Location:list-pelapor.php');
        } else {
            printf('Gagal'.mysqli_error($connect));
            exit();
        }
        
}
?>
