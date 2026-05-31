<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Produk</h1>

    <div class="card shadow">
        <div class="card-body">

            <a href="<?= base_url('produk/tambah'); ?>" class="btn btn-primary mb-3">
                Tambah Produk
            </a>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th width="18%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; foreach($produk as $p): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p->kode_produk; ?></td>
                            <td><?= $p->nama_produk; ?></td>
                            <td>Rp <?= number_format($p->harga, 0, ',', '.'); ?></td>
                            <td><?= $p->stok; ?></td>
                            <td>
                                <a href="<?= base_url('produk/edit/'.$p->id); ?>" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="<?= base_url('produk/hapus/'.$p->id); ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin hapus produk ini?')">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>