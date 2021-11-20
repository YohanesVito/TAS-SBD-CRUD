<?php
    if(isset($_POST["id_perjalanan"])){
        include "config.php";

        $id_perjalanan = $_POST["id_perjalanan"];
        $asal = $_POST["asal"];
        $tujuan = $_POST["tujuan"];
        $jam = $_POST["jam"];
        $harga_tiket = $_POST["harga_tiket"];


        $mysqli->query("insert into trip values
        ('".$id_perjalanan."','".$asal."','".$tujuan."','".$jam."','".$harga_tiket."')");

    }
    header("location:Insert_Trip.php");
    exit();
?>