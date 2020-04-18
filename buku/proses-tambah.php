<?php
include '../koneksi.php';

if (isset($_POST['simpan']))
{
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$stok = $_POST['stok'];

$sql = "INSERT INTO buku (judul, pengarang, , stok)
        VALUES ('$judul', '$pengarang', '$stok')";

$res = mysqli_query($koneksi, $sql);

$count=mysql_affected_rows($koneksi);

if ($count == 1)
{
  header("Location: index.php");
}
  else {
    header("Location: tambah.php")
  }
}
else
{
header("Location: tambah.php")
}

 ?>
