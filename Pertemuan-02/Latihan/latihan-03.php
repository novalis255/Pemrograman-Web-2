<?php
echo "<b><font face='tahoma' size=5 color='blue'> Hari ini hari pertama saya membuat web dengan PHP </font></b><br>";
print "<hr size=4 color='red'>";

// Penggunaan variabel string
$nama = "Anggita";
$alamat = "Depok";
$email = "anggita@gmail.com";

echo "Nama saya\t : $nama<br>";
echo "Alamat\t : $alamat<br>";
echo "Email\t : $email<br>";

// Penggunaan variabel numberik
$a = 10;
$b = 15;
$c = 6;
$hasil = ($a*$b)+2*(pow($c,3))-($b*2*$a); // pow(Bilangan,pangkat)

print "Nilai a\t = $a<br>";
print "Nilai b\t = $b<br>";
print "Nilai c\t = $c<br>";
print "($a*$b)+2*$c^3-($b*2*$a) = $hasil<br>";

?>