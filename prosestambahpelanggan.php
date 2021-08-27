<?php

if($_POST){

    $id_pelanggan=$_POST['id_pelanggan'];

    $nama_pelanggan=$_POST['nama_pelanggan'];

    $alamat_pelanggan=$_POST['alamat_pelanggan'];

    $notelp_pelanggan=$_POST['notelp_pelanggan'];

    if(empty($id_pelanggan)){

        echo "<script>alert('id pelanggan tidak boleh kosong');location.href='tambahpelanggan.php';</script>";


    } elseif(empty($nama_pelanggan)){

        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambahpelanggan.php';</script>";

    } elseif(empty($alamat_pelanggan)) {
        
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambahpelanggan.php';</script>";
    } elseif(empty($notelp_pelanggan)) {
        
        echo "<script>alert('no telp tidak boleh kosong');location.href='tambahpelanggan.php';</script>";
    } 
    else {

        include "cekkoneksi.php";

        $insert=mysqli_query($conn,"INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telp`) VALUES ('".$id_pelanggan."','".$nama_pelanggan."', '".$alamat_pelanggan."', '".$notelp_pelanggan."')");

        if($insert){

            echo "<script>alert('Sukses membuat akun');location.href='tambahpelanggan.php';</script>";

        } else {

            echo "<script>alert('Gagal membuat akun');location.href='tambahpelanggan.php';</script>";

        }

    }

}

?>