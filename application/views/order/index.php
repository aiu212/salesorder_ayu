<div class="container-fluid">

    <h1 class="h3 mb-4 page-title">Sales Order</h1>

    <div class="card shadow">
        <div class="card-body">

            <a href="<?= base_url('order/tambah'); ?>" class="btn btn-primary mb-3">
                Tambah Order
            </a>

            <div class="table-responsive">

                <table class="table table-bordered" style="table-layout: fixed;">

                    <thead>
                        <tr>

                            <th style="width: 190px;">
                                No Order
                            </th>

                            <th style="width: 120px;">
                                Tanggal
                            </th>

                            <th style="min-width: 180px;">
                                Pelanggan
                            </th>

                            <th style="width: 100px;">
                                Sales
                            </th>

                            <th style="width: 150px;">
                                Total
                            </th>

                            <th style="width: 130px;" class="text-center">
                                Status
                            </th>

                            <th style="width: 90px;" class="text-center">
                                Aksi
                            </th>

                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach($orders as $o): ?>

                        <tr>

                            <td style="white-space: nowrap;">
                                <?= $o->no_order; ?>
                            </td>

                            <td style="white-space: nowrap;">
                                <?= $o->tanggal; ?>
                            </td>

                            <td>
                                <?= $o->nama_pelanggan; ?>
                            </td>

                            <td style="white-space: nowrap;">
                                <?= $o->nama_sales; ?>
                            </td>

                            <td style="white-space: nowrap;">
                                Rp <?= number_format($o->total,0,',','.'); ?>
                            </td>

                            <td class="text-center" style="white-space: nowrap;">

                                <?php if($o->status == 'draft'): ?>

                                    <span class="badge badge-secondary px-3 py-2">
                                        Draft
                                    </span>

                                <?php elseif($o->status == 'dikirim'): ?>

                                    <span class="badge badge-info px-3 py-2">
                                        Dikirim
                                    </span>

                                <?php elseif($o->status == 'selesai'): ?>

                                    <span class="badge badge-success px-3 py-2">
                                        Selesai
                                    </span>

                                <?php else: ?>

                                    <span class="badge badge-danger px-3 py-2">
                                        Dibatalkan
                                    </span>

                                <?php endif; ?>

                            </td>

                            <td class="text-center" style="white-space: nowrap;">

                                <div class="dropdown">

                                    <button class="btn btn-secondary btn-sm dropdown-toggle px-2"
                                            type="button"
                                            data-toggle="dropdown">
                                        Aksi
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="<?= base_url('order/detail/'.$o->id); ?>">
                                            Detail
                                        </a>

                                        <a class="dropdown-item"
                                           href="<?= base_url('order/status/'.$o->id.'/dikirim'); ?>">
                                            Dikirim
                                        </a>

                                        <a class="dropdown-item"
                                           href="<?= base_url('order/status/'.$o->id.'/selesai'); ?>">
                                            Selesai
                                        </a>

                                        <a class="dropdown-item text-danger"
                                           href="<?= base_url('order/status/'.$o->id.'/dibatalkan'); ?>">
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
</div>