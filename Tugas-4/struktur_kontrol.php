<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br><br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br><br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiTerpilih = array_slice($nilaiSiswa, 2, 6);
$totalNilai = array_sum($nilaiTerpilih);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai";

echo "<br><br>";

$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 20;
}

$potonganHarga = $hargaProduk * ($diskon / 100);
$totalBayar = $hargaProduk - $potonganHarga;

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: $diskon% <br>";
echo "Potongan harga: Rp " . number_format($potonganHarga, 0, ',', '.') . "<br>";
echo "Total yang harus dibayar: Rp " . number_format($totalBayar, 0, ',', '.');

echo "<br><br>";

$poin = 600;

$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>


