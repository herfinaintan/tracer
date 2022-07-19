<div class="container-fluid">

    <!-- Page Heading -->

    <table class="table table-stripped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>Jawaban</th>
            <th>Tanggal</th>
        </tr>
        <?php $no = 1;
        foreach ($jawaban1 as $jwb1) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $jwb1['nama']; ?></td>
                <td><?= $jwb1['id_fakultas']; ?></td>
                <td><?= $jwb1['id_jurusan']; ?></td>
                <td><?= $jwb1['jawaban_A']; ?></td>
                <td><?= $jwb1['tanggal']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= site_url('Menu/cetak_pengguna_jurusan/' . $id_jurusan) ?>" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Cetak</a>
    <a href="<?= base_url('menu/excel_pengguna_jurusan/' . $id_jurusan) ?>" class="btn btn-success"><i class="fa fa-file-excel"></i> Excel</a>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->