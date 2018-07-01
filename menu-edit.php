<?php
    session_start();
    include('./config/block.php');
?>

<html>
   <head>
       <title>Edit Menu</title>
   </head>
   
   <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
   <link rel="stylesheet" href="./css/category.css">
   
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    &nbsp;
                </div>
                <div class="col-md-10" style="margin-top:10px;">
                    <table class="table table-bordered table-hover">
                       <caption>Table Category</caption>
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Kode Stock</td>
                                <td>Nama Stock</td>
                                <td>Kode Type</td>
                                <td>Kode Produk</td>
                                <td>Unit</td>
                                <td>Harga Jual</td>
                                <td>Username</td>
                                <td>Edit</td>
                                <td>Remove</td>
                            </tr>
                        </thead>
                        <tbody>
                                   <?php
                   
                    include('./config/db_connect.php');
                    $sql = "Select * from `iamstock` where tdk_aktif=0" ;
                    $result = mysqli_query($conn,$sql);
                    $a=1;
                    while( $row = mysqli_fetch_assoc( $result ) ){
                        
            echo "
            <tr>
              <td id='1'>$a</td>
              <td>".$row['KODE_STOCK']."</td>
                <td>".$row['NAMA_STOCK']."</td>
                <td>".$row['KODE_TYPE']."</td>
                <td>".$row['KODE_PRODUK']."</td>
                <td>".$row['KEMAS1']."</td>
                <td>".$row['HARGAJUAL1']."</td>
                <td>".$row['USER_ID']."</td>
                
              
              <td>
                           <form  action='.\action\edit-menu.php' method='post'>
                                        <input type='hidden' name='kodestock' value='".$row['KODE_STOCK']."'>
                                        <button class='btn btn-success' type='submit' style='width:100%;'>Edit</button>
                                    </form>
                                </td>
                                <td>
                                <form  action='.\action\delmenu.php' method='post'>
                                        <input type='hidden' name='kodestock' value='".$row['KODE_STOCK']."'>
                                        <button class='btn btn-danger' type='submit' style='width:100%;'>Remove</button>
                                    </form>
                                
                                </td>
            </tr>";
                    $a++;
                    }
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>