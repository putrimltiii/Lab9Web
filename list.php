<?php include "config/database.php"; ?>

<h2>Data User</h2>
<a href="index.php?page=user/add">Tambah User</a>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Email</th>
</tr>

<?php
$query = mysqli_query($conn, "SELECT * FROM user");
while ($row = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['email']; ?></td>
</tr>
<?php } ?>
</table>
