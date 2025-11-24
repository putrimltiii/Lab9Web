<h2>Login</h2>

<form method="post">
    Username:<br>
    <input type="text" name="user"><br><br>

    Password:<br>
    <input type="password" name="pass"><br><br>

    <button type="submit" name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {
    $_SESSION['login'] = true;
    header("Location: index.php?page=dashboard");
}
?>
