<?php
    if(isset($_POST["id_seat"])){
        include "config.php";

        $id_seat = $_POST["id_seat"];
        $seat = $_POST["seat"];

        $mysqli->query("insert into seat values
        ('".$id_seat."','".$seat."')");

    }
    header("location:Insert_Seat.php");
    exit();
?>