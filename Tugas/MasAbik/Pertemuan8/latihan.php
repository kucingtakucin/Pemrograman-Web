<?php
/*
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 */

/**
 * @param int $a
 * @param int $b
 * @return int
 */
//function pengurangan(int $a, int $b): int
//{
//    return $a - $b;
//}
//
//$a = 100;
//$b = 50;
//echo "Hasil pengurangan $a - $b = " . pengurangan($a, $b);

/**
 * @param int $a
 * @param int $b
 * @return float
 */
function pembagian(int $a, int $b)
{
    return $a / $b;
}

$a = 7;
$b = 2;
echo "Hasil pembagian $a / $b = " . pembagian($a,$b);
