<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <h1 class="h3 mb-4 text-gray-800"> <?= $title; ?></h1>
    <div class="row mt-2">
        <div class="col-md-6">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    Kuisioner
                </button>
                 <button type="button" class="list-group-item list-group-item-action">
                    <?php foreach ($kuisioner as $kuispengguna) : ?>
                        <?= $kuispengguna['kuisioner']; ?>
                     <?php endforeach; ?>
                 </button>
            </div>
        </div>
     </div>

     <div class="row mt-4">
        <div class="col-md-6">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    Tipe Kuisioner
                </button>
                 <button type="button" class="list-group-item list-group-item-action">
                    <?php foreach ($kuisioner as $kuispengguna) : ?>
                        <?= $kuispengguna['model_kuisioner']; ?>
                     <?php endforeach; ?>
                 </button>
            </div>

        </div>
     </div>

    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->