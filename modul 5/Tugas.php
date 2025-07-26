<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #004b8d;
            color: white;
            padding: 20px;
            text-align: center;
        }
        main {
            max-width: 600px;
            margin: 30px auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        .submit-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #004b8d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0060c0;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        .hasil {
            margin-top: 30px;
            padding: 15px;
            background-color: #e8f0fe;
            border-left: 4px solid #004b8d;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<header>
    <h1>Buku Tamu Digital STITEK Bontang</h1>
</header>

<main>
    <?php
    // Inisialisasi variabel
    $nama = $email = $pesan = "";
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"]) || empty($_POST["email"]) || empty($_POST["pesan"])) {
            $error = "Semua kolom wajib diisi.";
        } else {
            // Bersihkan input dengan htmlspecialchars
            $nama  = htmlspecialchars($_POST["nama"]);
            $email = htmlspecialchars($_POST["email"]);
            $pesan = htmlspecialchars($_POST["pesan"]);
        }
    }
    ?>

    <form method="post" action="">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" value="<?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?>">

        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

        <label for="pesan">Pesan/Komentar:</label>
        <textarea id="pesan" name="pesan"><?php echo isset($_POST['pesan']) ? htmlspecialchars($_POST['pesan']) : ''; ?></textarea>

        <button type="submit" class="submit-btn">Kirim Pesan</button>

        <?php if (!empty($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)): ?>
        <div class="hasil">
            <h3>Pesan Anda berhasil dikirim!</h3>
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Pesan:</strong><br><?php echo nl2br($pesan); ?></p>
        </div>
    <?php endif; ?>
</main>
</body>
</html>