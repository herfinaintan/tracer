<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <h6> Isilah kuisioner dibawah ini dengan memilih pilihan yang tersedia dan mengisi ke kolom jawaban (contoh : A)</H6>
    <br><br>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nama Mahasiswa : </label>
            <input type="text" name="nama" class="form-control col-lg-5" value="<?= $user['Nama']; ?>">
        </div>
        <div class="form-group">
            <input type="hidden" name="fakultas" class="form-control col-lg-5" value="<?= $user['Fakultas']; ?>">
        </div>
        <div class="form-group">
            <input type="hidden" name="jurusan" class="form-control col-lg-5" value="<?= $user['Jurusan']; ?>">
        </div>
        <div class="form-group">
            <label for="">Pilih Fakultas : </label>
            <select name="fakultas_id" id="fakultas_id" class="form-control col-lg-5">
                    <option value="0">Fakultas</option>
                <?php foreach ($fakultas_id as $fk) : ?>
                    <option value="<?= $fk['id']; ?>"><?= $fk['nama_fakultas']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Pilih Jurusan : </label>
            <select name="jurusan_id" id="jurusan_id" class="form-control col-lg-5">
                    <option value="0">Jurusan</option>
                <?php foreach ($jurusan_id as $jr) : ?>
                    <option value="<?= $jr['id']; ?>"><?= $jr['jurusan']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <?php foreach ($kuisioner as $jwb) : ?>
            <?php if ($jwb['model_kuisioner'] == 'A') : ?>
                <div class="form-group">
                    <label for="">
                        <?= $jwb['kuisioner']; ?>
                    </label>
                    <input type="text" class="form-control col-lg-6" id="" name="jawaban_A">
                </div>
            <?php endif; ?>
            <?php if ($jwb['model_kuisioner'] == 'B') : ?>
                <div class="form-group">
                    <label for="">
                        <?= $jwb['kuisioner']; ?>
                    </label>
                    <ul><?= $jwb['pilihan_A']; ?></ul>
                    <ul><?= $jwb['pilihan_B']; ?></ul>
                    <ul><?= $jwb['pilihan_C']; ?></ul>
                    <ul><?= $jwb['pilihan_D']; ?></ul>
                    <ul><?= $jwb['pilihan_E']; ?></ul>
                    <ul><?= $jwb['pilihan_F']; ?></ul>
                    <ul><?= $jwb['pilihan_G']; ?></ul>
                    <ul><?= $jwb['pilihan_H']; ?></ul>
                    <ul><?= $jwb['pilihan_I']; ?></ul>
                    <ul><?= $jwb['pilihan_J']; ?></ul>
                    <ul><?= $jwb['pilihan_K']; ?></ul>
                    <ul><?= $jwb['pilihan_L']; ?></ul>
                    <ul><?= $jwb['pilihan_M']; ?></ul>
                    <ul><?= $jwb['pilihan_N']; ?></ul>
                    <ul><?= $jwb['pilihan_O']; ?></ul>
                    <ul>Jawaban :<input type="text" class="form-control col-lg-2" id="" name="jawaban_B"> </ul>
                <?php endif; ?>
                <?php if ($jwb['model_kuisioner'] == 'C') : ?>
                    <div class="form-group">
                        <label for="">
                            <?= $jwb['kuisioner']; ?>
                        </label>
                    </div>
                    <ul><?= $jwb['pilihan_A']; ?></ul>
                    <ul><?= $jwb['pilihan_B']; ?></ul>
                    <ul><?= $jwb['pilihan_C']; ?></ul>
                    <ul><?= $jwb['pilihan_D']; ?></ul>
                    <ul><?= $jwb['pilihan_E']; ?></ul>
                    <ul><?= $jwb['pilihan_F']; ?></ul>
                    <ul><?= $jwb['pilihan_G']; ?></ul>
                    <ul><?= $jwb['pilihan_H']; ?></ul>
                    <ul><?= $jwb['pilihan_I']; ?></ul>
                    <ul><?= $jwb['pilihan_J']; ?></ul>
                    <ul><?= $jwb['pilihan_K']; ?></ul>
                    <ul><?= $jwb['pilihan_L']; ?></ul>
                    <ul><?= $jwb['pilihan_M']; ?></ul>
                    <ul><?= $jwb['pilihan_N']; ?></ul>
                    <ul><?= $jwb['pilihan_O']; ?></ul>
                    <ul>Jawaban :<input type="text" class="form-control col-lg-5" id="" name="jawaban_C"> *bisa lebih dari satu jawaban</ul>
                <?php endif; ?>
            <?php endforeach; ?>

            <?php foreach ($fakultas as $jwb) : ?>
            <?php if ($jwb['model_kuisioner'] == 'A') : ?>
                <div class="form-group">
                    <label for="">
                        <?= $jwb['kuisioner']; ?>
                    </label>
                    <input type="text" class="form-control col-lg-6" id="" name="jawab_A">
                </div>
            <?php endif; ?>
            <?php if ($jwb['model_kuisioner'] == 'B') : ?>
                <div class="form-group">
                    <label for="">
                        <?= $jwb['kuisioner']; ?>
                    </label>
                    <ul><?= $jwb['pilihan_A']; ?></ul>
                    <ul><?= $jwb['pilihan_B']; ?></ul>
                    <ul><?= $jwb['pilihan_C']; ?></ul>
                    <ul><?= $jwb['pilihan_D']; ?></ul>
                    <ul><?= $jwb['pilihan_E']; ?></ul>
                    <ul><?= $jwb['pilihan_F']; ?></ul>
                    <ul><?= $jwb['pilihan_G']; ?></ul>
                    <ul><?= $jwb['pilihan_H']; ?></ul>
                    <ul><?= $jwb['pilihan_I']; ?></ul>
                    <ul><?= $jwb['pilihan_J']; ?></ul>
                    <ul><?= $jwb['pilihan_K']; ?></ul>
                    <ul><?= $jwb['pilihan_L']; ?></ul>
                    <ul><?= $jwb['pilihan_M']; ?></ul>
                    <ul><?= $jwb['pilihan_N']; ?></ul>
                    <ul><?= $jwb['pilihan_O']; ?></ul>
                    <ul>Jawaban :<input type="text" class="form-control col-lg-2" id="" name="jawab_B"> </ul>
                <?php endif; ?>
                <?php if ($jwb['model_kuisioner'] == 'C') : ?>
                    <div class="form-group">
                        <label for="">
                            <?= $jwb['kuisioner']; ?>
                        </label>
                    </div>
                    <ul><?= $jwb['pilihan_A']; ?></ul>
                    <ul><?= $jwb['pilihan_B']; ?></ul>
                    <ul><?= $jwb['pilihan_C']; ?></ul>
                    <ul><?= $jwb['pilihan_D']; ?></ul>
                    <ul><?= $jwb['pilihan_E']; ?></ul>
                    <ul><?= $jwb['pilihan_F']; ?></ul>
                    <ul><?= $jwb['pilihan_G']; ?></ul>
                    <ul><?= $jwb['pilihan_H']; ?></ul>
                    <ul><?= $jwb['pilihan_I']; ?></ul>
                    <ul><?= $jwb['pilihan_J']; ?></ul>
                    <ul><?= $jwb['pilihan_K']; ?></ul>
                    <ul><?= $jwb['pilihan_L']; ?></ul>
                    <ul><?= $jwb['pilihan_M']; ?></ul>
                    <ul><?= $jwb['pilihan_N']; ?></ul>
                    <ul><?= $jwb['pilihan_O']; ?></ul>
                    <ul>Jawaban :<input type="text" class="form-control col-lg-5" id="" name="jawab_C"> *bisa lebih dari satu jawaban</ul>
                <?php endif; ?>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->