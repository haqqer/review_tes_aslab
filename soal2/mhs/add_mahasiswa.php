<?php include_once('../header.php') ?>

<div class="container my-5">
    <form action="process.php?action=store" method="POST">
        <legend><center>FORM INPUT MAHASISWA</center> </legend>
        <div class="form-group">
            <label for="NIM">NIM</label>
            <input type="text" class="form-control" placeholder="Masukan NIM" name="nim">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" placeholder="Masukan nama" name="nama">
        </div>
        <div class="form-group">
            <label for="fakultas">Fakultas</label>
            <input type="text" class="form-control" placeholder="Masukan fakultas" name="fakultas">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" placeholder="Masukan jurusan" name="jurusan">
        </div>
        <div class="form-group">
            <label for="angkatan">Angkatan</label>
            <input type="text" class="form-control" placeholder="Masukan angkatan" name="angkatan">
        </div>
        <div class="text-center">
           <input type="submit" value="Tambah" class="btn btn-success btn-lg" name="tambah">
        </div>
    </form> 
</div>
<?php include_once('../footer.php') ?>