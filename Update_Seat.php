<?php
    if(isset($_POST["id_seat"])){
        include "config.php";

        $ID = $_POST["id"];
        $id_seat = $_POST["id_seat"];
        $seat = $_POST["seat"];

        $mysqli->query("update seat set id_seat = '".$id_seat."',
        seat = '".$seat."' where id_seat ='$ID'");
    }
    header("location:view seat.php");
    exit();
?>