<?php
require_once "./vendor/autoload.php";



session_start();
$pekerjaanField = $_POST['pekerjaan'];

$_SESSION['pekerjaan'] = $pekerjaanField;

$htmlOut = file_get_contents("jsaharbaytrafo.php");



