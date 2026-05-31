<div class="container-fluid">
     <h1 class="h3 mb-4 page-title">Data Pelanggan</h1>

    <div class="card shadow">
        <div class="card-body">

            <a href="<?= base_url('pelanggan/tambah'); ?>" class="btn btn-primary mb-3">
                Tambah Pelanggan
            </a>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th width="18%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; foreach($pelanggan as $p): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p->nama_pelanggan; ?></td>
                            <td><?= $p->alamat; ?></td>
                            <td><?= $p->telp; ?></td>
                            <td>
                                <a href="<?= base_url('pelanggan/edit/'.$p->id); ?>" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="<?= base_url('pelanggan/hapus/'.$p->id); ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin hapus pelanggan ini?')">
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