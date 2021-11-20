<?php
session_start();
    if(!isset($_GET["id"])){
        header("location:view trip.php");
        exit();
    }
    include "config.php";
    $id = $_GET['id'];

    $getData = $mysqli->query("select * from trip where id_perjalanan = '$id'");

    if($getData->num_rows==0){
        header("location:view trip.php");
        exit();
    }
    $getData = $getData->fetch_assoc();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Update Trip</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <h1>Update Trip</h1>
    <form action = "Update_Trip.php" method="post" enctype ="multipart/form-data">
    <input type ="hidden" name= "id" value= "<?=$_GET["id"]?>">
    <table>
        <tr>
            <td>id_perjalanan</td>
            <td>:</td>
            <td><input type="text" name = "id_perjalanan" required></td>
        </tr>
        <tr>
            <td>asal</td>
            <td>:</td>
            <td><input type="text" name = "asal" required></td>
        </tr>
        <tr>
            <td>tujuan</td>
            <td>:</td>
            <td><input type="text" name = "tujuan" required></td>
        </tr>
        <tr>
            <td>jam</td>
            <td>:</td>
            <td><input type="time" name = "jam" required></td>
        </tr>
        <tr>
            <td>harga_tiket</td>
            <td>:</td>
            <td><input type="int" name = "harga_tiket" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Update Perjalanan</button></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button>
                    <a href='view trip.php'>Kembali</a>
                </button>
            </td>
        </tr>
    </table>
</body>
</html>