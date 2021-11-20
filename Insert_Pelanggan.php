<!DOCTYPE html>
<html>
<head>
    <title>Insert Pelanggan</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <h1>Insert Pelanggan</h1>
    <form action = "Pelanggan.php" method="post" enctype ="multipart/form-data">
    <div>
    <table>
        <tr id='tr1'>
            <td>Id_Pelanggan</td>
            <td>:</td>
            <td><input type="text" name = "id_pelanggan" required></td>
        </tr>
        <tr id='tr1'>
            <td>Nama_Pelanggan</td>
            <td>:</td>
            <td><input type="text" name = "nama_pelanggan" required></td>
        </tr>
        <tr id='tr1'>
            <td>No_Telepon</td>
            <td>:</td>
            <td><input type="text" name = "no_telp" required></td>
        </tr>
        <tr id='tr1'>
            <td>Tanggal_Lahir</td>
            <td>:</td>
            <td><input type="date" name = "tanggal_lahir" required></td>
        </tr>
        <tr id='tr1'>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type="text" name = "pekerjaan"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Tambahkan Pelanggan</button></td>
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
</div>
</body>
</html>