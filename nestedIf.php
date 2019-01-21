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
        $uangRoni = 145000;
        $utangRoni = 87000;
        $kaosBola = 32000;
        $kuotaInternet = 70.000;

        if ($uangRoni > $kaosBola) {
            echo 'Roni ada uang untuk beli kaos bola <br>';
            if ($uangRoni >= 3 * $kaosBola) {
                echo 'Roni akhirnya membeli 3 kaos bola <br>';
            }else{
                echo 'Roni nggak beli kaos bola';
            }
            
        }else{
                echo 'tidak bisa beli';
        }

        //menggunakan else if
        if ($utangRoni > $uangRoni) {
            echo 'Roni masih kurang utangnya <br>';
        } else if ($utangRoni < $uangRoni){
            echo 'Roni bisa bayar utang <br>';
            if ($uangRoni - $utangRoni > $kuotaInternet) {
                echo 'Roni Sehabis bayar utang , beli kuota internet <br>';
            }
        }else {
            echo 'Roni kemana <br>';
        }
        
    ?>
</body>
</html>