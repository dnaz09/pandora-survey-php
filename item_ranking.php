<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pandora CMS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  <!-- jQuery multi select css -->
  <link href="css/fSelect.css" rel="stylesheet">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

</head>

<body id="page-top">
  
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Pandora CMS</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

  </nav>

  <div id="wrapper">

    <?php include 'sidebar-nav.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">From:</span>
              </div>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">To:</span>
              </div>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Top:</span>
              </div>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"></span>
              </div>
              <select class="form-control">
                <option>ALL TYPE</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Ave. Purchase</span>
              </div>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">To:</span>
              </div>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Total:</span>
              </div>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"></span>
              </div>
              <select class="form-control">
                <option>ALL TYPE</option>
              </select>
            </div>
          </div>
        </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Last Sold</th>
                    <th>Barcode</th>
                    <th>Sku</th>
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
                    <td></td>
                </tr>
            </tbody>
        </table>
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

</body>

</html>