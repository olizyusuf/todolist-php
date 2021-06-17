<?php

include("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM task WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php');
    } else {
        header('Location: index.php?status=gagal_hapus');
    }
} else {
    die("akses dilarang");
}
