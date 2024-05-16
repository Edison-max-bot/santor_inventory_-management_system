<?php
include '../Actions/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventory System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bar Code library -->
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
   
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> 
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/123.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Santor Inventory</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Marissa G. Carbaruan</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Library Files
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="unit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Units</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="suppliers.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suppliers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="items.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inventory</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="security.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Security</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employees.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employees</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Transactions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="stockin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stockin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="issuance.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Issuance</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="UserRequest.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request</p>
                </a>
              </li>
            <!--   <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Discard</p>
                </a>
              </li> -->
            </ul>
            
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="reportStockin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stockin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="reportIssuance.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Issuance</p>
                </a>
              </li>
            </ul>
               <li class="nav-item">
                <a href="../../index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>


              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inventory</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                 <button type="button" id="add" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Issue  Item
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Item Name</th>
                    <th>Item Description</th>
                    <th>Category</th>
                    <th>Unit</th> 
                    <th>BarCode</th>
                    <th>Price</th>
                      
                    <th width="200">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
              
                    <?php
                     $q = mysqli_query($con, "SELECT items.iid, items.barcode, items.itemdesc, items.nameitem, category.categorydesc, unit.unitdesc, items.qty, items.price FROM items INNER JOIN category ON items.cid = category.cid INNER JOIN unit ON items.uid = unit.uid");

                      while ($rows=mysqli_fetch_array($q)) {
                    ?>
                   <tr>
                   
    <td><?php echo $rows[3]; ?></td> <!-- Item Name -->
    <td><?php echo $rows[2]; ?></td> <!-- Item Description -->
    <td><?php echo $rows[4]; ?></td> <!-- Category Description -->
    <td><?php echo $rows[5]; ?></td> <!-- Unit Description -->
    <td>
    <?php
        $barcodeImageUrl = 'generateBarcode.php?item_id=' . $rows[0];
        echo '<img src="' . $barcodeImageUrl . '" alt="Barcode">';
    ?>
</td>






    <td><?php echo $rows[7]; ?></td> <!-- Price -->
                         
                             
                       <td>
                        <button class="btn btn-success edit" value="<?php echo $rows[0]; ?>">Edit</button>
                        <button class="btn btn-danger delete" value="<?php echo $rows[0]; ?>">Delete</button>
                      </td>
                  </tr>
               
                    <?php
                      }
                    ?>
                  
                  
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
        
            <div class="modal-header">
              <h4 class="modal-title">Issue Item</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="frm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Item Name</label>
                    <input type="text" class="form-control" id="nameitem" name="nameitem">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Item Description</label>
                    <input type="text" class="form-control" id="item" name="item">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select class="custom-select rounded-0" id="selcat" name="selcat">    
                      <?php 
                      $qCat=mysqli_query($con,"SELECT * FROM category");
                      while($rowsCat=mysqli_fetch_array($qCat)){
                      ?>
                      <option value="<?php echo $rowsCat[1]; ?>"><?php echo $rowsCat[1]; ?></option> 
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Unit</label>
                    <select class="custom-select rounded-0" id="selunit" name="selunit">
                       <?php 
                      $qUnit=mysqli_query($con,"SELECT * FROM unit");
                      while($rowsUnit=mysqli_fetch_array($qUnit)){
                      ?>
                      <option value="<?php echo $rowsUnit[1]; ?>"><?php echo $rowsUnit[1]; ?></option> 
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" class="form-control" id="qty" name="qty">
                  </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" name="p_id" id="p_id">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" name="save"id="save">Save changes</button>
            </div>
             </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
<script>
  $(document).ready(function(){
        $("#add").click(function(e){
            e.preventDefault();
            $("#frm")[0].reset();       
        });

      
        $("#save").click(function(e){
          e.preventDefault();
          var formData = $("#frm").serialize();

          $.ajax({
            url: '../Actions/Items/AddItems.php',
            type: 'POST',
            data : formData,
            success: function(response){
                location.reload();
            },
            error: function(error){
            console.log(error)
            }
          });
        });

        $(".delete").click(function(e){
          e.preventDefault();

          var cid=$(this).val();
               
          if(confirm('Are you sure you want to delete this data?'))
            {
               $.ajax({
                    type: "POST",
                    url: '../Actions/Items/delItems.php',
                    data: {
                        'cid': cid
                    },
                    success: function (response) {
                       location.reload(); 
                    }
                  });
            }
        });

        $(".edit").click(function(e){
            e.preventDefault();
            var cid=$(this).val();
          
            $.ajax({
                    type: "POST",
                    url: '../Actions/Items/fetchItems.php',
                    data: {
                        'cid': cid
                    },
                    dataType: 'json',
                    success: function (response) {
                      $("#barcode").val(response.barcode);
$("#nameitem").val(response.nameitem); // Update to handle the 'nameitem' field
$("#item").val(response.itemdesc);
$("#selcat").val(response.categorydesc);
$("#selunit").val(response.unitdesc);
$("#qty").val(response.qty);
$("#price").val(response.qty);
$("#p_id").val(response.iid);
$('#modal-default').modal('show');

                    }
                  });
          
        });

  });


  
</script>
