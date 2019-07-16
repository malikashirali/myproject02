<!-- Contact -->
<?php
  include("../includes/header.php");
  include("db.php");
?>
<?php
if(isset($_POST['contactSubmit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $query = "INSERT INTO feedback (firstname, lastname, email, subject, message) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";
  $queryRun = mysqli_query($connection, $query);
  if ($queryRun) {
    $_SESSION['message'] = 'We will contact you shortly!';
    $_SESSION['msg_type'] = 'success';
    header('location: ../main/contact.php');
  } else {
    $_SESSION['message'] = "Unable To Contact";
    $_SESSION['msg_type'] = 'danger';
    header('location: ../main/contact.php');
  }
}
?>

<!-- Register Content Main Website -->
<?php

if(isset($_POST["registerButton"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $roles_id = $_POST['roles_id'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    if ($password===$confirmpassword) {
      $password = password_hash($confirmpassword, PASSWORD_BCRYPT, ['cost' => 12]);
        $query = "INSERT INTO `users`(`username`, `email`, `password`, `roles_id`) VALUES ('$username','$email','$password','$roles_id')";
        $queryRun = mysqli_query($connection, $query);
        if ($queryRun) {
            $_SESSION['message'] = 'Record has been saved! <br> Please Login';
            header('location: ../main/index.php');
        } else {
            $_SESSION['status'] = 'Record not saved!';
            header('location: ../main/register.php');
                }
        }
        else {
            $_SESSION['status'] = "Password Does not Match";
            header('location: ../main/register.php');
    }
} 
?>   