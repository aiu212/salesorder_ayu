<div class="container-fluid">
<h1 class="h3 mb-4 text-gray-800">Edit Buku</h1>

<form method="post" action="<?= site_url('buku/update/'.$buku->id); ?>">

<input type="text" name="kode_buku" value="<?= $buku->kode_buku ?>" class="form-control mb-2" required>
<input type="text" name="judul" value="<?= $buku->judul ?>" class="form-control mb-2" required>
<input type="text" name="penulis" value="<?= $buku->penulis ?>" class="form-control mb-2" required>
<input type="text" name="penerbit" value="<?= $buku->penerbit ?>" class="form-control mb-2" required>
<input type="number" name="tahun" value="<?= $buku->tahun ?>" class="form-control mb-2" required>

<select name="kategori" class="form-control mb-2">
<?php foreach($kategori as $k): ?>
<option value="<?= $k->id ?>" <?= $buku->kategori_id==$k->id?'selected':'' ?>>
<?= $k->nama_kategori ?>
</option>
<?php endforeach; ?>
</select>

<input type="number" name="stok" value="<?= $buku->stok ?>" class="form-control mb-2" required>
<input type="text" name="lokasi_rak" value="<?= $buku->lokasi_rak ?>" class="form-control mb-2" required>

<button class="btn btn-primary">Update</button>
</form>
</div>