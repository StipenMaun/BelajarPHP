<?php
session_start();
include "../database.php";

if (isset($_SESSION["is_login"])) {
    if ($_SESSION["level"] != 1) {
        header("Location: ../Login/form_login.php");
    } else {
        $username = $_SESSION["username"];
        $page = $_SESSION["page"];
    }
} else {
    header("Location: ../Login/form_login.php");
}


?>

<?php include "template/header.php" ?>
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar Menu -->
    <?php include "template/sidebar_menu.php" ?>
    <!-- End of Sidebar Menu -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar Menu -->
            <?php include "template/topbar_menu.php" ?>
            <!-- End of Topbar Menu -->
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?= $_SESSION["title"]; ?></h1>
                </div>

                <!-- INI UNTUK PAGE -->
                <?php include $page ?>

            </div>
            <!-- End of Page Content -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<?php include "template/footer.php" ?>

<!-- NOTE DARI BRANCH LUAR -->
<p>Dari Xteam</p>
<p>PUSH LAGI KESEKIAN KALINYA</p>
<b>ini push dari xbike99</b>