<?php
    if(isset($_GET["id"])){
        include "config.php";
        $mysqli->query("delete from diskon where id_diskon = '".$_GET['id']."' ") ; 
        $cek = mysqli_affected_rows($mysqli);
        if ($cek > 0) {
            echo "
                    <script>
                        alert('Data berhasil dihapus!');
                        document.location.href = 'view diskon.php';
                    </script>";
        } 
        else {
            echo "
                <script>
                    alert('Data gagal dihapus!');
                    document.location.href = 'view diskon.php';
                </script>";
        }    
}
?>