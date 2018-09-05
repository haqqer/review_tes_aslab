<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="index.php" class="navbar-brand">Logo</a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?php $_SERVER['HTTP_HOST'] ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">Tagihan</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="tagihan/add_tagihan.php" class="dropdown-item">Add Tagihan</a>
                        <a href="tagihan/add_tagihan.php" class="dropdown-item">List Tagihan</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown1" data-toggle="dropdown">Mahasiswa</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <a href="mhs/add_mahasiswa.php" class="dropdown-item">Add Mahasiswa</a>
                        <a href="mhs/index.php" class="dropdown-item">List Mahasiswa</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
