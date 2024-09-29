<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    function CekNilai($nilaiTeori, $nilaiPraktik) {
        if ($nilaiTeori >= 70 && $nilaiPraktik >= 75) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }
    
    
    $nilaiTeoriSiswa = 50;  
    $nilaiPraktikSiswa = 50;  
    
    $hasilKelulusan = CekNilai($nilaiTeoriSiswa, $nilaiPraktikSiswa);
    
    echo "Nilai Ujian Teori: " . $nilaiTeoriSiswa . "<br>";
    echo "Nilai Ujian Praktik: " . $nilaiPraktikSiswa . "<br>";
    echo "Status Kelulusan: " . $hasilKelulusan;
?>
    




</body>
</html>