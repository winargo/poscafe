<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include('./config/block.php')
    ?>
<head>
    <meta charset="UTF-8">
    <title>User Management</title>
    <!--    boostrap css-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!--    custom-->
    <link rel="stylesheet" href="./css/order.css">
    
    <!-- Favicon-->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    
    <script type="text/javascript" src="./bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
    <!--    bootstrap-->
<!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
-->
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:orange">
      <img src="./images/logo.PNG" alt="Logo" class="navbar-brand" height="65" width="65">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            &nbsp; 
        </ul>
        <div class="btn-group float-right">
             <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">add menu</button>
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                  echo $_SESSION['usernamedb'];
                  ?>
              </button>
              <div class="dropdown-menu">
               <?php
                  if($_SESSION["admin"]==1){
                      echo "<a class='dropdown-item' href='.\admin\index.php'>Admin page</a>";
                  }
                  ?>
                <a class="dropdown-item" href="./action/logout.php">Logout</a>
              </div>
              
              <!-- Modal -->
               <script>
                       function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#imageemergency')
                                    .attr('src', e.target.result).width(300)
                                        .height(200);
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                       </script>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
<!--                      form-->
                      <form action="cekmenu.php" method="post" id="uploadimage" enctype="multipart/form-data">
                          
                      <div class="modal-body">
                        <div class="form-group">
                           <label for="1">Product Code</label>
                            <input type="text" class="form-control" name="produkcode" placeholder="enter Product Code" id="1" required>
                        </div>
                        <div class="form-group">
                            <label for="2">Product Name</label>
                            <input type="text" class="form-control" name="produkname" placeholder="enter product name" id="2" required>
                        </div>
                        <div class="form-group">
                            <label for="4">Select Category</label>
                            <select name="selcate" id="4" class="form-control" >
                               <?php 
                                    include "./config/connection.php";
                                
                                    $sql = "select * from category";
                                    $query = mysqli_query($conn,$sql);
                                    
                                while($row = mysqli_fetch_array($query))
                                {
                                    ?>
                                    <option value="<?php echo $row["category_code"]; ?>"><?php echo $row["category_name"];?></option>
                                    
                                    <?php
                                }
                                    
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <a href="./category.php"><button type="button" class="btn btn-primary" data-dismiss="modal" onclick="location.href='category.php' ">New Category</button></a>
                        </div>
                        <div class="form-group">
                        <label for="3">Kode Department</label>
                        <input type="text" class="form-control" id="3" name="kodedepartemen" placeholder="enter kode departemen" value="00" required readonly>
                          </div>
                        <div class="form-group">
                               <img src="./images/images.jpg" id="imageemergency" width="300px" height="200px">
                               
                            </div>
                            <div class="form-group">
                                <input type="file" name="fileToUpload" id="fileToUpload"  onchange="readURL(this);" required>
                            </div>
                          </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input  name="addmenu" type="submit" id="save" class="btn btn-primary" value="Add" tabindex="11">
                      </div>
                        </form>
<!--                      end form-->
                    </div>
                  </div>
                </div>
<!--                end of modal-->
            </div>
      </div>
    </nav>
    <!-- #Top Bar -->
<!--
    <div class="wrapper item">
       <div class="menureceipt"> 
           <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal" style="float:right;margin-top:-30px;">+</button>
            <div class="catalog" style="margin-top:10px;">
                <div class="boxitem">
                    &nbsp;
                </div>
                <div class="boxitem">
                    &nbsp;
                </div>
                <div class="boxitem">
                    &nbsp;
                </div>
                <div class="boxadd">
                    <img src="./images/add.png" class="additemimage" >
                 </div>
            </div> 
        </div>
        <div class="receipt">
            <div class="receipt-data">
               <div class="checkoutdata">
                   <p>dara</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
               </div>
                <div class="checkout">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"> Check Out</button>
                </div>
            </div> 
        </div>

    </div>
-->
    <div class="row">
        <div class="col-md-7">
            <div class="row" style="text-align:center;">
                <?php 
                    include "./config/connection.php";
                    
                    $sql = "select * from iamstock where tdk_aktif='0'";
                    $query = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($query)){
                        ?>
                    <div class="col-md-2" style="background-color:orange;border-radius:5px;">
                        <img src="./images/logo.PNG" alt="logo" style="width:100%;">
                        <h6><?php echo $row["NAMA_STOCK"] ?></h6>
                    </div>        
                <?php
                    }
                ?> 
            </div>
        </div>
        
        <div class="col-md-4" style="background-color:orange;">
             <div class="checkoutdata">
                 
                  <div class="menu-head">
                     <img src="./images/logo.PNG" width="150" height="150">     
                     <p>Address<br>Phone Number Data<br>Additional Data</p>
                     <p style="text-align:left;">
                        No : nomor
                        <span style="float:right;"><?php
                            echo date("d/m/Y");
                        
                            ?></span>
                     </p>
                     <p style="text-align:left;">
                        Cashier : <?php echo $_SESSION['username'] ; ?>
                        <span style="float:right;"><?php
                            echo date("h:i:s");
                        
                            ?></span>
                     </p>
                     
                     <hr style="height: 1px;background-color:black;">
                     <div class="menu-item">
                         <p style="text-align:left;">data menu</p>
                         <div style="text-align:left;"> <div style="display: inline-block;min-width:40px;">100</div> <div style="display: inline-block;min-width:80px;">bowl&nbsp;&nbsp;&nbsp;X</div><div style="display: inline-block;min-width:100px;">45,000</div><div style="display: inline-block;min-width:50px;">5%</div><div style="text-align:right;float:right;min-width:120px;">6,000,000</div>  </div>
                     </div>
                     <div class="menu-item">
                         <p style="text-align:left;">data menu</p>
                         <div style="text-align:left;"> <div style="display: inline-block;min-width:40px;">100</div> <div style="display: inline-block;min-width:80px;">bowl&nbsp;&nbsp;&nbsp;X</div><div style="display: inline-block;min-width:100px;">45,000</div><div style="display: inline-block;min-width:50px;">5%</div><div style="text-align:right;float:right;min-width:120px;">6,000,000</div>  </div>
                     </div>
                     <div class="menu-item">
                         <p style="text-align:left;">data menu</p>
                         <div style="text-align:left;"> <div style="display: inline-block;min-width:40px;">100</div> <div style="display: inline-block;min-width:80px;">bowl&nbsp;&nbsp;&nbsp;X</div><div style="display: inline-block;min-width:100px;">45,000</div><div style="display: inline-block;min-width:50px;">5%</div><div style="text-align:right;float:right;min-width:120px;">6,000,000</div>  </div>
                     </div>
                     <div class="menu-item">
                         <p style="text-align:left;">data menu</p>
                         <div style="text-align:left;"> <div style="display: inline-block;min-width:40px;">100</div> <div style="display: inline-block;min-width:80px;">bowl&nbsp;&nbsp;&nbsp;X</div><div style="display: inline-block;min-width:100px;">45,000</div><div style="display: inline-block;min-width:50px;">5%</div><div style="text-align:right;float:right;min-width:120px;">6,000,000</div>  </div>
                     </div>
                     
                     <hr style="height: 1px;background-color:black;">
                     
                     <p style="text-align:left;">
                        Disc    
                        <span style="float:right;min-width:200px;text-align:right;">Value</span>
                        <span style="float:right;">=</span>
                     </p>
                     <p style="text-align:left;">
                        Total     
                        <span style="float:right;min-width:200px;text-align:right;">Value</span>
                        <span style="float:right;">=</span>
                     </p>
                  </div>
                   
               </div>
                <div class="checkout">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Check Out</button>
                </div>
            </div> 
        </div>
</body>

    
</html>