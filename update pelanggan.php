<?php
session_start();
    if(!isset($_GET["id"])){
        header("location:view pelanggan.php");
        exit();
    }
    include "config.php";
    $id = $_GET['id'];

    $getData = $mysqli->query("select * from pelanggan where id_pelanggan = '$id'");

    if($getData->num_rows==0){
        header("location:view pelanggan.php");
        exit();
    }
    $getData = $getData->fetch_assoc();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Update Pelanggan</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <h1>Update Pelanggan</h1>
    <form action = "Update_Pelanggan.php" method="post" enctype ="multipart/form-data">
    <input type ="hidden" name= "id" value= "<?=$_GET["id"]?>">
    <table>
        <tr>
            <td>id_pelanggan</td>
            <td>:</td>
            <td><input type="text" name = "id_pelanggan"> </td>
        </tr>
        <tr>
            <td>nama_pelanggan</td>
            <td>:</td>
            <td><input type="text" name = "nama_pelanggan"></td>
        </tr>
        <tr>
            <td>no_telp</td>
            <td>:</td>
            <td><input type="text" name = "no_telp"></td>
        </tr>
        <tr >
            <td>Tanggal_Lahir</td>
            <td>:</td>
            <td><input type="date" name = "tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type="text" name = "pekerjaan"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Update Pelanggan</button></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button>
                    <a href='view pelanggan.php'>Kembali</a>
                </button>
            </td>
        </tr>
</body>
</html>