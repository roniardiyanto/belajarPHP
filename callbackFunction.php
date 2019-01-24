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
    //callbcak paa function berguna untuk mengisi parameter pada sebuah fungsi utama dengan fungsi lainnya
    function dataDiri($callback){
        echo "Nama Saya Roni Ardiyanto <br>";
    call_user_func($callback, 'Mancing');
    }

    $hobi = function($hobiku){
        echo "Hobiku adalah $hobiku";
    };

    function jarak(){
        echo "<br>";
    }
    dataDiri($hobi);

    ?>
</body>
</html>