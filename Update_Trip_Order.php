<?php
    if(isset($_POST["id_order"])){
        include "config.php";

        $ID = $_POST["id"];
        $id_order = $_POST["id_order"];
        $id_pelanggan = $_POST["id_pelanggan"];
        $id_perjalanan = $_POST["id_perjalanan"];
        $id_seat = $_POST["id_seat"];
        $id_diskon = $_POST["id_diskon"];
        $alamat_jemput = $_POST["alamat_jemput"];
        $alamat_antar = $_POST["alamat_antar"];
        $tanggal = $_POST["tanggal"];


        $mysqli->query("update trip_order set id_order = '".$id_order."', id_pelanggan = '".$id_pelanggan."',
        id_perjalanan = '".$id_perjalanan."', id_seat = '".$id_seat."', id_diskon = '".$id_diskon."', 
        alamat_jemput = '".$alamat_jemput."', alamat_antar = '".$alamat_antar."',
        tanggal = '".$tanggal."' where id_order ='$ID'");
    }
    header("location:view trip_order.php");
    exit();
?>