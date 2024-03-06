<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $A = 256; // Variabel Global
    function Test(){
        $A = "Test"; // Variabel Local
        echo "Variabel A berisi = $A <br>";
    }
    Test();
    echo "A diluar fungsi berisi = $A <br>";
    ?>
</body>
</html>