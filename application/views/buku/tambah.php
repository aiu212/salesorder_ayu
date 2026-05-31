<div class="container-fluid">
<h1 class="h3 mb-4 text-gray-800">Tambah Buku</h1>

<form method="post" action="<?= site_url('buku/simpan'); ?>">

<input type="text" name="kode_buku" class="form-control mb-2" placeholder="Kode Buku" required>
<input type="text" name="judul" class="form-control mb-2" placeholder="Judul" required>
<input type="text" name="penulis" class="form-control mb-2" placeholder="Penulis" required>
<input type="text" name="penerbit" class="form-control mb-2" placeholder="Penerbit" required>
<input type="number" name="tahun" class="form-control mb-2" placeholder="Tahun" required>

<select name="kategori" class="form-control mb-2" required>
<option value="">Pilih Kategori</option>
<?php foreach($kategori as $k): ?>
<option value="<?= $k->id ?>"><?= $k->nama_kategori ?></option>
<?php endforeach; ?>
</select>

<input type="number" name="stok" class="form-control mb-2" placeholder="Stok" required>
<input type="text" name="lokasi_rak" class="form-control mb-2" placeholder="Lokasi Rak" required>

<button class="btn btn-primary">Simpan</button>
</form>
</div>