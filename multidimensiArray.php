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
    //ini multi dimensi array
    $dataDiri= array(
                    array("Roni", 17, "Suka Makan"), 
                    array("Rini", 17, "Suka Dandan"),
                    array("Rino", 17, "Suka Touring") 
    );
    echo $dataDiri[2][1] . "<br>";
    echo $dataDiri[1][2] . "<br>";
    echo $dataDiri[0][0] . "<br>";
    ?>
</body>
</html>