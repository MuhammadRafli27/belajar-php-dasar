<?php
$nilai = 90;
echo "Nilai Anda : $nilai";
echo "<br/>";
echo "Keterangan : ";
if($nilai >= 90)
{
    echo "Sangat Bagus";
}
elseif($nilai >=80 && $nilai <=90)
{
    echo "Bagus";
}
elseif($nilai >= 75 && $nilai < 80)
{
    echo "Cukup";
}
elseif($nilai < 75 )
{
    echo "Kurang";
}