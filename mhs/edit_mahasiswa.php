<?php include_once('../header.php'); 
include_once('../database.php');
$nim = $_GET['nim'];
$query = mysqli_query($conn, "SELECT * FROM tb_mhs WHERE nim='$nim'");
$data = mysqli_fetch_assoc($query);
?>

<div class="container my-5">
    <form action="process.php?action=edit" method="POST">
        <legend><center>FORM INPUT MAHASISWA</center> </legend>
        <div class="form-group">
            <label for="NIM">NIM</label>
            <input type="text" class="form-control" placeholder="Masukan NIM" name="nim" value="<?php echo $data['nim'] ?>">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" placeholder="Masukan nama" name="nama" value="<?php echo $data['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="fakultas">Fakultas</label>
            <input type="text" class="form-control" placeholder="Masukan fakultas" name="fakultas" value="<?php echo $data['fakultas'] ?>">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" placeholder="Masukan jurusan" name="jurusan" value="<?php echo $data['jurusan'] ?>">
        </div>
        <div class="form-group">
            <label for="angkatan">Angkatan</label>
            <input type="text" class="form-control" placeholder="Masukan angkatan" name="angkatan" value="<?php echo $data['angkatan'] ?>">
        </div>
        <div class="text-center">
            <input type="hidden" class="form-control" placeholder="Masukan angkatan" name="nim_before" value="<?php echo $nim ?>">
           <input type="submit" value="Edit" class="btn btn-success btn-lg" name="edit" onclick="edit()">
        </div>
    </form> 
</div>
<?php include_once('../footer.php') ?>