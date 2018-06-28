

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
                    <form method="post" action=".\cekcategory.php">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category Code</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Code">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Category Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Extra Category 1</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Extra Category 1">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Extra Category 2</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Extra Category 2">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>

                      <div class="button-margin">
                          <button class="btn btn-success">Add Category</button>
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
                                <td>Category Code</td>
                                <td>Category Name</td>
                                <td>Extra Category 1</td>
                                <td>Extra Category 2</td>
                                <td>Edit</td>
                                <td>Remove</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                
                                <button class="btn btn-success" type="button" style="width:100%;">Edit</button>
                                
                                </td>
                                <td><button class="btn btn-danger" type="button" style="width:100%;">Remove</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>