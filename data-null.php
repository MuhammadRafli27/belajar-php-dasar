<?php
$name = "Muhammad Rafli Febrian";
$name = null;

$isNull = is_null($name);
var_dump($isNull);

echo "<br/>";
echo "<br/>";

//Menghapus variabel
echo "Menghapus variabel";
unset($name);
$isset = isset($name);
var_dump($isset);
echo "<br/>";

//Mendefinisikan variabel ulang dengan nilai kosong
echo "Mendefinisikan variabel ulang dengan nilai kosong : ";
$name = null;
$isset = isset($name);
var_dump($isset);
echo "<br/>";

//Mendefinisikan variabel ulang dengan nilai kosong
echo "Mendefinisikan variabel ulang dengan nilai kosong : ";
$name = "Muhammad Rafli Febrian";
$isset = isset($name);
var_dump($isset);
echo "<br/>";