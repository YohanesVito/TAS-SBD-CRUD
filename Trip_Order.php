<?php
    if(isset($_POST["id_order"])){
        include "config.php";

        $id_order = $_POST["id_order"];
        $id_pelanggan = $_POST["id_pelanggan"];
        $id_perjalanan = $_POST["id_perjalanan"];
        $id_seat = $_POST["id_seat"];
        $id_diskon = $_POST["id_diskon"];
        $alamat_jemput = $_POST["alamat_jemput"];
        $alamat_antar = $_POST["alamat_antar"];
        $tanggal = $_POST["tanggal"];


        $mysqli->query("insert into trip_order values
        ('".$id_order."','".$id_pelanggan."','".$id_perjalanan."','".$id_seat."','".$id_diskon."','".$alamat_jemput."','".$alamat_antar."','".$tanggal."')");

    }
    header("location:Insert_Trip_Order.php");
    exit();
?>