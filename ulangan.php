<?php
    //konversi tipe data
    $a = "32";
    $a = (int) $a; //ubah nilai a menjadi integeer
    $a = (float) $a; //ubah nilai a menjadi float 
    $a = (string) $a; //ubah nilai menjadi string
    print $a;

    //membuat variabel $tmp
    $tmp = 2901;
    
    //menghapus variabel $tmp
    unset($tmp);

    //mencoba mengakses $tmp
    echo $tmp;

    //konstanta
    define("PI", 3.14); //mendefinisikan konstanta PI dengan nilai 3.14
    echo "Nilai PI adalah" . PI . "<br>";

    const GRAVITY = 9.81; //mendefinisikan konstanta GRAVITY nilai 9.81
    echo "Nilai gravitasi adalah" . GRAVITY . "<br>";

    $a = 5;
    $b = 2;

//penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

//pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

//perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

//pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

//sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

//pangkat
$c = $a ** $b;
echo "$c ** $b = $c";
echo "<hr>";
?>