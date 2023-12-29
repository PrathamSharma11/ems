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
            <h1 class="m-0"> Assign Leave</h1>
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
 <br><br><br>
 <div class="container-fluid">
<form method="post" action="assignleaveinsert.php">
  <div class="row">
    <div class="col-md-6">
      <div class="card" style="background-color: #d9d9d9;padding: 50px;">
        <div class="card-body">
     <h2>Employees</h2>

     <?php
     $aeid = $_SESSION['assigned_by'];
     include "dbcon.php";
     $data = "select * from employee where role = 'employee' order by eid desc";
     $result = mysqli_query($con,$data);
     $a = mysqli_fetch_array($result);
     while ($a = mysqli_fetch_array($result)) {
        // code...
      


     ?> 
     <input type="checkbox" name="eid[]" value="<?php echo $a['eid'];      ?>"><?php echo $a['name'];?><br>
   <?php  } ?>
   <input type="hidden" name="assigned_by" value="<?php echo $aeid;    ?>">
 </div><!--------div card body ends------>
</div><!---------div card  ends------->
    </div><!-------div colmd ends------>
    <div class="col-md-6">
      <div class="card" style="background-color: #d9d9d9;">
        <div class="card-body">
      <h2>Assign Leave</h2>
     <div class="mb-3">
      <label>Valid From</label>
      <input type="date" name="validfrom" class="form-control">
       
     </div>
     <div class="mb-3">
      <label>Valid To</label>
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
     </div><!-------div card body ends---->
   </div><!--------div card ends-------->
    </div><!-------div colmd ends--------->
    
  </div>
</form>
</div>
   
 </div>
  </div>
  <!-- /.content-wrapper -->



  


<?php include "footer.php"; ?>
