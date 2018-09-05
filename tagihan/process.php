<?php 
include_once('../database.php');
$action = $_GET['action'];

//Function untuk menambahkan data
function tambah($conn) { //<<<----
    if(isset($_POST['tambah'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jml_sks = $_POST['jml_sks'];
        $sks =0;
        $spp = 1500000;
        $mhs_query = mysqli_query($conn, "SELECT * FROM tb_mhs WHERE nim='$nim'");
        $data = mysqli_fetch_array($mhs_query);
        if($data['angkatan']>= 2006 && $data['angkatan']<=2010) {
            $sks = 100000 * $jml_sks;
        }else if($data['angkatan']> 2010 && $data['angkatan']<=2017) {
            $sks = 150000 * $jml_sks;
        }
        $spp = 1500000;
        if(!empty($nim)&&!empty($nama)&&!empty($jml_sks)) {
            $query = mysqli_query($conn, "INSERT INTO tb_tagihan(nim, jml_sks, spp, sks) VALUES('$nim', '$jml_sks', '$spp', '$sks')");
            if($query) {
                header('location: index.php');
            } else {
                header('location: add_tagihan.php');
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
    $query = mysqli_query($conn, "DELETE FROM tb_tagihan WHERE nim='$nim' ");
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