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
                    <?php foreach ($kuisioner as $kuisalumni) : ?>
                        <?= $kuisalumni['kuisioner']; ?>
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
                    <?php foreach ($kuisioner as $kuisalumni) : ?>
                        <?= $kuisalumni['model_kuisioner']; ?>
                     <?php endforeach; ?>
                 </button>
            </div>
        </div>
     </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                     Pilihan
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    <?php foreach ($kuisioner as $kuisalumni) : ?>
                        <ul><?= $kuisalumni['pilihan_A']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_B']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_C']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_D']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_E']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_F']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_G']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_H']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_I']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_J']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_K']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_L']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_M']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_N']; ?></ul>
                        <ul><?= $kuisalumni['pilihan_O']; ?></ul>
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