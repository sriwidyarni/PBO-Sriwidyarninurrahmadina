<?php
// Input informasi pinjaman
$besaran_pinjaman = 1000000;  // Besaran Pinjaman (Rp)
$besar_bunga = 10;  // Besar Bunga (%)
$lama_angsuran = 5;  // Lama Angsuran (bulan)

// Menghitung besar bunga
$besaran_bunga = ($besar_bunga / 100) * $besaran_pinjaman;

// Menghitung total pinjaman
$total_pinjaman = $besaran_pinjaman + $besaran_bunga;

// Menghitung besaran angsuran per bulan
$besaran_angsuran = $total_pinjaman / $lama_angsuran;

// Menampilkan hasil perhitungan
echo "<br>TOKO PEGADAIAN SYARIAH\n <br>";
echo "<br>JI Keadilan No 16\n <br>";
echo "<br>Telp. 72353459\n\n <br>";
echo "<br>Besaran Pinjaman: Rp. " . number_format($besaran_pinjaman, 0, ",", ".") . "\n <br>";
echo "<br>Besar Bunga ($besar_bunga%): Rp. " . number_format($besaran_bunga, 0, ",", ".") . "\n <br>";
echo "<br>Total Pinjaman: Rp. " . number_format($total_pinjaman, 0, ",", ".") . "\n <br>";
echo "<br>Lama Angsuran (bulan): $lama_angsuran\n <br>";
echo "<br>Besaran Angsuran per Bulan: Rp. " . number_format($besaran_angsuran, 0, ",", ".") . "\n <br>";
