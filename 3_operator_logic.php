<?php

function pembagianBilBulat($angka1, $angka2) {
    if ($angka1 == 0) {
        return 0;
    }

    if ($angka2 == 0) {
        return 0;
    }

    $hasilNegatif = false;

    // menangani bilangan negatif
    if ($angka1 < 0) {
        $angka1 = -$angka1;

        if ($angka2 < 0) {
            $angka2 = - $angka2;
        } else {
            $hasilNegatif = true;
        }
    } else if ($angka2 < 0) {
        $angka2 = - $angka2;
        $hasilNegatif = true;
    }

    // jika angka1 lebih besar atau sama dengan  angka2
    // kurangi angka2 dengan angka1 dan tambahkan
    // satu nilai pada hasilbagi 
    $hasilBagi = 0;
    while ($angka1 >= $angka2) {
        $angka1 = $angka1 - $angka2;
        $hasilBagi++;
    }

    // memeriksa jika hasil negatif
    // maka nilai hasilbagi akan menjadi negatif
    if ($hasilNegatif) {
        $hasilBagi = - $hasilBagi;
    }

    return $hasilBagi;
}

echo pembagianBilBulat(25, 4);

?>