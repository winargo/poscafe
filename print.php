<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    $due = 0;
    $check = 0;
    include('./config/block.php');
    
    function asDollars($value) {
    return 'Rp' . number_format($value);
    
  }
    ?>
<head>
    <script type="text/javascript">
    window.onbeforeunload = function(){
  return 'Are you sure you want to leave?';
};
    </script>
    <meta charset="UTF-8">
    <title> Happy Belly</title>
    <!--    boostrap css-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!--    custom-->
    <link rel="stylesheet" href="./css/order.css">

    <!-- Favicon-->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <!-- Google Fonts --> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- <script type="text/javascript" src="./js/axios.min.js"></script> -->
    <script type="text/javascript" src="./bootstrap/js/jquery.js"></script>

    <script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
    <!--    bootstrap-->
<!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
-->
    <style media="print">
        body {
        height: 842px;
        width: 595px;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</head>
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
             <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add Menu</button>
            <a href="viewmenu.php" type="button" class="btn btn-success float-right">EditMenu</a>
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                  echo $_SESSION['usernamedb'];
                  ?>
              </button>
              <div class="dropdown-menu">
               <?php
                  if($_SESSION["admin"]==1){
                      echo "<a class='dropdown-item' href='.\admin\index.php'>Admin page</a>";
                      echo "<a class='dropdown-item' href='.\settings.php'>Settings</a>";
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
                      <form action=".\action\cekmenu.php" method="post" id="uploadimage" enctype="multipart/form-data">

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
                                </div>
                          </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary">Close</button>
                        <input  name="submit" type="submit" id="save" class="btn btn-primary" value="Add" tabindex="11">
                        <button type ="button" id="pay" class="btn btn-success" value="Add" tabindex="11">pay</button>
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

    <div class="row" style="">
        
        <?php
        
        require_once './config/Mobile_Detect.php';
        $detect = new Mobile_Detect();

        // Check for any mobile device.
        if ($detect->isMobile() ){
            ?>
        <div class="col-md-6" style="margin:0 auto;margin-top : 30px;border : 4px solid orange; border-radius: 5px;">
             <div class="checkoutdata" id="printarea" style="text-align:center;background-color:white;">

                  <div class="menu-head" style="text-align:center;">
                     <img src="./images/logo.PNG" width="150" height="150">
                     <p style="font-size:10pt;">Let's Happy Bellying!<br>Frying now @ Brastagi Tiara<br>Operation Hours(Daily):<br>10:00 a.m - 10:00 p.m</p>
                      <hr style="border-top: dashed 2px;margin:0;">
                      <hr style="border-top: dashed 2px;margin-top:5px;">
                     <p style="text-align:left;">
                        Order No : <?php
                         $sql = "select no_faktur from iatpenjualan where no_faktur='".$_SESSION['print']."'";
                        $query = mysqli_query($conn,$sql);
            
                        while($row = mysqli_fetch_array($query))
                        {    
                            echo $row['no_faktur'];
                        }
                         ?>
                         <br>
                        Date : <?php
                         $sql = "select tanggal from iatpenjualan where no_faktur='".$_SESSION['print']."'";
                        $query = mysqli_query($conn,$sql);
            
                        while($row = mysqli_fetch_array($query))
                        {    
                            $comp = preg_split('/ +/', $row['tanggal']);
                            $date=date_create($comp[0]);
                            echo date_format($date,"d/m/Y")." ";
                            $date1=date_create($comp[1]);
                            echo date_format($date1,"H:i a");
                        }
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

                                  $sql = "select * from iatpenjualan1 where no_faktur = '".$_SESSION["print"]."' order by no_item asc";
                                  $query = mysqli_query($conn,$sql);
                                  $no = 1;
                                  while ($row = mysqli_fetch_array($query)) {

                                    ?>
                                      <tr style="border:none;">
                                        <td class="no" style="border:none;padding-top:0;padding-bottom:0;"><?php echo str_replace('.0000',"",$row['NO_ITEM']); ?></td>
                                        <td class="nama" style="border:none;padding-top:0;padding-bottom:0;"><?php echo $row['NAMA_STOCK']."(".str_replace('.0000',"",$row['QTY']).")"; ?></td>
                                        <td class="harga" style="border:none;padding-top:0;padding-bottom:0;"><?php echo asDollars($row['QTY']*$row['HARGA_JUAL']); ?></td>
                                      </tr>

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
                        $q4 = "select * from iatpenjualan1 where no_faktur = '".$_SESSION["print"]."' order by no_item asc";
                        $s4 = mysqli_query($conn,$q4);
                        $total = 0;
                        $qty = 0;

                        while ($row = mysqli_fetch_array($s4)) {
                            $total +=$row["QTY"]*$row["HARGA_JUAL"];
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
                            $q4 = "select * from iatpenjualan1 where no_faktur='".$_SESSION["print"]."'";
                            $s4 = mysqli_query($conn,$q4);
                            $total = 0;
                            $qty = 0;

                            while ($row = mysqli_fetch_array($s4)) {
                                $total +=$row["QTY"]*$row["HARGA_JUAL"];
                                $qty += $row["QTY"];
                          ?>
                          <?php
                              }
                                $due = $total;
                              $changetotal = asDollars($total);
                              echo $changetotal;
                          ?>
                        </span></span><br>

                       
                        Cash
                        <span style="float:right;" id="payments"><?php
                            include "./config/connection.php";
                            $q4 = "select * from iappenjualan where no_faktur='".$_SESSION["print"]."'";
                            $s4 = mysqli_query($conn,$q4);
                            $qty = 0;
                            $morepay = 0;
                            while ($row = mysqli_fetch_array($s4)) {
                                echo asDollars($row['BAYAR']);
                                $morepay = $row['BAYAR'];
                                
                            }
            
                            
                          ?></span><br>
                        Amt Due
                        <span style="float:right;" id="return1"><?php
                            $due = $morepay-$due;
                            echo asDollars($due);
                            ?></span>
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
            </div>
        <?php
        }
        else
        {
            ?>
        
            <div class="col-md-4" style="margin:0 auto;margin-top : 30px;border : 4px solid orange; border-radius: 5px;">
             <div class="checkoutdata" id="printarea" style="text-align:center;background-color:white;">

                  <div class="menu-head" style="text-align:center;">
                     <img src="./images/logo.PNG" width="150" height="150">
                     <p style="font-size:10pt;">Let's Happy Bellying!<br>Frying now @ Brastagi Tiara<br>Operation Hours(Daily):<br>10:00 a.m - 10:00 p.m</p>
                      <hr style="border-top: dashed 2px;margin:0;">
                      <hr style="border-top: dashed 2px;margin-top:5px;">
                     <p style="text-align:left;">
                        Order No : <?php
                         $sql = "select no_faktur from iatpenjualan where no_faktur='".$_SESSION['print']."'";
                        $query = mysqli_query($conn,$sql);
            
                        while($row = mysqli_fetch_array($query))
                        {    
                            echo $row['no_faktur'];
                        }
                         ?>
                         <br>
                        Date : <?php
                         $sql = "select tanggal from iatpenjualan where no_faktur='".$_SESSION['print']."'";
                        $query = mysqli_query($conn,$sql);
            
                        while($row = mysqli_fetch_array($query))
                        {    
                            $comp = preg_split('/ +/', $row['tanggal']);
                            $date=date_create($comp[0]);
                            echo date_format($date,"d/m/Y")." ";
                            $date1=date_create($comp[1]);
                            echo date_format($date1,"H:i a");
                        }
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

                                  $sql = "select * from iatpenjualan1 where no_faktur = '".$_SESSION["print"]."' order by no_item asc";
                                  $query = mysqli_query($conn,$sql);
                                  $no = 1;
                                  while ($row = mysqli_fetch_array($query)) {

                                    ?>
                                      <tr style="border:none;">
                                        <td class="no" style="border:none;padding-top:0;padding-bottom:0;"><?php echo str_replace('.0000',"",$row['NO_ITEM']); ?></td>
                                        <td class="nama" style="border:none;padding-top:0;padding-bottom:0;"><?php echo $row['NAMA_STOCK']."(".str_replace('.0000',"",$row['QTY']).")"; ?></td>
                                        <td class="harga" style="border:none;padding-top:0;padding-bottom:0;"><?php echo asDollars($row['QTY']*$row['HARGA_JUAL']); ?></td>
                                      </tr>

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
                        $q4 = "select * from iatpenjualan1 where no_faktur = '".$_SESSION["print"]."' order by no_item asc";
                        $s4 = mysqli_query($conn,$q4);
                        $total = 0;
                        $qty = 0;

                        while ($row = mysqli_fetch_array($s4)) {
                            $total +=$row["QTY"]*$row["HARGA_JUAL"];
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
                            $q4 = "select * from iatpenjualan1 where no_faktur='".$_SESSION["print"]."'";
                            $s4 = mysqli_query($conn,$q4);
                            $total = 0;
                            $qty = 0;

                            while ($row = mysqli_fetch_array($s4)) {
                                $total +=$row["QTY"]*$row["HARGA_JUAL"];
                                $qty += $row["QTY"];
                          ?>
                          <?php
                              }
                                $due = $total;
                              $changetotal = asDollars($total);
                              echo $changetotal;
                          ?>
                        </span></span><br>

                       
                        Cash
                        <span style="float:right;" id="payments"><?php
                            include "./config/connection.php";
                            $q4 = "select * from iappenjualan where no_faktur='".$_SESSION["print"]."'";
                            $s4 = mysqli_query($conn,$q4);
                            $qty = 0;
                            $morepay = 0;
                            while ($row = mysqli_fetch_array($s4)) {
                                echo asDollars($row['BAYAR']);
                                $morepay = $row['BAYAR'];
                                
                            }
            
                            
                          ?></span><br>
                        Amt Due
                        <span style="float:right;" id="return1"><?php
                            $due = $morepay-$due;
                            echo asDollars($due);
                            ?></span>
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
            </div>
        <?php
        }
        ?>

        
    </div>
    <div class="col-md-12" id="testdiv" style="text-align:center;padding:0;">
        <?php
            //if($total==0){
            //    echo "<button class='btn btn-primary' id='btnss' style='margin-top:20px;width: 300px;' disabled>Print</button>";
           // }else{
           //     echo "<button class='btn btn-primary' id='btnss' style='margin-top:20px;width: 300px;' onclick='printDiv()' >Print</button>";
            //}
        ?>
        
    </div>
    
    
        <form method="post" accept-charset="utf-8" name="form1">
            <input name="hidden_data" id='hidden_data' type="hidden"/>
        </form>
    
</body>
<script src="js/jquery.print.min.js"></script>
<script src="js/canvas2image.js"></script>
<script src="js/html2canvas.min.js"></script>
<script src="https://superal.github.io/canvas2image/canvas2image.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script>
Number.prototype.format = function(n, x) {
var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
};
function pay(){
        var total = parseFloat(document.getElementById("total").value);
        var payment =parseFloat(document.getElementById("payment").value);
        var sisa = 0 ;
        if(total>payment){
            alert("Jumlah Payment Kurang");
        }
        else{
            sisa = payment-total;
            document.getElementById("return").value = sisa;
            document.getElementById("payments").innerHTML= 'Rp.'+payment.format(2);
            document.getElementById("return1").innerHTML = 'Rp.'+sisa.format(2);
            
            $("#printarea").print({
        	globalStyles: true,
        	mediaPrint: true,
        	stylesheet: null,
        	noPrintSelector: ".no-print",
        	iframe: true,
        	append: null,
        	prepend: null,
        	manuallyCopyFormValues: true,
        	deferred: $.Deferred(),
        	timeout: 750,
        	title: null,
        	doctype: '<!doctype html>'
	       });
    
        
        }

    }
    
    
    function printDiv(divName) {
        var data = document.getElementById("payments").value;
        

        html2canvas($("#printarea"), {
            onrendered: function(canvas) {
               document.body.appendChild(canvas);
             // return Canvas2Image.saveAsJPEG(canvas);
               uploadEx();

            }
            });
        }
        
    
    
function uploadEx() {
    var canvas = document.querySelector("canvas");
    var dataURL = canvas.toDataURL("image/png");
    document.getElementById('hidden_data').value = dataURL;
    var fd = new FormData(document.forms["form1"]);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', './action/uploadimg.php', true);

    xhr.upload.onprogress = function(e) {
        if (e.lengthComputable) {
            var percentComplete = (e.loaded / e.total) * 100;
            console.log(percentComplete + '% uploaded');
            alert('Succesfully uploaded');
        }
    };

    xhr.onload = function() {

    };
    xhr.send(fd);
    document.body.removeChild(canvas);
};
</script>

</html>

                
                
                           
                      