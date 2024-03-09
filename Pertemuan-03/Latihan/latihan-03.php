<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Implementasi IF...ElseIF </title>
</head>
<body>
    <form method="post" action="">
        Masukan Nilai : <input type="text" name="input1"><br><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    if(isset($_POST['input1'])){
        $nilai=intval($_POST['input1']);
        if($nilai >= 80 ){
            print("Anda lulus dengan Grade A");
        } elseif($nilai >= 70){
            print("Anda lulus dengan Grade B");
        } elseif($nilai >= 60){
            print("Anda lulus dengan Grade C");
        } elseif($nilai >= 50 ){
            print("Anda lulus dengan Grade D");
        } else {
            print("Anda tidak lulus, Grade E");
        }
    }
    ?>
</body>
</html>l