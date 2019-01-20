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
     $namaPeserta = ['Roni', 'Aji', 'Dery', 'Mahesa', 'Diaz'];
     $lokasiAcara = ['Bukit Kencana', 'Bukit Barisan', 'Ungaran', 'Pedurungan', 'Sido Mukti'];
    
     //Menggunakan perulangan while didalam while(syarat), nilai awal ditulis dahulu dan perubahan di tulis sebelum {}
     $a = 0;
     while ($a < count($namaPeserta) ) {
         echo "Pesertanya adalah $namaPeserta[$a] . <br>";
         $a++;
     }
     //Menggunakan Perulangan Do While , 
     $b = 0;
     
     do {
         echo "Lokasi acara yang disarankan adalah $lokasiAcara[$b] <br>";
         $b++;
     } while ($b < count($lokasiAcara));
    ?>
</body>
</html>