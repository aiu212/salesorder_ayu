<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Sales Order</h1>

    <div class="card shadow mb-4">
        <div class="card-body">

            <h5 class="font-weight-bold mb-3">Informasi Order</h5>

            <table class="table table-bordered">
                <tr>
                    <th width="20%">No Order</th>
                    <td><?= $order->no_order; ?></td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td><?= $order->tanggal; ?></td>
                </tr>
                <tr>
                    <th>Pelanggan</th>
                    <td><?= $order->nama_pelanggan; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?= $order->alamat; ?></td>
                </tr>
                <tr>
                    <th>No Telepon</th>
                    <td><?= $order->telp; ?></td>
                </tr>
                <tr>
                    <th>Sales</th>
                    <td><?= $order->nama_sales; ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><?= ucfirst($order->status); ?></td>
                </tr>
            </table>

        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <h5 class="font-weight-bold mb-3">Detail Produk</h5>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($detail as $d): ?>
                    <tr>
                        <td><?= $d->kode_produk; ?></td>
                        <td><?= $d->nama_produk; ?></td>
                        <td>Rp <?= number_format($d->harga,0,',','.'); ?></td>
                        <td><?= $d->qty; ?></td>
                        <td>Rp <?= number_format($d->subtotal,0,',','.'); ?></td>
                    </tr>
                    <?php endforeach; ?>

                    <tr>
                        <th colspan="4" class="text-right">Total</th>
                        <th>Rp <?= number_format($order->total,0,',','.'); ?></th>
                    </tr>
                </tbody>
            </table>

            <a href="<?= base_url('order'); ?>" class="btn btn-secondary">
                Kembali
            </a>

        </div>
    </div>
</div>