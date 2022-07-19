<?php
header("Content-type:application/octet-stream/");
header("Content-Disposition:attachment; filename=$title.xls");
header("Pragma: no-active");
header("Expires: 0");
?>

<h3 style="text-align: center;">Laporan Tracer Study Pengguna Alumni : <?= date('d F Y'); ?></h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>Jawaban</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($jawaban1 as $jwb1) : ?>
            <tr style="text-align: center;">
                <td><?= $no++; ?></td>
                <td><?= $jwb1['nama']; ?></td>
                <td><?= $jwb1['id_fakultas']; ?></td>
                <td><?= $jwb1['id_jurusan']; ?></td>
                <td><?= $jwb1['jawaban']; ?></td>
                <td><?= $jwb1['tanggal']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>