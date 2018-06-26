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
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Menu Code</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Menu Code">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Menu Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Menu Name">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Item Price - Rp</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Default Price">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Menu Unit</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Menu Unit">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      <div class="form-group">
                        <label for="menucateogry">Menu Category</label>
                        <select name="menucategory" id="menucateogry" class="form-control">
                            <option value="0" selected>...</option>
                        </select>
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Initial Stock</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Initial Stock">
                      </div>

                      <div class="button-margin">
                          <button class="btn btn-success">Add Menu</button>
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
                       <caption>Table Menu</caption>
                        <thead>
                            <tr>
                                <td>Menu Code</td>
                                <td>Menu Name</td>
                                <td>Menu Price</td>
                                <td>Menu Unit</td>
                                <td>Menu Category</td>
                                <td>Stock Left</td>
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
                                <td></td>
                                <td></td>
                                <td><button class="btn btn-success" type="button" style="width:100%;">Edit</button></td>
                                <td><button class="btn btn-danger" type="button" style="width:100%;">Remove</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>