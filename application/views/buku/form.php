<!DOCTYPE html>
<html>
<head><title>Form Buku</title></head>
<body>
<h2><?= isset($buku) ? 'Edit' : 'Tambah' ?> Buku</h2>
<?php echo validation_errors(); ?>
<form method="post" action="<?= isset($buku) ? site_url('buku/update/'.$buku->id) : site_url('buku/simpan') ?>">
    Judul: <input type="text" name="judul" value="<?= isset($buku) ? $buku->judul : '' ?>"><br><br>
    Penulis: <input type="text" name="penulis" value="<?= isset($buku) ? $buku->penulis : '' ?>"><br><br>
    Penerbit: <input type="text" name="penerbit" value="<?= isset($buku) ? $buku->penerbit : '' ?>"><br><br>
    Tahun Terbit: <input type="text" name="tahun_terbit" value="<?= isset($buku) ? $buku->tahun_terbit : '' ?>"><br><br>
    <button type="submit">Simpan</button>
</form>
</body>
</html>
