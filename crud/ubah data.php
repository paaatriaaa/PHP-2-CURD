<?php
    include './koneksi.php';
    $buku = $_GET["buku"];

    $sql = "SELECT * FROM buku WHERE id='.$buku";
    $result = $conn->query($sql);

    $result= $result->fetch_assoc();
?>

<form action="ubah.php" method="post">
    <input type="hidden" name="id_buku" value="<?php echo $result['id_buku']?>">
    <table>
        <tr>
            <td>Id Buku</td>
            <td>:</td>
            <td><input type="text" name="id_buku" value="<?php echo $result['id_buku']?>"></td>
</tr>
<tr>
<td>Penulis Buku</td>
            <td>:</td>
            <td><input type="text" name="penulis_buku" value="<?php echo $result['penulis_buku']?>"></td>
</tr>
<tr>
    <td>Judul Buku</td>
    <td>:</td>
    <td><textarea name="judul_buku"><?php echo $result['judul_buku']; ?></textarea></td>
</tr>
</table>
<input type="submit" name="simpan" value="UBAH">
</form>   