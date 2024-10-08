<!DOCTYPE hjum>
<hjum lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
     <h2>No.1</h2> 
    <?php
$jum = 158;
if ($jum < 100) {
$total = $jum * 150;
} elseif ($jum > 100 && $jum <= 200) {
$total = $jum * 100;
} elseif ($jum > 200) {
$total = $jum * 80;
} else {
echo "Nilai Tidak Valid";
}
?>
<?= "Biaya = Rp. " , $total ?>

<h2>No.2</h2>

<?php
$nilai = 100;
$keterangannilai = null;
if ($nilai >= 90 && $nilai <= 100) {
$keterangannilai = "A";
} elseif ($nilai >= 76 && $nilai <= 89) {
$keterangannilai = "B";
} elseif ($nilai >= 60 && $nilai <= 75) {
$keterangannilai = "C";
} elseif ($nilai >= 50 && $nilai <= 59) {
$keterangannilai = "D";
} elseif ($nilai <= 49 && $nilai >= 0) {
$keterangannilai = "E";
} else {
echo "Nilai Tidak Valid!!";
}
switch ($keterangannilai) {
case 'A':
echo "keterangan nilai Anda Adalah ", $keterangannilai ," , Nilai Anda Baik Sekali";
break;
case 'B':
echo "keterangan nilai Anda Adalah ", $keterangannilai ," , Nilai Anda Baik";
break;
case 'C':
echo "keterangan nilai Anda Adalah ", $keterangannilai ," , Nilai Anda Cukup";
break;
case 'D':
echo "keterangan nilai Anda Adalah ", $keterangannilai ," , Nilai Anda Hampir Cukup";
break;
case 'E':
echo "keterangan nilai Anda Adalah ", $keterangannilai ," , Nilai Anda Kurang";
break;
default:
echo "keterangan nilai Tidak Valid!!";
break;
}
?>

<h2>No.3</h2>

<?php
date_default_timezone_set('Asia/Makassar');
$bulan = date("m");
// $bulan = 2;
$tahun = date("Y");
switch ($bulan) {
case '1':
echo "Bulan: Januari";
break;
case '2':
echo "Bulan: Februari";
break;
case '3':
echo "Bulan: Maret";
break;
case '4':
echo "Bulan: April";
break;
case '5':
echo "Bulan: Mei";
break;
case '6':
echo "Bulan: Juni";
break;
case '7':
echo "Bulan: Juli";
break;
case '8':
echo "Bulan: Agustus";
break;
case '9':
echo "Bulan: September";
break;
case '10':
echo "Bulan: Oktober";
break;
case '11':
echo "Bulan: November";
break;
case '12':
echo "Bulan: Desember";
break;
default:
echo "Nilai Tidak Valid";
break;
}
if ($bulan == 2) {
if ($tahun % 4 == 0 && $tahun % 100 != 0 || $tahun % 400 == 0) {
$hari = 29; // Tahun kabisat
} else {
$hari = 28; // Bukan tahun kabisat
}
} elseif ($bulan == 4 || $bulan == 6 || $bulan == 9 || $bulan == 11) {
$hari = 30; // Bulan April, Juni, September, November
} else {
$hari = 31; // Bulan Januari, Maret, Mei, Juli, Agustus, Oktober, Desember
}
echo "Jjumah Hari : ", $hari ,"";
?>

<h2>No.4</h2>

<?php
$usia = 20;
$jam = "17.00";
$hari = "Sabtu";
if ($usia < 12) {
$tiket = 30000;
} elseif ($usia >= 12 && $usia <= 60) {
$tiket = 50000;
} elseif ($usia > 60) {
$tiket = 35000;
}
if ($jam > "17:00") {
if ($usia >= 12) {
$tiket += 10000;
}
}
switch ($hari) {
case 'Sabtu':
case 'Minggu':
$diskon = $tiket * 0.1; //
$total = $tiket - $diskon;
break;
default:
$total = $tiket;
break;
}
echo "Harga Tiket Anda Adalah : Rp. ", $total ,"";
?>

<h2>No.5</h2>

<?php
$penghas = 200000000;
$tang = 3; // Tanggungan
$status = "wiraswasta";
if ($penghas <= 50000000) {
$pajak = $penghas * 0.05;
} elseif ($penghas > 50000000 && $penghas <= 100000000) {
$pajak = $penghas * 0.1;
} elseif ($penghas > 100000000 && $penghas <= 250000000) {
$pajak = $penghas * 0.15;
} else if ($penghas > 250000000) {
$pajak = $penghas * 0.20;
}
if ($tang > 5) {
$tang = 5;
$ttang = 2000000 * $tang;
$total = $pajak - $ttang;
} else {
$ttang = 2000000 * $tang;
$total = $pajak - $ttang;
}
switch ($status) {
case 'wiraswasta':
$tpaj = $total + 5000000; // pajak tambahan
echo "Pajak Akhir Yang Harus Dibayar: Rp. ", number_format($tpaj),"";
break;
default:
echo"Pajak Akhir Yang Harus Dibayar: Rp. ", number_format($total), "";
break;
}
?>

<h2>No.6</h2>

<?php
// Input data
$peng = 10000000;
$spek = 'kontrak'; // tetap atau kontrak
$lker = 2; // Lama Kerja
$utang= 17000000; // utang di tempat lain
$jaminan = 0; // 1 jika ada jaminan, 0 jika tidak ada
$rkredit = 'baik'; // Status riwayat kredit ('baik' atau 'tunggakan')
$hargajaminan = 0;
if ($jaminan) {
} else {
if ($peng < 10000000) {
echo "Penghasilan kurang dari Rp10.000.000.";
exit;
}
}
if ($utang >= 20000000) {
echo "Utang Ditempat Lain Lebih Atau Sama Dengan 20 Juta";
exit;
}
switch ($spek) {
case 'tetap':
if ($lker < 2) {
echo "Lama bekerja kurang dari 2 tahun untuk karyawan tetap.";
exit;
}
break;
case 'kontrak':
if ($lker < 5) {
echo "Lama bekerja kurang dari 5 tahun untuk pekerja kontrak.";
exit;
}
break;
default:
echo "Ditolak.";
exit;
}
if ($rkredit === 'tunggakan') {
if ($hargajaminan < 100000000) {
echo "Jaminan kurang dari Rp.100.000.000";
} else {
echo "disetujui";
}
} else if ($rkredit === 'baik') {
echo "disetujui";
} else {
echo "Ditolak";
}
?>

    

</body>
</hjum>