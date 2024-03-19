<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Deret Ganjil</title>
</head>

<body>
    <h2><b> Bilangan Deret Ganjil Yang Habis Dibagi 3 </b></h2><br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="awal"> Nilai Awal : </label>
        <input type="number" id="awal" name="awal"><br><br>

        <label for="akhir"> Nilai Akhir : </label>
        <input type="number" id="akhir" name="akhir"><br><br>
        <button type="submit"> Submit </button><br><br>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $awal = $_POST['awal'];
            $akhir = $_POST['akhir'];
            $jumlah = 0;
            $banyak = 0;

            echo "Deret bilangan yang tampil : ";

            for($i = $awal; $i <= $akhir; $i++){
                if($i % 2 != 0 && $i % 3 == 0){
                    echo $i . ", ";
                    $jumlah += $i;
                    $banyak++;
                }
            }
            echo "<br> Jumlah Bilangan : $banyak";
            echo "<br> Jumlah Nilai Bilangan : $jumlah";
        }
    ?>
</body>

</html>