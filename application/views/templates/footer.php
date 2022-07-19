            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; TRACER STUDY <?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

            <!-- Sweet Alert -->
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
            <script src="<?= base_url('assets/'); ?>js/sweetalert2.all.min.js"></script>
            <script src="<?= base_url('assets/'); ?>js/ddtf.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous"></script>
            <script>
                const flashData = $('.flash-data').data('flashdata');

                if (flashData) {
                    Swal.fire({
                        title: 'Data ',
                        text: 'Berhasil ' + flashData,
                        icon: 'success'
                    });
                }

                //tombol hapus
                $('.tombol-hapus').on('click', function(e) {

                    e.preventDefault();
                    const href = $(this).attr('href');

                    Swal.fire({
                        title: 'Apakah anda yakin',
                        text: "data akan dihapus",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Hapus Data!'
                    }).then((result) => {
                        if (result.value) {
                            document.location.href = href;
                        }
                    })

                });
            </script>

            <script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });


                $('.form-check-input').on('click', function() {
                    const menuId = $(this).data('menu');
                    const roleId = $(this).data('role');

                    $.ajax({
                        url: "<?= base_url('admin/changeaccess'); ?>",
                        type: 'post',
                        data: {
                            menuId: menuId,
                            roleId: roleId
                        },
                        success: function() {
                            document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                        }
                    });
                });
            </script>

            <script>
                $(document).ready(function() {
                    $("#FormLaporan").submit(function(e) {
                        e.preventDefault();
                        var id = $("#fakultas").val();
                        // console.log(id);
                        var url = "<?= site_url('Menu/filterLaporanFakultas/') ?>" + id;
                        $('#result').load(url);
                    })
                });
            </script>

            <script>
                $(document).ready(function() {
                    $("#Laporan").submit(function(e) {
                        e.preventDefault();
                        var id = $("#jurusan").val();
                        // console.log(id);
                        var url = "<?= site_url('Menu/filterLaporanJurusan/') ?>" + id;
                        $('#result').load(url);
                    })
                });
            </script>

            <script>
                $(document).ready(function() {
                    $("#FormLaporanPengguna").submit(function(e) {
                        e.preventDefault();
                        var id1 = $("#fakultas").val();
                        // console.log(id);
                        var url = "<?= site_url('Menu/filterLaporanPenggunaFakultas/') ?>" + id1;
                        $('#result1').load(url);
                    })
                });
            </script>

            <script>
                $(document).ready(function() {
                    $("#LaporanPengguna").submit(function(e) {
                        e.preventDefault();
                        var id1 = $("#jurusan").val();
                        // console.log(id);
                        var url = "<?= site_url('Menu/filterLaporanPenggunaJurusan/') ?>" + id1;
                        $('#result1').load(url);
                    })
                });
            </script>

            </body>

            </html>