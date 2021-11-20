<?php
include "connect.php";
$data_edit = mysqli_query($connection,"select * from invoice where invoice_id = '".$_GET["invoice_id"]."' ");
$result = mysqli_fetch_array($data_edit);
?>


<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Menu Lihat Data</title>
  </head>
    <body >
        <!-- Mulai Dari ini Navigation Bar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Database Pembelian Akun Zoom</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active" href="insert_Menu.php">Masukan Data<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="view.php">Lihat Data</a>
            </div>
        </div>
        </nav>
        <!-- Batas Akhir Navigation Bar -->

        <div class="jumbotron jumbotron-fluid">
            <center>
                <div class="container pt-5" >
                    <img src="inv.jpg" class="rounded-circle" width = "15%" >
                    <h2 >Halaman Update Data Invoice</h2>
                </div>
            </center>
        </div>


    
    <form action="" method="POST">
    <center>
    <table>
            <tr>
                <td>ID Invoice</td>
                <td>:</td>
                <td>
                    <div class="from-group">
                        <input type="text" name="invoice_id" class="form-control" value ="<?php echo $result["invoice_id"] ?>" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td>ID Pelanggan</td>
                <td>:</td>
                <td> 
                    <div class="from-group">
                    <?php
                    $mysqli = NEW MySQLi("localhost","root","","tugas3_sbdd");
                    $res = $mysqli -> query("select * from customer");
                    ?>
                   
                    <select name="user_id" class="form-control">
                        <option value="<?php echo $result["user_id"] ?>"><?php echo $result["user_id"] ?></option>
                        <?php
                            while($row = $res -> fetch_assoc()) {
                            $idkota = $row["user_id"];
                                if($idkota != $result["user_id"]){
                                    print("<option value = '$idkota'>$idkota</option>");
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
            <td>ID Plann</td>
                <td>:</td>
                <td> 
                    <div class="from-group">
                    <?php
                    $mysqli = NEW MySQLi("localhost","root","","tugas3_sbdd");
                    $res = $mysqli -> query("select * from planning");
                    ?>
                   
                    <select name="plan_id" class="form-control">
                        <option value="<?php echo $result["plan_id"] ?>"><?php echo $result["plan_id"] ?></option>
                        <?php
                            while($row = $res -> fetch_assoc()) {
                            $idkota = $row["plan_id"];
                                if($idkota != $result["plan_id"]){
                                    print("<option value = '$idkota'>$idkota</option>");
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ID Payment CC</td>
                <td>:</td>
                <td> 
                    <div class="from-group">
                    <?php
                    $mysqli = NEW MySQLi("localhost","root","","tugas3_sbdd");
                    $res = $mysqli -> query("select * from payment_cc");
                    ?>
                   
                    <select name="payment_id_CC" class="form-control">
                        <option value="<?php echo $result["payment_CC"] ?>"><?php echo $result["payment_CC"] ?></option>
                        <?php
                            while($row = $res -> fetch_assoc()) {
                            $idkota = $row["payment_id"];
                                if($idkota != $result["payment_CC"]){
                                    print("<option value = '$idkota'>$idkota</option>");
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
            <td>ID Payment PayPal</td>
                <td>:</td>
                <td>       
                    <div class="from-group">
                    
                    <?php
                    $mysqli = NEW MySQLi("localhost","root","","tugas3_sbdd");
                    $res = $mysqli -> query("select * from payment_pay_pal");
                    ?>
                   
                    <select name="payment_id_PayPal" class="form-control" >
                        <option value="<?php echo $result["payment_Pay_Pal"] ?>"><?php echo $result["payment_Pay_Pal"] ?></option>
                        <?php
                            while($row = $res -> fetch_assoc()) {
                            $idkota = $row["payment_id"];
                                if($idkota != $result["payment_Pay_Pal"]){
                                    print("<option value = '$idkota'>$idkota</option>");
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Transaksi</td>
                <td>:</td>
                <td>
                    <div class="from-group">
                        <input type="date"  class="form-control" name="transaction_date" value ="<?php echo $result["transaction_date"] ?>" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td>
                    <div class="from-group">
                        <input type="integer" name="total_price" class="form-control" value ="<?php echo $result["total_price"] ?>" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan"  class="btn btn-success" value="Simpan"></td>
            </tr>
    </table><br><br><br>
    </center>
    </form>

    <?php
    
    if(isset($_POST['invoice_id'])){
        $update = mysqli_query($connection,"update invoice set 
        invoice_id = '".$_POST["invoice_id"]."',
        user_id = '".$_POST["user_id"]."',
        plan_id = '".$_POST["plan_id"]."',
        payment_CC = '".$_POST["payment_id_CC"]."',
        payment_Pay_Pal = '".$_POST["payment_id_PayPal"]."',
        transaction_date= '".$_POST["transaction_date"]."',
        total_price = '".$_POST["total_price"]."' where invoice_id= '".$_GET["invoice_id"]."'");

        if($update){
            echo "
            <script >
                alert('Data berhasil diubah!');
                document.location.href = 'view_Invoice.php';
            </script>";
        }else{
            echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'insert_Insert.php';
            </script>";
        }
    }
    ?>
</body>
</html>