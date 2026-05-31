<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Sales</h1>

    <div class="card shadow">
        <div class="card-body">

            <a href="<?= base_url('sales/tambah'); ?>" class="btn btn-primary mb-3">
                Tambah Sales
            </a>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Kode Sales</th>
                        <th>Nama Sales</th>
                        <th width="18%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; foreach($sales as $s): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s->kode_sales; ?></td>
                            <td><?= $s->nama_sales; ?></td>
                            <td>
                                <a href="<?= base_url('sales/edit/'.$s->id); ?>" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="<?= base_url('sales/hapus/'.$s->id); ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin hapus sales ini?')">
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