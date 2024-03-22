<!DOCTYPE html>
<html>
<body>

<h2>Masukkan alas dan tinggi segitiga</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Alas 1: <input type="text" name="alas1">
  Tinggi 1: <input type="text" name="tinggi1"><br><br>
  Alas 2: <input type="text" name="alas2">
  Tinggi 2: <input type="text" name="tinggi2"><br><br>
  Alas 3: <input type="text" name="alas3">
  Tinggi 3: <input type="text" name="tinggi3"><br><br>
  Alas 4: <input type="text" name="alas4">
  Tinggi 4: <input type="text" name="tinggi4"><br><br>
  Alas 5: <input type="text" name="alas5">
  Tinggi 5: <input type="text" name="tinggi5"><br><br>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $alas = array($_POST['alas1'], $_POST['alas2'], $_POST['alas3'], $_POST['alas4'], $_POST['alas5']);
    $tinggi = array($_POST['tinggi1'], $_POST['tinggi2'], $_POST['tinggi3'], $_POST['tinggi4'], $_POST['tinggi5']);

    for($i = 0; $i < 5; $i++) {
        $luas = 0.5 * $alas[$i] * $tinggi[$i];
        echo "Luas segitiga dengan alas $alas[$i] dan tinggi $tinggi[$i] adalah $luas <br>";
    }
}
?>

</body>
</html>