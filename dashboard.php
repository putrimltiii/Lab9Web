<h2>Dashboard</h2>

<?php
include "config/database.php";
$q = mysqli_query($conn, "SELECT COUNT(*) AS total FROM user");
$d = mysqli_fetch_assoc($q);
?>

<p>Total User Terdaftar: <?= $d['total']; ?></p>
