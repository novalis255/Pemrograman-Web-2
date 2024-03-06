<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Variabel Static </h1>
    <?php
    function coba(){
        Static $a=0; // Dengan Static
        echo "Nilai A : ";
        echo $a;
        echo "<br>";
        $a++;
    }
    coba();
    coba();
    coba();
    coba();
    ?>
</body>
</html>