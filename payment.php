<?php

session_start();
$_SESSION['namaPembeli'] = $_POST['nama'];
$_SESSION['alamatPembeli'] = $_POST['alamat'];
$_SESSION['telpPembeli'] = $_POST['telepon'];

print_r($_SESSION['beli']);
print_r($_SESSION['namaPembeli']);
print_r($_SESSION['alamatPembeli']);
print_r($_SESSION['telpPembeli']);

?>