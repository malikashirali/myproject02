<!-- Contact -->
<?php
  session_start();
  include("db.php");
?>
<?php
if(isset($_POST['contactSubmit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to      = 'cc.intern07@gmail.com';
  $subject = 'the subject';
  $message = 'hello';
  $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  $query = "INSERT INTO feedback (firstname, lastname, email, subject, message) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";
  $queryRun = mysqli_query($connection, $query);
  if ($queryRunmail && ($to, $subject, $message, $headers);) {
    $_SESSION['message'] = 'We will contact you shortly!';
    $_SESSION['msg_type'] = 'success';
    header('location: ../contact.php');
  } else {
    $_SESSION['message'] = "Unable To Contact";
    $_SESSION['msg_type'] = 'danger';
    header('location: ../contact.php');
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
            header('location: ../index.php');
        } else {
            $_SESSION['status'] = 'Record not saved!';
            header('location: ../register.php');
                }
        }
        else {
            $_SESSION['status'] = "Password Does not Match";
            header('location: ../register.php');
    }
} 
?>   