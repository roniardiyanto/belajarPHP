<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //Memanggil value array dengan mudah menggunakan perulangan
    $posisi = ['Pertama', 'Kedua', 'Ketiga', 'Keempat', 'Kelima', 'Keenam', 'Ketujuh', 'Kedelapan'];
    for ($i=0; $i < count($posisi) ; $i++) { 
        echo "Ini Adalah Pemanggilan Nilai Array dengan Perulangan ke $posisi[$i] <br>";
    }
    ?>
</body>
</html>