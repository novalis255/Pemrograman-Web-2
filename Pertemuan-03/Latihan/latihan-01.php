<?php
$ball = 'purple';
// Coba ubah ke yellow, blue, green, purple atau warna lain
if($ball == 'Red'){
    $redbox = $ball;
    echo "Red Box : $redbox <br>";
} else if ($ball == 'Yellow'){
    $yellowbox = $ball;
    echo "Yellow Box : $yellobox<br>";
} else if ($ball == 'Blue'){
    $bluebox = $ball;
    echo "Blue Box : $bluebox<br>";
}  else if ($ball == 'Green'){
    $greenbox = $ball;
    echo "Green Box : $greenbox<br>";
}  else if ($ball == 'Purple'){
    $purplebox = $ball;
    echo "Purple Box : $purplebox<br>";
} else {
    $colorlessbox = $ball;
    echo "Colorless Box : $ball<br>";
}
?>