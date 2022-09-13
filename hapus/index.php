<?php

include "../connection/connection.php";
$id_siswa = $_GET["id_siswa"];
$hapus = "DELETE FROM siswa WHERE id = '$id_siswa'";
$deleteSiswa = mysqli_query($connection, $hapus);

echo "
    
        <script>
            alert('Data siswa berhasil dihapus!');
            window.location.replace('../index.php');
        </script>
    
    ";
