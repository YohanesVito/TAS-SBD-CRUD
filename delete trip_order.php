<?php
    if(isset($_GET["id"])){
        include "config.php";
        $mysqli->query("delete from trip_order where id_order = '".$_GET['id']."' ") ; 
        $cek = mysqli_affected_rows($mysqli);
        if ($cek > 0) {
            echo "
                    <script>
                        alert('Data berhasil dihapus!');
                        document.location.href = 'view trip_order.php';
                    </script>";
        } 
        else {
            echo "
                <script>
                    alert('Data gagal dihapus!');
                    document.location.href = 'view trip_order.php';
                </script>";
        }    
}
?>