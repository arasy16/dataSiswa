<!DOCTYPE html>
<html lang="id-ID">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../icons/bootstrap-icons.css">
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
    <title>Edit Page</title>
</head>

<?php

include "../connection/connection.php";
$data = mysqli_query($connection, "SELECT nama, nis FROM siswa WHERE id = " . $_GET["id_siswa"]);
$siswa = mysqli_fetch_array($data);

?>

<body>
    <div class="container-sm container-md container-lg container-xl h-100">
        <div class="row ">
            <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 my-auto mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <p class="h2 text-center">Edit Data</p>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group mb-2 ">
                                <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="nama" value="<?php echo $siswa['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="exampleInputPassword1" name="nis" value="<?php echo $siswa['nis']; ?>">
                            </div>
                            <button type=" submit" class="btn btn-primary btn-lg btn-block mb-0" name="OK">Simpan</button>
                            <a type="button" class="btn btn-secondary btn-lg btn-block" href="../index.php">Kembali</a>
                        </form>
                        <?php

                        if (isset($_POST["OK"])) {
                            $nama = $_POST["nama"];
                            $nis = $_POST["nis"];
                            $id_siswa = $_GET["id_siswa"];

                            $query = "UPDATE siswa SET nama = '$nama', nis = '$nis' WHERE id = '$id_siswa'";
                            $update = mysqli_query($connection, $query);

                            echo "
                            
                            <script>
                                alert('Data Siswa Berhasil Diubah! ');
                                window.location.replace('../index.php');
                            </script>
                            
                            ";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>