<!DOCTYPE html>
<html>
<head>
    <title>Insert Trip Order</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <h1>Insert Trip Order</h1>
    <form action = "Trip_Order.php" method="post" enctype ="multipart/form-data">
    <table>
        <tr>
            <td>id_order</td>
            <td>:</td>
            <td><input type="int" name = "id_order"></td>
        </tr>
        <tr>
            <td>id_pelanggan</td>
            <td>:</td>
            <td>
                <?php
                $mysqli = NEW MySQLi("localhost","root","","kencana travel");

                $res = $mysqli->query("select * from pelanggan");
                ?>
                <select name="id_pelanggan">
                
                <?php
                while($rows = $res->fetch_assoc()) {
                    $id_pelanggan = $rows["id_pelanggan"]." ".$rows["nama_pelanggan"];
                    echo"<option value ='$id_pelanggan'>$id_pelanggan</option>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>id_perjalanan</td>
            <td>:</td>
            <td>
                <?php
                $mysqli = NEW MySQLi("localhost","root","","kencana travel");

                $res = $mysqli->query("select * from trip");
                ?>
                <select name="id_perjalanan">
                
                <?php
                while($rows = $res->fetch_assoc()) {
                    $id_perjalanan = $rows["id_perjalanan"]." ".$rows["asal"]."-".$rows["tujuan"];
                    echo"<option value ='$id_perjalanan'>$id_perjalanan</option>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>id_seat</td>
            <td>:</td>
            <td>
                <?php
                $mysqli = NEW MySQLi("localhost","root","","kencana travel");

                $res = $mysqli->query("select * from seat");
                ?>
                <select name="id_seat">
                
                <?php
                while($rows = $res->fetch_assoc()) {
                    $id_seat = $rows["id_seat"]." ".$rows["seat"];
                    echo"<option value ='$id_seat'>$id_seat</option>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>id_diskon</td>
            <td>:</td>
            <td>
                <?php
                $mysqli = NEW MySQLi("localhost","root","","kencana travel");

                $res = $mysqli->query("select * from diskon");
                ?>
                <select name="id_diskon">
                
                <?php
                while($rows = $res->fetch_assoc()) {
                    $id_diskon = $rows["id_diskon"]." ".$rows["diskon"];
                    echo"<option value ='$id_diskon'>$id_diskon</option>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>alamat_jemput</td>
            <td>:</td>
            <td><input type="text" name = "alamat_jemput"></td>
        </tr>
        <tr>
            <td>alamat_antar</td>
            <td>:</td>
            <td><input type="text" name = "alamat_antar"></td>
        </tr>
        <tr>
            <td>tanggal</td>
            <td>:</td>
            <td><input type="date" name = "tanggal"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Tambahkan Order</button></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button>
                    <a href='Index.php'>Kembali</a>
                </button>
            </td>
        </tr>
    </table>
</body>
</html>