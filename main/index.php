<?php
  include("../includes/header.php");
  include("../includes/db.php");     
  ?>
<!--Header-->
  <?php 
    if(isset($_SESSION['message']) && $_SESSION['message'] !='') {
        echo '<h5 class="alert alert-primary">' .$_SESSION['message'].'</h5>';
        unset($_SESSION['message']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] !='') {
      echo '<h5 class=""alert alert-danger"">' .$_SESSION['status'].' </h5>';
      unset($_SESSION['status']);
  }?>

<div class="jumbotron jumbotronHeader text-center">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" style="color: white;"> 
    <?php
        $sql = "SELECT * FROM pages_content WHERE pages_id =1";
        $result = mysqli_query ($connection, $sql);
        if(mysqli_num_rows($result) > 0) {
          while( $row = mysqli_fetch_assoc($result)){       
?>
        <blockquote><?php echo $row['description']; ?></blockquote>
        <h1><?php echo $row['title']; ?></h1>
        <button type="button" class="btn btn-outline shopNowBtn">SHOP NOW</button>
        <?php
         }
        }
        ?>
    </div>
    <div class="col-sm-4"></div>
</div>
</div>
<!--Section1 Cards-->
    <?php 
        $sql = "SELECT * FROM home_cards";
        $result = mysqli_query($connection, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if($result){
        ?>
<div class="container">
      <div class="row">
        <div class="col-sm-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result[0]['title'] ?></h5>
                    <p class="card-text"><?php echo $result[0]['description'] ?></p>
                </div>
            </div>
        </div>
          <div class="col-sm-4 mb-4">
               <div class="card">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $result[1]['title'] ?></h5>
                      <p class="card-text"><?php echo $result[1]['description'] ?></p>
                  </div>
              </div>   
          </div>
          <div class="col-sm-4 mb-4">
              <div class="card">
                 <div class="card-body">
                     <h5 class="card-title"><?php echo $result[2]['title'] ?></h5>
                     <p class="card-text"><?php echo $result[2]['description'] ?></p>
                 </div>
             </div>   
         </div>  
        </div> 
      </div>
<?php
    }
?>
</div>  
</div> 
</div>
<!--Section2 Popular Products-->
<div class="container text-center">
<div class="row">
<div class="col-sm-12"><h1>POPULAR PRODUCTS
</h1>
</div>
</div>
<div class="row">
<?php
$sql="SELECT * FROM products limit 9";
$result=mysqli_query($connection,$sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      echo '<div class="col-sm-4"> <img src="/project/'.$row['image'].'" alt=""></a><h1>'.$row['name'].'</h1>
      <span>$'.$row['price'].'</span></div>';
  }
}
?>
</div>
    <div class="row">
        <div class="col-sm-12 text-center"><a href="store.php" class="btn btn-primary px-4 py-3 " style="text-align: center;">VIEW ALL PRODUCTS</a>
      </div>
    </div>
  </div>
</div>
<!--Section3 New Products-->
<div class="container">
  <div class="row">
    <div class="col text-center">
      <h1>NEW PRODUCTS</h1>
    </div>
  </div>
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-12"></div>
  <div id="demo" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul> 
      <!-- The slideshow -->
      <div class="carousel-inner">        
<div class="carousel-item active">
    <?php
    $sql="SELECT * FROM products limit 4";
    $result=mysqli_query($connection,$sql);
    if ($result->num_rows > 0) {
        while($row = $result -> fetch_assoc()) {
            echo '<img src="/project/'.$row['image'].'">';
        }
    } 
    ?>
</div>
</div>   
<!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    </div>
</div>
</div>
 <!--Section4 Testimonial-->
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="text-center">TESTIMONIALS</h1>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-sm-4">
      <img src="../imgs/person_4.jpg" class="rounded-circle mb-4"style="width: 120px" alt="person4">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, voluptate?</p>
      <blockquote>-Lucas Gallone</blockquote>
    </div>
    <div class="col-sm-4">
        <img src="../imgs/person_5.jpg" class="rounded-circle mb-4"style="width: 120px" alt="person5">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, voluptate?</p>
        <blockquote>-Andrew Neel</blockquote>
      </div>
      <div class="col-sm-4">
          <img src="../imgs/person_3.jpg" class="rounded-circle mb-4"style="width: 120px" alt="person3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, voluptate?</p>
          <blockquote>-Kelly Holmes</blockquote>
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