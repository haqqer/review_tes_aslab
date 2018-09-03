<?php
include_once('../database.php');
$nim = $_POST['nim'];
$query = mysqli_query($conn, "SELECT * FROM tb_mhs WHERE nim='$nim'");
$data = mysqli_fetch_array($query);
 
echo json_encode($data);