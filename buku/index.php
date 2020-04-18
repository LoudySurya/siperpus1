<?php
include '../koneksi.php';

$sql = "SELECT * FROM buku ORDER BY judul";

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
  $pinjam[] = $data;
}

include '../aset/header.php';
 ?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md">

      <div class="card">
        <div class="card-header">
          <h2 class="card-title"><i class="fas fa-edit"></i>Data Buku</h5>
        </div>
        <div class="car-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
 $no = 1;
 foreach ($pinjam as $p) { ?>

   <tr>
     <th scope="row"><?= $no ?></th>
     <td><?= $p['judul'] ?></td>
     <td><?= $p['pengarang'] ?></td>
     <td><?= $p['stok'] ?></td>
     <td>
     <a href="#" class="badge badge-success">Detail</a>
     <a href="#" class="badge badge-warning">Edit</a>
     <a href="#" class="badge badge-danger">Hapus</a>
     </td>
   <?php
  $no++;
}
    ?>

</tbody>
</table>
        </div>
      </div>

    </div>
  </div>
</div>

 <?php
include '../aset/footer.php';
  ?>
