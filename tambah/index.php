<!DOCTYPE html>
<html lang="id-ID">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../icons/bootstrap-icons.css">
    <title>Tambah Data</title>
    <style>
        html,
        body {
            height: 100%;
        }

        /* CSS only for examples not required for centering */
        .row {
            height: 100%;
        }
    </style>
</head>

<?php

include "../connection/connection.php";
if (isset($_POST["OK"])) {

    $nama = $_POST["nama"];
    $nis = $_POST["nis"];

    $insertsiswa = "INSERT INTO siswa (nama, nis) VALUES ('$nama' , '$nis')";
    $result = mysqli_query($connection, $insertsiswa);

    echo "
        
        <script>
            alert('Siswa Berhasil Di Tambahkan');
            window.location.replace('../index.php');
        </script>
        ";
}
?>

<body>
    <div class="container-sm container-md container-lg container-xl h-100">
        <div class="row ">
            <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 my-auto mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <p class="h2 text-center">Tambah Data</p>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group mb-2 ">
                                <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama" name="nama">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Masukan NIS" name="nis">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block mb-0" name="OK">Simpan</button>
                            <a type="button" class="btn btn-secondary btn-lg btn-block" href="../index.php">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.js"></script>
</body>

</html>