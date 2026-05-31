<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Sales</h1>

    <div class="card shadow">
        <div class="card-body">

            <form action="<?= base_url('sales/simpan'); ?>" method="post">

                <div class="form-group">
                    <label>Kode Sales</label>
                    <input type="text" name="kode_sales" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Nama Sales</label>
                    <input type="text" name="nama_sales" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('sales'); ?>" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>