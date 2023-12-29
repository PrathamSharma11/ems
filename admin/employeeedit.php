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
            <h1 class="m-0">Dashboard</h1>
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
    <?php
    include "dbcon.php";
    $eid = $_GET['eid'];
    $data = "select * from employee where eid='$eid'";
    $result = mysqli_query($con,$data);
    $a = mysqli_fetch_array($result); 



    ?>

<div class="modal-body">
             <form method="post" action="employeeupdate.php">
              
                 <div class="mb-3">
                 	<input type="hidden" name="eid" value="<?php echo $a['eid']?>">
                   <label>Name</label>
                   <input type="text" name="name" class="form-control" value="<?php echo $a['name'] ?>">
                 </div>

                 <div class="mb-3">
                   <label>Email</label>
                   <input type="text" name="email" class="form-control" value="<?php echo $a['email'] ?>">
                 </div>

                 <div class="mb-3">
                   <label>Password</label>
                   <input type="password" name="password" class="form-control" value="<?php echo $a['password'] ?>">
                 </div>
                 <div class="mb-3">
                   <label>Age</label>
                   <input type="number" name="age" class="form-control" value="<?php echo $a['age'] ?>">
                 </div>
                 <div class="mb-3">
                   <label>Phone</label>
                   <input type="number" name="phone" class="form-control" value="<?php echo $a['phone'] ?>">
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









<?php include "footer.php"; ?>