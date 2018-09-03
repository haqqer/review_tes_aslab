<?php 
$host = '127.0.0.1';
$username = 'root';
$password = '';
$db_name = 'soal2';

$conn = mysqli_connect($host, $username, $password, $db_name);
if(!$conn) {
    die('Gagal Koneksi : '. mysqli_connect_error());
}