<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Sales Order</h1>

    <div class="card shadow">
        <div class="card-body">

            <form action="<?= base_url('order/simpan'); ?>" method="post">

                <div class="form-group">
                    <label>Pelanggan</label>
                    <select name="pelanggan_id" class="form-control" required>
                        <option value="">-- Pilih Pelanggan --</option>
                        <?php foreach($pelanggan as $p): ?>
                            <option value="<?= $p->id; ?>"><?= $p->nama_pelanggan; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Sales</label>
                    <select name="sales_id" class="form-control" required>
                        <option value="">-- Pilih Sales --</option>
                        <?php foreach($sales as $s): ?>
                            <option value="<?= $s->id; ?>"><?= $s->nama_sales; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Produk</label>
                    <select name="produk_id" id="produk_id" class="form-control" required>
                        <option value="">-- Pilih Produk --</option>
                        <?php foreach($produk as $p): ?>
                            <option value="<?= $p->id; ?>" data-harga="<?= $p->harga; ?>">
                                <?= $p->nama_produk; ?> - Rp <?= number_format($p->harga,0,',','.'); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" readonly required>
                </div>

                <div class="form-group">
                    <label>Qty</label>
                    <input type="number" name="qty" id="qty" class="form-control" min="1" required>
                </div>

                <div class="form-group">
                    <label>Total</label>
                    <input type="text" id="total" class="form-control" readonly>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Order
                </button>

                <a href="<?= base_url('order'); ?>" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>
</div>

<script>
    const produk = document.getElementById('produk_id');
    const harga = document.getElementById('harga');
    const qty = document.getElementById('qty');
    const total = document.getElementById('total');

    function hitungTotal() {
        let h = parseInt(harga.value) || 0;
        let q = parseInt(qty.value) || 0;
        let hasil = h * q;

        total.value = 'Rp ' + hasil.toLocaleString('id-ID');
    }

    produk.addEventListener('change', function() {
        let selected = produk.options[produk.selectedIndex];
        harga.value = selected.getAttribute('data-harga') || 0;
        hitungTotal();
    });

    qty.addEventListener('keyup', hitungTotal);
    qty.addEventListener('change', hitungTotal);
</script>