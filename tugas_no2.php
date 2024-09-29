<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $tab = 10000000;
    $harlep = 7000000;
    $harhp = 3500000;
    $pajak = 0.1;


    $tothp = $harhp - ($harhp * $pajak);
    $totharga = $harlep + $tothp;
    $sistab = $tab - $totharga;
    echo "sisa tabungan fajar : Rp.".$sistab; 
    
    
    ?>


    
</body>
</html>