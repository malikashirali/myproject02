<?php
session_start();
include("includes/db.php");
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM users WHERE email = '$email'";
  $res = mysqli_query($connection,$query);
  $row = mysqli_fetch_assoc($res);
  if(password_verify($password,  $row['password']) == ''){
		$_SESSION['message'] = "Password or Email is Incorrect!";
            header("location: index.php");
	}else{
			if($row['roles_id'] == 2) {
				$_SESSION['current_username'] = $row['username'];
			} 
				header('location: index.php');
	}
}
		

?>
