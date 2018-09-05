<?php
include_once("../database.php");
$nim = $_GET['nim'];
$query = mysqli_query($conn, "DELETE FROM tb_mhs WHERE nim='$nim' ");
if($query) {
    header('location: index.php');
}