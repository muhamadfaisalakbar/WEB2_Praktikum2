<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_praktikum = $_POST['nilai_praktikum'];

    // Menghitung nilai total
    $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_praktikum * 0.35);

    // Output dengan CSS light blue
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Hasil Nilai Mahasiswa</title>
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(135deg, #87CEEB, #ADD8E6); /* Light blue gradient */
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;   
                align-items: center;
                height: 100vh;
                color: #333; /* Darker text for contrast */
            }
            .container {
                background: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
                backdrop-filter: blur(10px);
                border-radius: 15px;
                padding: 30px;
                width: 400px;
                text-align: center;
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }
            h1 {
                font-size: 24px;
                margin-bottom: 20px;
                color: #1E90FF; /* Dodger blue for headings */
            }
            p {
                font-size: 18px;
                margin: 10px 0;
                color: #555; /* Dark gray for text */
            }
            .nilai-total {
                font-size: 22px;
                font-weight: bold;
                margin-top: 20px;
                color: #1E90FF; /* Dodger blue for total score */
            }
            .lulus {
                color: #32CD32; /* Lime green for 'LULUS' */
                font-weight: bold;
                font-size: 24px;
                animation: fadeIn 2s ease-in-out;
            }
            .tidak-lulus {
                color: #FF4500; /* Orange red for 'TIDAK LULUS' */
                font-weight: bold;
                font-size: 24px;
                animation: shake 0.5s ease-in-out;
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            @keyframes shake {
                0% { transform: translateX(0); }
                25% { transform: translateX(-10px); }
                50% { transform: translateX(10px); }
                75% { transform: translateX(-10px); }
                100% { transform: translateX(0); }
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Hasil Nilai Mahasiswa</h1>
            <p>Nama : $nama</p>
            <p>Mata Kuliah : $matkul</p>
            <p>Nilai UTS : $nilai_uts</p>
            <p>Nilai UAS : $nilai_uas</p>
            <p>Nilai Praktikum/Tugas : $nilai_praktikum</p>
            <p class='nilai-total'>Nilai Total : " . number_format($nilai_total, 2) . "</p>";

    if ($nilai_total > 55) {
        echo "<p class='lulus'>$nama DINYATAKAN LULUS 🎉</p>";
    } else {
        echo "<p class='tidak-lulus'>$nama DINYATAKAN TIDAK LULUS 😢</p>";
    }

    echo "
        </div>
    </body>
    </html>";
}
?>