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
    //array dan metode pemanggilan unique
    $nickname = ['angga', 'anggi', 'aji', 'budi', 'aji', 'anggi', 'roni', 'budi', 'khoirul'];
    
    print_r($nickname) . "<br>";
    echo "Sebelum metode unique" . "<br>";
    print_r(array_unique($nickname)) . "<br>";
    echo "Sesudah metode unique" . "<br>";
    //metode reverse pada array
    print_r(array_reverse($nickname)) . "<br>";
    echo "metode reverse atau membalik posisi array" . "<br>";
    //metode shuffle
    $nickname2 = ['angga', 'anggi', 'aji', 'budi', 'roni', 'khoirul'];
    shuffle($nickname2);
    print_r($nickname2);
    echo "Ini metode shuffle, yaitu mengacak nilai  array, refresh browser untuk melihat hasilnya" . "<br>";
    //metode count atau menghitung berapa jumlah array
    echo count($nickname);
    echo " ini jumlah array dari $nickname" . "<br>";
    // metode sort yaitu mengurutkan dari terkecil ke terbesar
    $angka = [23,17,43,31,65,24];
    print_r($angka) . "<br>";
    echo "sebelum di sort" . "<br>";
    sort($angka);
    print_r($angka) . "<br>";
    echo "Sesudah di sort" . "<br>";
    ?>
</body>
</html>