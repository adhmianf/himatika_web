<?php include '../config/koneksi.php'; ?>
<?php include '../includes/header.php'; ?>
<h2 class="mb-4">Kegiatan HIMATIKA</h2>
<div class="row">
  <?php
  $query = $koneksi->query("SELECT * FROM kegiatan");
  while ($row = $query->fetch_assoc()) {
    echo "<div class='col-md-4'>
            <div class='card mb-3'>
              <div class='card-body'>
                <h5 class='card-title'>{$row['judul']}</h5>
                <p class='card-text'>{$row['deskripsi']}</p>
              </div>
            </div>
          </div>";
  }
  ?>
</div>
<!DOCTYPE html>
<html>
<head><title>Kegiatan HIMATIKA</title></head>
<body>
<h2>Daftar Kegiatan</h2>
<ul>
<?php
$result = $koneksi->query("SELECT * FROM kegiatan");
while($row = $result->fetch_assoc()){
    echo "<li><strong>{$row['judul']}</strong>: {$row['deskripsi']}</li>";
}
?>
</ul>
<a href="../index.php">Kembali</a>
</body>
</html>
<?php include '../includes/footer.php'; ?>