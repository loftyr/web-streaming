        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= base_url('include/jquery-3.3.1.min.js') ?>"></script>
        <script src="<?= base_url('include/popper.min.js') ?>"></script>
        <script src="<?= base_url('include/bootstrap/js/bootstrap.js') ?>"></script>
        <script src="<?= base_url('include/jquery.timeago.js') ?>"></script>
        <script src="<?= base_url('include/costum-js/base-script.js') ?>"></script>
        <script src="<?= base_url('include/sweetAlert2/sweetalert2.all.min.js') ?>"></script>
        <!-- Costum Script -->
        <?php if ($js == ''): ?>

        <?php else: ?>
            <script src="<?= base_url('include/costum-js/user/'.$js.'') ?>"></script>
        <?php endif ?>
    </body>
</html>