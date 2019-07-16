<?php
    include("../includes/header.php");
?>
<div class="container">

    <?php 
    if(isset($_SESSION['success']) && $_SESSION['success'] !='') {
        echo '<h5 class="alert alert-primary">' .$_SESSION['success'].'</h5>';
        unset($_SESSION['success']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] !='') {
      echo '<h5 class=""alert alert-danger"">' .$_SESSION['status'].' </h5>';
      unset($_SESSION['status']);
  }?>

<form action="includes/function.php" method="POST">
    <input type="hidden" name="roles_id" value='2' class="form-control" >
    <div class="form-group">
        <label> Username </label>
        <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
    </div>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" name="registerButton" class="btn btn-primary">Save</button>
</form>
</div>
<?php
    include("../includes/footer.php");
?>
