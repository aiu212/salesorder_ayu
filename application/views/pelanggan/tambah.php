<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Pelanggan</h1>

    <div class="card shadow">
        <div class="card-body">

            <form action="<?= base_url('pelanggan/simpan'); ?>" method="post">

                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="telp" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('pelanggan'); ?>" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>