<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet"> <!-- Font Amiri untuk tema Ramadhan -->
    <style>
        body {
            background-color: #0a192f; /* Warna biru dongker */
            color: #ffffff; /* Warna teks putih */
            font-family: 'Times New Roman', serif; /* Font Times New Roman */
        }
        .card {
            background: linear-gradient(145deg, #1f4068, #2a5298); /* Gradient biru tua */
            color: #ffffff; /* Warna teks putih */
            border-radius: 15px;
            border: 2px solid #00bcd4; /* Border biru muda */
            box-shadow: 0 4px 15px rgba(0, 188, 212, 0.6); /* Shadow biru muda */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px); /* Efek hover naik */
            box-shadow: 0 8px 25px rgba(0, 188, 212, 0.8); /* Shadow lebih kuat saat hover */
        }
        .btn-primary {
            background-color: #ff6f61; /* Warna tombol pink peach */
            border-color: #ff6f61;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #ff3b2f; /* Warna tombol pink peach lebih gelap saat hover */
            border-color: #ff3b2f;
        }
        .alert-success {
            background-color: #ff6f61; /* Warna alert pink peach */
            border-color: #ff6f61;
            color: #ffffff; /* Warna teks putih */
            box-shadow: 0 4px 10px rgba(255, 111, 97, 0.6); /* Shadow pink peach */
        }
        .form-control {
            background-color: rgba(255, 255, 255, 0.1); /* Input field semi-transparent */
            color: #ffffff; /* Warna teks putih */
            border: 1px solid #00bcd4; /* Border biru muda */
        }
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2); /* Input field lebih terang saat focus */
            border-color: #ff6f61; /* Border pink peach saat focus */
            box-shadow: 0 0 8px rgba(255, 111, 97, 0.6); /* Shadow pink peach saat focus */
        }
        .ramadhan-theme {
            font-family: 'Amiri', serif; /* Font Amiri untuk tema Ramadhan */
            color:rgb(211, 241, 243); /* Warna emas untuk tema Ramadhan */
            text-shadow: 0 0 10pxrgb(223, 231, 233), 0 0 20px #ffd700; /* Efek glow */
            font-size: 2.5rem; /* Ukuran font lebih besar */
            font-weight: bold; /* Tebal */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="text-center ramadhan-theme">Sholeh Electro 🎉</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="namaCustomer">Nama Customer</label>
                    <input type="text" class="form-control" id="namaCustomer" name="namaCustomer" required>
                </div>
                <div class="form-group">
                    <label for="produk">Pilih Produk</label>
                    <select class="form-control" id="produk" name="produk" required>
                        <option value="TV">TV</option>
                        <option value="KULKAS">Kulkas</option>
                        <option value="MESIN_CUCI">Mesin Cuci</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $namaCustomer = $_POST['namaCustomer'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];

                $harga = [
                    'TV' => 4200000,
                    'KULKAS' => 3100000,
                    'MESIN_CUCI' => 3800000
                ];

                $totalBelanja = $harga[$produk] * $jumlah;

                echo "<div class='mt-4'>
                        <h4>Detail Belanja</h4>
                        <p>Nama Customer: $namaCustomer</p>
                        <p>Produk: $produk</p>
                        <p>Jumlah: $jumlah</p>
                        <p>Total Belanja: Rp. " . number_format($totalBelanja, 0, ',', '.') . ",-</p>
                        <div class='alert alert-success mt-3'>
                            Terima kasih telah berbelanja di toko kami 🤑
                        </div>
                      </div>";
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>