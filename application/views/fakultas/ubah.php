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
            <label for="nama_grup">Grup Kuisioner</label>
            <select class="form-control col-sm-3" id="nama_grup" name="nama_grup">
                    <?php foreach ($grup_kuisioner as $grup) : ?>
                        <?php if ($grup == $grup_kuisioner['nama_grup']) : ?>
                            <option value="<?= $grup['nama_grup']; ?>" selected><?= $grup['nama_grup']; ?></option>
                        <?php else : ?>
                            <option value="<?= $grup['nama_grup']; ?>"><?= $grup['nama_grup']; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
            </select>
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
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_E" name="pilihan_E" placeholder="Pilihan 5" value="<?= $kuisioner['pilihan_E'] ?>"> 
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_F" name="pilihan_F" placeholder="Pilihan 5" value="<?= $kuisioner['pilihan_F'] ?>"> 
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_G" name="pilihan_G" placeholder="Pilihan 7" value="<?= $kuisioner['pilihan_G'] ?>">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_H" name="pilihan_H" placeholder="Pilihan 8" value="<?= $kuisioner['pilihan_H'] ?>">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_I" name="pilihan_I" placeholder="Pilihan 9" value="<?= $kuisioner['pilihan_I'] ?>">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_J" name="pilihan_J" placeholder="Pilihan 10" value="<?= $kuisioner['pilihan_J'] ?>">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_K" name="pilihan_K" placeholder="Pilihan 11" value="<?= $kuisioner['pilihan_K'] ?>">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_L" name="pilihan_L" placeholder="Pilihan 12" value="<?= $kuisioner['pilihan_L'] ?>">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_M" name="pilihan_M" placeholder="Pilihan 13" value="<?= $kuisioner['pilihan_M'] ?>">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_N" name="pilihan_N" placeholder="Pilihan 14" value="<?= $kuisioner['pilihan_N'] ?>">
            <input type="text" class="form-control col-sm-6 mb-3" id="pilihan_O" name="pilihan_O" placeholder="Pilihan 15" value="<?= $kuisioner['pilihan_O'] ?>">
        </div>
        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->