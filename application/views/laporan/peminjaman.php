<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Laporan Peminjaman</h1>
    <form method="get">

        <div class="row mb-3 align-items-end">
            <div class="col-md-3">
                <input type="month" name="bulan" class="form-control" value="<?= $bulan; ?>">
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary">
                    Filter
                </button>

                <a href="<?= site_url('laporan/peminjaman'); ?>" class="btn btn-secondary">
                    Reset
                </a>
            </div>
        </div>
    </form>

    <a href="<?= site_url('laporan/cetak_pinjam?bulan='.$bulan); ?>" target="_blank" class="btn btn-success mb-3">
        Cetak PDF
    </a>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $no = 1; ?>
                        <?php foreach($data as $d): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d->kode_peminjaman; ?></td>
                            <td><?= $d->nama; ?></td>
                            <td><?= $d->tanggal_pinjam; ?></td>
                            <td><?= $d->status; ?></td>
                        </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>