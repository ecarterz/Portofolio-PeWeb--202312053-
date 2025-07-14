<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .header {
            text-align: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        
        .header h1 {
            margin: 0;
            font-size: 2.2em;
        }
        
        .form-section {
            background-color: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        
        input[type="text"]:focus, input[type="email"]:focus, textarea:focus {
            border-color: #667eea;
            outline: none;
        }
        
        textarea {
            height: 100px;
            resize: vertical;
        }
        
        .submit-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.2s;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
        }
        
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border-left: 4px solid #dc3545;
        }
        
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border-left: 4px solid #28a745;
        }
        
        .result-section {
            background-color: #e9ecef;
            padding: 25px;
            border-radius: 8px;
            margin-top: 20px;
        }
        
        .result-item {
            margin-bottom: 15px;
            padding: 10px;
            background-color: white;
            border-radius: 5px;
            border-left: 4px solid #667eea;
        }
        
        .result-label {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        
        .result-value {
            color: #555;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Buku Tamu Digital STITEK Bontang</h1>
            <p>Selamat datang! Silakan tinggalkan pesan Anda</p>
        </div>

        <?php
        // Inisialisasi variabel
        $nama = $email = $pesan = "";
        $error_message = "";
        $success = false;

        // Proses form jika ada data yang dikirim
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validasi input
            if (empty($_POST["nama"])) {
                $error_message .= "Nama Lengkap harus diisi.<br>";
            } else {
                $nama = htmlspecialchars($_POST["nama"]);
            }

            if (empty($_POST["email"])) {
                $error_message .= "Alamat Email harus diisi.<br>";
            } else {
                $email = htmlspecialchars($_POST["email"]);
                // Validasi format email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error_message .= "Format email tidak valid.<br>";
                }
            }

            if (empty($_POST["pesan"])) {
                $error_message .= "Pesan/Komentar harus diisi.<br>";
            } else {
                $pesan = htmlspecialchars($_POST["pesan"]);
            }

            // Jika tidak ada error, set success flag
            if (empty($error_message)) {
                $success = true;
            }
        }

        // Tampilkan pesan error jika ada
        if (!empty($error_message)) {
            echo '<div class="error-message">';
            echo '<strong>Terjadi kesalahan:</strong><br>' . $error_message;
            echo '</div>';
        }

        // Tampilkan pesan sukses jika berhasil
        if ($success) {
            echo '<div class="success-message">';
            echo '<strong>Terima kasih!</strong> Pesan Anda telah berhasil dikirim.';
            echo '</div>';
        }
        ?>

        <!-- Form Input -->
        <div class="form-section">
            <h2>Form Buku Tamu</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" placeholder="Masukkan nama lengkap Anda">
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Masukkan alamat email Anda">
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan/Komentar:</label>
                    <textarea id="pesan" name="pesan" placeholder="Tulis pesan atau komentar Anda di sini"><?php echo $pesan; ?></textarea>
                </div>

                <button type="submit" class="submit-btn">Kirim Pesan</button>
            </form>
        </div>

        <!-- Area Tampilan Data -->
        <?php if ($success): ?>
        <div class="result-section">
            <h2>Data yang Anda Kirimkan:</h2>
            
            <div class="result-item">
                <div class="result-label">Nama Lengkap:</div>
                <div class="result-value"><?php echo $nama; ?></div>
            </div>

            <div class="result-item">
                <div class="result-label">Alamat Email:</div>
                <div class="result-value"><?php echo $email; ?></div>
            </div>

            <div class="result-item">
                <div class="result-label">Pesan/Komentar:</div>
                <div class="result-value"><?php echo nl2br($pesan); ?></div>
            </div>

            <div class="result-item">
                <div class="result-label">Waktu Pengiriman:</div>
                <div class="result-value"><?php echo date('d F Y, H:i:s'); ?></div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Footer -->
        <div style="text-align: center; margin-top: 30px; color: #666; font-size: 14px;">
            <p>&copy; 2024 STITEK Bontang - Buku Tamu Digital</p>
            <p>Modul 5: Dasar-dasar PHP</p>
        </div>
    </div>
</body>
</html>
