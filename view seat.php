<!doctype html>
<html>
<head>
    <title>View Seat</title>
    <link rel="stylesheet" href="view1.css">
</head>
<body>
    <h1>View Seat</h1>
    <table border="1">
    <tr>
        <th>id_seat</th>
        <th>seat</th>
        <th>Opsi</th>
    </tr>
    <?php
        include "config.php";
        $getSeat = $mysqli->query("select * from seat");
        while($fetchSeat = $getSeat->fetch_assoc()){
        ?>
        <tr>
            <td>
                <?=$fetchSeat["id_seat"]?>
            </td>
            <td>
                <?=$fetchSeat["seat"]?>
            </td>
            <td>
                <a href="update seat.php?id=<?=$fetchSeat["id_seat"]?>"><button>Update</button></a>
                <a href="delete seat.php?id=<?=$fetchSeat["id_seat"]?>"><button>Delete</button></a>
            </td>
        </tr>
    <?php
        }
        ?>

    </table>
<a href="index.php"><button>Kembali</button></a>
</body>
</html>