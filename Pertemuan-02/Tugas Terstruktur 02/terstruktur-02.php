<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tugas Terstruktur 02 (No.02) </title>
</head>
<body>
<h1> Tugas Perhitungan Nilai </h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nilai1">Nilai 1:</label>
        <input type="number" id="nilai1" name="nilai1">

        <label for="operasi">Operasi:</label>
        <select id="operasi" name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="bagi">/</option>
            <option value="kali">*</option>
        </select>

        <label for="nilai2">Nilai 2:</label>
        <input type="number" id="nilai2" name="nilai2">

        <button type="submit">Submit</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai1 = $_POST['nilai1'];
            $operasi = $_POST['operasi'];
            $nilai2 = $_POST['nilai2'];
            $hasil = 0;

            if ($operasi === "tambah") {
                $hasil = $nilai1 + $nilai2;
            } else if ($operasi === "kurang") {
                $hasil = $nilai1 - $nilai2;
            } else if ($operasi === "bagi") {
                $hasil = $nilai1 / $nilai2;
            } else if ($operasi === "kali") {
                $hasil = $nilai1 * $nilai2;
            }

            echo "<h2>Hasil Perhitungan:</h2>";
            echo "Nilai 1: " . $nilai1 . "<br>";
            echo "Operasi: " . $operasi . "<br>";
            echo "Nilai 2: " . $nilai2 . "<br>";
            echo "Hasil: " . $hasil;
        }
    ?>
</body>
</html>