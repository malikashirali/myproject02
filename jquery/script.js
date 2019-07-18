/* Contact Form */
$(function(){
    $("#error_contact_firstname").hide();
    $("#error_contact_lasttname").hide();
    $("#error_contact_email").hide();
    $("#error_contact_subject").hide();
    $("#error_contact_message").hide();

    var error_firstname = false;
    var error_lastname = false;
    var error_email = false;
    var error_subject = false;
    var error_message = false;

    $("#contact_firstname").focusout(function(){
        check_firstname();
    });
    $("#contact_lastname").focusout(function(){
        check_lastname();
    });
    $("#contact_email").focusout(function(){
        check_email();
    });
    $("#contact_subject").focusout(function(){
        check_subject();
    });
    $("#contact_message").focusout(function(){
        check_message();
    });

    function check_firstname(){
        var firstname_length = $("#contact_firstname").val().length;
        if(firstname_length < 5 || firstname_length > 20){
            $("#error_contact_firstname").html("Should be between 5-20 characters");
            $("#error_contact_firstname").show();
            error_firstname = true;
        }
        else {
            $("#error_contact_firstname").hide();
        }

        }
        function check_lastname(){
            var lastname_length = $("#contact_lastname").val().length;
            if(lastname_length < 5 || lastname_length > 20){
                $("#error_contact_lastname").html("Should be between 5-20 characters");
                $("#error_contact_lastname").show();
                error_lastname = true;
            }
            else {
                $("#error_contact_lastname").hide();
            }
    
            }
    function check_email(){
        var pattern  = /[a-zA-Z_-]+@[a-zA-Z0-9-]+.[a-zA-Z]+$/; 
        var email = $("#contact_email").val();
        if(pattern.test(email) && email !== ''){
            $("#error_contact_email").hide();
        }
        else {
            $("#error_contact_email").html("Invalid Email");
            $("#error_contact_email").show();
            error_email = true;
        }

        }
    function check_subject() {
        var subject_length = $("#contact_subject").val().length;
        if(subject_length < 5 || subject_length > 20){
            $("#error_contact_subject").html("Should be between 5-20 characters");
            $("#error_contact_subject").show();
            error_subject = true;
        }
        else {
            $("#error_contact_subject").hide();
        }

        }
    
    function check_message(){
        var message_length = $("#contact_message").val().length;
        if(message_length < 1 || message_length > 200){
            $("#error_contact_message").html("Should be between 1-200 characters");
            $("#error_contact_message").show();
            error_message = true;
        }
        else {
            $("#error_contact_message").hide();
        }

        }
    $("#contact_form").submit(function(){
        error_firstname = false;
        error_lastname = false;
        error_email = false;
        error_subject = false;
        error_message = false;
        
        check_firstname();
        check_lastname();
        check_email();
        check_subject();
        check_message();
        if(error_firstname == false && error_lastname == false && error_email == false && error_subject == false && error_message == false){
            return true;
        } else{
            return false;
        }
    });

});

/* Registartion Form */
$(function(){
    $("#error_register_username").hide();
    $("#error_register_email").hide();
    $("#error_register_password").hide();
    $("#error_register_confrim").hide();

    var error_username = false;
    var error_email = false;
    var error_password = false;
    var error_confirmpassword = false;

    $("#register_username").focusout(function(){
        check_username();
    });
    $("#register_email").focusout(function(){
        check_email();
    });
    $("#register_password").focusout(function(){
        check_password();
    });
    $("#register_confirmpassword").focusout(function(){
        check_confirmpassword();
    });

    function check_username(){
        var pattern = /^[a-zA-Z]*$/;
        var username = $("#register_username").val();
        if (pattern.test(username) && username !== '') {
            $("#error_register_username").hide();
        }
        else {
            $("#error_register_username").html("Only letters are allowed");
            $("#error_register_username").show();
            error_firstname = true;
        }

        }
    function check_email(){
        var pattern  = /[a-zA-Z_-]+@[a-zA-Z0-9-]+.[a-zA-Z]+$/; 
        var email = $("#register_email").val();
        if(pattern.test(email) && email !== ''){
            $("#error_register_email").hide();
            
        }
        else {
            $("#error_register_email").html("Invalid Email");
            $("#error_register_email").show();
            error_email = true;
        }

        }
        
        function check_password() {
            var password_length = $("#register_password").val().length;
            if (password_length < 8) {
               $("#error_register_password").html("Atleast 8 Characters");
               $("#error_register_password").show();
               error_password = true;
            } else {
               $("#error_register_password").hide();
            }
         }

         function check_confirmpassword() {
            var password = $("#register_password").val();
            var confirmpassword = $("#register_confirmpassword").val();
            if (password !== confirmpassword) {
               $("#error_register_confirmpassword").html("Passwords Did not Matched");
               $("#error_register_confirmpassword").show();
               error_confirmpassword = true;
            } else {
               $("#error_register_confirmpassword").hide();
            }
         }
    $("#register_form").submit(function(){
            error_username = false;
            error_email = false;
            error_password = false;
            error_confrimpassword = false;
        
            check_username();
            check_email();
            check_password();
            check_confirmpassword();

            if (error_username === false &&  error_email === false && error_password === false && error_confirmpassword === false) {
               alert("Registration Successfull");
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
});