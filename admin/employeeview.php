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
            <h1 class="m-0">Employee Details</h1>
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


<!-------------table code starts------------------->
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Employee Display</h3>
                <button class="btn btn-info" style="float: right;"data-toggle="modal" data-target="#modal-default">Add employee</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Department</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <?php
                  include "dbcon.php";
                  
                  $eid = $_GET['eid'];
                  $data = "select * from employee where eid= '$eid'";
                  $result = mysqli_query($con,$data);
                  $a = mysqli_fetch_array($result);
                  

                  



                  ?>





                  <tbody>
                  <td><?php echo $a['eid']     ?></td>
                  <td><?php echo $a['name']   ?></td>
                  <td><?php echo $a['email']   ?></td>
                  <td><?php echo $a['password']   ?></td>
                  <td><?php echo $a['age']   ?></td>
                  <td><?php echo $a['phone']   ?></td>
                  <td><?php echo $a['gender']   ?></td>
                  <td><?php echo $a['department']   ?></td>
                  <td><?php echo $a['role']   ?></td>
                  <td>
                    
                    <a href="addemployee.php" class="btn btn-danger">BACK</a>
                    
                  </td>
                  </tbody>
                  
                  <tfoot>
                  <tr>
                      
                    <th>S.No.</th>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Department</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<!--------------table code ends---->

<?php include "footer.php";   ?>


