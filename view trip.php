<!doctype html>
<html>
<head>
    <title>View Trip</title>
    <link rel="stylesheet" href="view1.css">
</head>
<body>
    <h1>View Trip</h1>
    <table border="1">
    <tr>
        <th>id_perjalanan</th>
        <th>asal</th>
        <th>tujuan</th>
        <th>jam</th>
        <th>harga_tiket</th>
        <th>Opsi</th>
    </tr>
    <?php
        include "config.php";
        $getTrip = $mysqli->query("select * from trip");
        while($fetchTrip = $getTrip->fetch_assoc()){
        ?>
        <tr>
            <td>
                <?=$fetchTrip["id_perjalanan"]?>
            </td>
            <td>
                <?=$fetchTrip["asal"]?>
            </td>
            <td>
                <?=$fetchTrip["tujuan"]?>
            </td>
            <td>
                <?=$fetchTrip["jam"]?>
            </td>
            <td>
                <?=$fetchTrip["harga_tiket"]?>
            </td>
            <td>
                <a href="update trip.php?id=<?=$fetchTrip["id_perjalanan"]?>"><button>Update</button></a>
                <a href="delete trip.php?id=<?=$fetchTrip["id_perjalanan"]?>"><button>Delete</button></a>
            </td>
        </tr>
    <?php
        }
        ?>

    </table>
<a href="index.php"><button>Kembali</button></a>
</body>
</html>