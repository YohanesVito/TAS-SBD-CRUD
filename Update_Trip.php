<?php
    if(isset($_POST["id_perjalanan"])){
        include "config.php";

        $ID = $_POST["id"];
        $id_perjalanan = $_POST["id_perjalanan"];
        $asal = $_POST["asal"];
        $tujuan = $_POST["tujuan"];
        $jam = $_POST["jam"];
        $harga_tiket = $_POST["harga_tiket"];


        $mysqli->query("update trip set id_perjalanan = '".$id_perjalanan."',
        asal = '".$asal."', tujuan = '".$tujuan."', jam = '".$jam."', harga_tiket = '".$harga_tiket."' where id_perjalanan ='$ID'");
    }
    header("location:view trip.php");
    exit();
?>