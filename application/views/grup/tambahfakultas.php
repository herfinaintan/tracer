<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Tambah Grup Kuisioner
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Grup Kuisioner</label>
                            <input type="text" class="form-control" id="nama_grup" name="nama_grup">
                            <small class="form-text text-danger"><?= form_error('nama_grup'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>