<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <form action="" id="FormLaporanPengguna">
            <div class="row">
                <div class="col-md-8">
                    <select name="" id="fakultas" class="form-control">
                        <option value="0">Tampilkan Data Semua Fakultas</option>
                        <?php foreach ($fakultas as $fk) : ?>
                            <option value="<?= $fk['id']; ?>"><?= $fk['nama_fakultas']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md">
                    <button type="submit" class="btn btn-primary">Show Data</button>
                </div>
            </div>
        </form>

        <form action="" id="LaporanPengguna">
            <div class="row">
                <div class="col-md-8">
                    <select name="" id="jurusan" class="form-control">
                        <option value="0">Tampilkan Data Semua Jurusan</option>
                        <?php foreach ($jurusan as $jr) : ?>
                            <option value="<?= $jr['id']; ?>"><?= $jr['jurusan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md">
                    <button type="submit" class="btn btn-primary">Show Data</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-md mt-3">
        <div id="result1"></div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->