<?php
include 'koneksi.php';
$nopol_hilang = $_GET['nopol_hilang'];
//echo $id

//memberikan perintah sql
$sql ="delete from hilang where nopol_hilang = '".$nopol_hilang."'" ;

$result = mysqli_query($connect,$sql);

if ($result) {
    header('Location:list-hilang.php');
} else {

    printf('Gagal ya'.mysqli_error($connect));
    exit();
}

?>
