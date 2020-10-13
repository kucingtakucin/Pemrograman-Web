<?php
/**
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 * @author (Adam Arthur Faizal)
 * @version (13 Oktober 2020)
 *
 * DILARANG COPY PASTE TANPA SE-IJIN PEMILIK REPOSITORY INI!!!
 */
namespace Tugas7Fungsi;

class KonversiUang {
    private $data;
    private $hasil;

    /**
     * KonversiUang constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
        $this->konversi($this->data);
        $this->loop($this->hasil);
    }

    /**
     * @param array $data
     * @return array
     */
    public function konversi(array $data): array
    {
        $i = 0;
        foreach ($data as $datum) {
            $this->hasil[$i] = $datum * 14000;
            $i++;
        }
        return $this->hasil;
    }

    /**
     * @param array $hasil
     * @return void
     */
    public function loop(array $hasil): void
    {
        $i = 1;
        foreach ($hasil as $item) {
            echo "Konversi ke-$i = Rp.". number_format($item) . "<br>";
            $i++;
        }
    }
}

