<?php
session_start();
    if(!isset($_GET["id"])){
        header("location:view seat.php");
        exit();
    }
    include "config.php";
    $id = $_GET['id'];

    $getData = $mysqli->query("select * from seat where id_seat = '$id'");

    if($getData->num_rows==0){
        header("location:view seat.php");
        exit();
    }
    $getData = $getData->fetch_assoc();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Update Seat</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <h1>Update Seat</h1>
    <form action = "Update_Seat.php" method="post" enctype ="multipart/form-data">
    <input type ="hidden" name= "id" value= "<?=$_GET["id"]?>">
    <table>
        <tr>
            <td>id_seat</td>
            <td>:</td>
            <td><input type="text" name = "id_seat" required> </td>
        </tr>
        <tr>
            <td>seat</td>
            <td>:</td>
            <td><input type="int" name = "seat" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Update Seat</button></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button>
                    <a href='view seat.php'>Kembali</a>
                </button>
            </td>
        </tr>
</body>
</html>