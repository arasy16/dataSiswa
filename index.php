<!DOCTYPE html>
<html lang="id-ID">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="icons/bootstrap-icons.css">
    <title>CRUD Sederhana</title>
</head>
<?php

include "connection/connection.php";
$datasiswa = mysqli_query($connection, "SELECT * FROM siswa");

?>

<body>
    <div class="container-sm container-md container-lg container-xl mt-4 mb-4">
        <h1 class="d-flex justify-content-center ">Data siswa</h1>
    </div>
    <div class="container-sm container-md container-lg container-xl">
        <a class="btn btn-primary btn-md mb-1" href="tambah/index.php" role="button"> <i class="bi bi-plus-square  mr-2"></i>Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-striped table-hover text-center">
                <tr class="thead-dark">
                    <th scope="col">Nama</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Aksi</th>
                </tr>
                <?php while ($rows = mysqli_fetch_array($datasiswa)) { ?>
                    <tr>
                        <td><?php echo $rows["nama"] ?></td>
                        <td><?php echo $rows["nis"] ?></td>
                        <td>
                            <ul class="list-grup">
                                <li class="d-inline">
                                    <a class="btn btn-warning btn-md mb-2" href="edit/index.php?id_siswa=<?php echo $rows["id"] ?>" role="button">
                                        <i class="bi bi-pencil-square "></i>
                                    </a>
                                </li>
                                <li class="d-inline">
                                    <a class="btn btn-danger btn-md mb-2" href="hapus/index.php?id_siswa=<?php echo $rows["id"] ?>" role="button">
                                        <i class="bi bi-trash "></i>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>

</html>