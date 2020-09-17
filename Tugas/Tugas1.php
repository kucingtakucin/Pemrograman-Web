<?php
/*
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 */

header("Content-Type: application/json");

echo json_encode([
    "status" => "Hello, World!",
    "nama" => "Adam Arthur Faizal",
    "nim" => "M3119001",
    "kelas" => "TIA",
    "angkatan" => 2019,
    "single" => true
]);
