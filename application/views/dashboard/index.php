<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-1 page-title">Dashboard Sales Order</h1>
            <p class="mb-4 page-subtitle">Kelola produk, pelanggan, transaksi order, dan laporan penjualan.</p>
        </div>
    </div>

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 border-left-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User Login</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $this->session->userdata('username'); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 border-left-success">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Hak Akses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= ucfirst($this->session->userdata('role')); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-shield fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 border-left-info">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Order</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $total_order; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 border-left-warning">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Penjualan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Rp <?= number_format($total_penjualan, 0, ',', '.'); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php if($this->session->userdata('role') == 'admin'): ?>
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 border-left-secondary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total Produk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $total_produk; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 border-left-danger">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Pelanggan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $total_pelanggan; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php endif; ?>

    <div class="row">

        <div class="col-lg-8 mb-4">
            <div class="card shadow h-100">
                <div class="card-header py-3 bg-white">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Data Sistem</h6>
                </div>
                <div class="card-body">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card shadow h-100">
                <div class="card-header py-3 bg-white">
                    <h6 class="m-0 font-weight-bold text-primary">Status Order</h6>
                </div>
                <div class="card-body">
                    <p><span class="badge badge-secondary p-2">Draft</span> Menunggu proses</p>
                    <p><span class="badge badge-info p-2">Dikirim</span> Dalam pengiriman</p>
                    <p><span class="badge badge-success p-2">Selesai</span> Pesanan selesai</p>
                    <p class="mb-0"><span class="badge badge-danger p-2">Dibatalkan</span> Transaksi batal</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-lg-7 mb-4">
            <div class="card shadow h-100">
                <div class="card-header py-3 bg-white">
                    <h6 class="m-0 font-weight-bold text-primary">Tentang Sistem</h6>
                </div>
                <div class="card-body">
                    <h5 class="font-weight-bold">Sistem Sales Order PT Maju Jaya</h5>
                    <p class="mb-0">
                        Aplikasi ini digunakan untuk membantu proses pencatatan pesanan pelanggan,
                        pengelolaan produk, data pelanggan, data sales, transaksi sales order,
                        serta pembuatan laporan penjualan.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-5 mb-4">
            <div class="card shadow h-100">
                <div class="card-header py-3 bg-white">
                    <h6 class="m-0 font-weight-bold text-primary">Produk Terlaris</h6>
                </div>

                <div class="card-body">

                    <?php if(!empty($produk_terlaris)): ?>

                        <?php foreach($produk_terlaris as $p): ?>

                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <span><?= $p->nama_produk; ?></span>

                                <span class="badge badge-info px-3 py-2">
                                    <?= $p->total_terjual; ?> Terjual
                                </span>
                            </div>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <p class="text-muted mb-0">
                            Belum ada data penjualan produk.
                        </p>

                    <?php endif; ?>

                </div>
            </div>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('salesChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Produk', 'Pelanggan', 'Order'],
        datasets: [{
            label: 'Total Data',
            data: [
                <?= $total_produk ?? 0; ?>,
                <?= $total_pelanggan ?? 0; ?>,
                <?= $total_order ?? 0; ?>
            ],
            backgroundColor: [
                '#00bcd4',
                '#1cc88a',
                '#f6c23e'
            ],
            borderRadius: 10
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: { display: false }
        },
        scales: {
            y: { beginAtZero: true }
        }
    }
});
</script>