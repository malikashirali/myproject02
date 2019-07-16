<?php include("../includes/header.php");
      include("../includes/db.php");
?>

<!--BreadCrumb-->
 <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Cart</li>
     </ol>
 </nav>

 <table class="table table-hover">
<thead>
    <tr>
    <th scope="col">Image</th>
    <th scope="col">Product</th>
    <th scope="col">Price</th>
    <th scope="col">Quantity</th>
    <th scope="col">Total</th>
    <th scope="col">Remove</th>
    </tr>
</thead>
<tbody>
    <tr>
    <th scope="row"><img src="../imgs/product_01.png" alt=""></th>
    <td>Ibuprofen</td>
    <td>$55.00</td>
    <td><div class="input-group">
       <input type="number" min="1" name="" id="" class="form-control" value="1">
        </div></td>
    <td>$49.00</td>
    
    <td><a href="" class="btn">X</a></td>
    </tr>
    <tr>
    <th scope="row"><img src="../imgs/product_02.png" alt=""></th>
    <td>Bioderma</td>
    <td>$55.00</td>
    <td><div class="input-group">
            <input type="number" min="1" name="" id="" class="form-control" value="1">
             </div></td>
    <td>$49.00</td>
    
    <td><a href="" class="btn">X</a></td>
    </tr>

</tbody>
</table>

<!--Buttons Section-->
<div class="container">
    <div class="row">
        <div class="col">
            <a href="" class="btn"style="background-color: aqua">UPDATE CART</a>
            <a href="" class="btn"style="background-color: aqua">CONTINUE SHOPPING</a>
        </div>
        <div class="col">
            <h3 class="text-right">CART TOTALS</h3>
            <hr>

        </div>
    </div>
    <div class="row">
        <div class="col"><h3>Coupon</h3>
        <blockquote>Enter your coupon code if you have any</blockquote>
        <input type="text" placeholder=" Coupon Code">
        <a href="" class="btn" style="background-color: aqua">APPLY COUPON</a>
        </div>
        <div class="col-sm-6">
            <h5 class="float-left subTotalH5">Subtotal</h5><p>$230.00</p>
            <h5 class="float-left subTotalH5">Total</h5><p>$230.00</p>
            <a href="" class="btn text-center "style="background-color: aqua">PROCEED TO CHECKOUT</a>
        </div>
    </div>
</div>
 <!--LastSection-->
 <div class="container-fluid testMon">
        <div class="row">
          <div class="col-sm-6 mb-5 mt-5 pl-5 pr-5">
            <div class="card">
              <img class="card-img-top" src="../imgs/bg_1.jpg" alt="Card image" style="width: 534px; height: 300px;">
              <div class="card-img-overlay">
            <h4 class="card-title">PHARMA PRODUCTS</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quasi!</p>
          </div>
        </div>
      </div>
         <div class="col-sm-6 mb-5 mt-5 pl-5 pr-5">
          <div class="card">
            <img class="card-img-top " src="../imgs/bg_2.jpg" alt="Card image" style="min-height: 300px;">
               <div class="card-img-overlay">
                <h4 class="card-title">RATED BY EXPERTS</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, velit.
                </p>
              </div>
          </div>
        </div>
      </div>
      </div>
<?php include("../includes/footer.php");?>