<?php
/**
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 * @author (Adam Arthur Faizal)
 * @version (13 Oktober 2020)
 *
 * DILARANG COPY PASTE TANPA SE-IJIN PEMILIK REPOSITORY INI!!!
 */
namespace Tugas7Fungsi;

class NFaktorialRekursif {
    private $n;

    /**
     * NFaktorialRekursif constructor.
     * @param int $n
     */
    public function __construct(int $n)
    {
        $this->n = $n;
        echo "Hasil dari $n! (recursive) adalah {$this->faktorial($this->n)}<br>";
    }

    /**
     * @param int $n
     * @return int
     */
    private function faktorial(int $n): int
    {
        if ($n === 1) {
            $hasil = 1;
        } else {
            $hasil = $n * $this->faktorial($n - 1);
        }
        return $hasil;
    }
}
