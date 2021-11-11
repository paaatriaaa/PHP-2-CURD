<?php
include './koneksi.php';
$id = $_POST['id_buku'];
$penulis = $_POST['[penulis_buku'];
$judul = $_POST['judul_buku'];

$sql = "UPDATE buku SET id_buku='$id_buku', penulis_buku='$penulis_buku', judul_buku='$judul_buku' WHERE id='$id'";
if($conn->query($sql)=== TRUE){
    echo "ubah data berhasil <br>";
    echo "<a href='tampil.php'>Kembali</a><br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>