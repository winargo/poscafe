<html>
  <?php
    session_start();
    include('.\config\block.php');
    include '.\config\connection.php';

    if(isset($_POST['command'])){
        
    }
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
                    <form action=".\action\editcategory.php" method="post">
                     <input type="hidden" name="oldproductcode" value="<?php
                                                 echo $_POST['productcode'];
                        ?>">
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
                         <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Extra Category 2" name="command">
                          <button type="submit" class="btn btn-success">Edit Category</button>
                           <a href="category.php"><button type="button" class="btn btn-secondary">Back</button></a>
                      </div>
                    </form>          
                      
                 </div>
            </div>
        </div>
    </body>
</html>
