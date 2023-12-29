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
            <h1 class="m-0">Employee Requests For Leave</h1>
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
 <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <tr>
                    
                    <th>Leave From</th>
                    <th>Leave To</th>
                    <th>Paid Leave</th>
                    <th>Medical Leave</th>
                    <th>Casual Leave</th>
                    <th>Apply By</th>
                    <th>Status</th>
                    <th>Comment</th>
                    
                    <th>Created At</th>
                  </tr>
                  <?php
                  include "dbcon.php";
                  $data  = "select * from employee join apply_leave on employee.eid = apply_leave.apply_by order by a_id desc";
                  $result = mysqli_query($con,$data);
                  $a = mysqli_fetch_array($result);
                  while ($a = mysqli_fetch_array($result)) {
                     // code...
                    


                  ?>
                  <tr>
                    
                    <td><?php echo $a['leave_from'] ?></td>
                    <td><?php echo $a['leave_to'] ?></td>
                    <td><?php echo $a['paid_leave'] ?></td>
                    <td><?php echo $a['medical_leave'] ?></td>
                    <td><?php echo $a['casual_leave'] ?></td>
                    <td><?php echo $a['name'] ?></td>
                    <td><button class="btn btn-danger"><?php echo $a['status'] ?></button></td>
                    <td>
                      <form method="post" action="apprej.php">
                        <input type="hidden" name="id" value="<?php echo $a['a_id']; ?>">
                        <button type="submit" class="btn btn-info" name="approved">Approved</button>
                        <button type="submit" class="btn btn-info" name="reject">Reject</button>
                      </form>
                    </td>

                    <td><?php echo $a['created_at'] ?></td>
                  </tr>
                  <?php  }  ?>
                </table>

              </div>
              <!-- /.card-body -->
 
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.php"; ?>