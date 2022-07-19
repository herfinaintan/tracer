<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body onload="window.print()">

    <!-- Begin Page Content -->
    <div class="jumbotron" style="background-color: white;">

        <h1 class=" mb-4 text-gray-800" style="text-align: center;">LAPORAN TRACER STUDY ALUMNI</h1>
        <h4 class=" text-gray-800" style="text-align: center;">Universitas Jenderal Soedirman</h4>
        <h4 class=" text-gray-800" style="text-align: center;">Jl. Kampus No.100</h4>
        <hr class="my-4" style="height: 5%;">

        <p class="mb-4 text-gray-800" style="text-align: center;">Laporan Alumni</p>

        <table class="table table-bordered">
            <thead style="text-align: center;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Jurusan</th>
                    <th>Jawaban</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                <?php $no = 1;
                foreach ($jawaban as $row) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['fakultas_id']; ?></td>
                        <td><?= $row['jurusan_id']; ?></td>
                        <td><?= $row['jawaban']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
    <!-- /.container-fluid -->

</body>

</html>