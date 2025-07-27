<!DOCTYPE html>
<html>
<head><title>Daftar Buku</title></head>
<body>
<h2>Daftar Buku</h2>
<form method="get" action="<?= site_url('buku') ?>">
    <input type="text" name="keyword" placeholder="Cari buku..." value="<?= $this->input->get('keyword') ?>">
    <button type="submit">Cari</button>
</form>
<br>
<a href="<?= site_url('buku/tambah') ?>">Tambah Buku</a> |
<a href="<?= site_url('auth/logout') ?>">Logout</a>
<table border="1" cellpadding="5" cellspacing="0">
<tr><th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Tahun</th><th>Aksi</th></tr>
<?php foreach($buku as $b): ?>
<tr>
<td><?= $b->judul ?></td>
<td><?= $b->penulis ?></td>
<td><?= $b->penerbit ?></td>
<td><?= $b->tahun_terbit ?></td>
<td>
    <a href="<?= site_url('buku/edit/'.$b->id) ?>">Edit</a> |
    <a href="<?= site_url('buku/hapus/'.$b->id) ?>" onclick="return confirm('Hapus buku ini?')">Hapus</a>
</td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
