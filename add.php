<?php include "config/database.php"; ?>

<h2>Tambah User</h2>

<form method="POST">
    Nama: <br>
    <input type="text" name="nama"><br><br>

    Email: <br>
    <input type="text" name="email"><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama  = $_POST['nama'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO user (nama,email) VALUES ('$nama','$email')");
    header("Location: index.php?page=user/list");
}
?>
