<?php include_once('../header.php') ?>

<div class="container my-5">
    <form action="process.php?action=store" method="POST">
        <legend><center>FORM INPUT TAGIHAN</center> </legend>
        <div class="form-group">
            <label for="NIM">NIM</label>
            <input type="text" class="form-control" placeholder="Masukan NIM" name="nim" id="nim"> 
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" placeholder="Masukan nama" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="jml_sks">Jumlah SKS</label>
            <input type="text" class="form-control" placeholder="Masukan Jumlah SKS" name="jml_sks">
        </div>
        <div class="text-center">
           <input type="submit" value="Tambah" class="btn btn-success btn-lg" name="tambah">
        </div>
    </form> 
</div>
<?php include_once('../footer.php') ?>