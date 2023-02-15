<?php 
$koneksi = mysqli_connect("localhost","root","","pe_analisa");
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM analisa WHERE id='$id'"); 
header("location:active_issue.php?pesan=berhasil_hapus");
?>