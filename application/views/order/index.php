<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Sales Order</h1>

    <div class="card shadow">
        <div class="card-body">

            <a href="<?= base_url('order/tambah'); ?>" class="btn btn-primary mb-3">
                Tambah Order
            </a>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No Order</th>
                        <th>Tanggal</th>
                        <th>Pelanggan</th>
                        <th>Sales</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th width="25%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($orders as $o): ?>
                    <tr>

                        <td><?= $o->no_order; ?></td>
                        <td><?= $o->tanggal; ?></td>
                        <td><?= $o->nama_pelanggan; ?></td>
                        <td><?= $o->nama_sales; ?></td>
                        <td>
                            Rp <?= number_format($o->total,0,',','.'); ?>
                        </td>

                        <td>
                            <?php if($o->status == 'draft'): ?>
                                <span class="badge badge-secondary">Draft</span>

                            <?php elseif($o->status == 'dikirim'): ?>
                                <span class="badge badge-primary">Dikirim</span>

                            <?php elseif($o->status == 'selesai'): ?>
                                <span class="badge badge-success">Selesai</span>

                            <?php else: ?>
                                <span class="badge badge-danger">Dibatalkan</span>
                            <?php endif; ?>
                        </td>

                        <td>
                        <div class="dropdown">
                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                                Aksi
                            </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('order/detail/'.$o->id); ?>">
                                Detail
                            </a>

                            <a class="dropdown-item" href="<?= base_url('order/status/'.$o->id.'/dikirim'); ?>">
                                Dikirim
                            </a>

                            <a class="dropdown-item" href="<?= base_url('order/status/'.$o->id.'/selesai'); ?>">
                                Selesai
                            </a>

                            <a class="dropdown-item text-danger" href="<?= base_url('order/status/'.$o->id.'/dibatalkan'); ?>">
                                Batalkan
                            </a>
                        </div>

    </div>
</td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>

        </div>
    </div>
</div>