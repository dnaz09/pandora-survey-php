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

        <!-- Breadcrumbs-->
        <ol class="breadcrumb text-center">
          <div class="col-md-3">
            <!-- <select class="form-control branch" id="multi_search_filter" multiple="multiple"> -->
            <select id="first_level" name="first_level[]" multiple class="form-control branch">
              <optgroup label="BRANCHES">
                  <?php
                      //index.php

                      include('api/database/PDO_config.php');

                      $query = "
                      SELECT * FROM company_branches 
                      ORDER BY branch ASC
                      ";

                      $statement = $connect->prepare($query);

                      $statement->execute();

                      $result = $statement->fetchAll();

                      foreach($result as $row) {
                        echo '<option value="'.$row["branch"].'">'.$row["branch"].'</option>';
                      }
                  ?>
              </optgroup>
              <input type="hidden" name="hidden_branch" id="hidden_branch">
            </select>
        </div>
         
          <!-- <div class="col-md-3">
            <select id="second_level" name="second_level[]" multiple class="form-control branch">
              <optgroup label="ADS">
                  <?php
                      $query = "
                      SELECT * FROM ads 
                      ORDER BY id ASC
                      ";

                      $statement = $connect->prepare($query);

                      $statement->execute();

                      $result = $statement->fetchAll();

                      foreach($result as $row) {
                        echo '<option value="'.$row["id"].'">'.$row["category"].'</option>';
                      }
                  ?>
              </optgroup>
              <input type="hidden" name="hidden_ads" id="hidden_ads">
            </select>
          </div>

          <div class="col-md-3">
            <select id="third_level" name="third_level[]" multiple class="form-control branch">
              <optgroup label="Products">
                <?php
                      $query = "
                      SELECT * FROM products 
                      ORDER BY id ASC
                      ";

                      $statement = $connect->prepare($query);

                      $statement->execute();

                      $result = $statement->fetchAll();

                      foreach($result as $row) {
                        echo '<option value="'.$row["id"].'">'.$row["category"].'</option>';
                      }
                ?>
              </optgroup>
            </select>  
          </div>

          <div class="col-md-3">
            <select id="fourth_level" name="fourth_level[]" multiple class="form-control branch">
              <optgroup label="Social Media">
                <?php
                      $query = "
                      SELECT * FROM social_media 
                      ORDER BY id ASC
                      ";

                      $statement = $connect->prepare($query);

                      $statement->execute();

                      $result = $statement->fetchAll();

                      foreach($result as $row) {
                        echo '<option value="'.$row["id"].'">'.$row["category"].'</option>';
                      }
                ?>
              </optgroup>
            </select>
          </div> -->
          
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header bg-dark text-white font-weight-bold">
            <i class="fas fa-table"></i>
            Customers</div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            </table>
              
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
  
  <!-- JQuery -->
  <script src="js/jquery.min.js"></script>
  
  <!-- jQuery multi select js -->
  <script src="js/fSelect.js"></script>
  
  <script>
    (function($) {
        $(function() {
            window.fs_test = $('.branch').fSelect();
        });
    })(jQuery);
  </script>

  <script>
    $(document).ready(function(){
      
      load_data();

      function load_data(query='')
      {
        $.ajax({
          url:"fetch.php",
          method:"POST",
          data:{query:query},
          success:function(data)
          {
            $('table').html(data);
          }
        });
      }

      $('#first_level').change(function(){
        $('#hidden_branch').val($('#first_level').val());
        var query = $('#hidden_branch').val();
        load_data(query);
      });
    });
  </script>  

</body>

</html>