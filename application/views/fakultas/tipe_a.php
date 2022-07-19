<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <div class="form-group">
            <label for="kuisioner">Masukkan Pertanyaan</label>
            <input type="text" class="form-control col-sm-6" id="kuisioner" name="kuisioner">
            <small class="form-text text-danger"><?= form_error('kuisioner'); ?></small>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control col-sm-6" id="model_kuisioner" name="model_kuisioner" value="A">
            <small class="form-text text-danger"><?= form_error('model_kuisioner'); ?></small>
        </div>
        <div class="form-group">
            <label for="nama_grup">Grup Kuisioner</label>
            <select class="form-control col-sm-3" id="nama_grup" name="nama_grup">
                <?php foreach ($grup_kuisioner_fakultas as $grup) : ?>
                    <option value="<?= $grup['nama_grup'] ?>"><?= $grup['nama_grup'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->