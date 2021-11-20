<?php
    if(isset($_POST["id_pelanggan"])){
        include "config.php";

        $ID = $_POST["id"];
        $id_pelanggan = $_POST["id_pelanggan"];
        $nama_pelanggan = $_POST["nama_pelanggan"];
        $no_telp = $_POST["no_telp"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $pekerjaan = $_POST["pekerjaan"];

        $mysqli->query("update pelanggan set id_pelanggan = '".$id_pelanggan."',
        nama_pelanggan = '".$nama_pelanggan."', no_telp = '".$no_telp."', tanggal_lahir = '".$tanggal_lahir."',
        pekerjaan = '".$pekerjaan."' where id_pelanggan ='$ID'");
    }
    header("location:view pelanggan.php");
    exit();
?>