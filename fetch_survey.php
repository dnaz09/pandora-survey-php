<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pandora Survey</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Pandora Survey</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <!-- <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul> -->

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-poll"></i>
          <span>Reports</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="#">Purchase/Points</a>
          <a class="dropdown-item" href="#">Item Ranking</a>
          <a class="dropdown-item" href="#">Product Analysis</a>
          <a class="dropdown-item" href="#">Per Category</a>
          <a class="dropdown-item" href="#">Per Transaction</a>
          <a class="dropdown-item" href="#">Sales Per Member Type</a>
          <a class="dropdown-item" href="#">Zero Points</a>
          <a class="dropdown-item" href="#">Birthday</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Per Cashier List</a>
          <a class="dropdown-item" href="#">Expiration</a>
          <a class="dropdown-item" href="#">Last Visit</a>
          <a class="dropdown-item" href="#">Member List</a>
          <a class="dropdown-item" href="#">Redemption Item List</a>
          <a class="dropdown-item" href="#">Stock Inventory</a>
          <a class="dropdown-item" href="#">Point Verification</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Barcode Printing</a>
          <a class="dropdown-item" href="#">Member Analysis</a>
          <a class="dropdown-item" href="#">Delivery Receipt Register</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="customers.php">
          <i class="fas fa-fw fa-user"></i> 
            <span>Customers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="email.php">
          <i class="fas fa-fw fa-envelope"></i> 
            <span>Emails</span>
        </a>
      </li>  
    </ul>

    <div id="content-wrapper">

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="customers.php">Back To Customers</a></li>
                <li class="breadcrumb-item active" aria-current="page">Survey Results</li>
            </ol>
        </nav>
    
        <div class="card">
            <div class="card-header bg-dark text-white font-weight-bold">Survey Results</div>
                <div class="card-body">
                    <div class="row">
                <?php
                    require_once 'api/database/config.php';

                    $id = $_GET['id'];

                    $sql = "SELECT * FROM survey_collections WHERE cust_id = '$id';";
                    $sql .= "SELECT * FROM survey_gifts WHERE cust_id = '$id';";
                    $sql .= "SELECT * FROM survey_products WHERE cust_id = '$id';";
                    $sql .= "SELECT * FROM survey_socials WHERE cust_id = '$id'";

                    
                    // Execute multi query
                    if ($conn->multi_query($sql))
                    {
                        if ($result = $conn->store_result()) {
                            // Fetch one and one row
                            while ($row = $result->fetch_row())
                            {
                        ?>
                                <div class='col-md-6 mb-3'>
                                    <div class='card'>
                                        <div class='card-header bg-success text-white'>Collections</div>
                                        <div class='card-body'>
                                            <ul class='list-group'>
                                                <li class='list-group-item'>
                                                    <b>Newspaper</b>
                                                    <?php 
                                                    if ($row[1] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Magazine</b>
                                                    <?php 
                                                    if ($row[2] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Social Media</b>
                                                    <?php 
                                                    if ($row[3] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Billboard</b>
                                                    <?php 
                                                    if ($row[4] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Friend/Family</b>
                                                    <?php 
                                                    if ($row[5] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Store Visit</b>
                                                    <?php 
                                                    if ($row[6] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                            $result->free();
                        }

                        if ($conn->next_result()) {
                            $result = $conn->store_result();
                            while ($row = $result->fetch_row()) {
                        ?>
                                <div class='col-md-6'>
                                    <div class='card'>
                                        <div class='card-header bg-warning text-white'>Gifts</div>
                                        <div class='card-body'>
                                            <ul class='list-group'>
                                                <li class='list-group-item'>
                                                    <b>Gifts</b>
                                                    <?php 
                                                    if ($row[1] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }

                        if ($conn->next_result()) {
                            $result = $conn->store_result();
                            while ($row = $result->fetch_row()) {
                            
                        ?>
                                <div class='col-md-6'>
                                    <div class='card'>
                                        <div class='card-header bg-danger text-white'>Products</div>
                                        <div class='card-body'>
                                            <ul class='list-group'>
                                                <li class='list-group-item'>
                                                    <b>Bracelet</b>
                                                    <?php 
                                                    if ($row[1] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Charm</b>
                                                    <?php 
                                                    if ($row[2] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Necklace</b>
                                                    <?php 
                                                    if ($row[3] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Ring</b>
                                                    <?php 
                                                    if ($row[4] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Earrings</b>
                                                    <?php 
                                                    if ($row[5] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        
                        if ($conn->next_result()) {
                            $result = $conn->store_result();
                            while ($row = $result->fetch_row()) {
                        ?>
                                <div class='col-md-6'>
                                    <div class='card'>
                                        <div class='card-header bg-primary text-white'>Socials</div>
                                        <div class='card-body'>
                                            <ul class='list-group'>
                                                <li class='list-group-item'>
                                                    <b>Facebook</b>
                                                    <?php 
                                                    if ($row[1] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Instagram</b>
                                                    <?php 
                                                    if ($row[2] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Twitter</b>
                                                    <?php 
                                                    if ($row[3] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Snapchat</b>
                                                    <?php 
                                                    if ($row[4] == 'true') {
                                                        echo "<span class='badge badge-success'><i class='fa fa-check'></i></span>";
                                                    }
                                                    else {
                                                        echo "<span class='badge badge-danger'><i class='fa fa-times'></i></span>";
                                                    }
                                                    ?>
                                                </li>
                                                <li class='list-group-item'>
                                                    <b>Others:</b>
                                                    <?php echo $row[5]; ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                    }

                    else {
                        echo "No results found";
                    }

                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Pandora Survey 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  
  <!-- Custom select js -->
  <script src="js/select-customer.js"></script>

</body>

</html>
