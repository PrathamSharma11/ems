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
            <h1 class="m-0">Reply Task</h1>
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
 <div class="container">
  <div class="row">
    <div class="col-md-12">
      <center>
        <h2>Welcome</h2><?php echo $_SESSION['n'];  ?>
      </center>
    </div>
    <div class="col-md-6" >
      <center>
        <h2>Your Task</h2>
        <?php 
        
        include "../admin/dbcon.php";
        
        
        $data = "select * from assigntask where eid = '".$_SESSION['eid']."'";
        $result = mysqli_query($con,$data);
        $a = mysqli_fetch_array($result);
        while ($a = mysqli_fetch_array($result)) {
          // code...


        

        ?>
        <table class="table table-bordered table-striped">
          <tr>
            <td><?php echo $a['task'] ?></td>
          </tr>
        </table>
      <?php }  ?>
      </center>
    </div>
    <form method="post" action="replytaskinsert.php">
    <div class="col-md-6"><br>
      
      <input type="hidden" name="id" value="<?php echo $a['t_id']; ?>">
      <input type="hidden" name="eid" value="<?php  echo $_SESSION['eid'];      ?>">
      <textarea class="form-control" name="reply" rows="5" style="width:100%;"></textarea><br>
      <center><a href="replytaskinsert.php"><button class="btn btn btn-danger">SEND</button></a></center>
    </div>
  </form>
    
    
  </div><!-----div row ends-->
   
 </div><!--container ends--->
 
  </div>
  <!-- /.content-wrapper -->



  


<?php include "footer.php"; ?>
