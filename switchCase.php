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
    
    $hewanDidalamKotak = 'Kucing';
    
    switch ($hewanDidalamKotak) {
        case 'Anjing':
            echo 'Hewannya adalah Anjing <br>';
            break;
        case 'Kucing':
            echo 'Hewannya adalah kucing <br>';
            break;
        default:
            echo 'Hewannya tidak diketahui <br>';
            break;
    }
    $banyaknyaPlanet = 8;

    switch ($banyaknyaPlanet) {
        case '6':
            echo 'Jumlah planet ada 6 <br>';
            break;
        case '7':
            echo 'Jumlah planet ada 7 <br>';
            break;
        case '9':
            echo 'Jumlah planet ada 9 <br>';
            break;
        default:
            echo 'Semua jawaban salah, jumlah planet ada 8 ';
            break;
    }
    ?>
</body>
</html>