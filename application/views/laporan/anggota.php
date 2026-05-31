<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Laporan Anggota</h1>
    <form method="get">
        <div class="row mb-3">
            <div class="col-md-3">
                <select name="status" class="form-control">
                    <option value="">-- Filter Status --</option>
                    <option value="aktif" <?= ($status == 'aktif') ? 'selected' : ''; ?>>
                        Aktif
                    </option>

                    <option value="nonaktif" <?= ($status == 'nonaktif') ? 'selected' : ''; ?>>
                        Nonaktif
                    </option>
                </select>
            </div>

            <div class="col-md-3">
                <button class="btn btn-primary">
                    Filter
                </button>

                <a href="<?= site_url('laporan/anggota'); ?>" class="btn btn-secondary">
                    Reset
                </a>
            </div>
        </div>
    </form>

    <a href="<?= site_url('laporan/cetak_anggota?status='.$status); ?>" target="_blank" class="btn btn-success mb-4">
        Cetak PDF
    </a>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Anggota</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($data as $l): ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $l->nomor_anggota; ?></td>
                        <td><?= $l->nama; ?></td>
                        <td><?= $l->email; ?></td>
                        <td><?= $l->status; ?></td>
                    </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>