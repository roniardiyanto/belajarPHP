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
    //parameter berfungsi memberikan inputan pada parameter yang ditentukan

    function peserta($nama){
        echo "Peserta lomba debat adalah $nama";
    }
    function jarak(){
        echo "<br>";
    }

    peserta('Maryam');
    jarak();
    peserta('Ridwan');
    jarak();
    peserta('Roni')
    ?>
</body>
</html>