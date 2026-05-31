<div class="container-fluid">
    <h2 class="h3 mb-4 text-gray-800">Edit Anggota</h2>

    <div class="card shadow">
        <div class="card-body">

            <form method="post" action="<?= site_url('anggota/update/'.$anggota->id); ?>">

                <!-- Nomor Anggota -->
                <div class="form-group mb-3">
                    <label>Nomor Anggota</label>
                    <input type="text" 
                           name="nomor_anggota" 
                           class="form-control"
                           value="<?= $anggota->nomor_anggota; ?>" 
                           required>
                </div>

                <!-- Nama -->
                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="text" 
                           name="nama" 
                           class="form-control"
                           value="<?= $anggota->nama; ?>" 
                           required>
                </div>

                <!-- Alamat -->
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" 
                              class="form-control" 
                              required><?= $anggota->alamat; ?></textarea>
                </div>

                <!-- Telepon -->
                <div class="form-group mb-3">
                    <label>Telepon</label>
                    <input type="text" 
                           name="telepon" 
                           class="form-control"
                           value="<?= $anggota->telepon; ?>" 
                           required>
                </div>

                <!-- Email -->
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" 
                           name="email" 
                           class="form-control"
                           value="<?= $anggota->email; ?>" 
                           required>
                </div>

                <!-- Tanggal Daftar -->
                <div class="form-group mb-3">
                    <label>Tanggal Daftar</label>
                    <input type="date" 
                           name="tanggal_daftar" 
                           class="form-control"
                           value="<?= $anggota->tanggal_daftar; ?>" 
                           required>
                </div>

                <!-- Status -->
                <div class="form-group mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="aktif" <?= ($anggota->status == 'aktif') ? 'selected' : ''; ?>>
                            Aktif
                        </option>

                        <option value="nonaktif" <?= ($anggota->status == 'nonaktif') ? 'selected' : ''; ?>>
                            Nonaktif
                        </option>
                    </select>
                </div>

                <!-- Button -->
                <button type="submit" class="btn btn-primary">
                    Update
                </button>

                <a href="<?= site_url('anggota'); ?>" 
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>
</div>