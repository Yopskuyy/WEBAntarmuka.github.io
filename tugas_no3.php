<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $harprod = 200000;
    $prod = 150;

    $totjual = $harprod * $prod;
    $hasilprod = $totjual * 0.7;
    $hasiltoko = $totjual * 0.3;
    echo "jadi pihak produk mendapatkan : Rp.".$hasilprod,"<br>";
    echo "pihak toko mendapatkan : Rp.".$hasiltoko;
    
    
    ?>
    
</body>
</html>