<?php
    include('includes/header.php'); 
    include('includes/navbar.php'); 
    include('../includes/db.php'); 
?>
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit User Profile</h6>
  </div>
  <div class="card-body">     
  <div class="modal-body">
  <?php 
    if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $query = "SELECT * FROM users WHERE id = '$id' ";
    $queryRun = mysqli_query ($connection,$query);
    if($queryRun){
        while($row = mysqli_fetch_assoc($queryRun)){
  ?>
    <form action="code.php" method="POST">
    <div class="form-group">
    <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control" placeholder="Enter Email">
    </div>
    <div class="form-group">
    <input type="submit" class="btn btn-info" value="Update" name="UserUpdate">
    </div>
    </form>
<?php
        }
    }
}
?>
  </div>
</div>
</div>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>