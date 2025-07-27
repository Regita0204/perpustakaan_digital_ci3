<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login Admin</h2>
<?php if ($this->session->flashdata('error')): ?>
<p style="color:red"><?= $this->session->flashdata('error') ?></p>
<?php endif; ?>
<form method="post" action="<?= site_url('auth/proses_login') ?>">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit">Login</button>
</form>
</body>
</html>
