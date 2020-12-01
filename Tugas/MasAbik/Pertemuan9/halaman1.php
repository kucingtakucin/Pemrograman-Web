<?php
/*
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 */
session_start();
if (isset($_POST['submit'])) {
    // Cek username & password
    if ($_POST['username'] === 'adam' && $_POST['password'] === 'arthur') {
        # $_SESSION['username'] = $_POST['username'];
        setcookie('username', $_POST['username'], time() + 3600);  // Habis dalam 1 jam
    } else {
        // redirect ke halaman login kalau keduanya enggak tepat
        header('Location: latihan_session.php');
    }
}

// Cek sudah login atau belum
if (!isset($_SESSION['username'])) {
    // redirect ke halaman login kalau belum login
    header('Location: latihan_session.php');
}

echo "<h1>Halaman 1 - Utama</h1>";
echo "Selamat datang, {$_SESSION['username']} <br>";
echo "Session = ";
var_dump($_SESSION) . '<br>';
echo "Cookie = ";
var_dump($_COOKIE) . '<br>';
echo "<a href='logout.php'>Logout</a>";

