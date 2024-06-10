<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
        href="template/menu_setting.php?page=dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Penjualan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo ($_SESSION['title'] == "Dashboard") ? 'active' : ''; ?>">
        <a class="nav-link" href="template/menu_setting.php?page=dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Admin
    </div>

    <!-- Nav Item - Charts -->
    <li
        class="nav-item <?php echo ($_SESSION['title'] == "Master Barang" || $_SESSION['title'] == "Master Barang Edit") ? 'active' : ''; ?>">
        <a class="nav-link" href="template/menu_setting.php?page=m_barang">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Master Barang</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li
        class="nav-item <?php echo ($_SESSION['title'] == "Master User" || $_SESSION['title'] == "Master User Edit") ? 'active' : ''; ?>">
        <a class="nav-link" href="template/menu_setting.php?page=m_user">
            <i class="fas fa-fw fa-table"></i>
            <span>Master User</span></a>
    </li>

    <li class="nav-item <?php echo ($_SESSION['title'] == "Transaksi") ? 'active' : ''; ?>">
        <a class="nav-link" href="template/menu_setting.php?page=transaksi">
            <i class="fas fa-fw fa-comments-dollar"></i>
            <span>Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->