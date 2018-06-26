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
                    <form action="cekcategory.php" method="post">
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
                          <button type="submit" class="btn btn-primary">Add New Category</button>
                          <button class="btn btn-success">Edit Category</button>
                      </div>
                    </form>                           
                 </div>
            </div>
        </div>
    </body>
</html>