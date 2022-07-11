<?php
include 'koneksi.php';
$id_pelapor = $_GET['id_pelapor'];
//echo $id

//memberikan perintah sql
$sql ="delete from pelapor where id_pelapor= '".$id_pelapor."'" ;

$result = mysqli_query($connect,$sql);

if ($result) {
    header('Location:list-pelapor.php');
} else {

    printf('Gagal ya'.mysqli_error($connect));
    exit();
}

?>
