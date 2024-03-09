<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Penggunaan Swtich - Case </title>
</head>
<body>
    Hari ini :

    <?php
    $namaHari = date("I");

    switch($namaHari){
        case "Sunday":
            print("Minggu<br>");
            print("Waktunya Istirahat");
            break;
        case "Monday":
            print("Senin<br>");
            print("Meeting awal minggu jam 08.00");
            break;
        case "Tuesday":
            print("Selasa<br>");
            print("Pembukaan workshop diklat");
            break;
        case "Wednesday":
            print("Rabu<br>");
            print("Seminar launching window vista di JHCC");
            break;
        case "Thrusday":
            print("Kamis<br>");
            print("Pertemuan dengan mahasiswa");
            break;
        case "Friday":
            print("Jum'at<br>");
            print("Joging bersama");
            break;
        case "Saturday":
            print("Sabtu");
            print("Survey harga ke Dusit, Mangga dua");
    }
    ?>
</body>
</html>