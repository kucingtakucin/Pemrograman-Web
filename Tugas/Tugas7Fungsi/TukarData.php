<?php
/**
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 * @author (Adam Arthur Faizal)
 * @version (13 Oktober 2020)
 *
 * DILARANG COPY PASTE TANPA SE-IJIN PEMILIK REPOSITORY INI!!!
 */
namespace Tugas7Fungsi;

class TukarData {
    private $a;
    private $b;

    /**
     * TukarData constructor.
     * @param $a
     * @param int $b
     */
    public function __construct($a, int $b = 0)
    {
        if (is_array($a)) {
            $this->a = $a[0];
            $this->b = $b[1];
        } else {
            $this->a = $a;
            $this->b = $b;
        }
        echo "Angka awal, a = {$this->a}, b = {$this->b}<br>";
        $this->swap($this->a, $this->b);
        echo "Angka akhir, a = {$this->a}, b = {$this->b}<br>";
    }

    /**
     * @param int $a
     * @param int $b
     * @return void
     */
    public function swap(int $a, int $b): void
    {
        $temp = $a;
        $this->a = $b;
        $this->b = $temp;
    }
}

