<?php
$nilai = "A";
echo "Nilai Anda : $nilai";
echo "<br/>";
echo "Keterangan : ";
switch ($nilai) {
    case 'A':
        echo "Anda Lulus Dengan Sangat Baik";
        break;
    case 'B':
    case 'C':
        echo "Anda Lulus";
        break;
    case 'D':
        echo "Anda Tidak Lulus";
        break;
    default:
        echo "Mungkin Anda Salah Jurusan";
        break;
}