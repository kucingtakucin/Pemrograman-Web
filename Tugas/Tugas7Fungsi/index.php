<?php
require_once "Segitiga.php";
require_once "NFaktorial.php";
require_once "NFaktorialRekursif.php";
require_once "TukarData.php";
require_once "KonversiUang.php";
/**
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 * @author (Adam Arthur Faizal)
 * @version (13 Oktober 2020)
 *
 * DILARANG COPY PASTE TANPA SE-IJIN PEMILIK REPOSITORY INI!!!
 */

use Tugas7Fungsi\KonversiUang;
use Tugas7Fungsi\NFaktorial;
use Tugas7Fungsi\Segitiga;
use Tugas7Fungsi\NFaktorialRekursif;
use Tugas7Fungsi\TukarData;

# 1. Menentukan Menentukan jenis segitiga dari 3 sisi yang diinputkan (segitiga sama sisi, sama kaki, segitiga siku2 atau segitiga sembarang )
echo "1. <br>";
$segitiga1 = new Segitiga(3,4,5);
$segitiga2 = new Segitiga(3, 3, 3);

# 2. Mencari n faktorial
echo "<br>2. <br>";
$faktorial1 = new NFaktorial(3);
$faktorial2 = new NFaktorial(6);

# 3. Mencari n faktorial dengan rekursif
echo "<br>3. <br>";
$rekursif1 = new NFaktorialRekursif(2);
$rekursif2 = new NFaktorialRekursif(7);

# 4. Menukar 2 data (boleh berbentuk array)
echo "<br>4. <br>";
$tukardata1 = new TukarData(6, 4);

# 5. Mengubah sebuah data array yang berisi n data uang dolar untuk menjadi n data uang rupiah
echo "<br>5. <br>";
$konversi1 = new KonversiUang([100,123,200]);
$konversi2 = new KonversiUang([250,123,500]);