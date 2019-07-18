<?php
  include("../includes/header.php");
  include("../includes/db.php");     
?>
<?php
$product_id = $_GET['id'];
$sql="SELECT * from products where p_id= $product_id";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result);
?>
<nav aria-label="breadcrumb ">
  <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Store</li>
      <li class="breadcrumb-item"><?php echo $row['p_name'];?></li>
  </ol>
 </nav>
<!--Product Detail-->

<div>
  <div class="container">
    <div class="row">
      <div class="col">
        <img src="<?php echo $row['p_img'];?>" alt="" style="width: 25em">
    </div>
    <div class="col">
      <h2><?php echo $row['p_name'];?></h2>
      <p><?php echo $row['p_desc'];?></p><h3 class="display-5 mb-5  ml-3" style="margin:5;"> $55.00</h3>
      <a href="" class="btn  px-4 py-2 mb-5 " style="background-color: #51eaea;">ADD TO CART</a>
      <div><a href="" class="btn" style="background-color: #51eaea;">Ordering Information</a><a class="btn ml-3" style="background-color: #51eaea;" href="">Specifications</a></div>
      <div class="container pt-5">
      <table class="table table-hover">
      <thead>
      <tr>
          <th>Material</th>
          <th>Description</th>
          <th>Packaging</th>
      </tr>
      </thead>
      <tbody>
      <tr>
          <td>OTC022401</td>
          <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
          <td>1 BT</td>
      </tr>
      <tr>
          <td>OTC022401</td>
          <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
          <td>1 BT</td>
      </tr>
      <tr>
          <td>OTC022401</td>
          <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
          <td>1 BT</td>
      </tr>
      </tbody>
  </table>
  </div>
</div>
</div>
</div>
</div>
<!--Section5 After Testimonials-->
<div class="container-fluid testMon">
    <div class="row">
      <div class="col-sm-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="imgs/bg_1.jpg" alt="Card image">
          <div class="card-img-overlay">
        <h4 class="card-title">PHARMA PRODUCTS</h4>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quasi!</p>
      </div>
    </div>
  </div>
     <div class="col-sm-6 mb-4">
      <div class="card">
        <img class="card-img-top " src="imgs/bg_2.jpg" alt="Card image">
           <div class="card-img-overlay">
            <h4 class="card-title">RATED BY EXPERTS</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, velit.
            </p>
          </div>
      </div>
    </div>
  </div>
</div>

<?php
        include("../includes/footer.php");
?>
