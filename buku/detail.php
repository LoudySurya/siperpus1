<?php
include '../koneksi.php';
include '../aset/header.php';

$id_buku = $_GET["id_buku"];

$query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori =
         kategori.id_kategori WHERE id_buku = '$id_buku'");

$buku = mysqli_fetch_assoc($query);

 ?>

 <div class="card">
   <div class="card-header">
     <h2 class="card-title"><i class="fas fa-edit"> </i> Edit Data Buku </h2>
   </div>

   <center>
     <br>
      <h3> Detail Data Buku Perpustakaan</h3>

      <form action="" method="post">
        <table>
          <tr>
            <td>
              <center>
              <div class="form-group">
                   <img src="<?= $buku['cover']; ?>">
              </div>
            </center>
            </td>
          </tr>

          <tr>
             <td>
                 <div class="form-group">
                   <b><label for="judul">Judul</label> </b>
                   <br>
                    <?= $buku['judul']; ?>
                 </div>
             </td>
          </tr>

          <tr>
             <td>
                 <div class="form-group">
                   <b><label for="penerbit">Penerbit</label> </b>
                   <br>
                    <?= $buku['penerbit']; ?>
                 </div>
             </td>
          </tr>

          <tr>
             <td>
                 <div class="form-group">
                   <b><label for="pengarang">Pengarang</label> </b>
                   <br>
                    <?= $buku['pengarang']; ?>
                 </div>
             </td>
          </tr>

          <tr>
             <td>
                 <div class="form-group">
                   <b><label for="ringkasan">Ringkasan</label> </b>
                   <br>
                    <?= $buku['ringkasan']; ?>
                    </textarea
                 </div>
             </td>
          </tr>

          <tr>
             <td>
                 <div class="form-group">
                   <b><label for="stok">Stok</label> </b>
                   <br>
                    <?= $buku['stok']; ?>
                 </div>
             </td>
          </tr>

          <tr>
             <td>
                 <div class="form-group">
                   <b><label for="kategori">Kategori</label> </b>
                   <br>
                    <?php

                     $query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori ON
                              buku.id_kategori = kategori.id_kategori WHERE id_buku = $id_buku");

                    ?>

                    <?php while ($query_kategori = mysqli_fetch_assoc($query));?>

                    <?php echo $query_kategori['kategori']; ?>

                 </div>
             </td>
          </tr>
          <br>
        </table>
      </form>
 </div>
 <br>
 <br>
 <br>
</center>

<?php
include '../aset/footer.php';
 ?>
