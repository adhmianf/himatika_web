<?php include '../config/koneksi.php'; ?>
<?php include '../includes/header.php'; ?>

<?php
if ($_POST) {
  $koneksi->query("INSERT INTO kontak (nama, email, pesan) VALUES ('$_POST[nama]', '$_POST[email]', '$_POST[pesan]')");
  echo "<div class='alert alert-success'>Pesan berhasil dikirim!</div>";
}
?>

<h2>Hubungi Kami</h2>
<form method="post">
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input name="nama" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input name="email" type="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Pesan</label>
    <textarea name="pesan" class="form-control" required></textarea>
  </div>
  <button type="submit" class="btn btn-success">Kirim</button>
</form>

<?php include '../includes/footer.php'; ?>
