<?php
/*
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 */


// Latihan 1
$nilai = 0;
if ($nilai > 50):
    echo "Selamat, kamu lulus!";
endif;

// Latihan 2
$nilai = 0;
if ($nilai > 50):
    echo "Selamat, kamu lulus!";
else:
    echo "Maaf, kamu tidak lulus!";
endif;

// Latihan 3
$nilai = 0;
if ($nilai >= 80):
    echo "Kamu mendapatkan nilai A!";
elseif ($nilai >= 60):
    echo "Kamu mendapatkan nilai B!";
elseif ($nilai >= 40):
    echo "Kamu mendapatkan nilai C!";
elseif ($nilai >= 20):
    echo "Kamu mendapatkan nilai D!";
else:
    echo "Kamu mendapatkan nilai E!";
endif;

// Latihan 4
$ranking = 0;
switch ($ranking):
    case 1:
        echo "Adi";
        break;
    case 2:
        echo "Budi";
        break;
    case 3:
        echo "Caca";
        break;
    case 4:
        echo "Doni";
        break;
    case 5:
        echo "Eni";
        break;
    default:
        echo "Data tidak ada";
        break;
endswitch;