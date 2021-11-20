<?php
    if(isset($_POST["id_pelanggan"])){
        include "config.php";

        $id_pelanggan = $_POST["id_pelanggan"];
        $nama_pelanggan = $_POST["nama_pelanggan"];
        $no_telp = $_POST["no_telp"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $pekerjaan = $_POST["pekerjaan"];

        $mysqli->query("insert into pelanggan values
        ('".$id_pelanggan."','".$nama_pelanggan."','".$no_telp."','".$tanggal_lahir."','".$pekerjaan."' )");

    }
    header("location:Insert_Pelanggan.php");
    exit();
?>