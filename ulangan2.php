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

    $speed = 83;

    //operator arit/matika
    $speed = $speed +10;
    echo "$speed<br>";
    //maka nilai speed akan sama dengan 83 + 10 = 93

    //operator penugasan
    $speed += 10;
    echo $speed;
    //nilai speed akan menjadi 93 + 10 = 103

    //increment
    $angka = 5;
    echo $angka++; //output: 5
    echo $angka; //output: 6
    
    //decrement
    $number = 5;
    echo --$number ; //output: 4

    //sama dengan (==)
    $a = 5;
    $b = '5';
    var_dump($a == $b); //output: bool (true)
    echo "<hr/>";

    //identik (===)
    $a = 5;
    $b = '5';
    var_dump($a === $b); //output: bool (false) 
    echo "<hr/>";

    //tidak sama dengan (!= atau <>)
    $a = 5;
    $b = 6;
    var_dump($a != $b); //output: bool (true)
    echo "<hr/>";

    //tidak identik (!==)
    $a = 5;
    $b = 6;
    var_dump($a !== $b); //output: bool (true)
    echo "<hr/>";

    //lebih besar dari (>)
    $a = 10;
    $b = 5;
    var_dump($a > $b); //output: bool (true)
    echo "<hr/>";
    
    //lebih kecil dari (<)
    $a = 3;
    $b = 7;
    var_dump($a < $b); //output: bool (true)
    echo "<hr/>";

    //lebih besar dari atau sama dengan (>=)
    $a = 8;
    $b = 8;
    var_dump($a >= $b);
    echo "<hr/>";

    //lebih kecil dari atau sama dengan (<=)
    $a = 4;
    $b = 5;
    var_dump($a <= $b); //output: bool (true)
    echo "<hr/>";

    $a = true;
    $b = false;

    //variabel $c akan bernilai false
    $c = $a && $b;
    printf("%b %% %b = %b", $a,$b,$c);
    echo "<hr/>";

    //variabel $c akan bernilai true
    $c =$a|| $b;
    printf("%b || %b = %b", $a,$b,$c);
    echo "<hr/>";

    //variabel $c akan bernilai false 
    $c = !$a;
    printf("!%b = %b", $a, $c);
    echo "<hr/>";

    $a = 60;
    $b = 13;

    //bitwise AND
    $c = $a & $b;
    echo "$a & $b = $c";
    echo "<br>";

    //bitwise OR
    $c = $a | $b;
    echo "$a | $b = $c";
    echo "<br>";

    //shift XOR
    $c = $a ^ $b;
    echo "$a ^ $b = $c";
    echo "<br>";

    //shit left
    $c = $a << $b;
    echo "$a << $b = $c";
    echo "<br>";

    //shift right
    $c = $a >> $b;
    echo "$a >> $b = $c";
    echo "<br>";

    $suka = true;

    //menggunakan operator tenary
    $jawab = $suka ? "iya" : "tidak";

    //menampilkan jawaban
    echo $jawab;

    //percabangan if 
    $total_belanja = 150000;

    if($total_belanja > 100000){
        echo "SELAMAT ANDA MENDAPATKAN HADIAH! <hr>";
    }

    //percabangan else
    if ($umur < 18){
        echo "KAMU TIDAK BOLEH MEMASUKI SITUS INI!!! <hr>";
    } else{
        echo "SELAMAT DATANG DI SITUS KAMI!!! <hr>";
    }

    //percabangan if/elseif/else
    $nilai = 88;
    if ($nilai > 90) {
        $grade = "A+";
    } elseif ($nilai > 80) {
        $grade = "A";
    } elseif ($nilai > 70) {
        $grade = "B+";
    } elseif ($nilai > 60) {
        $grade = "B";
    } elseif ($nilai > 50) {
        $grade = "C+";
    } elseif ($nilai > 40) {
        $grade = "C";
    } elseif ($nilai > 30) {
        $grade = "D";
    } elseif ($nilai > 20) {
        $grade = "E";
    } else {
        $grade = "F";
    }
    echo "Nilai anda: $nilai<br>";
    echo "Grade: $grade";

    $level = 3;

    switch($level) {
        case 1:
            echo "Pelajari HTML";
            break;
        case 2:
            echo "Pelajari CSS";
            break;
        case 3:
            echo "Pelajari Javascript";
            break;
        case 4:
            echo "Pelajari PHP";
            break;
        default:
            echo "KAMU BUKAN PROGRAMMER!!";
    }

    //perulangan for
    for($i = 0; $i < 10; $i++) {
        echo "<h2>Ini perulangan ke-$i<h2/>";
    }

    //perulangan while
    $ulangi = 0;

    while($ulangi < 10) {
        echo "<p>Ini adalah perulangan ke-$ulangi<p/>";
        $ulangi++;
    }

    //perulangan do/while
    $loop = 10;

    do {
        echo "<p>Looping $ulangi<p/>";
        $loop--;
    } while ($loop > 0);

    //perulangan for reach
    $books = [
        "Panduan belajar PHP untuk pemula",
        "Membangun aplikasi web dengan PHP",
        "Tutorial PHP dan MySQL",
        "Membuat Chat Bot dengan PHP"
    ];

    echo "<h5>Judul Buku PHP:<h5/>";
    echo "</ul>";
?>