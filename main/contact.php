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

<form id="contact_form" action="../includes/function.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="contact_firstname">First Name</label> 
        <span class="text-danger">*</span>
        <input type="text" class="form-control is-required" id="contact_firstname" name="firstname">
        <span class="text-danger" id="error_contact_firstname"></span>
        <span class="text-danger">
        <?php
         if(isset($_SESSION['firstnameErr'])){
              echo $_SESSION['firstnameErr'];
              unset($_SESSION['firstnameErr']);
         }
         ?>
         </span>
        </div>
        <div class="form-group col-md-6">
        <label for="contact_lastname">Last Name</label>
        <span class="text-danger">*</span>
        <input type="text" class="form-control" id="contact_lastname" name="lastname">
        <span class="text-danger" id="error_contact_lastname"></span>
        <span class="text-danger">
        <?php
         if(isset($_SESSION['lastnameErr'])){
              echo $_SESSION['lastnameErr'];
              unset($_SESSION['lastnameErr']);
         }
         ?>
         </span>
        </div>
    </div>
    <div class="form-group">
        <label for="contact_email">Email</label>
        <span class="text-danger">*</span>
        <input type="email" class="form-control" id="contact_email" name="email">
        <span class="text-danger" id="error_contact_email"></span>
        <span class="text-danger">
        <?php
            if(isset($_SESSION['emailErr'])){
              echo $_SESSION['emailErr'];
              unset($_SESSION['emailErr']);
         }
         ?>
         </span>
    </div>
    <div class="form-group">
        <label for="contact_subject">Subject</label>
        <input type="text" class="form-control" id="contact_subject" name="subject">
        <span class="text-danger" id="error_contact_subject"></span>
        <span class="text-danger">
        <?php
         if(isset($_SESSION['subjectErr'])){
              echo $_SESSION['subjectErr'];
              unset($_SESSION['subjectErr']);
         }
         ?>
         </span>
    </div>
    <div class="form-group">
        <label for="contact_message">Message</label>
        <textarea type="text" class="form-control" id="contact_message" name="message" rows="10"></textarea>
        <span class="text-danger" id="error_contact_message"></span>
        <span class="text-danger">
        <?php
        if(isset($_SESSION['messageErr'])){
            echo $_SESSION['messageErr'];
            unset($_SESSION['messageErr']);
        }
        ?>
        </span>
        </div>
    <div>
    <input type="submit" name="contactSubmit" class="btn btn-outline w-100" value="SEND MESSAGE">
    </div>
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
<?php 
    include("../includes/footer.php"); 
?>