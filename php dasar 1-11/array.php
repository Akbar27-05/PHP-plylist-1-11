<?php 
    //array dimensi
    $nama = ["siti","syamsudin","joko","joni"];
    var_dump($nama);
    echo "<br><br>";

    echo $nama[3]. "<br><br>";

    // for ($i=0; $i < 4; $i++) { 
    //     echo $nama[$i]. " ";
    // }

    // foreach ($nama as $key => $value) {
    //     echo $key. " "; // menampilkan cara pemanggilan
    //     echo $value. " "; // menampilkan isi dari apa yg mau di panggil
    // }

    //array asosiative

    $asal = ["siti" => "Sidoarjo", "syamsudin" => "Belitar", "Joko" => "Surabaya", "joni" => "Jakarta"];

    foreach ($asal as $key => $value) {
        echo $key. ' => ' .$value;
        echo "<br>";
    }
?>