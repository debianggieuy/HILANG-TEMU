<?php
include 'koneksi.php';
$nopol_hilang = $_GET['nopol_temu'];
//echo $id

//memberikan perintah sql
$sql ="delete from temu where nopol_temu= '".$nopol_temu."'" ;

$result = mysqli_query($connect,$sql);

if ($result) {
    header('Location:list-temu.php');
} else {

    printf('Gagal ya'.mysqli_error($connect));
    exit();
}

?>
