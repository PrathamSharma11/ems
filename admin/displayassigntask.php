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
            <h1 class="m-0"></h1>
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
   <h1 style="margin-left: 20px;">Assigned Tasks</h1>
   
   <div class="container">
     <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <tr>
            <th>Employee Id</th>
            <th>Employee Name</th>
            <th>Task</th>
            <th>Assigned By Id</th>
            <th>Assigned Date</th>
            
          </tr>
          <?php 
           
           include "dbcon.php";
           $data = "select * from employee join assigntask on employee.eid = assigntask.eid order by t_id desc";
           $result = mysqli_query($con,$data);
           $a = mysqli_fetch_array($result);
           while ($a = mysqli_fetch_array($result)) {
             // code...

          






           ?>

          <tr>
            <td><?php echo $a['eid'] ?></td>
            <td><?php echo $a['name'] ?></td>
            <td><?php echo $a['task'] ?></td>
            <td><?php echo $_SESSION['n']?></td>
            <td><?php echo $a['created_at'] ?></td>
            
          </tr>
        <?php }  ?>
        </table>
      </div>
       
     </div>
   </div>
 
  </div>
  <!-- /.content-wrapper -->



  


<?php include "footer.php"; ?>

