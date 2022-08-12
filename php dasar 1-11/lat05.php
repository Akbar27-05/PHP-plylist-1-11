<?php 
    $tanggal = 4;
    // $hasil = $tanggal < 8;

    // if ($tanggal < 5) {
    //     if ($tanggal > 0) {
    //         echo 'Benar';
    //     }else {
    //         echo 'salah';
    //     }
    // }else {
    //     echo 'salah';
    // }echo '<br>';

    $nilai = 98;

    /*if ($nilai >= 90 && $nilai <= 100) {
        echo 'A';
    }elseif ($nilai >= 80 && $nilai <= 89) {
        echo 'B';
    }elseif ($nilai >= 70 && $nilai <= 79) {
        echo 'C';
    }elseif ($nilai >= 0 && $nilai <= 69) {
        echo 'D';
    }else {
        echo 'inputkan angka 0 hingga 100';
    }*/

    if ($nilai >= 100 || $nilai <= 0) {
        echo 'Salah';
    }else {
        echo 'Benar';
    }
?>