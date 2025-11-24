<?php
include "views/header.php";

$page = isset($_GET['page']) ? $_GET['page'] : "dashboard";
$explode = explode("/", $page);

if ($page == "dashboard") {
    include "views/dashboard.php";

} elseif ($explode[0] == "user") {

    $file = "modules/user/" . $explode[1] . ".php";
    if (file_exists($file)) {
        include $file;
    } else {
        echo "Halaman user tidak ditemukan.";
    }

} elseif ($explode[0] == "auth") {

    $file = "modules/auth/" . $explode[1] . ".php";
    if (file_exists($file)) {
        include $file;
    } else {
        echo "Halaman auth tidak ditemukan.";
    }

} else {
    echo "Halaman tidak ditemukan.";
}

include "views/footer.php";
?>
