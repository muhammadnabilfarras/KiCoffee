<?php
include "db.php";

session_start();

$_SESSION['beli'] = $_POST['pesanan'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Pembayaran</title>
</head>

<body>

    <header class="header" id="header">
        <div class="navbar-container">
            <h1 class="logo">KiCoffee</h1>
            <nav class="navbar">
                <ul>
                    <li><a href="#http://127.0.0.1:5500/index2.html#https://github.com/muhammadnabilfarras/KiCoffee.git" class="nav-link">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section id=ord>

    <div class="container text-center">
        <div class="row">
            <div class="col">
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
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h1>Data diri</h1>
                <form action="payment.php" method="post">
                    <label for="nama">Nama lengkap :</label><br>
                    <input type="text" id="nama" name="nama"><br><br>
                    <label for="alamat">Alamat :</label><br>
                    <input type="text" id="alamat" name="alamat"><br><br>
                    <label for="telepon">Nomor Telepon :</label><br>
                    <input type="text" id="telepon" name="telepon"><br>

                    <p>Pilih metode pengiriman :</p>

                    <input type="radio" name="pengiriman" value="Ambil">
                    <label for="Ambil">Ambil di tempat</label><br>
                    <input type="radio" name="pengiriman" value="Antar">
                    <label for="Antar">Antar ke rumah</label><br><br> 
                    <input type="submit" name="submit" value="Bayar">
                </form>
            </div>
        </div>
    </div>  
</section> 
</body>

</html>