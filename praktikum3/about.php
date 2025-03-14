<?php
include './top.php';
include './menu.php';
?>
<!-- Page content wrapper-->
<div id="page-content-wrapper">

    <?php
    include './navbar.php';
    ?>

    <!-- Page content-->
    <div class="container-fluid">
        <!-- Judul Halaman -->
        <h1 class="mt-4">Tentang Saya</h1>

        <!-- Konten Tentang Saya -->
        <div class="row mt-4">
            <div class="col-lg-8">
                <!-- Foto -->
                <img src="icang.jpg" alt="Foto Muhamad Faisal Akbar" class="foto" style="width: 150px; height: 150px; border-radius: 50%; border: 4px solid #4fc3f7; box-shadow: 0 0 15px rgba(79, 195, 247, 0.5); margin-bottom: 20px;">

                <!-- Deskripsi -->
                <div class="deskripsi">
                    <p>
                        Halo! Saya Muhamad Faisal Akbar, seorang mahasiswa yang antusias dalam bidang teknologi dan pengembangan web. 
                        Saya memiliki passion untuk menciptakan solusi digital yang kreatif dan inovatif. 
                        Saat ini, saya sedang mengejar gelar sarjana di bidang Sistem Informasi.
                    </p>
                </div>

                <!-- Informasi Kontak -->
                <div class="info-kontak">
                    <label>Nama:</label>
                    <span>Muhamad Faisal Akbar</span>

                    <label>Nomor HP:</label>
                    <span>085719017302</span>

                    <label>Email:</label>
                    <span>fa0514al@gmail.com</span>

                    <label>NIM:</label>
                    <span>0110124142</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './bottom.php';
?>