<?php
   include "db.php";
  
    $sql = "select * from produk";
    $result = ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 
  
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kicoffee</title>

    <!--Links-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Main CSS-->
    <link rel="stylesheet" href="./assets/css/style2.css">
    <link rel="stylesheet" href="./assets/css/navbar.css">

</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }
    body{
        background: url('./assets/img/hero-bg.jpg')
    }
    .logo {
        padding: 1.2rem;
        font-weight: 600;
        color: #2487ce;
    }
    #header{
        background-color: #f9f9f9;
    }
    #header .navbar-container h1{
        color: #0071e2;
        font-weight: bold;
        font-size: 3rem;
    }
    .logo {
    padding: 1.2rem;
    font-weight: 400;
    color: #2487ce;
    }

    .navbar-container {
        display: flex;
        justify-content: space-between;
        background-color: #fff;
        /* box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; */
        -webkit-box-shadow: 0 4px 6px -6px #222;
        -moz-box-shadow: 0 4px 6px -6px #222;
        box-shadow: 0 4px 6px -6px #222;
        border-bottom: 0.1px solid black;
    }

    .navbar {
        /* justify-content: right; */
        padding: 1rem;
    }

    .nav-link {
        color: black;
    }

    .nav-link:hover {
        color: #0071e2;
    }

    .navbar ul {
        display: flex;
        flex-direction: row;
        list-style-type: none;
        overflow: hidden;
    }
    @media (max-width: 992px) {
    #header .logo {
        font-size: 28px;
    }
    
    }
    .col-product{
        width: 50%;
        margin: 5% auto;
        border: 2px solid black;
        background-color: whitesmoke;
    }
    .col-product table{
        margin: 0 auto;
        padding: 30px
    }
    .col-product img{
        width: 100%;
        height: 100%;
    }
    td,th {
        padding: 10px 50px;
        margin: 5px;
        text-align: center;
        font-size: 1.5rem;
    }
    .col-product button{
        background-color: #26B0F5;
        color: white;
        cursor: pointer;
        margin: 0 0 2% 45%;
        padding: 12px 18px;
        border-radius: 6px;
    }
    .col-product button:hover{
        background-color: #2487ce;
        color: white;
    }
    .col-footer{
        margin-top: 10%;
        padding: 30px;
        background-color: whitesmoke;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    .col-footer .col-footer1{
        background-color: whitesmoke;
        padding: 50px;
    }
    .col-footer .col-footer1 h1{
        font-size: 2rem;
        margin: 10px 0;
    }
    .col-footer-contact .github, .col-footer-contact .facebook, .col-footer-contact .instagram{
        font-size: 2rem;
        padding: 8px
        /* display: flex;
        flex-direction: column; */
    }
</style>
  
<body>
    <header class="header" id="header">
        <div class="navbar-container">
            <h1 class="logo">Kicoffee</h1>
            <nav class="navbar">
                <ul>
                    <li><a href="./index2.html" class="nav-link">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="col-product">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Coffee</th>
                    <!-- <th>Jenis produk</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                if(!empty($row))
                foreach($row as $rows)
                { 
                ?>
                <form action="order.php" method="post">
                    <tr>
                        <td>
                            <input type="checkbox" name="pesanan[]" value="<?php echo $rows['namaProduk']; ?>">
                        </td>
                        <td>
                            <img src="./assets/img/product/<?= $rows['gambar']; ?>">
                        </td>
                        <td><?php echo $rows['namaProduk']; ?></td>
                        <td><?php echo $rows['hargaProduk']; ?></td>
                        <!-- <td><?php echo $rows['jenisProduk']; ?></td> -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>non-Coffee</th>
                    <!-- <th>Jenis produk</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                if(!empty($row))
                foreach($row as $rows)
                { 
                ?>
                <form action="order.php" method="post">
                    <tr>
                        <td>
                            <input type="checkbox" name="pesanan[]" value="<?php echo $rows['namaProduk']; ?>">
                        </td>
                        <td>
                            <img src="./assets/img/product/<?= $rows['gambar']; ?>">
                        </td>
                        <td><?php echo $rows['namaProduk']; ?></td>
                        <td><?php echo $rows['hargaProduk']; ?></td>
                        <!-- <td><?php echo $rows['jenisProduk']; ?></td> -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Snacks</th>
                    <!-- <th>Jenis produk</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                if(!empty($row))
                foreach($row as $rows)
                { 
                ?>
                <form action="order.php" method="post">
                    <tr>
                        <td>
                            <input type="checkbox" name="pesanan[]" value="<?php echo $rows['namaProduk']; ?>">
                        </td>
                        <td>
                            <img src="./assets/img/product/<?= $rows['gambar']; ?>">
                        </td>
                        <td><?php echo $rows['namaProduk']; ?></td>
                        <td><?php echo $rows['hargaProduk']; ?></td>
                        <!-- <td><?php echo $rows['jenisProduk']; ?></td> -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
            <button value="Pesan">Pesan Disini</button>
                </form>
    </section>

    <footer>
        <section class="col-footer">
            <section class="col-footer1">
                <h1>KiCoffee</h1>
                <p>Mari Bercerita, Bersama KiCoffee</p>
                <p>Jl. in aja dulu no.69, Kebayoran Lama, Jakarta Selatan</p>
            </section>

            <section class="col-footer-contact">
                <br><br><br><br>
                <a href="https://github.com/muhammadnabilfarras/KiCoffee" class="github" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://github.com/muhammadnabilfarras/KiCoffee" class="facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://github.com/muhammadnabilfarras/KiCoffee" class="instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </section>
            
        </section>
    </footer>
</body>
</html>
  
<?php   
    mysqli_close($conn);
?>