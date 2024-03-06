<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tugas Terstruktur 02 (No.1)</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Form Perhitungan Nilai</h1>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required><br><br>

        <label for="nilai_tugas">Nilai Tugas:</label>
        <input type="number" name="nilai_tugas" id="nilai_tugas" required><br><br>

        <label for="nilai_uts">Nilai UTS:</label>
        <input type="number" name="nilai_uts" id="nilai_uts" required><br><br>

        <label for="nilai_uas">Nilai UAS:</label>
        <input type="number" name="nilai_uas" id="nilai_uas" required><br><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        $rata_rata = ($nilai_tugas + $nilai_uts + $nilai_uas) / 3;

        echo "<h2>Output:</h2>";
        echo "Nama: $nama <br>";
        echo "Jurusan: $jurusan <br>";
        echo "Nilai Tugas: $nilai_tugas <br>";
        echo "Nilai UTS: $nilai_uts <br>";
        echo "Nilai UAS: $nilai_uas <br>";
        echo "Rata-rata: $rata_rata";
    }
    ?>

</body>

</html>