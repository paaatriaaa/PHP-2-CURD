<?php
    include './koneksi.php';

    $id_buku = $_POST['id_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $judul_buku = $_POST['judul_buku'];

    $sql = "INSERT INTO BUKU (id_buku, penulis_buku, judul_buku) VALUES ('$id_buku', '$penulis_buku', '$judul_buku')";
    if($conn->query($sql) === TRUE){
        echo "simpan berhasil<br>";
        echo "<a href='formulir.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>