<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('../includes/db.php');
?>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
                 <input type="hidden" name="roles_id" value='2' class="form-control" >
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>    
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">User Profile 
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
        Add User Profile 
      </button>
    </h6>
  </div>
  <div class="card-body">
    <?php 
    if(isset($_SESSION['success']) && $_SESSION['success'] !='') {
        echo '<h5 class="alert alert-primary">' .$_SESSION['success'].'</h5>';
        unset($_SESSION['success']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] !='') {
      echo '<h5 class=""alert alert-danger"">' .$_SESSION['status'].' </h5>';
      unset($_SESSION['status']);
    }
    ?>
  <div class="table-responsive">
  <?php
  $query = "SELECT * FROM  users";
  $queryRun = mysqli_query ($connection,$query);
  ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
    <?php
    if(mysqli_num_rows($queryRun) > 0){
        while($row= mysqli_fetch_assoc($queryRun))
        {
          ?>
        <tr>
        <td><?php echo $row['username']?></td>
        <td><?php echo $row['email']?></td>
        <form action="code.php" method="GET">
        <td>
        <?php if( $row['roles_id'] != 1){ ?>
        <a href="code.php?user_delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
        &nbsp;
        <a href="registerEdit.php?edit=<?php echo $row['id'];?>" class="btn btn-success">Update</a>
        <?php } 
        ?>
        </form>
        </tr>  
    <?php
        }
    }
    else {
      echo "No Records Found";
    }
    ?>
      </tbody>
    </table>
    </div>
   </div>
 </div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
