<?php
//Kode Perulangan Dengan Kondisi;
echo "<br/>";
$counter = 1;

for (; $counter <= 10;) {
    echo "Muhammad Rafli Febrian : " . $counter . PHP_EOL;
    $counter++;
}
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<b>Kode Perulangan Dengan Init Statement</b>";
echo "<br/>";
for ($counter = 1; $counter <= 10;) {
    echo "Muhammad Rafli Febrian : " . $counter . PHP_EOL;
    $counter++;
}
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<b>Kode Perulangan Dengan Post Statement</b>";
echo "<br/>";
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Muhammad Rafli Febrian : " . $counter .PHP_EOL;
}
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<b>Kode Syntax Alternative For Loop</b>";
echo "<br/>";
for ($counter = 1; $counter <=10; $counter++) :
    echo "Muhammad Rafli Febrian : " . $counter . PHP_EOL;
endfor;
