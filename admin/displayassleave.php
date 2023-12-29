<?php
include "../session.php";
include "header.php";
include "sidebar.php";

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All Assigned Leave</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-----------table content starts------------->
 <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <tr>
                    <th>Assigned To</th>
                    <th>Assigned By</th>
                    <th>Valid From</th>
                    <th>Valid To</th>
                    <th>Paid Leave</th>
                    <th>Medical Leave</th>
                    <th>Casual Leave</th>
                    
                    
                    <th>Created At</th>
                  </tr>
                  <?php
                  include "dbcon.php";
                  $data  = "select * from employee join assignleave on employee.eid = assignleave.assign_to order by l_id";
                  $result = mysqli_query($con,$data);
                  $a = mysqli_fetch_array($result);
                  while ($a = mysqli_fetch_array($result)) {
                     // code...
                    


                  ?>
                  <tr>
                    <td><?php echo $a['name'] ?></td>
                    <td><?php echo $_SESSION['n'] ?></td>
                    <td><?php echo $a['valid_from'] ?></td>
                    <td><?php echo $a['valid_to'] ?></td>
                    <td><?php echo $a['paid_leave'] ?></td>
                    <td><?php echo $a['medical_leave'] ?></td>
                    <td><?php echo $a['casual_leave'] ?></td>
                    <td><?php echo $a['created_at'] ?></td>
                  </tr>
                <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<!-----------table content ends------->
 
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.php"; ?>