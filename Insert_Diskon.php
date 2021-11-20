<!DOCTYPE html>
<html>
<head>
    <title>Insert Diskon</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <h1>Insert Diskon</h1>
    <form action = "Diskon.php" method="post" enctype ="multipart/form-data">
    <table>
        <tr>
            <td>id_diskon</td>
            <td>:</td>
            <td><input type="text" name = "id_diskon"></td>
        </tr>
        <tr>
            <td>diskon</td>
            <td>:</td>
            <td><input type="int" name = "diskon"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Tambahkan Diskon</button></td>
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
</body>
</html>
