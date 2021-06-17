<?php

include("config.php");

if (isset($_POST['add'])) {
    $task = $_POST['task'];

    $sql = "INSERT INTO task (task) VALUE ('$task')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("akses dilarang");
}
