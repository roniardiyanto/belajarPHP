<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <?php
    //Pengulangan di PHP atau Looping
    // struktur for (nilai awal, syarat, perubahan)
    //Mmemanggil array dengan mudah menggunakan pengulangan
    $posisi = ['Pertama', 'Kedua', 'Ketiga', 'Keempat', 'Kelima','keenam', 'Ketujuh', 'Kedelapan'];

    
    for ($i=0; $i < count($posisi) ; $i++) { 
        echo "Ini diulang - Ulangan Posisi $posisi[$i] <br>";
    }
    ?>

</html>