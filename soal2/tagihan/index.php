<?php include_once('../header.php'); ?>
<div class="container my-5">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
                <th>Jumlah SKS</th>
                <th>SPP</th>
                <th>SKS</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php 
include_once('../database.php');
$query = mysqli_query($conn, "SELECT * FROM tb_mhs JOIN tb_tagihan ON tb_mhs.nim = tb_tagihan.nim");
$i = 1;
while($data = mysqli_fetch_array($query)) {
?>
    <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $data['nim'] ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['fakultas'] ?></td>
        <td><?php echo $data['jurusan'] ?></td>
        <td><?php echo $data['angkatan'] ?></td>
        <td><?php echo $data['jml_sks'] ?></td>
        <td><?php echo $data['spp'] ?></td>
        <td><?php echo $data['sks'] ?></td>
        <td><?php echo $data['spp']+$data['sks'] ?></td>
        <td>
            <a href="edit_tagihan.php?nim=<?php echo $data['nim']?>" class="btn btn-success">Edit</a> |
            <a href="process.php?action=delete&&nim=<?php echo $data['nim']?>" class="btn btn-danger" onclick="hapus()">Delete</a>
        </td>
    </tr>
<?php 
} 
?>
        </tbody>
    </table>
</div>
<?php 
include_once('../footer.php');
?>
