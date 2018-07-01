<html>
   <head>
       <title>New Category</title>
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
                       <caption>Table Menu</caption>
                        <thead>
                            <tr>
                                <td>No. </td>
                                <td>Menu Code</td>
                                <td>Menu Name</td>
                                <td>Menu Price</td>
                                <td>Menu Unit</td>
                                <td>Menu Category</td>
                                <td>Stock Left</td>
                                <td>Image Data</td>
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
                <td>".$row['HARGAJUAL1']."</td>
                <td>".$row['KEMAS1']."</td>
                <td>".$row['KODE_PRODUK']."</td>
                <td>".$row['SALDOAWAL']."</td>
                <td>".$row['IMAGEDIR']."</td>";
              echo "
              <td>
                           <form  action='category-edit.php' method='post'>
                                        <input type='hidden' name='productcode' value='".$row['KODE_STOCK']."'>
                                        <input type='hidden' name='productname' value='".$row['KODE_PRODUK']."'>
                                        <input type='hidden' name='productsub1' value='".$row['NAMA_SUB_PRODUK']."'>
                                        <input type='hidden' name='productsub2' value='".$row['NAMA_SUB_PRODUK2']."'>
                                        <input type='hidden' name='productcode' value='".$row['KODE_STOCK']."'>
                                        <input type='hidden' name='productname' value='".$row['KODE_PRODUK']."'>
                                        <input type='hidden' name='productsub1' value='".$row['NAMA_SUB_PRODUK']."'>
                                        <input type='hidden' name='productsub2' value='".$row['NAMA_SUB_PRODUK2']."'>
                                        <button class='btn btn-success' type='submit' style='width:100%;'>Edit</button>
                                    </form>
                                </td>
                                <td>
                                <form  action='.\action\delcategory.php' method='post'>
                                        <input type='hidden' name='productcode' value='".$row['KODE_PRODUK']."'>
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
