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
    //scope atau global scope berfungsi agar variabel di luar function dapat digunakan didalam sebuah function itu sendiri
    $urutan = ["Pertama", "Kedua", "Ketiga", "Keempat", "Kelima", "Keenam"];
    shuffle($urutan);
    function panggilanPeserta($nama){
        global $urutan;
        echo "Peserta dengan nama $nama mendapat urutan $urutan[3]";

    }
    

    panggilanPeserta('Roni');
    ?>
</body>
</html>