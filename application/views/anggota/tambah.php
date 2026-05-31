<div class="container-fluid">
    <h2 class="h3 mb-4 text-gray-800">Tambah Anggota</h2>

    <div class="card shadow">
        <div class="card-body">
            <form method="post" action="<?= site_url('anggota/simpan'); ?>">

                <div class="form-group mb-3">
                    <label>Nomor Anggota</label>
                    <input type="text" name="nomor_anggota" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label>Kontak</label>
                    <input type="text" name="telepon" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label>Tanggal Daftar</label>
                    <input type="date" name="tanggal_daftar" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
    <option value="">-- Pilih Status --</option>
    <?php foreach ($status as $s): ?>
        <option value="<?= $s ?>">
            <?= ucfirst($s) ?>
        </option>
    <?php endforeach; ?>
</select>
                </div>
                

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= site_url('anggota'); ?>" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
</div>