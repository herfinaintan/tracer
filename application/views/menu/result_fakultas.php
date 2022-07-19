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
        foreach ($jawaban as $jwb) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $jwb['nama']; ?></td>
                <td><?= $jwb['fakultas_id']; ?></td>
                <td><?= $jwb['jurusan_id']; ?></td>
                <td><?= $jwb['jawaban_A']; ?></td>
                <td><?= $jwb['tanggal']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= site_url('Menu/cetak_fakultas/' . $fakultas_id) ?>" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Cetak</a>
    <a href="<?= base_url('menu/excel_fakultas/' . $fakultas_id) ?>" class="btn btn-success"><i class="fa fa-file-excel"></i> Excel</a>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->