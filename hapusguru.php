<?php 
include "koneksi.php";
// Hapus Data Dari data_guru
$sql = "DELETE FROM data_guru WHERE nip = '".$_GET[nip]."'";
$hapus = mysql_query($sql);
// Tampilkan pesan jika data berhasil di hapus
if ($sql){
echo "<script>alert('Data Berhasil di Hapus'); window.location = 'input_guru.php';</script>";
} else {
echo "<script>alert('Gagal di Hapus'); window.location = 'input_guru.php';</script>";
}
?>