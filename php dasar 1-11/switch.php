<?php 
/*$hari = 2;

    switch ($hari) {
        case 1:
            echo 'Minggu';
            break;
        case 2:
            echo 'Senin';
            break;
        case 3:
            echo 'Selasa';
            break;
        case 4:
            echo 'Rabu';
            break;
        case 5:
            echo 'Kamis';
            break;  
        case 6:
            echo "Jum'at";
            break;   
        case 7:
                echo 'Sabtu';
            break;           
        default:
            echo 'Hari tidak di temukan';
            break;
    }*/

    $pilihan = 'hapus';

    switch ($pilihan) {
        case 'tambah':
            echo 'Annda memilih tambah';
            break;
        case 'hapus':
            echo 'Annda memilih hapus';
            break;
        case 'edit':
            echo 'Annda memilih edit';
            break;
        default:
            echo 'pilihan belum di tambahkan';
            break;
    }
?>