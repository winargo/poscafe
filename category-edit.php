<html>
  <?php
    session_start();
    ?>
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
                    <form action="" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category Code</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Code" name="categorycode" value="<?php 
                        $temp = $_POST['productcode'];
                        echo $_POST['productcode'];
                        ?>">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Category Name" name="categoryname" value="<?php 
                        echo $_POST['productname'];
                        ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Extra Category 1</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Extra Category 1" name="extra1" value="<?php 
                        echo $_POST['productsub1'];
                        ?>">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Extra Category 2</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Extra Category 2" name="extra2" value="<?php 
                        echo $_POST['productsub2'];
                        ?>">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>

                      <div class="button-margin">
                          <button class="btn btn-success">Edit Category</button>
                      </div>
                    </form>          
                    <?php 
                        include "./config/conection.php";
                        
                        $categorycode = $_POST['categorycode'];
                        $categoeyname = $_POST['categoryname'];
                        $extra1 = $_POST['extra1'];
                        $extra2 = $_POST['extra2'];

                        $sql = "update iamproduk set kode_produk = '$categoryname',nama_produk = '$categoryname',nama_sub_produk = '$extra1',nama_sub_produk2 = '$extra2' where kode_produk = '$temp'";
                        $query = mysqli_query($conn,$sql);
                        
                        if($query)
                        {
                            header("location : .\category.php");
                        }
                     ?>                 
                 </div>
            </div>
        </div>
    </body>
</html>
