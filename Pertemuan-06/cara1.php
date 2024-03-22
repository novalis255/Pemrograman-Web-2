<?php
$alas = array(2, 3, 4, 5, 6);
$tinggi = array(3, 4, 5, 6, 7);

for($i = 0; $i < 5; $i++) {
    $luas = 0.5 * $alas[$i] * $tinggi[$i];
    echo "Luas segitiga dengan alas $alas[$i] dan tinggi $tinggi[$i] adalah $luas <br>";
}
?>