<div class="container-fluid">

    <h1 class="h3 mb-4 page-title">Laporan Penjualan</h1>

    <div class="card shadow">
        <div class="card-body">

            <a href="<?= base_url(
                'laporan/cetak?tanggal_awal='.$this->input->get('tanggal_awal').
                '&tanggal_akhir='.$this->input->get('tanggal_akhir').
                '&sales_id='.$this->input->get('sales_id').
                '&produk_id='.$this->input->get('produk_id')
            ); ?>"
               target="_blank"
               class="btn btn-danger mb-4">

                <i class="fas fa-file-pdf mr-2"></i>
                Cetak PDF
            </a>

            <form method="GET" class="mb-4">

                <div class="row">

                    <div class="col-md-3 mb-3">
                        <label>Tanggal Awal</label>
                        <input type="date"
                               name="tanggal_awal"
                               class="form-control"
                               value="<?= $this->input->get('tanggal_awal'); ?>">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Tanggal Akhir</label>
                        <input type="date"
                               name="tanggal_akhir"
                               class="form-control"
                               value="<?= $this->input->get('tanggal_akhir'); ?>">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Sales</label>
                        <select name="sales_id" class="form-control">
                            <option value="">Semua Sales</option>

                            <?php foreach($sales as $s): ?>
                                <option value="<?= $s->id; ?>"
                                    <?= ($this->input->get('sales_id') == $s->id) ? 'selected' : ''; ?>>

                                    <?= $s->nama_sales; ?>

                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Produk</label>
                        <select name="produk_id" class="form-control">
                            <option value="">Semua Produk</option>

                            <?php foreach($produk as $p): ?>
                                <option value="<?= $p->id; ?>"
                                    <?= ($this->input->get('produk_id') == $p->id) ? 'selected' : ''; ?>>

                                    <?= $p->nama_produk; ?>

                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mr-2">
                            <i class="fas fa-filter mr-1"></i>
                            Filter
                        </button>

                        <a href="<?= base_url('laporan'); ?>" class="btn btn-secondary">
                            Reset
                        </a>
                    </div>

                </div>

            </form>

            <div class="table-responsive">
                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Order</th>
                            <th>Tanggal</th>
                            <th>Pelanggan</th>
                            <th>Sales</th>
                            <th>Produk</th>
                            <th>Status</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if(!empty($laporan)): ?>

                            <?php $no = 1; foreach($laporan as $l): ?>

                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $l->no_order; ?></td>
                                    <td><?= $l->tanggal; ?></td>
                                    <td><?= $l->nama_pelanggan; ?></td>
                                    <td><?= $l->nama_sales; ?></td>
                                    <td><?= $l->nama_produk ?? '-'; ?></td>

                                    <td>
                                        <?php if($l->status == 'draft'): ?>
                                            <span class="badge badge-secondary">Draft</span>
                                        <?php elseif($l->status == 'dikirim'): ?>
                                            <span class="badge badge-info">Dikirim</span>
                                        <?php elseif($l->status == 'selesai'): ?>
                                            <span class="badge badge-success">Selesai</span>
                                        <?php else: ?>
                                            <span class="badge badge-danger">Dibatalkan</span>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        Rp <?= number_format($l->total,0,',','.'); ?>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>
                                <td colspan="8" class="text-center text-muted">
                                    Tidak ada data penjualan pada filter ini.
                                </td>
                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>