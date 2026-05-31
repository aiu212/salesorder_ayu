<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Laporan Buku</h1>
    <form method="get">
        <div class="row mb-3">
            <div class="col-md-3">
                <select name="penulis" class="form-control">
                    <option value="">-- Filter Penulis --</option>

                    <?php foreach($penulis as $p): ?>
                        <option value="<?= $p->penulis; ?>"
                            <?= ($filter_penulis == $p->penulis) ? 'selected' : ''; ?>> <?= $p->penulis; ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div class="col-md-3">
                <button class="btn btn-primary">
                    Filter
                </button>

                <a href="<?= site_url('laporan/buku'); ?>" class="btn btn-secondary">
                    Reset
                </a>
            </div>
        </div>
    </form>

    <a href="<?= site_url('laporan/cetak_buku?penulis='.$filter_penulis); ?>"
       target="_blank"
       class="btn btn-success mb-4">
        Cetak PDF
    </a>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $no = 1; ?>
                    <?php foreach($data as $l): ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $l->judul; ?></td>
                        <td><?= $l->penulis; ?></td>
                        <td><?= $l->penerbit; ?></td>
                        <td><?= $l->stok; ?></td>
                    </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>