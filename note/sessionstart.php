<?php
// memulai session
session_start();

// cek apakah pengguna telah login
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    // halaman yang hanya dapat diakses oleh pengguna yang telah login
    echo "Selamat datang, " . $_SESSION['username'] . "!";
} else {
    // redirect ke halaman login jika pengguna belum login
    header("Location: index.php");
    exit();
}
