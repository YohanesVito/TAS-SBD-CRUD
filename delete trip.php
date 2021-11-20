<?php
    if(isset($_GET["id"])){
        include "config.php";
        $mysqli->query("delete from trip where id_perjalanan = '".$_GET['id']."' ") ; 
        $cek = mysqli_affected_rows($mysqli);
        if ($cek > 0) {
            echo "
                    <script>
                        alert('Data berhasil dihapus!');
                        document.location.href = 'view trip.php';
                    </script>";
        } 
        else {
            echo "
                <script>
                    alert('Data gagal dihapus!');
                    document.location.href = 'view trip.php';
                </script>";
        }    
}
?>