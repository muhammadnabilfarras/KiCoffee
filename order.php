<?php

session_start();

$_SESSION['beli'] = $_POST['pesanan'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
</head>
<body>
    <h1>Info Pesanan</h1>
    <?php
    foreach($_SESSION['beli'] as $pesanan){
        ?>
        <ul>
            <li><?php echo $pesanan;?></li>
        </ul>
    <?php 
    } 
    ?>
    <h1>Data diri</h1>
    <form action="payment.php" method="post">
        <label for="nama">Nama lengkap:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat"><br>
        <label for="telepon">Nomor Telepon:</label><br>
        <input type="text" id="telepon" name="telepon"><br>
        <p>Pilih metode pengiriman:</p>
        <input type="radio" id="ots" name="pengiriman" value="ots">
        <label for="ots">Ambil di tempat</label><br>
        <input type="radio" id="delv" name="pengiriman" value="delv">
        <label for="delv">Antar ke rumah</label><br>
        <input type="submit" value="Bayar">
    </form>

</body>
</html>