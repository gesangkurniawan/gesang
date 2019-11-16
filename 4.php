<?php
    $angka = array(20,50,70,10,70,30,10,30,50);
    $unique_angka = array_unique($angka);
    $duplicates = count($angka) - count($unique_angka);
    
    // $duplicates = 6 - 4 = 2
    if( $duplicates == 0 ){
     echo "Tidak ada pasangan yang ditemukan!";
    }
    echo "output :" . $duplicates;
?>