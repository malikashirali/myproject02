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

<form id="register_form" action="../includes/function.php" method="POST">
    <input type="hidden" name="roles_id" value='2' class="form-control" >
    <div class="form-group">
        <label> Username </label>
        <input type="text" name="username" id="register_username" class="form-control" placeholder="Enter Username" required>
        <span class="text-danger" id="error_register_username"></span>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" id="register_email" class="form-control" placeholder="Enter Email" required>
        <span class="text-danger" id="error_register_email"></span>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" id="register_password" class="form-control" placeholder="Enter Password" required>
        <span class="text-danger" id="error_register_password"></span>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirmpassword"  id="register_confirmpassword" class="form-control" placeholder="Confirm Password" required>
        <span class="text-danger" id="error_register_confirmpassword"></span>
    </div>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" name="registerButton" class="btn btn-primary">Save</button>
</form>
</div>
<?php
    include("../includes/footer.php");
?>
