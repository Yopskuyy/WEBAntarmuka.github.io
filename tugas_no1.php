<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $gapok = 5000000;
    $tunjtrans = 500000;
    $tunjmakan = 300000;
    $pajak = 0.1;

    $totgaj = $gapok + $tunjtrans + $tunjmakan;
    $totpaj = ($gapok + $tunjtrans + $tunjmakan) * $pajak; 
    $gaber = $totgaj - $totpaj;
    echo "gaji bersih adalah : Rp." .$gaber;
    
    
    
    ?>
    
</body>
</html>