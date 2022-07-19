<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Ubah Grup Kuisioner
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_grup" value="<?= $grup_kuisioner['id_grup'];?>">
                        <div class="form-group">
                            <label for="nama">Nama Grup Kuisioner</label>
                            <input type="text" class="form-control" id="nama_grup" name="nama_grup" value="<?= $grup_kuisioner['nama_grup']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_grup'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>