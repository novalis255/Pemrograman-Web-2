<!DOCTYPE html>
<html>
<body>

<h2>Buku Tamu</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nama: <input type="text" name="nama"><br><br>
  E-mail: <input type="text" name="email"><br><br>
  Komentar: <textarea name="komentar" rows="5" cols="40"></textarea><br><br>
  <input type="submit"><br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    if (empty($nama) || empty($email) || empty($komentar)) {
        echo "Mohon mengisi semua field";
    } else {
        $file = fopen("bukutamu.dat", "a");
        fwrite($file, "Nama: $nama, Email: $email, Komentar: $komentar\n");
        fclose($file);
        echo "Terima kasih, $nama. Komentar Anda telah disimpan.";
    }
}
?>

</body>
</html>