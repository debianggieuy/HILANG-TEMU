<?php
include ("koneksi.php");
if (isset($_POST["simpan_user"])) {
    # data input dari user
    $nama = $_POST["nama"];
    $alamat=$_POST["alamat"]
    $username = $_POST["username"];
    $role = $_POST["role"];

    $sql = "insert into user values
    ('','$nama','$alamat','$username','$role')";

    //eksekusi perintah sql
    if (mysqli_query($connect, $sql)){
        //menuju halaman list karyawan
        header("location:list-user.php");
    }else {
        //gagal
        echo mysqli_error($connect);
    }
}
else if (isset($_POST["edit_user"])) {
    # data yg akan diupdate
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $role = $_POST["role"];
    
    if (empty($_POST["username"])) {
        
        $sql = "update user set nama = '$nama', 
        username = '$username', role = '$role' where id_user = '$id_user'";
    }else {
        $sql = "update user set nama = '$nama',
        username = '$username',  role = '$role'";
    }
    # eksekusi perintah sql
    if(mysqli_query($connect, $sql)){
        header("location:list-user.php");
    }else {
        //gagal
        echo mysqli_error($connect);
    }
}
?>
