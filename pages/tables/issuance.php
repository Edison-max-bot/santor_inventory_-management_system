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

<style>  
            #uSL
            {  
                background-color:#eee;  
                cursor:pointer;  
            }  
            #iSL
            {  
                padding:12px;  
            }
        </style> 
 
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
      <!-- Navbar Search -->
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
      <img src="../../dist/img/123.png" alt="santor logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                  <p>Items</p>
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
            <h1>Issue Items</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
    // Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch suppliers
$sql = "SELECT Fullname FROM employees";
$result = $conn->query($sql);

?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        
             <div class="card-body">
                <form id="Stock">
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Transaction Code</label>
                        <input type="text" class="form-control" name="code" id="code" placeholder="Enter Transaction Code" required>
                      </div>
                    </div>
                    <div class="col-sm-4">
                <!-- Dropdown for suppliers -->
                <div class="form-group">
                    <label>Select Supplier</label>
                    <select class="form-control" onchange="location = this.value;">
                        <option selected disabled>Select Suppliers</option>
                        <?php
                        // Check if there are results
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="#">' . $row["Fullname"] . '</option>';
                            }
                        } else {
                            echo '<option disabled>No Employees found</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" name="date" id="date" placeholder="Enter Date" required>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

          <div class="col-12">
            <!-- /.card -->                 
            <div class="card">
              <div class="card-header">
                <button type="button" id="add" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                  Add Item
                </button>

                <button type="button" id="saveall" class="btn btn-danger">
                  Issue Items
                </button>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Items</th>
                    <th>Units</th>
                    <th>Quantity</th>
                    <th width="300">Actions</th>
                 
                  </tr>
                  </thead>
                  <tbody>
<?php
// Assuming $conn is your database connection object

// Set a threshold for low stock items
$lowStockThreshold = 10;

// Fetch items from the items table that are low in quantity
$q = mysqli_query($conn, "SELECT * FROM items WHERE qty < $lowStockThreshold");
while ($rows = mysqli_fetch_array($q)) {
    // Display the table row for low stock items
    echo '<tr class="low-stock">';
    echo '<td>' . $rows['itemDesc'] . '</td>'; // Assuming 'itemDesc' is the column for item description
    echo '<td>' . $rows['cid'] . '</td>'; // Assuming 'cid' is the column for category ID
    echo '<td>' . $rows['qty'] . '</td>'; // Assuming 'qty' is the column for quantity
    echo '</tr>';

    // Display a warning message for each low stock item
   echo '<script>';
echo 'document.addEventListener("DOMContentLoaded", function() {';
echo 'const cardBox = document.getElementById("lowStockCardBox");';
echo 'const alertDiv = document.createElement("div");';
echo 'alertDiv.classList.add("alert", "alert-warning", "alert-dismissible");';
echo 'alertDiv.style.backgroundColor = "white";';
echo 'alertDiv.style.border = "1px solid red";';
echo 'alertDiv.style.fontSize = "12px";'; // Adjust the font size as needed
echo 'alertDiv.innerHTML = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>" + "Low stock alert: ' . $rows['itemDesc'] . ' quantity is below ' . $lowStockThreshold . '";';
echo 'cardBox.appendChild(alertDiv);';
echo '});';
echo '</script>';


}
?>
<!-- Low Stock Alerts -->
<div class="card card-info" style="width: 30%;">
    <div class="card-header">
        <h3 class="card-title">Low Stock Alerts</h3>
    </div>
    <div class="card-body" id="lowStockCardBox">
        <!-- Alert messages will be displayed here -->
    </div>
</div>
<!-- /.card -->



                  <!-- <tfoot>
                  <tr>
                     <th>Items</th>
                    <th>Units</th>
                    <th>Quantity</th>
                    <th width="300">Actions</th>
                  </tr>
                  </tfoot> -->
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
<!-- modal -->
     <div class="modal fade" id="modal-xl">
        <div class="modal-dialog  modal-xl">
          <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">Add Items</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container"> 
                  <div class="row">
                      <div class="col-sm-6">
                  <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Items</th>
                    <th>Units</th>
                    <th>Quantity</th>
                    
                    <th width="50">Actions</th>
                 
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                   $q = mysqli_query($con,"SELECT  * from vitems");

                    while ($rows=mysqli_fetch_array($q)) {
                  ?>
                    <tr>  
                        <td><?php echo  $rows[1]; ?></td>
                         <td><?php echo  $rows[3]; ?></td>
                         <td><?php echo  $rows[4]; ?></td>
                         <td> 
                          <button class="btn btn-warning select" value="<?php echo $rows[0]; ?>" >Select</button>
                         </td>
                    </tr>
                  <?php
                    }
                  ?>
                  </tbody>
                   <tfoot>
                  <tr>
                    <th>Items</th>
                    <th>Units</th>
                    
                    <th width="50">Actions</th>
                  </tr>
                  </tfoot>
                </table>



                      </div>
                    

                      <div class="col-sm-6">
                <form id="frm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Item</label>
                    <input type="text" class="form-control" name="item" id="item" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Unit</label>
                    <input type="text" class="form-control" id="unit" name="unit" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" class="form-control" id="Quantity" name="Quantity">
                  </div>
                     <div class="form-group">
                  <button type="button" class="btn btn-primary" id="save">Add</button>
                  </div>
                </div> 
                      </form>


                      </div>
                          
                  </div>
              </div>

               </div>
              </div>
             
            </div>
        
             
          </div>
          <!-- /.modal-content -->
        </div>
     <!-- /.modal-dialog -->
     </div>
    
<!-- modal -->



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

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $(function () {
    $("#example3").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
    $('#example4').DataTable({
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

      var randomNumber = Math.floor(Math.random() * 90000) + 10000;

      $("#code").val("IssueNo-" + randomNumber);
     
      $("#stockin").click(function(){
        $.ajax({
           type: "POST",
           url: "../Actions/TempStockIn/delete.php",
           success: function(data) {     }
        });
      });
       
     $("#employee").keyup(function() {
           $.ajax({
           type: "POST",
           url: "../Actions/ajax-employee-search.php",
           data: 'keyword=' + $(this).val(),
           success: function(data) {
              $("#suggesstion-box").fadeIn();
              $("#suggesstion-box").html(data);
      }
      });
      });

      $(document).on("click","#iSL", function(){  
         $("#employee").val($("#iSL").html());
         $("#suggesstion-box").fadeOut();
     });


      $("#add").click(function(e){
          e.preventDefault();
            $("#frm")[0].reset();
            $("#cat").val("");
            $("#p_id").val("");
            
      });

      
        $("#save").click(function(e){
          e.preventDefault();
          var formData = $("#frm").serialize();

          $.ajax({
            url: '../Actions/TempIssue/AddTempItem.php',
            type: 'POST',
            data : formData,
            success: function(response){
                  // alert(response);
                  if(response=='Wala'){
                      alert("Particular Item is Not found with specific Unit of Measurement.");
                  }
                  else if(response=='Meron'){
                      alert("Item has been added, Please Select Another.");
                  }
                  else{
                      location.reload();
                  }
               
                
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
                    url: '../Actions/TempIssue/delItem.php',
                    data: {
                        'cid': cid
                    },
                    success: function (response) {
                       location.reload(); 
                    }
                  });
            }
        });

         $(".select").click(function(e){
          e.preventDefault();

          var cid=$(this).val();
       
               $.ajax({
                    type: "POST",
                    url: '../Actions/TempIssue/selItem.php',
                    data: {
                        'cid': cid
                    },
                    dataType:'json',
                    success: function (response) {
                     
                        $("#item").val(response.itemDesc);
                        $("#unit").val(response.unitDesc);
                    }
                  });
            
        });





        $(".increase").click(function(e){
          e.preventDefault();
          
          var cid=$(this).val();
               $.ajax({
                    type: "POST",
                    url: '../Actions/TempIssue/increase.php',
                    data: {
                        'cid': cid
                    },
                    success: function (response) {
                       location.reload(); 
                    }
                  });
        });


        $(".decrease").click(function(e){
          e.preventDefault();
          
           var cid=$(this).val();
               $.ajax({
                    type: "POST",
                    url: '../Actions/TempIssue/decrease.php',
                    data: {
                        'cid': cid
                    },
                    success: function (response) {
                       location.reload(); 
                    }
                  });
        });


          
        $("#saveall").click(function(e){
          e.preventDefault();
            
              var formStock = $("#Stock").serialize();
               $.ajax({
                    type: "POST",
                    url: '../Actions/TempIssue/stocks.php',
                    data: formStock,
                    success: function (response) {
                     alert(response);
                     alert("Data has been Saved!");
                     location.reload(); 
                     
                    }
                  });
             
        });

  });
</script>