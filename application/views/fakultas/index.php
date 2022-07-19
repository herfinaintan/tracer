<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-3">
        <div class="col-9 col-sm-5 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">Total Pertanyaan</h3>
                            <p class="mb-2">Alumni</p>
                            <div class="mb-0">
                                <span class="badge badge-success mr-2"> <i class="mdi mdi-arrow-bottom-right"></i><?= $total_rows; ?> Pertanyaan</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="h1 stat">
                                <i class="fas fa-database text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-9 col-sm-5 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">Total Responden</h3>
                            <p class="mb-2">Alumni</p>
                            <div class="mb-0">
                                <span class="badge badge-success mr-2"> <i class="mdi mdi-arrow-bottom-right"></i><?= $total_jawaban; ?> Responden</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="h1 stat">
                                <i class="fas fa-user text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-9 col-sm-5 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">Total Pertanyaan</h3>
                            <p class="mb-2">Pengguna Alumni</p>
                            <div class="mb-0">
                                <span class="badge badge-success mr-2"> <i class="mdi mdi-arrow-bottom-right"></i></i><?= $total_rows1; ?> Pertanyaan</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="h1 stat">
                                <i class="fas fa-database text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-9 col-sm-5 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">Total Responden</h3>
                            <p class="mb-2">Pengguna Alumni</p>
                            <div class="mb-0">
                                <span class="badge badge-success mr-2"> <i class="mdi mdi-arrow-bottom-right"> </i><?= $total_jawaban1; ?> Responden</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="h1 stat">
                                <i class="fas fa-user text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->