<!doctype html>
<html>
<head>
    <title>View Pelanggan</title>
    <link rel="stylesheet" href="view1.css">
</head>
<body>
    <h1>View Pelanggan</h1>
    <table border="1">
    <tr>
        <th>id_pelanggan</th>
        <th>nama_pelanggan</th>
        <th>no_telp</th>
        <th>tanggal_lahir</th>
        <th>pekerjaan</th>
        <th>Opsi</th>
    </tr>
    <?php
        include "config.php";
        $getPelanggan = $mysqli->query("select * from pelanggan");
        while($fetchPelanggan = $getPelanggan->fetch_assoc()){
        ?>
        <tr>
            <td>
                <?=$fetchPelanggan["id_pelanggan"]?>
            </td>
            <td>
                <?=$fetchPelanggan["nama_pelanggan"]?>
            </td>
            <td>
                <?=$fetchPelanggan["no_telp"]?>
            </td>
            <td>
                <?=$fetchPelanggan["tanggal_lahir"]?>
            </td>
            <td>
                <?=$fetchPelanggan["pekerjaan"]?>
            </td>
            <td>
                <a href="update pelanggan.php?id=<?=$fetchPelanggan["id_pelanggan"]?>"><button>Update</button></a>
                <a href="delete pelanggan.php?id=<?=$fetchPelanggan["id_pelanggan"]?>"><button>Delete</button></a>
            </td>
        </tr>
    <?php
        }
        ?>

    </table>
<a href="index.php"><button>Kembali</button></a>
</body>
</html>