<?php
/**
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 * @author (Adam Arthur Faizal)
 * @version (13 Oktober 2020)
 *
 * DILARANG COPY PASTE TANPA SE-IJIN PEMILIK REPOSITORY INI!!!
 */
namespace Tugas7Fungsi;

class NFaktorial {
    private $n;

    /**
     * NFaktorial constructor.
     * @param int $n
     */
    public function __construct(int $n)
    {
        $this->faktorial($n);
    }

    /**
     * @param int $n
     * @return void
     */
    private function faktorial(int $n): void
    {
        $this->n = $n;
        $total_faktorial = 1;
        for ($i = $this->n; $i > 1; $i--):
            $total_faktorial *= $i;
        endfor;
        echo "Hasil dari $this->n! adalah $total_faktorial<br>";
    }
}
