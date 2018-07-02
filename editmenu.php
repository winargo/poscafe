<html>
    <?php
        session_start();
    ?>
   <head>
       <title>Edit Menu</title>
   </head>

   <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
   <link rel="stylesheet" href="./css/category.css">

    <body>
        <div class="container">

            <div class="row">
                <div class="col-md-3">&nbsp;</div>
                 <div class="col-md-6" style="margin-top:5%">
                   <form action=".\action\edit-menu.php" method="post" id="uploadimage" enctype="multipart/form-data">
                          <div class="modal-body">
                          <div class="form-group">
                             <label for="1">Menu Code</label>
                              <input type="text" class="form-control" name="kodestock" placeholder="enter kode stock" id="1" readonly value="<?php echo $_POST["productcode"]; ?>">
                          </div>
                            <div class="form-group">
                               <label for="1">Menu Name</label>
                                <input type="text" class="form-control" name="namastock" placeholder="enter Nama Stock" id="1" required value="<?php echo $_POST["productname"]; ?>">
                            </div>
                            <div class="form-group">

                              </div>

                        <div class="form-group">
                            <label for="4">Select Category</label>
                            <select name="selcate" id="4" class="form-control" >
                              <?php
                                   include "./config/connection.php";

                                   $sql = "select * from iamproduk";
                                   $query = mysqli_query($conn,$sql);

                               while($row = mysqli_fetch_array($query))
                               {
                                   ?>
                                   <option value="<?php echo $row["KODE_PRODUK"]; ?>"><?php echo $row["NAMA_PRODUK"];?></option>

                                   <?php
                               }

                               ?>
                            </select>
                        </div>

                          <div class="form-group">
                              <a href="./category.php"><button type="button" class="btn btn-primary" data-dismiss="modal" onclick="location.href='category.php' ">New Category</button></a>
                          </div>
                          <div class="form-group">
                              <label for="22">Product price - Rp</label>
                              <input type="text" class="form-control" name="harga" placeholder="enter Harga" id="2" required value="<?php echo $_POST["harga"]; ?>">
                          </div>
                          <div class="form-group">
                              <label for="23">Product Unit</label>
                              <input type="text" class="form-control" name="produkunit" placeholder="(pcs,bowl,pack, etc)" id="23" required value="<?php echo $_POST["productunit"]; ?>">
                          </div>
                          <div class="form-group">
                          <label for="3">Kode Department</label>
                          <input type="text" class="form-control" id="3" name="kodedepartemen" placeholder="enter kode departemen" value="00" required readonly value="<?php echo $_POST[""]; ?>">
                          </div>
                          <div class="form-group">
                                 <img src="<?php echo $_POST["imagedir"]; ?>" id="imageemergency" width="300px" height="200px">

                              </div>

                            <div class="form-group">
                                <input type="file" name="fileToUpload" id="fileToUpload"  onchange="readURL(this);">
                            </div>
                            <div class="form-group">
                              <?php
                                      if(isset($_SESSION["error"])){
                                          $_SESSION["error"]="";
                                      }
                                      else if($_SESSION["error"]!=""){
                                      echo '<p>'.$_SESSION["error"].'</p>'."<script type='text/javascript'>
                                        $('#exampleModal').modal('show')

                                      </script>";
                                          $_SESSION["error"]="";
                                      }
                                      ?>
                                </div>
                          </div>
                      <div class="modal-footer">
                           <a href="viewmenu.php"><button type="button" class="btn btn-danger" style="width:100px;">Back</button></a>
                        <input  name="submit" type="submit" id="save" class="btn btn-primary" value="Add" tabindex="11">
                      </div>
                        </form>
                 </div>
            </div>
        </div>
    </body>
</html>
