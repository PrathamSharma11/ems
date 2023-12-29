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
            <h1 class="m-0">Your Replies</h1>
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
  
  <table class="table table-bordered table-striped">
    <tr>
      <td>Employee Messages</td>
      
      <td>Created At</td>
      <td>Employee Name</td>
    </tr>
    <?php
  include '../admin/dbcon.php';
  $data = "select * from taskreply where reply_by = '".$_SESSION['eid']."'";
  $result = mysqli_query($con,$data);
  $a = mysqli_fetch_array($result);
  while ($a = mysqli_fetch_array($result)) {
              // code...

                   








  ?>
    <tr>
      <th><?php  echo $a['reply'];   ?></th>
      
      <th><?php   echo $a['created_at']; ?></th>
      <th><?php    echo $_SESSION['n'];   ?></th>
    </tr>
  <?php  }  ?>
  </table>
  


 
  </div>
  <!-- /.content-wrapper -->



  


<?php include "footer.php"; ?>
