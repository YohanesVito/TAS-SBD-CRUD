<?php
    if(isset($_POST["id_diskon"])){
        include "config.php";

        $id_diskon = $_POST["id_diskon"];
        $diskon = $_POST["diskon"];

        $mysqli->query("insert into diskon values
        ('".$id_diskon."','".$diskon."')");

    }
    header("location:Insert_Diskon.php");
    exit();
?>