<?php
$nama = $_POST['nama'] ?? 'Tidak diketahui';
$alamat = $_POST['alamat'] ?? 'Tidak diketahui';
$pembayaran = $_POST['pembayaran'] ?? 'Tidak diketahui';
$total = $_POST['total'] ?? 0;
$invoice_id = "INV" . rand(1000, 9999);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Invoice - ALLMERCH</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #ececec;">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3e5452;">
    <div class="container d-flex" style="gap: 30px;">
        <a class="navbar-brand fw-bold" href="#">ALLMERCH</a>
    </div>
</nav>

<div class="container mt-4 mb-5">
    <div class="bg-light p-4 rounded">
        <h2 class="fw-bold mb-3">Invoice</h2>
        <p><strong>ID Invoice:</strong> <?= $invoice_id ?></p>
        <p><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></p>
        <p><strong>Alamat:</strong> <?= nl2br(htmlspecialchars($alamat)) ?></p>
        <p><strong>Metode Pembayaran:</strong> <?= htmlspecialchars($pembayaran) ?></p>
        <p><strong>Total Pembayaran:</strong> Rp<?= number_format($total, 0, ',', '.') ?></p>
        <hr>
        <p class="text-muted">Terima kasih telah berbelanja di ALLMERCH!</p>
    </div>
</div>

<footer class="text-center py-3" style="background-color: #3e5452; color: white;">
  <small>&copy; 2025 ALLMERCH. All rights reserved.</small>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
