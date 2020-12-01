<?php
/*
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 */
session_start();
unset($_SESSION['username'], $_COOKIE['username']);
session_destroy();
header('Location: latihan_session.php');
