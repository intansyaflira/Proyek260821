<?php

if($_POST){

    $id_petugas=$_POST['id_petugas'];

    $nama_petugas=$_POST['nama_petugas'];

    $username_petugas=$_POST['username_petugas'];

    $password_petugas=$_POST['password_petugas'];

    $level_petugas=$_POST['level_petugas'];

    if(empty($id_petugas)){

        echo "<script>alert('id petugas tidak boleh kosong');location.href='tambahpetugas.php';</script>";


    } elseif(empty($nama_petugas)){

        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambahpetugas.php';</script>";

    } elseif(empty($username_petugas)) {
        
        echo "<script>alert('username tidak boleh kosong');location.href='tambahpetugas.php';</script>";
    } elseif(empty($password_petugas)) {
        
        echo "<script>alert('password tidak boleh kosong');location.href='tambahpetugas.php';</script>";
    } elseif(empty($level_petugas)) {
        
        echo "<script>alert('level petugas tidak boleh kosong');location.href='tambahpetugas.php';</script>";
    } 
    else {

        include "cekkoneksi.php";

        $insert=mysqli_query($conn,"INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `level`) VALUES ('".$id_petugas."','".$nama_petugas."', '".$username_petugas."', '".$password_petugas."','".$level_petugas."')");

        if($insert){

            echo "<script>alert('Sukses membuat akun');location.href='tambahpetugas.php';</script>";

        } else {

            echo "<script>alert('Gagal membuat akun');location.href='tambahpetugas.php';</script>";

        }

    }

}

?>