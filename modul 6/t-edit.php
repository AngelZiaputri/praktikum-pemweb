<?php include 't-koneksi.php'; ?>
<?php
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM produk WHERE id_produk = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama  = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok  = $_POST['stok'];

    $stmt = $conn->prepare("UPDATE produk SET nama_produk=?, harga=?, stok=? WHERE id_produk=?");
    $stmt->bind_param("siii", $nama, $harga, $stok, $id);
    $stmt->execute();
    header("Location: t-index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4 text-warning">Edit Produk</h2>
    <form method="post">
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($data['nama_produk']) ?>">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="<?= $data['harga'] ?>">
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="<?= $data['stok'] ?>">
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="t-index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
