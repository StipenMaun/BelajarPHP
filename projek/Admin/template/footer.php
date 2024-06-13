<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                <form action="../Login/logout_setting.php" method="post">
                    <input class="btn btn-primary" type="submit" value="Logout" name="logout">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../assets/js/demo/chart-area-demo.js"></script>
<script src="../assets/js/demo/chart-pie-demo.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    <?php if (isset($_SESSION["pesan"])): ?>
        Swal.fire({
            position: "center",
            icon: "success",
            title: "<?= $_SESSION["pesan"] ?>",
            showConfirmButton: false,
            timer: 1500
        });
        <?php
        unset($_SESSION["pesan"]);
    endif;
    ?>

    <?php if (isset($_SESSION["alert"])): ?>
        Swal.fire({
            position: "center",
            icon: "info",
            title: "<?= $_SESSION["alert"] ?>",
            showConfirmButton: false,
                timer: 1500
            });
            <?php
            unset($_SESSION["alert"]);
    endif;
    ?>
</script>

</body>

</html>