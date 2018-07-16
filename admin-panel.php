<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>.:Admin Panel:.</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
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
<!--
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
                  }
                  ?>
                <a class="dropdown-item" href="./action/logout.php">Logout</a>
              </div>

            </div>
-->
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center><h3>Panel</h3></center>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                       <caption>Iat Penjualan</caption>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nama item</th>
                                <th>quantity</th>
                                <th>price</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Buyer</th>
                                <th>Nama item</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <caption>Table Report</caption>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>