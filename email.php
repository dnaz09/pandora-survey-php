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
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
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
    </ul>

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
        <li class="nav-item">
            <a class="nav-link" href="customers.php">
            <i class="fas fa-fw fa-user"></i> 
                <span>Customers</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="email.php">
            <i class="fas fa-fw fa-envelope"></i> 
                <span>Emails</span>
            </a>
        </li>  
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Page Content -->
        <div class="container">
            <div class="card mb-5">
                <div class="card-header">
                    <i class="fa fa-envelope"></i> Email
                </div>
                <form>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="text" name="email_subject" class="form-control" placeholder="Subject">
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea cols="10" rows="10" name="email_body" class="form-control" placeholder="Body" style="resize:none;"></textarea>
                            </div>    
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <?php 
                            require_once 'api/database/config.php';

                            $sql = $conn->query("SELECT * FROM email");

                            if ($sql->num_rows === 0) {

                                echo "<button type='submit' class='btn btn-success' name='add'>
                                        <i class='fa fa-check'></i> Add
                                    </button>";
                            }
                            else {
                                echo "<button type='submit' class='btn btn-success' name='update'>
                                        <i class='fa fa-edit'></i> Update
                                    </button>";
                            }
                        ?>
                        
                    </div>
                </form>
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

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
