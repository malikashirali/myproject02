<!-- Contact -->
<?php
  include("../includes/header.php");
  include("db.php");

if(isset($_POST['contactSubmit'])){
  $firstname = test_input($_POST['firstname']);
  $lastname = test_input($_POST['lastname']);
  $subject = test_input($_POST['subject']);
  $email = test_input($_POST['email']);
  $message = test_input($_POST['message']);

  if (!preg_match('/^[a-zA-Z]*$/', $firstname) || !preg_match('/^[a-zA-Z]*$/', $lastname) ||!preg_match('/^[a-zA-Z."]*$/', $subject) ||!preg_match('/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/', $email) || !preg_match('/^[a-zA-Z]*$/', $message)){
       $_SESSION['firstnameErr'] = "Only letters are allowed"; 
       $_SESSION['lastnameErr'] = "Only letters are allowed"; 
       $_SESSION['subjectErr'] = "Invalid subject"; 
       $_SESSION['emailErr'] = "Invalid email format "; 
       $_SESSION['messageErr'] = "Only letters are allowed"; 
       header('location: ../main/contact.php');
       return false;
  }
  if(empty($firstname) || empty($lastname) || empty($email) || empty($subject) || empty($message)){
    $_SESSION['message'] = "Field Can't be empty";
    $_SESSION['msg_type'] = 'danger';
    header('location: ../main/contact.php');
  }else{
    $query = "INSERT INTO feedback (firstname, lastname, email, subject, message) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";
    $queryRun = mysqli_query($connection, $query);
    if ($queryRun) {
      $_SESSION['message'] = 'We will contact you shortly!';
      $_SESSION['msg_type'] = 'success';
      header('location: ../main/contact.php');

    }
  } 
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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