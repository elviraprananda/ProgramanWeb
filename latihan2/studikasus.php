<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
<body style="background-color:pink;">
   <h1>Aplikasi Penilaian Mahasiswa</h1>
    <form method="post" action="">
        <label for="nilai1">Masukkan Nilai Mata Kuliah 1:</label>
        <input type="number" name="nilai[]" required><br><br>

        <label for="nilai2">Masukkan Nilai Mata Kuliah 2:</label>
        <input type="number" name="nilai[]" required><br><br>

        <label for="nilai3">Masukkan Nilai Mata Kuliah 3:</label>
        <input type="number" name="nilai[]" required><br><br>

        <input type="submit" value="Hitung Rata-Rata">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];
        $jumlah_nilai = count($nilai);
        $total_nilai = 0;

        for ($i = 0; $i < $jumlah_nilai; $i++) {
            $total_nilai += $nilai[$i];
        }

        $rata_rata = $total_nilai / $jumlah_nilai;

        if ($rata_rata >= 60) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        echo "<h2>Hasil Penilaian</h2>";
        echo "Nilai Rata-Rata: " . number_format($rata_rata, 2) . "<br>";
        echo "Status Kelulusan: " . $status . "<br>";
    }
    ?>
</body>
</html>
