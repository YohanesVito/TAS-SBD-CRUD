<!doctype html>
<html>
<head>
    <title>View Diskon</title>
    <link rel="stylesheet" href="view1.css">
</head>
<body>
    <h1>View Diskon</h1>
    <table border="1">
    <tr>
        <th>id_diskon</th>
        <th>diskon</th>
        <th>Opsi</th>
    </tr>
    <?php
        include "config.php";
        $getDiskon = $mysqli->query("select * from diskon");
        while($fetchDiskon = $getDiskon->fetch_assoc()){
        ?>
        <tr>
            <td>
                <?=$fetchDiskon["id_diskon"]?>
            </td>
            <td>
                <?=$fetchDiskon["diskon"]?>
            </td>
            <td>
                <a href="update diskon.php?id=<?=$fetchDiskon["id_diskon"]?>"><button>Update</button></a>
                <a href="delete diskon.php?id=<?=$fetchDiskon["id_diskon"]?>"><button>Delete</button></a>
            </td>
        </tr>
    <?php
        }
        ?>

    </table>
<a href="index.php"><button>Kembali</button></a>
</body>
</html>