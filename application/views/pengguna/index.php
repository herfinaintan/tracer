<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <?php foreach ($kuisioner as $jwb) : ?>
            <?php if ($jwb['model_kuisioner'] == 'A') : ?>
                <div class="form-group">
                    <label for="">
                        <?= $jwb['kuisioner']; ?>
                    </label>
                    <input type="text" class="form-control col-lg-6" id="" name="kuisioner">
                </div>
            <?php endif; ?>
            <?php if ($jwb['model_kuisioner'] == 'B') : ?>
                <div class="form-group">
                    <label for="">
                        <?= $jwb['kuisioner']; ?>
                    </label>
                    <ul><input type="radio" name="A"> <?= $jwb['pilihan_A']; ?></ul>
                    <ul><input type="radio" name="B"> <?= $jwb['pilihan_B']; ?></ul>
                    <ul><input type="radio" name="C"> <?= $jwb['pilihan_C']; ?></ul>
                    <ul><input type="radio" name="D"> <?= $jwb['pilihan_D']; ?></ul>
                <?php endif; ?>
            <?php endforeach; ?>

        <?php foreach ($fakultas as $jwb) : ?>
            <?php if ($jwb['model_kuisioner'] == 'A') : ?>
                <div class="form-group">
                    <label for="">
                        <?= $jwb['kuisioner']; ?>
                    </label>
                    <input type="text" class="form-control col-lg-6" id="" name="fakultas">
                </div>
            <?php endif; ?>
            <?php if ($jwb['model_kuisioner'] == 'B') : ?>
                <div class="form-group">
                    <label for="">
                        <?= $jwb['kuisioner']; ?>
                    </label>
                    <ul><input type="radio" name="A1"> <?= $jwb['pilihan_A']; ?></ul>
                    <ul><input type="radio" name="B1"> <?= $jwb['pilihan_B']; ?></ul>
                    <ul><input type="radio" name="C1"> <?= $jwb['pilihan_C']; ?></ul>
                    <ul><input type="radio" name="D1"> <?= $jwb['pilihan_D']; ?></ul>
                <?php endif; ?>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->