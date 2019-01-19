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
    //menggunakan foreach dengan asosiatif array
    $dataDiri = ['Nama' => 'Roni', 'Jenis Kelamin' => 'Laki - Laki', 'Umur' => 17, 'Hobi' => 'Ngoding'];
    foreach ($dataDiri as $dD => $info) {
        echo $dD . "<br>";
        echo $info . "<br>";
    }
    ?>
</body>
</html>