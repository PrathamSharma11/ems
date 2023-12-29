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
            <h1 class="m-0">My Task</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="yourreply.php">Your Reply</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <div class="container">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <tr>
      
            <th>S.NO.</th>
            <th>Your Task</th>
            
            <th>Assigned Date</th>
            <th>Action</th>
            
          </tr>

          <tr>
            <?php
            $aeid = $_SESSION['assigned_by'];
            include "../admin/dbcon.php";
            $data = "select * from assigntask where eid = '".$_SESSION['eid']."'";
            $i=1;
            $result = mysqli_query($con,$data);
            $a = mysqli_fetch_array($result);
            while ($a = mysqli_fetch_array($result)) {
               // code...
             




            ?>
            <td><?php echo $i++; ?></td>
            <td><?php echo $a['task']; ?></td>
            
            <td><?php echo $a['created_at']; ?></td>
            <td>
              <a href="replytask.php?id=<?php  echo $a["t_id"] ?>" class="btn btn-info">Reply Task</a>
            </td>
          </tr>
        <?php } ?>
          
        </table>
      </div>
      
    </div>
    
  </div>
 
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.php"; ?>