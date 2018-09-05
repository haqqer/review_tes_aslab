<?php 
include_once('../database.php');
$action = $_GET['action'];

//Function untuk menambahkan data
function tambah($conn) { //<<<----
    if(isset($_POST['tambah'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $fakultas = $_POST['fakultas'];
        $jurusan = $_POST['jurusan'];        
        $angkatan = $_POST['angkatan'];

        if(!empty($nim)&&!empty($nama)&&!empty($fakultas)&&!empty($jurusan)&&!empty($angkatan)) {
            $query = mysqli_query($conn, "INSERT INTO tb_mhs(nim, nama, fakultas, jurusan, angkatan) VALUES('$nim', '$nama', '$fakultas', '$jurusan', '$angkatan')");
            if($query) {
                header('location: ../index.php');
            } else {
                header('location: add_mahasiswa.php');
            }
        }
    }
}
function edit($conn) {
    if(isset($_POST['edit'])) {
        $nim_before = $_POST['nim_before'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $fakultas = $_POST['fakultas'];
        $jurusan = $_POST['jurusan'];        
        $angkatan = $_POST['angkatan'];

        if(!empty($nim)&&!empty($nama)&&!empty($fakultas)&&!empty($jurusan)&&!empty($angkatan)) {
            $sql = "UPDATE tb_mhs SET nim='$nim',nama='$nama',fakultas='$fakultas',jurusan='$jurusan',angkatan='$angkatan' WHERE nim='$nim_before'";
            $query = mysqli_query($conn, $sql);
            if($query) {
                header('location: ../index.php');
            } else {
                header('location: edit_mahasiswa.php');
            }
        }
    }
}

function delete($conn) {
    $nim = $_GET['nim'];
    $query = mysqli_query($conn, "DELETE FROM tb_mhs WHERE nim='$nim' ");
    if($query) {
        header('location: index.php');
    }
}

if($action == 'store') {
    tambah($conn);
} else if($action == 'edit') {
    edit($conn);
} else  if($action == 'delete') {
    delete($conn);
}