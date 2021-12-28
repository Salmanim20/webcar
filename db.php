<?php

$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'project-akhir';

$db = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if ($db->connect_errno) {
    die('Database connection failure.');
}