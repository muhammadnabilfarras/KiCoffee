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
<style>
    td,th {
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
        text-align: center;
    }
</style>
  
<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama produk</th>
                <th>Jenis produk</th>
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
                    <td><?php echo $rows['namaProduk']; ?></td>
                    <td><?php echo $rows['jenisProduk']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <input type='submit' class='buttons' value="Pesan">
    </form>
</body>
</html>
  
<?php   
    mysqli_close($conn);
?>