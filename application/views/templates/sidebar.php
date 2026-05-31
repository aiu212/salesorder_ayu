<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">
            SALES ORDER
        </div>
    </a>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <?php if($this->session->userdata('role') == 'admin'): ?>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('produk'); ?>">
                <i class="fas fa-box"></i>
                <span>Produk</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pelanggan'); ?>">
                <i class="fas fa-users"></i>
                <span>Pelanggan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('sales'); ?>">
                <i class="fas fa-user-tie"></i>
                <span>Sales</span>
            </a>
        </li>

    <?php endif; ?>


    <?php if(
        $this->session->userdata('role') == 'admin' ||
        $this->session->userdata('role') == 'sales'
    ): ?>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('order'); ?>">
                <i class="fas fa-shopping-cart"></i>
                <span>Sales Order</span>
            </a>
        </li>

    <?php endif; ?>


    <?php if(
        $this->session->userdata('role') == 'admin' ||
        $this->session->userdata('role') == 'manager'
    ): ?>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('laporan'); ?>">
                <i class="fas fa-file-pdf"></i>
                <span>Laporan</span>
            </a>
        </li>

    <?php endif; ?>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

</ul>