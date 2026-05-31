<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Perpustakaan</div>
</a>

<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('dashboard'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('kategori'); ?>">
        <i class="fas fa-fw fa-folder"></i>
        <span>Kategori</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('buku'); ?>">
        <i class="fas fa-fw fa-book"></i>
        <span>Buku</span>
    </a>
</li>

<li class="nav-item">
        <a class="nav-link rounded-lg px-3 transition-all" href="<?= site_url('anggota'); ?>">
            <i class="fas fa-fw fa-user mr-2"></i>
            <span class="font-weight-600">Anggota</span>
        </a>
    </li>

<li class="nav-item">
        <a class="nav-link rounded-lg px-3 transition-all" href="<?= site_url('peminjaman'); ?>">
            <i class="fas fa-fw fa-user mr-2"></i>
            <span class="font-weight-600">Peminjaman</span>
        </a>
    </li>

<li class="nav-item">
    <a class="nav-link collapsed"
       href="#"
       data-toggle="collapse"
       data-target="#collapseLaporan"
       aria-expanded="true"
       aria-controls="collapseLaporan">
    <i class="fas fa-fw fa-file-alt"></i>
    <span>Laporan</span>
    </a>

    <div id="collapseLaporan" class="collapse" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded shadow">
            <h6 class="collapse-header text-primary">
                Menu Laporan
            </h6>

            <a class="collapse-item d-flex align-items-center" href="<?= site_url('laporan/peminjaman'); ?>">
                <i class="fas fa-book-reader mr-2 text-primary"></i>
                Laporan Peminjaman
            </a>

            <a class="collapse-item d-flex align-items-center" href="<?= site_url('laporan/buku'); ?>">
                <i class="fas fa-book mr-2 text-success"></i>
                Laporan Buku
            </a>

            <a class="collapse-item d-flex align-items-center" href="<?= site_url('laporan/anggota'); ?>"> 
               <i class="fas fa-users mr-2 text-info"></i>
                Laporan Anggota
            </a>
        </div>
    </div>
</li>

</ul>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">