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
    //Annoymous function adalah function yang dapat kita masukkan ke sebuah variabel dan tanpa diberi nama pada functionnya
    $namaAku = function($nama){
        echo "Nama Aku Adalah $nama";
    };
    $jarak = function(){
        echo "<br>";
    };

    $namaAku('Roni Ardiyanto');
    $jarak();
    $namaSaya = $namaAku;

    $namaSaya('Muhammad Fajar');
    ?>
</body>
</html>