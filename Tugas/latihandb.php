<?php
/*
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 */

# driver mysqli
$host = 'localhost';
$username = 'root';
$passwd = 'namaku123';
$dbname = 'phpdasar';
$port = 3306;
//$mysqli = new mysqli($host, $username, $passwd, $dbname, $port);
$dsn = "mysql:host=$host;dbname=$dbname";
$options = [
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$dbh = new PDO($dsn, $username, $passwd, $options);
$stmt = $dbh->prepare('INSERT INTO mahasiswa (nim, nama, jurusan, angkatan) VALUES (:nim, :nama, :jurusan, :angkantan)');
$stmt->bindValue('nim', 'M3119001', PDO::PARAM_STR);
$stmt->bindValue('angkatan', 2019, PDO::PARAM_INT);
