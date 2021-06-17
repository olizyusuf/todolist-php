<?php 

$server = "localhost";
$user = "root";
$password = "";
$dbname = "dbtodolist";

$db = mysqli_connect($server, $user, $password, $dbname);

if( !$db ) {
    die("gagal terhubung dengan database " . mysqli_connect_error());
}
