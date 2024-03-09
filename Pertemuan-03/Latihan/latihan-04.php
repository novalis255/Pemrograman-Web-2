<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contoh Penggunaan IF </title>
</head>
<body>
    <h3> Menentukan Bilangan Ganjil/Genap </h3>
    <form method="post" action="">
        Masukan Nilai : <input type="text" name="input1"><br><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    if(isset($_POST['input1'])){
        $nilai = intval($_POST['input1']);
        if($nilai %2 == 0 ){
            print("$nilai Merupakan bilangan genap");
        } else{
            print("$nilai Merupakan bilangan ganjil");
        }
    }

    ?>
</body>
</html>