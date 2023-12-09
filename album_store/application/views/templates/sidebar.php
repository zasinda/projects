<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('/store') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Album Store</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Category
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/ipop') ?>">
                    <i class="fas fa-fw fa-record-vinyl"></i>
                    <span>I-POP</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/western') ?>">
                    <i class="fas fa-fw fa-record-vinyl"></i>
                    <span>WESTERN POP</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/kpop') ?>">
                    <i class="fas fa-fw fa-record-vinyl"></i>
                    <span>K-POP</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/jpop') ?>">
                    <i class="fas fa-fw fa-record-vinyl"></i>
                    <span>J-POP</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/cpop') ?>">
                    <i class="fas fa-fw fa-record-vinyl"></i>
                    <span>C-POP</span></a>
            </li>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('auth/logout') ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

             <!-- Sidebar - Brand -->
             <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-music"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Album Store</div>
                <div class="sidebar-brand-icon">
                    <i class="fas fa-music"></i>
                </div>
            </a>

        </ul>
        <!-- End of Sidebar -->
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

        <a class="navbar navbar-expand bg-danger topbar align-items-center justify-content-center">
                        <div class="navbar-brand-icon">
                        </div>
                        <div class="navbar-brand-text mx-3 text-light font-weight-bold display-4">Choose your favorite music</div>
                        <div class="navbar-brand-icon">
                        </div>
                    </a>

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-danger topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="width: 9500px;">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php $cart = 'cart: '.$this->cart->total_items(). 'items' ?>
                                    <?php echo anchor ('store/detail_cart', $cart) ?>
                                </li>
                            </ul>
                        </div>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-dark badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                    </ul>

                </nav>
                <!-- End of Topbar -->