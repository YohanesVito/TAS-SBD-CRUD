<!doctype html>
<html>
<head>
    <title>View trip order</title>
    <link rel="stylesheet" href="view1.css">
</head>
<body>
    <h1>View trip order</h1>
    <table border="1">
    <tr>
        <th>id_order</th>
        <th>id_pelanggan</th>
        <th>id_perjalanan</th>
        <th>id_seat</th>
        <th>id_diskon</th>
        <th>alamat_jemput</th>
        <th>alamat_antar</th>
        <th>tanggal</th>
        <th>opsi</th>
    </tr>
    <?php
        include "config.php";
        $getTripOrder = $mysqli->query("select * from trip_order");
        while($fetchTripOrder = $getTripOrder->fetch_assoc()){
        ?>
        <tr>
            <td>
                <?=$fetchTripOrder["id_order"]?>
            </td>
            <td>
                <?=$fetchTripOrder["id_pelanggan"]?>
            </td>
            <td>
                <?=$fetchTripOrder["id_perjalanan"]?>
            </td>
            <td>
                <?=$fetchTripOrder["id_seat"]?>
            </td>
            <td>
                <?=$fetchTripOrder["id_diskon"]?>
            </td>
            <td>
                <?=$fetchTripOrder["alamat_jemput"]?>
            </td>
            <td>
                <?=$fetchTripOrder["alamat_antar"]?>
            </td>
            <td>
                <?=$fetchTripOrder["tanggal"]?>
            </td>
            <td>
                <a href="update trip_order.php?id=<?=$fetchTripOrder["id_order"]?>"><button>Update</button></a>
                <a href="delete trip_order.php?id=<?=$fetchTripOrder["id_order"]?>"><button>Delete</button></a>
                <a href="cetak.php?id=<?=$fetchTripOrder["id_order"]?>"><button>Cetak</button></a>
            </td>
        </tr>
    <?php
        }
        ?>

    </table>
<a href="index.php"><button>Kembali</button></a>
</body>
</html>