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
    // Associative array yaitu mengganti index pemanggilan di array
    $dataDiri = [
                "nama" => "Roni Ardiyanto", 
                "umur" => 17, 
                "Pekerjaan" => "Pelajar",
    ];
    print_r($dataDiri) ; 
    echo "Sebelum menggunakan metode array_values dan array_keys" . "<br>" ;
    

    //metode assosiatif array yang mengubah index pemanggilan array ke default yaitu berupa angka
    print_r(array_values($dataDiri)) . "<br>";
    echo "Sesudah menggunakan metode array_values" . "<br>" ;

    //metode array untuk mengubah keys nya atau value menjadi angka
    print_r(array_keys($dataDiri)) . "<br>";
    echo "Sesudah menggunakan metode array_keys" ;


    ?>
</body>
</html>