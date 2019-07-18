<?php include("../includes/header.php");
      include("../includes/db.php");
?>


<!--About Us Container 1-->

<div class="container-fluid aboutUs">
    <div class="row">
        <?php 
        $sql = "SELECT * FROM pages_content WHERE pages_id=2";
        $result = mysqli_query($connection, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if($result){
        ?>
        <div class="col-sm-3"></div>
            <div class="col-sm-6 text-center pt-5">
                <h1><?php echo $result[0]['title'] ?></h1>
                <p><?php echo $result[0]['description'] ?></p>
            </div>
         <div class="col-sm-3"></div>
    </div>
<?php
}
?>
</div>
<!--Second Container-->
<div class="container secContainer">
    <div class="row">
    <div class="col-md-6">
    <img src="../imgs/bg_1.jpg" alt="" class="img-fluid rounded">
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <h1><?php echo $result[1]['title'] ?></h1>
        <p><?php echo $result[1]['description'] ?></p>
    </div>
    </div>
</div>

<!--Third Container-->

<div class="container thirdContainer">
    <div class="row">
        <div class="col-md-6">
            <h1><?php echo $result[2]['title'] ?></h1>
            <p><?php echo $result[2]['description'] ?></p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
        <img src="../imgs/header.jpg" alt="" class="img-fluid rounded">
        </div>
    </div>
</div>


<!--FourthContainer-->
<div class="container fourthContainer">
<h1>The Team</h1>
    <div class="row">
    <div class="col-sm-6 mb-5">
        <img src="../imgs/person_1.jpg" alt=""class="rounded-circle" style="width: 120px">
        <h2>Elizabeth Graham</h2>
        <blockquote>CEO/CO-FOUNDER</blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta.</p>
    </div>
    <div class="col-sm-6 mb-5 person">
    <img src="../imgs/person_2.jpg" alt=""class="rounded-circle"style="width: 120px">
        <h2>Elizabeth Graham</h2>
        <blockquote>CEO/CO-FOUNDER</blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta.</p>
    </div>
</div>
 <div class="row">
        <div class="col-sm-6 mb-5">
            <img src="../imgs/person_3.jpg" alt=""class="rounded-circle"style="width: 120px">
            <h2>Patrick Marx</h2>
            <blockquote>MARKETING</blockquote>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta.</p>
        </div>
        <div class="col-sm-6 mb-5">
        <img src="../imgs/person_4.jpg" alt=""class="rounded-circle"style="width: 120px">
            <h2>Mike Coolbert</h2>
            <blockquote>SALES MANAGER</blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta.</p>
        </div>
    </div>
</div>
<?php
    include("../includes/footer.php");
?>