<?php   
    include("../includes/header.php");
    include("../includes/db.php"); 
?>
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item">Contact</li>
    </ol>
 </nav>
 <!--Get In Touch-->
 <h1 class="getInTouch">Get In Touch</h1>
 <!--Form-->
<div class="container">
<?php 
    if(isset($_SESSION['message'])) {
?>
    <div class="alert alert-<?php echo $_SESSION['msg_type']; ?>">
<?php      
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    echo '</div>';     
    }
?> 

<form action="../includes/function.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="firstname">First Name</label> 
        <span class="text-danger">*</span>
        <input type="text" class="form-control is-required" id="firstname" name="firstname">
        </div>
        <div class="form-group col-md-6">
        <label for="lastname">Last Name</label>
        <span class="text-danger">*</span>
        <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <span class="text-danger">*</span>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject">
    </div>
    <div class="form-group">
            <label for="message">Message</label>
            <textarea type="text" class="form-control" id="message" name="message" rows="10"></textarea>
            </div>
    <div> <input type="submit" name="contactSubmit" class="btn btn-outline w-100" value="SEND MESSAGE"></div>
</form>
</div>
<!--Offices Section -->
<div class="officeSection">
    <div class="container">
    <h1 class="text-left">OFFICES</h1>
    <div class="row text-left">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">NEW YORK</h5>
                        <p class="card-text">
                                203 Fake St. Mountain View, San Francisco, California, USA
                        </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">NEW YORK</h5>
                            <p class="card-text">
                                    203 Fake St. Mountain View, San Francisco, California, USA
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">NEW YORK</h5>
                        <p class="card-text">
                                203 Fake St. Mountain View, San Francisco, California, USA
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include("../includes/footer.php"); ?>