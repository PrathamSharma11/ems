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
            <h1 class="m-0">Employee Leave</h1>
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
                  include "../admin/dbcon.php";
                  $data  = "select * from assignleave where assign_to = '".$_SESSION['eid']."'";
                  $result = mysqli_query($con,$data);
                  $a = mysqli_fetch_array($result);
                  while ($a = mysqli_fetch_array($result)) {
                     // code...
                    


                  ?>
                  <tr>
                    <td><?php echo $_SESSION['n'] ?></td>
                    <td><?php echo $a['assign_by'] ?></td>
                    <td><?php echo $a['valid_from'] ?></td>
                    <td><?php echo $a['valid_to'] ?></td>
                    <td><?php echo $a['paid_leave'] ?></td>
                    <td><?php echo $a['medical_leave'] ?></td>
                    <td><?php echo $a['casual_leave'] ?></td>
                    <td><?php echo $a['created_at'] ?></td>
                  </tr>
                  <?php  }  ?>
                </table>

              </div>
              <!-- /.card-body -->
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-6">
      <div class="card" style="background-color: #d9d9d9;">
        <div class="card-body">
      <form method="post" action="applyleaveinsert.php">    
      <h2 class="text-primary">Apply Leave</h2>
      <input type="hidden" name="applyby" value="<?php echo $_SESSION['eid'];   ?>">
     <div class="mb-3">
      <label>Leave From</label>
      <input type="date" name="validfrom" class="form-control">
       
     </div>
     <div class="mb-3">
      <label>Leave To</label>
      <input type="date" name="validto" class="form-control">
       
     </div>
     <div class="mb-3">
      <label>Paid Leave</label>
      <input type="text" name="paidleave" class="form-control">
       
     </div>
     <div class="mb-3">
      <label>Medical Leave</label>
      <input type="text" name="medicalleave" class="form-control">
       
     </div>
     <div class="mb-3">
      <label>Casual Leave</label>
      <input type="text" name="casualleave" class="form-control">
       
     </div>

     <a href=""><button class="btn btn-info">Submit Leave</button></a>
   </form>
     </div><!-------div card body ends---->
   </div><!--------div card ends-------->
    </div><!-------div colmd ends--------->
    
  </div>

</div>
 <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <tr>
                    <h2 class="text-center">Leave Applied By You</h2>
                  </tr>
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
                  include "../admin/dbcon.php";
                  $data  = "select * from apply_leave where apply_by = '".$_SESSION['eid']."'";
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
                    <td><?php echo $a['apply_by'] ?></td>
                    <td><button class=" btn btn-danger"><?php echo $a['status'] ?></button></td>
                    <td>comment</td>

                    <td><?php echo $a['created_at'] ?></td>
                  </tr>
                  <?php  }  ?>
                </table>

              </div>
              <!-- /.card-body -->
        
      </div>
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.php"; ?>