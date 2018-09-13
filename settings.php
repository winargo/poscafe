<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    $_SESSION['print']="";
    date_default_timezone_set('Asia/Jakarta');
    include "./config/connection.php";
    $angka = 0;
    $orderno='';
    $sql = "select * from xparam where nama_param='DATERESET'";
    $querydate = mysqli_query($conn,$sql);
    
    while($row = mysqli_fetch_array($querydate)){
        if($row['NILAI_PARAM']==date("d/m/Y")){
            
        }
        else{
         //   echo "tidak sama";
            $sql = "update xparam set nilai_param='".date("d/m/Y")."' where nama_param='DATERESET'";
            $query = mysqli_query($conn,$sql);
            
            if($query)
            {    
                $sql = "update iamsetupseri set no_urut=".date("ymd")."0001"." where no_seri='JL'";
                $query = mysqli_query($conn,$sql);

                if($query)
                {    
                    header("Refresh:0");
                }
                else{
                    echo "Error Occured";
                }
            }
        }
        $angka++;
    }
    
    if($angka==0){
        $sql = "insert into xparam (KODE_PARAM,NAMA_PARAM,NILAI_PARAM) VALUES(1,'DATERESET','".date("d/m/Y")."')";
            $query = mysqli_query($conn,$sql);
            
            if($query)
            {    
                header("Refresh:0");
            }
    }
    
    
    
    
    
    include('./config/block.php');
    function asDollars($value) {
    return 'Rp' . number_format($value, 2);
    
  }
    ?>
<head>
    <meta charset="UTF-8">
    <title> Happy Belly</title>
    <!--    boostrap css-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">



    <!-- Favicon-->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- <script type="text/javascript" src="./js/axios.min.js"></script> -->
    <script type="text/javascript" src="./bootstrap/js/jquery.js"></script>
    
    <script type="text/javascript">

    var data = 0 ;
        function popup(){
        var boxreprint = document.getElementById("formprint");
        if(boxreprint.style.display == "none") {
            boxreprint.style.display = "block"
        }
        else{
            boxreprint.style.display = "none";
        }
    }
        
    function submit(id){
        document.getElementById(id).submit();
    }
        
    </script>

    <script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
    <!--    bootstrap-->
<!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
-->
    <!--    custom-->
    <link rel="stylesheet" href="./css/order.css">

</head>
    <style>
        th{
            border: none;
        }
        .category{
            width: 48%;
            margin: 1%;
            height: 250px;
            font-size: 15pt;
        }
        .category:hover{
            font-size: 15pt;
            color: blue;
            background-color: white;
        }
    </style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:orange">
        <a href="index.php"><img src="./images/logo.PNG" alt="Logo" class="navbar-brand" height="65" width="65"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            &nbsp;
        </ul>
        <div class="btn-group float-right"  style="margin-right : 5%;">
            
             <input type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" value="Add Menu">
            <a href="viewmenu.php" ><input type="button" class="btn btn-success float-right" value="EditMenu"></a>
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
                  <a class="dropdown-item" id="showupprint">Re-print</a>
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
                      <form action=".\action\cekmenu.php" method="post" id="uploadimage" enctype="multipart/form-data">

                      <div class="modal-body">
                          <?php
                                      if($_SESSION["error"]==null){
                                          $_SESSION["error"]="";
                                      }
                                      else if($_SESSION["error"]!=""){
                                      echo '<p>'.$_SESSION["error"].'</p>'."<script type='text/javascript'>
                                        $('#exampleModal').modal('show')

                                      </script>";
                                          $_SESSION["error"]="";
                                      }
                                      ?>
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
                            <input type="number" class="form-control" name="produkprice" placeholder="enter product Price" id="22" required>
                        </div>
                        <div class="form-group">
                            <label for="23">Product Unit</label>
                            <input type="text" class="form-control" name="produkunit" placeholder="(pcs,bowl,pack, etc)" id="23" required>
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
                            <div class="form-group">

                                </div>
                          </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input  name="submit" type="submit" id="save" class="btn btn-primary" value="Add" tabindex="11">
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
    <div class="row">
        <div class="col-md-6" >
            <div class="row" style="text-align:center; margin-top:20px;margin-bottom:20px;overflow: auto;height:1000px;min-height:500px">
                <?php
                    include "./config/connection.php";

                    $sql = "select * from iamproduk where tdk_aktif=0 ORDER BY NAMA_PRODUK ASC";
                    $query = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($query)){
                        ?>
                <button class="btn btn-primary category" type="submit" onclick="submit('<?php echo $row['KODE_PRODUK'] ?>')"><p style="white-space: normal;"><?php echo $row["NAMA_PRODUK"] ?></p></button>
                    <form method="post" action="./selectmenu.php" id="<?php echo $row['KODE_PRODUK'] ?>">
                        <input name = "kodeproduk" type="hidden" value='<?php echo $row["KODE_PRODUK"]?>'>
                </form>
                <!--    <div class="col-md-6" style="border-radius:5px;margin-bottom:15px;">
                        <div class="card" onclick="addMenu()">
                        <img class="card-img-top" src="<?php //echo $row["IMAGEDIR"] ?>" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-title"><?php //echo $row["NAMA_STOCK"]; ?></p>
                          <p class="card-text"><?php //echo asDollars($row["HARGAJUAL1"]); ?></p>
                          <p class="card-text"><?php //echo $row["SALDOAWAL"]; ?></p> 
                          <form action="./action/cekcheckout.php" method="post">
                            <input type="hidden" name="namastock" id="namastock" value="<?php //echo $row["NAMA_STOCK"] ?>">
                            <input type="hidden" name="qty" value="1">
                            <input type="hidden" name="harga" value="<?php //echo $row["HARGAJUAL1"]; ?>">
                            <input type="hidden" name="userid" value="<?php //echo $_SESSION["username"]; ?>">
                            <input type="submit" name="addMenu" value="Add" class="btn btn-primary" onclick="addMenu(<?php //echo $row["NAMA_STOCK"] ?>)" id="addMenu" style="width : 100%;">
                          </form>
                        </div>
                      </div>
                    </div>-->
                <?php
                    }
                ?>
            </div>
        </div>
        
        <form action="./action/cekprint.php" id="formprint" style="margin:0 auto;" method="post">
            <div class="form-group" id="reprint">
                <label for="3">Reprint Order</label>
                <input type="text" class="form-control" id="3" name="print" placeholder="enter Order No" value="" required>
                <?php
                                        if(!isset($_SESSION["error1"])){
                                            $_SESSION["error1"]="";
                                        }
                                        else if($_SESSION["error1"]!=""){
                                        echo '<p>'.$_SESSION["error1"].'</p>';
                                           echo' <script>
                                                $("#formprint").show();
                                                var data = 1;
                                            </script>';
                                            $_SESSION["error1"]="";
                                        }
                                        ?>
                <button type="submit" class="btn btn-success "style="margin-top:20px;margin-bottom:20px;">Check</button>
            </div>
        </form>
        
        <div class="col-md-5" style="margin-top : 20px ;margin-left: 3.5%;border : 4px solid orange; border-radius: 5px;">
             <div class="checkoutdata">

                  <div class="menu-head" style="padding-top:20px">
                 <!--    <img src="./images/logo.PNG" width="150" height="150">-->
                     <p>Let's Happy Bellying!<br>Frying now @ Brastagi Tiara<br>Operation Hours(Daily):<br>10:00 a.m - 10:00 p.m</p>
                      <hr style="border-top: dashed 2px;margin:0;">
                      <hr style="border-top: dashed 2px;margin-top:5px;">
                     <p style="text-align:left;">
                        Order No : <?php
                         $sql = "select * from iamsetupseri where no_seri='JL'";
                        $query = mysqli_query($conn,$sql);
            
                        while($row = mysqli_fetch_array($query))
                        {    
                            echo str_replace('.0000','',$row['NO_URUT']);
                        }
                         ?><br>
                        Date : <?php
                            echo date("d/m/Y");?>&nbsp;<?php
                            echo date("h:i a");
                            ?><br>
                         Transaction By: <?php echo $_SESSION['username'] ; ?>
                     </p>

                      <div class="table-responsive">
                          <table class="table" style="border:none;">
                            <thead  style="margin-bottom:5px;border:none">
                              <tr style="border:none;">
                                <th class="no" style="border:none;padding-top:0;">No</th>
                                <th class="nama" style="border:none;padding-top:0;">Description</th>
                                <th class="harga" style="border:none;padding-top:0;">Amt (Rp.)</th>
                              </tr>
                            </thead>
                            <tbody style="border:none;">
                              <?php
                                  include "./config/connection.php";

                                  $sql = "select * from cart where checkout_status = 0";
                                  $query = mysqli_query($conn,$sql);
                                  $no = 1;
                                  while ($row = mysqli_fetch_array($query)) {

                                    ?>
                                      <tr style="border:none;">
                                        <td class="no" style="border:none;padding-top:0;padding-bottom:0;"><?php echo $no; ?></td>
                                        <td class="nama" style="border:none;padding-top:0;padding-bottom:0;"><?php echo $row['KODE_STOCK']."(".$row['QTY'].")"; ?></td>
                                        <td class="harga" style="border:none;padding-top:0;padding-bottom:0;"><?php echo asDollars($row['QTY']*$row['HARGA']); ?></td>
                                          <td style="border:none;">
                                          <form method="post" action=".\action\delcart.php">
                                              <input type="hidden" name="kodestock" value="<?php echo $row['KODE_STOCK']; ?>">
                                              <input type="submit" class="btn btn-danger" value="X" style="border-radius:100px;">
                                          </form>
                                        </td>
                                      </tr>
                                <?php
                                if($row['note']==""){
                                ?>
                                
                                <?php
                                    }   
                                else{
                                ?>
                                
                                <tr style="border:none;border-bottom : 1px;">
                                    <td colspan="4" style="border:none;"><input style="width:100%;" class="form-control" disabled type="text" placeholder="No Additional note for <?php echo $row['KODE_STOCK']; ?>" value="<?php echo $row['note']; ?>"></td>
                                </tr>
                                <?php
                                }   
                                ?>

                                    <?php
                                    $no++;
                                  }
                               ?>
                            </tbody>
                          </table>
                          </div>
                      <hr style="border-top: dashed 2px;margin-top:2px;">
                      <?php
                        include "./config/connection.php";
                        $q4 = "select * from cart where checkout_status = 0";
                        $s4 = mysqli_query($conn,$q4);
                        $total = 0;
                        $qty = 0;
                        
                        while ($row = mysqli_fetch_array($s4)) {
                            $total +=$row["QTY"]*$row["HARGA"];
                            $qty += $row["QTY"];
                      ?>
                      <?php
                          }
                          $changetotal = asDollars($total);  
                          echo "<p style='text-align:left;'>Subtotal($qty)<span style='float:right;'>$changetotal</span></p>";
                      ?>
                      <hr style="border-top: dashed 2px;margin-top:2px;">
                    <p style="text-align:left;margin-left:15%;">
                        <span style="font-size:25pt">Total
                        <span style="float:right;">
                          <?php
                            include "./config/connection.php";
                            $q4 = "select * from cart where checkout_status = 0";
                            $s4 = mysqli_query($conn,$q4);
                            $total = 0;
                            $qty = 0;

                            while ($row = mysqli_fetch_array($s4)) {
                                $total +=$row["QTY"]*$row["HARGA"];
                                $qty += $row["QTY"];
                          ?>
                          <?php
                              }
                              $changetotal = asDollars($total);
                              echo $changetotal;
                          ?>
                        </span></span><br>

                        <?php
                          include "./config/connection.php";
                          $q4 = "select * from cart where checkout_status = 0";
                          $s4 = mysqli_query($conn,$q4);
                          $total = 0;
                          while ($row = mysqli_fetch_array($s4)) {
                              $total +=$row["QTY"]*$row["HARGA"];
                        ?>
                        <?php
                            }
                            $changetotal = asDollars($total);
                            // echo "<span style='float:right;'>$changetotal</span>";
                        ?>
                     </p>

                     <hr style="border-top: dashed 2px;margin-top:5px;">

                     <p style="text-align:center;">
                        Cater for office meeting , event birthday<br>
                         Please contact us :<br>
                         WA : 085922380750<br>
                         Line : happybellying<br>
                         Instagram : happybellying<br>
                     </p>
                  </div>

               </div>
                <div class="checkout">
                    <a href="payment.php"><button class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Check Out</button></a>
                </div>
            </div>
    </div>
</body>

<script type="text/javascript">
$(document).ready(function(){
    if(data == 1){
        
    }else{
    $("#formprint").hide();
    }
})
    
    
$("#showupprint").click(function(){
    if(data==0){
        $("#formprint").show();
        data = 1;
    }
    else{
        $("#formprint").hide();
        data = 0;
    }
    
})

</script>

</html>
