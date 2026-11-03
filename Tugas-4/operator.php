<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Pembagian: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br><br>";
echo "HasilSama: $hasilSama <br>";
echo "HasilTidakSama: $hasilTidakSama <br>";
echo "HasilLebihKecil: $hasilLebihKecil <br>";
echo "HasilLebihBesar: $hasilLebihBesar <br>";
echo "HasilLebihKecilSama: $hasilLebihKecilSama <br>";
echo "HasilLebihBesarSama: $hasilLebihBesarSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br><br>";
echo "Hasil AND: $hasilAnd <br>";
echo "Hasil OR: $hasilOr <br>";
echo "Hasil NOT A: $hasilNotA <br>";
echo "Hasil NOT B: $hasilNotB <br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<br><br>";
echo "Hasil akhir variabel a: $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br><br>";
echo "Hasil Identik: $hasilIdentik <br>";
echo "Hasil Tidak Identik: $hasilTidakIdentik <br>";

echo "<br><br>";

$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi kosong: $kursiKosong <br>";
echo "Persentase kursi kosong: " . number_format($persentaseKosong, 2) . "%";
?>
