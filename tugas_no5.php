<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function KelayakanKredit($usia, $penghasilanBulanan, $riwayatKreditMacet) {
    
    if ($usia >= 21 && $usia <= 60 && $penghasilanBulanan >= 5000000 && !$riwayatKreditMacet) {
        return "LAYAK";
    } else {
        return "TIDAK LAYAK";
    }
}


$usiaPemohon = 27;  
$penghasilanBulananPemohon = 8000000; 
$riwayatKreditMacetPemohon = true;  

$hasilKelayakan = KelayakanKredit($usiaPemohon, $penghasilanBulananPemohon, $riwayatKreditMacetPemohon);

echo "Usia Pemohon: " . $usiaPemohon . " tahun<br>";
echo "Penghasilan Bulanan: Rp" .$penghasilanBulananPemohon, "<br>";
echo "Riwayat Kredit Macet: " . ($riwayatKreditMacetPemohon ? "Ya" : "Tidak") . "<br>";
echo "Status Kelayakan Kredit: " . $hasilKelayakan;
?>
    
</body>
</html>