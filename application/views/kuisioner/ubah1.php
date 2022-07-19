<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $kuisioner['id'];?>">    
        <div class="form-group">
            <label for="kuisioner">Masukkan Pertanyaan</label>
            <input type="text" class="form-control col-sm-6" id="kuisioner" name="kuisioner" value="<?= $kuisioner['kuisioner'] ?>">
            <small class="form-text text-danger"><?= form_error('kuisioner'); ?></small>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control col-sm-6" id="model_kuisioner" name="model_kuisioner" value="<?= $kuisioner['model_kuisioner'];?>">
            <small class="form-text text-danger"><?= form_error('model_kuisioner'); ?></small>
        </div>
        <div class="form-group">
            <label for="pilihan">Masukkan Pilihan </label>
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_A" name="pilihan_A" placeholder="Pilihan 1" value="<?= $kuisioner['pilihan_A'] ?>">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_B" name="pilihan_B" placeholder="Pilihan 2" value="<?= $kuisioner['pilihan_B'] ?>">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_C" name="pilihan_C" placeholder="Pilihan 3" value="<?= $kuisioner['pilihan_C'] ?>">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_D" name="pilihan_D" placeholder="Pilihan 4" value="<?= $kuisioner['pilihan_D'] ?>">
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->