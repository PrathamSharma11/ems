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
            <h1 class="m-0">Add Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Employee</li>
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
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <?php
                  include "dbcon.php";
                  
                  $data = "select * from employee order by eid desc";
                  $result = mysqli_query($con,$data);
                  $a = mysqli_fetch_array($result);
                  while ($a = mysqli_fetch_array($result)) {
                    // code...

                  



                  ?>





                  <tbody>
                  <td><?php echo $a['eid']     ?></td>
                  <td><?php echo $a['name']   ?></td>
                  <td><?php echo $a['email']   ?></td>
                  <td><?php echo $a['role']   ?></td>
                  <td>
                    <a href="employeeview.php?eid=<?php echo $a['eid']?>" class="btn btn-info">view</a>
                    <a href="employeeedit.php?eid=<?php echo $a['eid']?>" class="btn btn-danger">edit</a>
                    <a href="employeedelete.php?eid=<?php echo $a['eid']?>" class="btn btn-primary">delete</a>
                  </td>
                  </tbody>
                  <?php }  ?>
                  <tfoot>
                  <tr>
                      
                    <th>S.No.</th>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


<!----------------table code ends--------------->
 
  </div>
  <!-- /.content-wrapper -->

<!---------modal box for add employee starts---------->
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form method="post" action="employeeinsert.php">
              
                 <div class="mb-3">
                   <label>Name</label>
                   <input type="text" name="name" class="form-control">
                 </div>

                 <div class="mb-3">
                   <label>Email</label>
                   <input type="text" name="email" class="form-control">
                 </div>

                 <div class="mb-3">
                   <label>Password</label>
                   <input type="password" name="password" class="form-control">
                 </div>
                 <div class="mb-3">
                   <label>Age</label>
                   <input type="number" name="age" class="form-control">
                 </div>
                 <div class="mb-3">
                   <label>Phone</label>
                   <input type="number" name="phone" class="form-control">
                 </div>
                 <div class="mb-3">
                   <label>Gender</label><br>
                   <input type="radio" name="gender"  value="male">Male<br>
                   <input type="radio" name="gender"  value="female">Female<br>
                   <input type="radio" name="gender"  value="other">Others<br>
                 </div>
                 <div class="mb-3">
                   <label>Department</label>
                   <select class="form-control" name="department">
                     <option>Select Department</option>
                     <option>IT</option>
                     <option>HR</option>
                     <option>Board Members</option>
                   </select>
                 </div>
                 <div class="mb-3">
                   <label>Role</label>
                   <select class="form-control" name="role">
                     <option>Select Role</option>
                     <option>Admin</option>
                     <option>Employee</option>
                     
                   </select>
                 </div>
                 <button class="btn btn-danger">SUBMIT</button>
             </form> 
            </div>
            <!------modal body end----->              
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

  
<!---------modal box for add employee ends---------->

<?php include "footer.php"; ?>
