

<html>
   <head>
       <title>New Category</title>
   </head>
   
   <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
   <link rel="stylesheet" href="./css/category.css">
   
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">&nbsp;</div>
                 <div class="col-md-6" style="margin-top:5%">
                    <form method="post" action=".\action\cekcategory.php">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category Code</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Code" name="categorycode">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Category Name" name="categoryname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Extra Category 1</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Extra Category 1" name="extra1">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Extra Category 2</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Extra Category 2" name="extra2">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>

                      <div class="button-margin">
                          <button type="submit" class="btn btn-success">Add Category</button>
                      </div>
                    </form>                           
                 </div>
            </div>
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
                                <td>Category Code</td>
                                <td>Category Name</td>
                                <td>Extra Category 1</td>
                                <td>Extra Category 2</td>
                                <td>Username</td>
                                <td>Edit</td>
                                <td>Remove</td>
                            </tr>
                        </thead>
                        <tbody>
                                   <?php
                   
                    include('./config/db_connect.php');
                    $sql = "Select * from `iamproduk` where tdk_aktif=0" ;
                    $result = mysqli_query($conn,$sql);
                    $a=1;
                    while( $row = mysqli_fetch_assoc( $result ) ){
                        
            echo "
            <tr>
              <td id='1'>$a</td>
              <td>".$row['KODE_PRODUK']."</td>
                <td>".$row['NAMA_PRODUK']."</td>
                <td>".$row['NAMA_SUB_PRODUK']."</td>
                <td>".$row['NAMA_SUB_PRODUK2']."</td>
                <td>".$row['USER_ID']."</td>";
              echo "
              <td>
                           <form  action='category-edit.php' method='post'>
                                        <input type='hidden' name='productcode' value='".$row['KODE_PRODUK']."'>
                                        <input type='hidden' name='productname' value='".$row['NAMA_PRODUK']."'>
                                        <input type='hidden' name='productsub1' value='".$row['NAMA_SUB_PRODUK']."'>
                                        <input type='hidden' name='productsub2' value='".$row['NAMA_SUB_PRODUK2']."'>
                                        <button class='btn btn-success' type='submit' style='width:100%;'>Edit</button>
                                    </form>
                                </td>
                                <td>
                                <button class='btn btn-danger' type='button' style='width:100%;'>Remove</button>
                                </td>
                    <td>
            </td>
            </tr>";
                    $a++;
                    }
                    ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>