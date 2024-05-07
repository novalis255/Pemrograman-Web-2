<?php
session_start();

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = array();
}

if (isset($_POST['submit'])) {
    $negara = $_POST['negara'];
    $pertandingan = $_POST['pertandingan'];
    $menang = $_POST['menang'];
    $seri = $_POST['seri'];
    $kalah = $_POST['kalah'];
    $point = $_POST['point'];

    $data = array(
        'negara' => $negara,
        'pertandingan' => $pertandingan,
        'menang' => $menang,
        'seri' => $seri,
        'kalah' => $kalah,
        'point' => $point
    );

    $_SESSION['data'][] = $data;
}

if (isset($_POST['save'])) {
    $content = "";
    foreach ($_SESSION['data'] as $row) {
        $content .= "Negara: " . $row['negara'] . "\n";
        $content .= "Jumlah Pertandingan: " . $row['pertandingan'] . "\n";
        $content .= "Jumlah Menang: " . $row['menang'] . "\n";
        $content .= "Jumlah Seri: " . $row['seri'] . "\n";
        $content .= "Jumlah Kalah: " . $row['kalah'] . "\n";
        $content .= "Jumlah Point: " . $row['point'] . "\n\n";
    }

    $file = fopen("data.txt", "w");
    fwrite($file, $content);
    fclose($file);

    // Hapus data yang telah disimpan setelah menyimpan ke file
    $_SESSION['data'] = array();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Input dan Output</title>
    <style>
        .title {
            text-align: center;
            font-family: sans-serif;
        }
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>

<body>
    <div class="title">
        <h1>Data Group A Piala Asia Qatar U-23</h1>
        <h2>Per 07 Mei 2024 15:08:16 (Waktu dan Jam Sekarang)</h2>
        <h3>Novalis Ramadhan Syah / 211011401582</h3>
    </div>
    <form method="post" action="">
        <label for="negara">Negara:</label>
        <select id="negara" name="negara">
            <option value="Qatar U-23">Qatar U-23</option>
            <option value="Indonesia U-23">Indonesia U-23</option>
            <option value="Australia U-23">Australia U-23</option>
            <option value="Yordania U-23">Yordania U-23</option>
        </select>
        <br><br>
        <label for="pertandingan">Jumlah Pertandingan:</label>
        <input type="number" id="pertandingan" name="pertandingan">
        <br><br>
        <label for="menang">Jumlah Menang:</label>
        <input type="number" id="menang" name="menang">
        <br><br>
        <label for="seri">Jumlah Seri:</label>
        <input type="number" id="seri" name="seri">
        <br><br>
        <label for="kalah">Jumlah Kalah:</label>
        <input type="number" id="kalah" name="kalah">
        <br><br>
        <label for="point">Jumlah Point:</label>
        <input type="number" id="point" name="point">
        <br><br>
        <input type="submit" name="submit" value="Simpan">
    </form>

    <h2>Output:</h2>
    <?php if (!empty($_SESSION['data'])) : ?>
        <table>
            <tr>
                <th>Negara</th>
                <th>P</th>
                <th>M</th>
                <th>S</th>
                <th>K</th>
                <th>Poin</th>
            </tr>
            <?php foreach ($_SESSION['data'] as $row) : ?>
                <tr>
                    <td><?php echo $row['negara']; ?></td>
                    <td><?php echo $row['pertandingan']; ?></td>
                    <td><?php echo $row['menang']; ?></td>
                    <td><?php echo $row['seri']; ?></td>
                    <td><?php echo $row['kalah']; ?></td>
                    <td><?php echo $row['point']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br><br>
    <?php endif; ?>

    <form method="post" action="">
        <input type="submit" name="save" value="Save">
    </form>
</body>

</html>