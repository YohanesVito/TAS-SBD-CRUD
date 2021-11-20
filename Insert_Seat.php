<!DOCTYPE html>
<html>
<head>
    <title>Insert Seat</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <h1>Insert Seat</h1>
    <form action = "Seat.php" method="post" enctype ="multipart/form-data">
    <table>
        <tr>
            <td>id_seat</td>
            <td>:</td>
            <td><input type="text" name = "id_seat"></td>
        </tr>
        <tr>
            <td>seat</td>
            <td>:</td>
            <td><input type="int" name = "seat"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Tambahkan Seat</button></td>
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