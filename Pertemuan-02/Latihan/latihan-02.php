<?php
// Inisiasi variabel yang digunakan
// Nama peralatan
$brg1 = "buku";
$brg2 = "Mouse";
$brg3 = "FlashDisk";
$brg4 = "Pulpen";

// Harga barang per-unit
$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

// Jumlah peralatan yang ada
$jmlBarang1 = 2;
$jmlBarang2 = 5;
$jmlBarang3 = 1;
$jmlBarang4 = 3;

// Total harga per jenis peralatan
$th1 = $jmlBarang1 * $harga1;
$th2 = $jmlBarang2 * $harga2;
$th3 = $jmlBarang3 * $harga3;
$th4 = $jmlBarang4 * $harga4;

// Hitung grand total nilai peralatan
$tharga = $th1 + $th2 + $th3 + $th4;

// Potongan
$pot = 5;

// Total potongan
$tpot = ($pot * $tharga)/100;

// Total bersih yang dibayar
$tdibayar = $tharga - $tpot;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pembelian Peralatan </title>
</head>
<style type="text/css">
    body {
        font-size: 14pt;
    }

    table {
        font-size: 25pt;
    }
</style>
<body>
    <center>
        <font face = "comic sans serif" size=5 color='blue'> CONTOH PERHIITUNGAN DENGAN PHP </font>
        <table border="1" cellspacing="0" cellpadding="3">
            <tr>
                <td colspan="4" align="center" valign="middle">
                    <b> Pesanan Alat Kantor </b>
                </td>
            </tr>
            <tr>
                <td><b> Nama Alat </b></td>
                <td><b> Kuantitas </b></td>
                <td><b> Harga_Satuan </b></td>
                <td><b> Jumlah_Harga </b></td>
            </tr>
            <?php
            // Input Data
            ?>
            <tr>
                <td align="left"><?php echo $brg1; ?></td>
                <td align="right"><?php echo $jmlBarang1; ?></td>
                <td align="right"><?php echo $harga1; ?></td>
                <td align="right"><?php echo $th1; ?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $brg2; ?></td>
                <td align="right"><?php echo $jmlBarang2; ?></td>
                <td align="right"><?php echo $harga2; ?></td>
                <td align="right"><?php echo $th2; ?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $brg3; ?></td>
                <td align="right"><?php echo $jmlBarang3; ?></td>
                <td align="right"><?php echo $harga3; ?></td>
                <td align="right"><?php echo $th3; ?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $brg4; ?></td>
                <td align="right"><?php echo $jmlBarang4; ?></td>
                <td align="right"><?php echo $harga4; ?></td>
                <td align="right"><?php echo $th4; ?></td>
            </tr>
            <tr>
                <td colspan="3"  align="right"> Diskon <?php echo "($pot %)"; ?></td>
                <td align="right"> <?php echo $tpot; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="right"> Jumlah Harus Dibayar </td>
                <td align="right"><?php echo $tdibayar; ?></td>
            </tr>
        </table>
    </center>
</body>
</html>