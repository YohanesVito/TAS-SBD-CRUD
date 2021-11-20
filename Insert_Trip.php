<!DOCTYPE html>
<html>
<head>
    <title>Insert Trip</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <h1>Insert Trip</h1>
    <form action = "Trip.php" method="post" enctype ="multipart/form-data">
    <table>
        <tr>
            <td>id_perjalanan</td>
            <td>:</td>
            <td><input type="text" name = "id_perjalanan"></td>
        </tr>
        <tr>
            <td>asal</td>
            <td>:</td>
            <td><input type="text" name = "asal"></td>
        </tr>
        <tr>
            <td>tujuan</td>
            <td>:</td>
            <td><input type="text" name = "tujuan"></td>
        </tr>
        <tr>
            <td>jam</td>
            <td>:</td>
            <td><input type="time" name = "jam"></td>
        </tr>
        <tr>
            <td>harga_tiket</td>
            <td>:</td>
            <td><input type="int" name = "harga_tiket"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Tambahkan Perjalanan</button></td>
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