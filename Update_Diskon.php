<?php
    if(isset($_POST["id_diskon"])){
        include "config.php";

        $ID = $_POST["id"];
        $id_diskon = $_POST["id_diskon"];
        $diskon = $_POST["diskon"];

        $mysqli->query("update diskon set id_diskon = '".$id_diskon."',
        diskon = '".$diskon."' where id_diskon ='$ID'");
    }
    header("location:view diskon.php");
    exit();
?>