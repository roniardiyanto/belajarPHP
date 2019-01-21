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
    $hargaBola = 78000;
    $hargaKaos = 35500;
    $uangRaka = 67000;

    //contoh penggunaan 'or' / '||' pada if , maka apabila satu atau dua dari 2 pernyataan adalah bernilai benar maka akan menampilkan perintah berikutnya.
    if ($uangRaka > $hargaBola || $uangRaka > $hargaKaos) {
        echo 'Raka membeli barang di toko <br>';
    } else {
        echo 'Raka tidak membeli barang apapun di toko karena uang raka tidak cukup <br>';
    }
        //namun jika dua pernyataaan salah maka , akan dieksekusi else
        if ($uangRaka > $hargaBola || $uangRaka < $hargaKaos) {
            echo 'Raka membeli barang di toko <br>';
        } else {
            echo 'Raka tidak membeli barang apapun di toko karena uang raka tidak cukup <br>';
        }
    //contoh penggunaan && atau and , yaitu syarat if jika dua syarat memenuhi maka akan dieksekusi

    $uangRoni = 100000;
    $hargaKanvas = 75000;
    $hargaCat = 35000;
    
    if ($uangRoni > $hargaKanvas && $uangRoni > $hargaCat) {
        echo 'Roni membeli kanvas dan cat <br>';
    } else {
        echo 'Roni tidak membeli apapun <br>';
    }
        //jika salah satu atau dua syarat tidak terpenuhi maka perintah tidak dapat dieksekusi

    if ($uangRoni >= $hargaCat + $hargaKanvas && $hargaKanvas < $uangRoni) {
        echo 'Roni membeli kanvas dan cat <br>';
    } else {
        echo 'Roni tidak membeli apapun <br>';
    }
      
    
    

            
    
    ?>
</body>
</html>