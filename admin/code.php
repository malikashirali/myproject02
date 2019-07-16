<!-- Add Registration --> 
<?php 
    session_start();
    include("../includes/db.php");
?>
<?php
if(isset($_POST["registerbtn"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $roles_id = $_POST['roles_id'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    if ($password === $confirmpassword ){
        
        $password_hash = password_hash($confirmpassword, PASSWORD_BCRYPT, $options);
        $query = "INSERT INTO `users`(`username`, `email`, `password`, `roles_id`) VALUES ('$username','$email','$password_hash','$roles_id')";
        $queryRun = mysqli_query($connection, $query);
        if ($queryRun) {
            $_SESSION['message'] = 'Record has been saved!';
            header('location: register.php');
        } else {
            $_SESSION['status'] = 'Record not saved!';
            header('location: register.php');
                }
        }
        else {
            $_SESSION['status'] = "Password Does not Match";
            header('location: register.php');
    }
}    
?>
<!-- Update Registration --> 
<?php
if (isset($_POST['UserUpdate'])){
    $id= $_POST['id'];
    $username =$_POST['username'];
    $email=$_POST['email'];
    $query = "UPDATE users SET username='$username', email='$email' WHERE id='$id'";
    $queryRun = mysqli_query($connection, $query);
    if($queryRun){
            $_SESSION['success'] = "User Is Updated!";
            header("location: register.php");
        }
        else{
            $_SESSION['status'] = "User Is Not Updated!";
            header("location: register.php");
        }
    }
?>
<!-- Delete Registration --> 
<?php
    if (isset($_GET['user_delete'])) {
        $id= $_GET['user_delete'];
        $query = "DELETE FROM users WHERE id=$id";
        $queryRun = mysqli_query($connection, $query);
     
        if($queryRun)
        {
            $_SESSION['success'] = "User Is Deleted!";
            header("location: register.php");
        }
        else {
            $_SESSION['status'] = "User Is Not Deleted!";
            header("location: register.php");
        }
    }

?>
<!-- Add Products -->
<?php
if(isset($_POST['addProduct'])){
    $name = $_POST['productname'];
    $price = $_POST['productprice'];
    $query = "INSERT INTO `products`(`name`,`price`) VALUES ('$name', '$price')";
    $queryRun = mysqli_query($connection, $query);
    if($queryRun)
    {
        $_SESSION['message'] = "Your Product Is Added!";
        header("location: products.php");
    }
    else {
        $_SESSION['status'] = "Your Product Is Not Added!";
        header("location: products.php");
    }
}
?>

<!-- Delete Products -->
<?php
if (isset($_GET['delete'])) {
    $id= $_GET['delete'];
    $query = "DELETE FROM products WHERE id=$id";
    $queryRun = mysqli_query($connection, $query);
    if($queryRun){
        $_SESSION['message'] = "Your Product Is Deleted!";
        header("location: products.php");
    }
}
?>
<!-- Update Products -->
<?php
if (isset($_POST['ProductUpdate'])) {
    $id= $_POST['id'];
    $name =$_POST['name'];
    $price=$_POST['price'];
    $query = "UPDATE products SET name='$name', price='$price' WHERE id='$id'";
    $queryRun = mysqli_query($connection, $query);
    if($queryRun){
            $_SESSION['success'] = "Your Product Is Updated!";
            header("location: products.php");
    }
        else{
            $_SESSION['status'] = "Your Product Is Not Updated!";
            header("location: products.php");
        }
}
?>

<!--Login-->

<?php 

if(isset($_POST['loginButton'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $res = mysqli_query($connection,$query);
  if($res){
    $row = mysqli_fetch_assoc($res);
      if($row['username'] == $username && $row['password'] == $password){
      $_SESSION['username'] = $row['username'];
      header('location: index.php');;
      }
      else{
        $_SESSION['status'] = 'Username or Password Doesn\'t Match';
        header('location: login.php');
      }
  }
}
?>
