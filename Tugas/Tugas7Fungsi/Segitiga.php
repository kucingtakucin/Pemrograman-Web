<?php
/**
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 * @author (Adam Arthur Faizal)
 * @version (13 Oktober 2020)
 *
 * DILARANG COPY PASTE TANPA SE-IJIN PEMILIK REPOSITORY INI!!!
 */
namespace Tugas7Fungsi;

class Segitiga {
    private $a;
    private $b;
    private $c;

    /**
     * Segitiga constructor.
     * @param int $a
     * @param int $b
     * @param int $c
     */
    public function __construct(int $a, int $b, int $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        if ($this->samasisi()) {
            echo "Ini adalah segitiga sama sisi<br>";
            return;
        }
        if ($this->samakaki()) {
            echo "Ini adalah segitiga sama kaki<br>";
            return;
        }
        if ($this->sikusiku()) {
            echo "Ini adalah segitiga siku siku<br>";
            return;
        }
        if ($this->sembarang()) {
            echo "Ini adalah segitiga sembarang<br>";
            return;
        }
        echo "Bukan segitiga<br>";
    }

    /**
     * @return bool
     */
    private function samakaki(): bool
    {
        if ($this->a === $this->b && $this->b !== $this->c):
            return $this->c >= 0 && $this->c <= $this->a * 2;
        elseif ($this->b === $this->c && $this->c !== $this->a):
            return $this->a >= 0 && $this->a <= $this->b * 2;
        elseif ($this->c === $this->a && $this->a !== $this-> b):
            return $this->b >= 0 && $this->b <= $this->c * 2;
        endif;
        return false;
    }

    /**
     * @return bool
     */
    private function samasisi(): bool
    {
        return $this->a === $this->b && $this->a === $this->c;
    }

    /**
     * @return bool
     */
    private function sikusiku(): bool
    {
        if ($this->a < $this->b && $this->b < $this->c):
            return $this->a ** 2 + $this->b ** 2 === $this->c ** 2;
        elseif ($this->b < $this->c && $this->c < $this->a):
            return $this->b ** 2 + $this->c ** 2 === $this->a ** 2;
        elseif ($this->c < $this->a && $this->a < $this->b):
            return $this->c ** 2 + $this->a ** 2 === $this->b ** 2;
        endif;
        return false;
    }

    /**
     * @return bool
     */
    private function sembarang(): bool
    {
        return $this->a !== $this->b && $this->b !== $this->c;
    }
}