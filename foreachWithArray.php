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
    //Lebih mudah lagi memanggil semua value array dengan foreach, dibanding dengan for , maka perintah ini lebih simple dan mudah
    $hewanMamalia = ['Kucing', 'Anjing', 'Bekantan', 'Beruang', 'Sapi', 'Kerbau', 'Kambing'];
    foreach ($hewanMamalia as $hM) {
        echo "Hewan Ini Adalah $hM <br>";
    }
    
    ?>
</body>
</html>