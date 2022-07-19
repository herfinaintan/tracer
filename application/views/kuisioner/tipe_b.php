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
            <input type="hidden" class="form-control col-sm-6" id="model_kuisioner" name="model_kuisioner" value="B">
            <small class="form-text text-danger"><?= form_error('model_kuisioner'); ?></small>
        </div>
        <div class="form-group">
            <label for="pilihan">Masukkan Pilihan</label>
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_A" name="pilihan_A" placeholder="Pilihan 1">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_B" name="pilihan_B" placeholder="Pilihan 2">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_C" name="pilihan_C" placeholder="Pilihan 3">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_D" name="pilihan_D" placeholder="Pilihan 4">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_E" name="pilihan_E" placeholder="Pilihan 5">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_F" name="pilihan_F" placeholder="Pilihan 6">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_G" name="pilihan_G" placeholder="Pilihan 7">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_H" name="pilihan_H" placeholder="Pilihan 8">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_I" name="pilihan_I" placeholder="Pilihan 9">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_J" name="pilihan_J" placeholder="Pilihan 10">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_K" name="pilihan_K" placeholder="Pilihan 11">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_L" name="pilihan_L" placeholder="Pilihan 12">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_M" name="pilihan_M" placeholder="Pilihan 13">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_N" name="pilihan_N" placeholder="Pilihan 14">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_O" name="pilihan_O" placeholder="Pilihan 15">
        </div>
        <div class="form-group">
            <label for="nama_grup">Grup Kuisioner</label>
            <select class="form-control col-sm-3" id="nama_grup" name="nama_grup">
                <?php foreach ($grup_kuisioner as $grup) : ?>
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