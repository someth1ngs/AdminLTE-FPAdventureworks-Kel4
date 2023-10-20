<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Adventure Works</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php 
                session_start();
                echo $_SESSION['nama'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="ChartBarSales.php" class="nav-link">
                        <i class="nav-icon fas fa-thumbs-up"></i>
                        <p>
                            Penjualan Barang Pertahun
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="chartLineSales.php" class="nav-link">
                        <i class="nav-icon fas fa-balance-scale"></i>
                        <p>
                            Pemasukan Penjualan Pertahun
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="chartPieSales.php" class="nav-link">
                        <i class="nav-icon fas fa-trophy"></i>
                        <p>
                            Top Penjualan berdasarkan Wilayah
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="chartSalesReason.php" class="nav-link">
                        <i class="nav-icon fas fa-male"></i>
                        <p>
                            Top Pendaftaran Pekerja setiap Tahun
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="chartBarFright.php" class="nav-link">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        <p>
                            Top Penggunaan Metode Pengiriman
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="iframe.php" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Mondrian</p>
                    </a>
                </li>
                <br>
                <li class="nav-item">
                    <a href="../logout.php" class="nav-link text-red ">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>