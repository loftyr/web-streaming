    </div><!-- End of Page Wrapper -->

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
                <div class="modal-body">Apakah Anda yakin ingin Log Out?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('include/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('include/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('include/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('include/sb-admin-2.js'); ?>"></script>
        
    <!-- Script Page Dashboard -->
    <script src="<?= base_url('include/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('include/datatables/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('include/JqueryUI/jquery-ui.js') ?>"></script>
    <script src="<?= base_url('include/sweetAlert2/sweetalert2.all.min.js') ?>"></script>
    <script src="<?= base_url('include/chart.js/Chart.min.js'); ?>"></script>

    <!-- Costum JS -->
    <?php if ($js == ''): ?>
        
    <?php else: ?>
        <script src="<?= base_url('include/costum-js/admin/'.$js.'') ?>"></script>
    <?php endif ?>
</body>
</html>