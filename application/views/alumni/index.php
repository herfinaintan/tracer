<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="card" style="width: 18rem;">
    <img src="assets/img/download.png" width="80px" height="180px" class="card-img-top" alt="foto profil">
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nama : <?= $user['Nama']; ?></li>
                <li class="list-group-item">NIM : <?= $user['NIM']; ?></li>
                <li class="list-group-item">Fakultas : <?= $user['Fakultas']; ?></li>
                <li class="list-group-item">Jurusan : <?= $user['Jurusan']; ?></li>
                <li class="list-group-item">Tahun Lulus : <?= $user['Tahun_Lulus']; ?></li>
            </ul>
        </div>
    </div>  


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->