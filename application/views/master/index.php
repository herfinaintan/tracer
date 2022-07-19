<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-3">
        <div class="col">
            <a href="<?= base_url(); ?>master/tambah" class="btn btn-primary float-right">Tambah Baru</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <form action="<?= base_url('master'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Keyword.." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            <h5>Results : <?= $total_rows ?></h5>
            <table class="table">
                <thead style="text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Grup Kuisioner</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <?php if (empty($grup_kuisioner)) : ?>
                        <tr>
                            <td colspan="4">
        </div>
        <div class="alert alert-danger" role="alert">
            Data not found!
        </div>
        </td>
        </tr>
    <?php endif; ?>
    <?php foreach ($grup_kuisioner as $grup) : ?>
        <tr>
            <th><?= ++$start; ?></th>
            <td><?= $grup['nama_grup']; ?></td>
            <td>
                <a href="<?= base_url(); ?>master/ubah/<?= $grup['id_grup']; ?>" class="badge badge-primary"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg></a>
                <a href="<?= base_url(); ?>master/hapus/<?= $grup['id_grup']; ?>" class="badge badge-danger tombol-hapus"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                    </svg></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    <?= $this->pagination->create_links(); ?>

    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->