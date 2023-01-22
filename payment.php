<?php
include "db.php";

session_start();


if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telepon"];
    $pengiriman = $_POST["pengiriman"];
}

$listproduk = array();

if($pengiriman == "Antar"){
    $txt_pengiriman = "antar ke rumah";
    $ongkir = 8000;
} else {
    $txt_pengiriman = "ambil ke cafe";
    $ongkir = 0;
}

for($i = 0; $i < sizeof($_SESSION['beli']); $i++){
    $produkcurr = $_SESSION['beli'][$i];
    $sql_produk = "SELECT * FROM `produk` WHERE `namaProduk` = '$produkcurr'";
    $result_produk = mysqli_query($conn, $sql_produk);
    $data_produk = mysqli_fetch_assoc($result_produk);
    array_push($listproduk, $data_produk);
}

$totalBiaya = array_column($listproduk, 'hargaProduk');
$totalBiaya = array_map('intval', $totalBiaya);
$produkId = array_column($listproduk, 'idProduk');

$sql = "INSERT INTO `riwayat`(`idRiwayat`, `namaPembeli`, `alamatPembeli`, `noTelp`, `pengiriman`) VALUES ('','$nama','$alamat','$telp','$pengiriman')";
$result = mysqli_query($conn, $sql);

$sql_riwayat = "SELECT * FROM `riwayat` WHERE `namaPembeli` = '$nama'";
$result_riwayat = mysqli_query($conn, $sql_riwayat);
$data_riwayat = mysqli_fetch_assoc($result_riwayat);
$id_riwayat = $data_riwayat['idRiwayat'];
    
foreach($produkId as $data){
    $insert = "INSERT INTO `riwayat_produk`(`Riwayat_idRiwayat`, `Produk_idProduk`) VALUES ('$id_riwayat','$data')";
    $result = mysqli_query($conn, $insert);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih!</title>
</head>
<body>
        <p>Pesanan untuk:</p>
        <h1><?php echo $nama ?></h1>
        <p>Di <?php echo $alamat ?></p>
        <p>Metode pengiriman yang diinginkan adalah <?php echo $txt_pengiriman; ?></p>
        <p>Nomor yang dapat dihubungi adalah <?php echo $telp ?></p>
        <p>Dengan daftar pesanan:</p><br>
        <table>
            <tr>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
            </tr>
            <?php
            foreach($listproduk as $row){
                ?>
                <tr>
                    <td><?php echo $row['namaProduk']; ?></td>
                    <td><?php echo $row['hargaProduk']; ?></td>
                </tr>
                <?php
            }
            ?>
                <tr>
                    <th>Total:</th>
                    <td><?php echo array_sum($totalBiaya) + $ongkir; ?></td>
                </tr>
        </table><br>
        <a href="cart.php">Oke</a>
</body>
</html>
