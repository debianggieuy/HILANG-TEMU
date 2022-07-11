<?php
include 'koneksi.php';
$id_pemilik = $_GET['id_pemilik'];
//echo $id

//memberikan perintah sql
$sql ="delete from identitas_pemilik where id_pemilik = '".$id_pemilik."'" ;

$result = mysqli_query($connect,$sql);

if ($result) {
    header('Location:list-identitas_pemilik .php');
} else {

    printf('Gagal ya'.mysqli_error($connect));
    exit();
}

?>
