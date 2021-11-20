<?php
    if(isset($_GET["id"])){
        include "config.php";
        $mysqli->query("delete from pelanggan where id_pelanggan = '".$_GET['id']."' ") ; 
        $cek = mysqli_affected_rows($mysqli);
        if ($cek > 0) {
            echo "
                    <script>
                        alert('Data berhasil dihapus!');
                        document.location.href = 'view pelanggan.php';
                    </script>";
        } 
        else {
            echo "
                <script>
                    alert('Data gagal dihapus!');
                    document.location.href = 'view pelanggan.php';
                </script>";
        }    
}
?>