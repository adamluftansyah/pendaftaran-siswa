<?php
// $server = "localhost";
// $user = "root";
// $password = "";
// $nama_database = "pendaftaran_siswa";

$server = "sql105.infinityfree.com";
$user = "if0_37057008";
$password = "ZlIejYMbbnPzZW";
$nama_database = "if0_37057008_adampendaftaran";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
