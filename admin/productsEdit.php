<?php
    include('includes/header.php'); 
    include('includes/navbar.php'); 
    include('../includes/db.php'); 

?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
  </div>
 
  <div class="card-body">     
  <div class="modal-body">
            
<?php 
if(isset($_GET['edit'])){
    $id = $_GET['edit'];

    $query = "SELECT * FROM products WHERE id = '$id' ";
    $queryRun = mysqli_query ($connection,$query);
    if($queryRun){
        while($row = mysqli_fetch_assoc($queryRun)){
?>
<form action="code.php" method="POST">
    <div class="form-group">
        <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" class="form-control" placeholder="Enter Product Name">
    </div>
    <div class="form-group">
        <label> Product Name </label>
        <input type="text" name="name"  value="<?php echo $row['name']; ?>" class="form-control" placeholder="Enter Product Name">
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input type="number" name="price" value="<?php echo $row['price']; ?>" class="form-control" placeholder="Enter Product Price">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-info" value="Update" name="ProductUpdate">
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