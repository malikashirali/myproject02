<?php include("../includes/header.php");
      include("../includes/db.php");
?>
<!--BreadCrumb-->
 <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Store</li>
     </ol>
 </nav>
<!--Store Range-->
 <div class="container">
   <div class="row">
     <div class="col-sm-6">
      <h3 class="">FILTER BY PRICE</h3>
     </div>
 <div class="col-sm-6">
    <h3 class="">FILTER BY REFERENCE</h3>
    <div class="dropdown">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REFERENCE
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Revelance</a>
          <a class="dropdown-item" href="#">Name, A to Z</a>
          <a class="dropdown-item" href="#">Name, Z to A</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Price, low to high</a>
          <a class="dropdown-item" href="#">Price, high to low</a>
        </div>
      </div>
 </div>
</div>
<!--Store Products-->
<div class="container">
<span class="sale" style="color: white; background-color:orangered">SALE</span>
    <?php
    $query = "SELECT * FROM products";
    $queryRun = mysqli_query($connection, $query);
        if(mysqli_num_rows($queryRun) > 0){
        while($row= mysqli_fetch_assoc($queryRun)) {
        echo 
        '<div class="row">
        <div class="col-sm-4">
          <a href="productdetailpage.php"><img src="'.$row['image'].'" alt=""></a>
            <h1>
            '.$row['name'].'
            </h1>
            <span> '.$row['price'].'</span>
        </div>
        <div class="col-sm-4">
            <img src="'.$row['image'].'" alt="">
                <h1>
                '.$row['name'].'
                </h1>
                <span>$'.$row['price'].'</span>
            </div>
           <div class="col-sm-4">
                    <img src="'.$row['image'].'" alt="">
                    <h1>
                    '.$row['name'].'
                    </h1>
                    $'.$row['price'].'
                </div>
        </div>' ;

}
}
else {
    echo "No Records Found";
  }
$connection->close();
?>
<!--Pagination-->
<div class="container">
<div class="row mt-5">
    <div class="col-md-12 text-center">
        <ul class="pagination">
            <li class="page-item"><a href="" class="page-link"> < </a></li>
            <li class="page-item"><a href="" class="page-link"> 1 </a></li>
            <li class="page-item"><a href="" class="page-link"> 2 </a></li>
            <li class="page-item"><a href="" class="page-link"> 3 </a></li>
            <li class="page-item"><a href="" class="page-link"> 4 </a></li>
            <li class="page-item"><a href="" class="page-link"> 5 </a></li>
            <li class="page-item"><a href="" class="page-link"> > </a></li>
        </ul>
    </div>
</div>
</div>
 <!--Section5 After Testimonials-->
<div class="container-fluid testMon">
    <div class="row">
      <div class="col-sm-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="../imgs/bg_1.jpg" alt="Card image">
          <div class="card-img-overlay">
        <h4 class="card-title">PHARMA PRODUCTS</h4>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quasi!</p>
      </div>
    </div>
  </div>
     <div class="col-sm-6 mb-4">
      <div class="card">
        <img class="card-img-top " src="../imgs/bg_2.jpg" alt="Card image">
           <div class="card-img-overlay">
            <h4 class="card-title">RATED BY EXPERTS</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, velit.
            </p>
          </div>
      </div>
    </div>
  </div>
  </div>
<?php include("../includes/footer.php"); ?>