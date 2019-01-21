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
    //Fungsi if dan else adalah fungsi logika meliputi == , === , > , < , >=, <= , != 
    // fungsi == , yaitu fungsi yang menyatakan sama dengan jika valuenya sama
    $password = 'excel231pas';
    $konfirmasiPassword =  'excel231pas';

    if ($password == $konfirmasiPassword) {
        echo 'Password anda cocok dengan sebelumnya <br>';
    } else {
        echo 'Password anda tidak cocok , tolong kembali di cek <br>';
    }
    //fungsi === , yaitu fungsi sama dengan jika value dan tipe datanya sama
    $jumlahBebekDikandang = 35;
    $jumlahBebekTerhitung = '35';
    
    if ($jumlahBebekDikandang === $jumlahBebekTerhitung) {
        echo 'Jumlah bebek sama dan tidak ada perubahan <br>';
    } else {
        echo 'Jumlah bebek belum terverifikasi sama <br>';
    }
    
    if ($jumlahBebekDikandang == $jumlahBebekTerhitung) {
        echo 'Jumlah bebek sama dan tidak ada perubahan <br>';
    } else {
        echo 'Jumlah bebek belum terverifikasi sama <br>';
    }
    //menggunakan <, > 
    $umurRani = 15;
    $umurRoni = 17;
    $minimalUmur = 17;
    
    if ($umurRani < $minimalUmur) {
        echo 'Maaf anda belum cukup umur <br>';
    } else {
        echo 'Anda Boleh memainkan <br>';
    }
     
    if ($umurRoni < $minimalUmur) {
        echo 'Maaf anda belum cukup umur <br>';
    } else {
        echo 'Anda Boleh memainkan <br>';
    }
    
    //menggunakan !=
    $adminBlacklist = 'roni';
    $adminAtas = 'rani';
    $adminVerif = 'roni';
    if ($adminBlacklist != $adminAtas) {
        
        echo 'Selamat datang admin <br>';
    } else {
        echo 'Anda Bukan Admin <br>';
    }
    if ($adminBlacklist != $adminVerif) {
        
        echo 'Selamat datang admin <br>';
    } else {
        echo 'Anda Bukan Admin <br>';
    }
    ?>
</body>
</html>