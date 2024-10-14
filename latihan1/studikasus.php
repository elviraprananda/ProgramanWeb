<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Kalkulator Sederhana</title>
</head>
<body>
    <h1>Aplikasi Kalkulator Sederhana</h1>
    <form method="POST" action="">
        <label for="bilangan1">Masukkan Bilangan Pertama:</label>
        <input type="number" name="bilangan1" required><br><br>
        
        <label for="bilangan2">Masukkan Bilangan Kedua:</label>
        <input type="number" name="bilangan2" required><br><br>
        
        <label>Pilih Operasi:</label><br>
        <input type="radio" name="operasi" value="penjumlahan" required> Penjumlahan (+)<br>
        <input type="radio" name="operasi" value="pengurangan"> Pengurangan (-)<br>
        <input type="radio" name="operasi" value="perkalian"> Perkalian (*)<br>
        <input type="radio" name="operasi" value="pembagian"> Pembagian (/)<br><br>
        
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;

        if ($operasi == "penjumlahan") {
            $hasil = $bilangan1 + $bilangan2;
        } elseif ($operasi == "pengurangan") {
            $hasil = $bilangan1 - $bilangan2;
        } elseif ($operasi == "perkalian") {
            $hasil = $bilangan1 * $bilangan2;
        } elseif ($operasi == "pembagian") {
            if ($bilangan2 != 0) {
                $hasil = $bilangan1 / $bilangan2;
            } else {
                $hasil = "Tidak bisa membagi dengan nol.";
            }
        }

        echo "<h2>Hasil Perhitungan: $hasil</h2>";
    }
    ?>
</body>
</html>
