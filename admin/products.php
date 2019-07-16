<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('../includes/db.php');

if(!(isset($_SESSION['username']))) {
  header('location: login.php');
}

?>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label> Product Name</label>
                <input type="text" name="productname" class="form-control" placeholder="Enter Product Name">
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <input type="number" name="productprice" class="form-control" placeholder="Enter Product Price">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="addProduct" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div style="margin-top:10px;">
<?php 
    if(isset($_SESSION['message']) && $_SESSION['message'] !='') {
        echo '<h5 class="alert alert-primary">' .$_SESSION['message'].'</h5>';
        unset($_SESSION['message']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] !='') {
      echo '<h5 class=""alert alert-danger"">' .$_SESSION['status'].' </h5>';
      unset($_SESSION['status']);
  }?>
  </div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
      Add Products
    </button>
  </div>
<form action="code.php" method="GET">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT * FROM products";
      $result = mysqli_query($connection, $sql);
      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){

        ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td><a href="code.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
          &nbsp;
          <a href="productsEdit.php?edit=<?php echo $row['id'];?>" class="btn btn-success">Update</a></td>
        </tr>
      <?php
      }
    }
    mysqli_close($connection);
    ?>
  </tbody>
</table>
</form>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
    <div class="form-group">
      <form action="code.php" method="POST">
        <div class="form-group">
        <label for="">Product Name</label>
        <input type="text" value="<?php echo $row['name'] ?>" class="form-control" name="name" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
        <label for="">Product Price</label>
        <input type="number" value ="<?php echo $row['price'] ?>" class="form-control" name="price" placeholder="Enter Product Price">
        </div>
          <input type="submit" class="btn btn-primary">Update</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
<?php
    include("includes/scripts.php");
    include("includes/footer.php");     
?>