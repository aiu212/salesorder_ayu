<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Laporan Penjualan</h1>

    <div class="card shadow">
        <div class="card-body">

        <a href="<?= base_url('laporan/cetak'); ?>" target="_blank" class="btn btn-danger mb-3">
            Cetak PDF
        </a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Order</th>
                        <th>Tanggal</th>
                        <th>Pelanggan</th>
                        <th>Sales</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>

                    <?php $no = 1; foreach($laporan as $l): ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $l->no_order; ?></td>
                        <td><?= $l->tanggal; ?></td>
                        <td><?= $l->nama_pelanggan; ?></td>
                        <td><?= $l->nama_sales; ?></td>
                        <td><?= ucfirst($l->status); ?></td>
                        <td>
                            Rp <?= number_format($l->total,0,',','.'); ?>
                        </td>
                    </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>
    </div>
</div>