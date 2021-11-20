<?php
session_start();
    if(!isset($_GET["id"])){
        header("location:view diskon.php");
        exit();
    }
    include "config.php";
    $id = $_GET['id'];

    $getData = $mysqli->query("select * from diskon where id_diskon = '$id'");

    if($getData->num_rows==0){
        header("location:view diskon.php");
        exit();
    }
    $getData = $getData->fetch_assoc();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Update Diskon</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <h1>Update Diskon</h1>
    <form action = "Update_Diskon.php" method="post" enctype ="multipart/form-data">
    <input type ="hidden" name= "id" value= "<?=$_GET["id"]?>">
    <table>
        <tr>
            <td>id_diskon</td>
            <td>:</td>
            <td><input type="text" name = "id_diskon" required> </td>
        </tr>
        <tr>
            <td>diskon</td>
            <td>:</td>
            <td><input type="int" name = "diskon" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Update Diskon</button></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button>
                    <a href='view diskon.php'>Kembali</a>
                </button>
            </td>
        </tr>
</body>
</html>