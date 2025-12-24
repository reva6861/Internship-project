
<?php




error_reporting(0);

session_start();
include "database/db.php";
$sql_salutation = "SELECT * FROM salutation";
$result_salutation = mysqli_query($conn, $sql_salutation);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Google tag (gtag.js) starts -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TC9PW532FR"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-TC9PW532FR');
    </script>
    <!-- Google tag (gtag.js) ends -->
    
   
    <meta charset="UTF-8">
    <title>Medprone- Login Page</title>
    <link rel="stylesheet" href="css/logincss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/title_favicon.png"  type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous">
       


</script>
<style>
    .fa-solid{width:50px;
              height:50px;}
    a:hover {
    color: #1877f2 !important;
    text-decoration: none !important;
}

#loginwithotp:hover{
    color: #ffffff !important;
    text-decoration: none !important;
}

#loginwithusername:hover{
    color: #ffffff !important;
    text-decoration: none !important;
}

.forgot:hover{
    color:#1877f2 !important;
    text-decoration: underline !important;

}
.btn-close {
    border: none; /* Remove any border */
    background: transparent; /* Ensure the background is transparent */
    box-shadow: none; /* Remove any shadow */
  }

  .btn-close:focus {
    outline: none; /* Remove the outline on focus */
    box-shadow: none; /* Remove any focus shadow */
  }

@media (min-width: 320px) and (max-width: 768px) {
    /* Add your styles for smartphones here */

    .hideformobile{
        display:none !important;
    }
    .hideforlaptop{
        display:block !important;
    }
}
</style>

<style>
.register_btn:hover {
    color: white !important;
    text-decoration: none !important;
}
.g-recaptcha {
    text-align: -webkit-center;
    margin: 5px 1px 17px 1px;
}
    #RegisterUserButton{
            padding-left: 43px;
            padding-right: 43px;
        }
    @media screen and (max-width: 768px) {
       
        #loginwithotp {
            padding-left: 15px;
            padding-right: 15px;
        }
        #RegisterUserButton{
            padding-left: 30px;
            padding-right: 30px;
        }
        
    }
        #registerNewUserButton{
        padding-left: 30px;
        padding-right: 30px;
    }
    @media screen and (max-width: 768px) {
        #registerNewUserButton {
            padding-left: 15px;
            padding-right: 15px;
        }
        .loginWithUsernameButton {
            padding-left: 15px;
            padding-right: 15px;
        }
        
    }
    #optloginspan{
        font-size: 13px;
        display:none;
        color: red;
		text-align: center;
		background: #ffffff;
		padding: 0px 0px 1px 1px;
		border-radius: 21px;
		width: 211px;
		margin: auto;margin-top: 6px;
    }
 </style>


</head>

<body>
            <!-- Adstera Ad starts 
            <script async="async" data-cfasync="false" src="//pl25644354.profitablecpmrate.com/9cc239aa2d2ab05001247ed2932b9200/invoke.js"></script>-->
            <!-- <div id="container-9cc239aa2d2ab05001247ed2932b9200"></div><br> -->
            <!-- Adstera Ad ends --> 
            
    <div class="rows res">
        
 
            
        <div class="fb-form res">
            <div class="cardss" style="padding-top:25px;">
                <!-- <img src="images/title_favicon.png" style="display:none; width:100px; height:100px;" alt="" class="hideforlaptop"> -->
                <!-- <h4 style=" font-size:50px; color:#1877f2;" class="hideformobile">MEDPRONE</h4> -->
                <img src="images/medprone_new.png" style=" height:40px; margin-bottom:30px;" alt="" class="hideforlaptop">
            <br>
            <h3 style="color: #1c1e21;
    font-size: 25.1px;
    font-weight: normal;
    margin: 0;
    
    margin-top: -10px;" class="hideformobile">Lets connect with the doctors, clinicians, health advisors and medical services worlwide.</h3>
    
            </div>
            
            <form action="logincode.php" method="POST" id="loginwithusernamecard">
       

					<input type="text" name="username" id="user" placeholder="Enter Username">
					<div style="position:relative;"><input type="password" name="password" id="pass" placeholder="Password" ><i class="fa-solid fa-eye" onclick="togglepassword(this)" style="height:30px; width:30px; position:absolute; right:20px; top:20px;"></i></div>
                    <?php
            if(isset($_SESSION['status']) && $_SESSION['status'] == 'invalid details') {
                echo '<div style="font-size: 13px;
				color: red;
				text-align: center;
				background: #ffffff;
				padding: 0px 0px 1px 1px;
				border-radius: 21px;
				width: 211px;
				margin: auto;
			">Invalid username or password</div>';
                unset($_SESSION['status']); // Clear the status message after displaying
            }
            ?>
            <?php

            if (isset($_GET['error'])) {
                echo '<div id="alertMessage" class="alert alert-danger">' . $_GET['error'] . '</div>';
                unset($_GET['error']);
            }
            ?>

            <script>
            function togglepassword(eyeIcon){
                const input=document.getElementById("pass");
                if (input.type==="password"){
                    input.type="text";
                    eyeIcon.classList.remove("fa-eye");
                    eyeIcon.classList.add("fa-eye-slash");
                }
                else{
                    input.type="password";
                    eyeIcon.classList.remove("fa-eye-slash");
                    eyeIcon.classList.add("fa-eye");
                }
            }
            setTimeout(function() {
                const alertBox = document.getElementById('alertMessage');
                if (alertBox) {
                alertBox.remove();
                }
            }, 2000); // 2000 milliseconds = 2 seconds
            </script>
            <!-- localhost capcha key -->
            <!--<div class="g-recaptcha" data-sitekey="6LfoEGYrAAAAACKbAMULx6yegTGlrZJGQBiv_IMi"></div>-->
            <!-- Live Capcha Key -->
            <!-- <div class="g-recaptcha" data-sitekey="6LcJFWYrAAAAABgyOX4B_oTa7P4Q0WYDE7xCAOqc"></div> -->
            

                <div class="fb-submit">
                <input type="submit" class="login" name="submit" id="submit" value="Log In">
                <a href="#" data-bs-toggle="modal" data-bs-target="#forgotpassword" target="_self" class="forgot">Forgotten password?</a>
            
            </div>

                <div class="modal fade" id="forgotpassword" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="upper_div">
            <div class="mb-3" id="phoneField">
                <label for="phoneNumber" class="form-label">Enter Your Phone Number</label>
                <div class="d-flex">
                    <input type="text" class="form-control" name="country" readonly style="width: 50px; height: 37px;" value="+91">&nbsp;&nbsp; 
                    <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number">
                    <br>
                </div>
                <p style="font-size:12px;color:green;" id="phonepara"></p>
            </div>

                <div class="mb-3 text-end">
                    <button type="button" class="btn btn-primary" id="getOtpButton">Get OTP</button>
                </div>
                <div class="mb-3 d-none" id="otpField">
                    <label for="forgototp" class="form-label">Enter OTP</label>
                    <input type="text" class="form-control" id="forgototp" placeholder="Enter OTP">
                    <div class="d-grid mt-2">
                        <button type="button" class="btn btn-primary" id="verifyOtpButton">Submit</button>
                    </div>
                </div>
                </div>
                <div id="passwordFields" class="d-none">
                    <button type="button" class="btn btn-primary" id="upper_div_back">Back</button>
                <input type="hidden" id="user_id" name="user_id" >
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary" id="passwordreset">Reset Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                <div class="fb-submit">
    <!-- <a href="#" class="forgot" data-bs-toggle="modal" data-bs-target="#chooseAccountModal">Create New Account</a> -->
</div>

                <hr>

                <div class="button" style="width: max-content;margin: auto;padding: 15px 0px 15px 0px;">
                    <!-- <button class="btn btn-primary" type="button" style="background: #42b72a;border-color: #42b72a;border-radius: 6px;font-weight: 600;height: 50px;width: 154px; margin-bottom:3px;" data-bs-toggle="modal" data-bs-target="#chooseAccountModal">Register</button> -->

					<a href="#" data-bs-toggle="modal" data-bs-target="#chooseAccountModal"  id="RegisterUserButton" class="create-new-acc register_btn">Register</a>

                    <!-- <a href="#" target="_self" style = "width:" data-bs-toggle="modal" data-bs-target="#chooseAccountModal">Register</a> -->
					<a href="#" target="_self" class="create-new-acc" id="loginwithotp">Login with OTP</a>
                </div>
          
            </form>
            
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    
    $('#upper_div_back').on("click",function(){
        $('#upper_div').removeClass('d-none').addClass('d-block');
        $('#passwordFields').removeClass('d-block').addClass('d-none');
        $('#upper_div_back').css('display', 'none');
    })

document.getElementById('newPassword').addEventListener('keyup', validatePasswords);
document.getElementById('confirmPassword').addEventListener('keyup', validatePasswords);

function validatePasswords() {
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const resetButton = document.getElementById('passwordreset');

    if (newPassword === confirmPassword && newPassword !== "") {
        resetButton.disabled = false;
        resetButton.classList.remove('btn-secondary');
        resetButton.classList.add('btn-primary');
        document.getElementById('confirmPassword').classList.remove('is-invalid');
        document.getElementById('confirmPassword').classList.add('is-valid');
    } else {
        resetButton.disabled = true;
        resetButton.classList.remove('btn-primary');
        resetButton.classList.add('btn-secondary');
        document.getElementById('confirmPassword').classList.remove('is-valid');
        document.getElementById('confirmPassword').classList.add('is-invalid');
    }
}

document.getElementById('getOtpButton').addEventListener('click', function () {
    const phone = document.getElementById('phoneNumber').value;
    if (phone) {
        document.getElementById('otpField').classList.remove('d-none');
        const country = '+91';
        $.ajax({
            url: 'otplogincode.php',
            method: 'POST',
            data: { phone: phone, country: country },
            success: function (data) {
                // Swal.fire("OTP Sent!", "Please check your phone for the OTP.", "success");
                $('#phonepara').html('OTP Sent! Please check your phone for the OTP.');
            },
            error: function (xhr, status, error) {
                Swal.fire("Error", "Failed to send OTP. Please try again.", "error");
            }
        });
    } else {
        Swal.fire("Missing Information", "Please enter your phone number.", "warning");
    }
});

document.getElementById('verifyOtpButton').addEventListener('click', function () {
    const otp = document.getElementById('forgototp').value;
    if (otp.trim() !== "") {
        $.ajax({
            url: 'otplogincode.php',
            type: 'POST',
            data: { otp_enter: otp },
            success: function (response) {
                try {
                    const data = JSON.parse(response);
                    if (data[0]?.success) {
                        $('#user_id').val(data[0].user_id);
                        $('#passwordFields').removeClass('d-none').addClass('d-block');
                        // Swal.fire("OTP Verified", "You can now reset your password.", "success");
                        $('#upper_div').addClass('d-none');
                        document.getElementById('forgototp').classList.add('is-valid');
                    } else {
                        document.getElementById('forgototp').classList.remove('is-invalid');
                        Swal.fire("Invalid OTP", "Please try again.", "error");
                    }
                } catch (e) {
                    Swal.fire("Error", "Error processing OTP verification. Please try again.", "error");
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                Swal.fire("Error", "An error occurred while verifying OTP.", "error");
            }
        });
    } else {
        Swal.fire("Missing Information", "Please enter the OTP.", "warning");
    }
});

$('#passwordreset').on("click", function () {
    var newpassword = $('#newPassword').val();
    var confirmpassword = $('#confirmPassword').val();
    var user_id = $('#user_id').val();
    if (newpassword === confirmpassword) {
        $.ajax({
            url: 'resetpassword.php',
            type: 'POST',
            data: { new_password: newpassword, user_id: user_id },
            success: function (response) {
                console.log(response);
                const data = JSON.parse(response); // Parse the JSON response into an array
                console.log(data);
                
                    // Access the first item in the array and check the success property
                if (data[0]?.success) {
                    Swal.fire({
                        title: "Success",
                        text: "Your password has been reset successfully. You can now log in using your new username and password.",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then(() => {
                        window.location.reload();  // Reload the page after confirmation
                    });
                } else {
                    Swal.fire("Failure", "Password reset failed. Please try again.", "error");
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                Swal.fire("Error", "An error occurred while resetting the password.", "error");
            }

        });
    } else {
        Swal.fire("Password Mismatch", "Passwords do not match. Please try again.", "warning");
    }
});
</script>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>


<div class="modal fade" id="chooseAccountModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title">Create an Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body">
                <p class="text-center mb-4" style="font-size:30px;">Are you a </p>
                <!-- <div class="row">
                    <div class="col-12 mb-3">
                        <button class="btn btn-outline-success w-100 rounded-pill d-flex align-items-center justify-content-center py-3" data-bs-toggle="modal"  
                         data-bs-target="#createAccountModal">
                            <i class="bi bi-person-fill me-2 fs-4"></i> Sign Up as Patient
                        </button>
                    </div> -->
                    <div class="container">
                    <div class="row">
                    <div class="col-md-6 user-box" style="cursor:pointer;"  data-bs-toggle="modal" data-bs-target="#createAccountModal" >
            <div style="position: relative; border: 1px solid #ccc; padding: 10px; text-align: center; margin-bottom: 20px;border-radius: 15px;">
      

                <img src="images/patient_default.png" alt="" style="max-width: 100%; height: 100px;">
           

            <p style="margin-top: 10px; font-size:1em;"><?php echo 'Patient'; ?></p>
            </div>
        </div>


        <div class="col-md-6 user-box" data-bs-toggle="modal" style="cursor:pointer;" data-bs-target="#createAccountModal2" >
            <div style="position: relative; border: 1px solid #ccc; padding: 10px; text-align: center; margin-bottom: 20px;border-radius: 15px;">
      

                <img src="images/doctor_default.png" alt="" style="max-width: 100%; height: 100px;">
           

            <p style="margin-top: 10px; font-size:1em;"><?php echo 'Doctor'; ?></p>
            </div>
        </div>

        </div>
        </div>
                    <!-- <div class="col-12">
                        <button class="btn btn-outline-info w-100 rounded-pill d-flex align-items-center justify-content-center py-3" data-bs-toggle="modal"
                        data-bs-target="#createAccountModal2">
                            <i class="bi bi-stethoscope me-2 fs-4"></i> Sign Up as Hospital
                        </button>
                    </div> -->
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>


   <!-- pop up for create new user-->
   <div class="modal fade" id="createAccountModal" tabindex="-1" aria-labelledby="createAccountModalLabel" aria-hidden="true" style="overflow-y:scroll">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding: 0 20px;"> <!-- Added padding -->
            <div class="modal-header">
                <h5 class="modal-title" id="createAccountModalLabel">Create New Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

      
      <div class="modal-body">
      <form method="post" action="new_user/add_user_code.php" enctype="multipart/form-data"style="
    padding: 0px;
    box-shadow: none;display: ruby;">
                            <div class="form-row">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="patient-info"style="margin-left: -9px;">User Information</label>
                                    <div class="input-group">
                                        <div style="width:80px;" class="custom-dropdown">
                                            <select class="form-control custom-select"
                                                style="height:39px; width:fit-content;margin-left: -8px;" name="patient_title_id"
                                                id="title">
                                                <?php
			while ($fetch = mysqli_fetch_assoc($result_salutation)) {
			?>
                                                <option value="<?php echo $fetch['salute_id'];?>"
                                                    data-salute="<?php echo $fetch['salute_name']; ?>">
                                                    <?php echo $fetch['salute_name'];?></option>


                                                <?php }	?>
                                            </select>
                                        </div>
                                        <input type="text" class="form-control" style="margin-left: 11px; width: 167px;margin-left: 2px;"  name="patient_name" required placeholder="User name" id="patient-name">

                                    </div>

                                </div>
                                <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var inputField = document.getElementById('patient-name');

                                    // Add an event listener for the 'input' event
                                    inputField.addEventListener('input', function() {
                                        var words = this.value.split(
                                            ' '); // Split input value into words
                                        for (var i = 0; i < words.length; i++) {
                                            // Capitalize the first letter of each word
                                            words[i] = words[i].charAt(0).toUpperCase() + words[i]
                                                .slice(1);
                                        }
                                        // Join the words back together and set the input value
                                        this.value = words.join(' ');
                                    });
                                });
                                </script>
                                <?php
 $oneDayBefore = date('Y-m-d', strtotime('-1 day'));
?>
                                <div class="form-group col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                    <label for="age">Age</label>
                                    <div class="row">
                                    <input type="number" min="0" name="patientageyear" style="width: 50%;" id="age" class="form-control" placeholder="Years" >
                                    <input type="number" style="width: 50%;" min="0" max="11" id="patient-agemonth" name="patientagemonth" class="form-control" placeholder="Months" >
                                </div>
                                       <div class="row" style="margin-bottom: -40px;">
                                        <div class="col-md-6" style="display: inherit;">
                                            <input type="radio" value="age" style="height: 10px;margin-top: 6px;" checked name="dobage" id="ageradio"><span style="font-size:10px;margin-top: 4px;"
                                                for="ageradio">&nbsp;AGE</span>&nbsp;
                                        <input type="radio" value="dob" style="height: 10px;margin-top: 6px;" name="dobage" id="dobradio"><span style="font-size:10px;margin-top: 4px;"
                                            for="dobradio">&nbsp;DOB</span>&nbsp;
                                            </div>
                                            </div>
                                    </div>

                                    <script>
                                    document.getElementById('patient-agemonth').addEventListener('input', function (e) {
                                        let value = parseInt(this.value, 10);
                                        
                                        if (value > 11) {
                                            this.value = 11;
                                        } else if (value < 0) {
                                            this.value = 0;
                                        }
                                    });
                                </script>

                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script>
                                    $(document).ready(function() {
                                        function checkRadioValue() {
                                            var selectedValue = $('input[name="dobage"]:checked').val();
                                            if (selectedValue === "dob") {
                                                $('#age').prop('readonly', true);
                                                $('#patient-agemonth').prop('readonly', true);
                                                $('#dob').prop('readonly', false);
                                            } else {
                                                $('#age').prop('readonly', false);
                                                $('#patient-agemonth').prop('readonly', false);
                                                $('#dob').prop('readonly', true);
                                            }
                                            console.log("Selected value: " + selectedValue);
                                        }

                                        $('#dobradio').change(checkRadioValue);
                                        $('#ageradio').change(checkRadioValue);
                                    });
                                    </script>
                                    <div class="form-group col-md-6">
                                    <label for="dob">Date Of Birth</label>
                                        <input type="date" placeholder="Date of Birth" max="<?php echo $oneDayBefore;?>"
                                            name="patient_dob" readonly class="form-control" id="dob" onchange="calculateAge()">
                                       
                                    </div>
                                </div>
                                </div>
</div>
                                <script
                                    src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js">
                                </script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
                                </script>

<div class="form-group col-md-6" style="margin-left: -14px;">
    <label for="phone">Phone Number</label>
    <div style="display:flex; margin-bottom:-18px;">


                                            <input type="text" placeholder="Phone" style="height:auto; width:50px;" required
                                                name="country" class="form-control" id="country" readonly value="+91">
                                           
                                            <input type="text" placeholder="Phone" style="height:auto;" required
                                                name="patient_phone" class="form-control" id="phone" >
                                            </div>
                                            <span id="pat_dup_phone" style="color:red; font-size:12px;"></span>
                                        </div>
                               




<script>
document.getElementById('phone').addEventListener('keypress', function (event) {
    // Allow only numeric characters (0-9) using a regex pattern
    var charCode = event.charCode || event.keyCode;
    if (charCode < 48 || charCode > 57) {
        event.preventDefault();
    }
});

document.getElementById('phone').addEventListener('keyup', function () {
    var phoneNumber = this.value;  // Get the current value of the input
    $('#submitButton').attr('disabled', true);
    $('#verifyOtpBtn_p').text('Generate OTP');
    $('#verifyOtpBtn_p').attr('id', 'getOtpBtn_p');
    $('#otpverify_p').val('');  
    $('#otpInput_p').val('');   
    $('#otpverify_p').css('display','none');
    $('#otpsent_p').css('display','none');
    $('#otpErrorMessage_p').css('display','none');
    if (phoneNumber !== '') {
        $.ajax({
            url: 'patient/patient_details_check.php',
            type: 'POST',
            data: { phone: phoneNumber },
            success: function (response) {
                if (response.trim() == '1') {
                    $('#pat_dup_phone').text('Phone Number Already Exists');
                } else {
                    $('#pat_dup_phone').text('');
                }
            },
            error: function (error) {
                console.error('Error during AJAX request:', error);
            }
        });
    }
});



 
</script>



<div class="form-group col-md-6">
    <label for="email">Email</label>
    <input type="email" placeholder="email" name="patient_email" class="form-control" style="margin-bottom:-4px;" id="Email">
    <span id="pat_dup_email" style="font-size:12px; color:red; margin-left:10px;"></span>
</div>

<script>
document.getElementById('Email').addEventListener('input', function () {
    // Get the current value of the input field
    var emailValue = this.value.trim();  // Trim whitespace for cleaner input
    $('#submitButton').attr('disabled', true);
    $('#verifyOtpBtn_p').text('Generate OTP');
    $('#verifyOtpBtn_p').attr('id', 'getOtpBtn_p');
    $('#otpverify_p').val('');  
    $('#otpInput_p').val('');   
    $('#otpverify_p').css('display','none');
    $('#otpsent_p').css('display','none');
    $('#otpErrorMessage_p').css('display','none');

    if (emailValue !== '') {
        // Perform an AJAX request
        $.ajax({
            url: 'patient/patient_details_check.php',
            type: 'POST',
            data: { email: emailValue },
            success: function (response) {
                // Display feedback based on the server response
                if (response.trim() == '1') {  // Use trim() to handle unexpected spaces
                    $('#pat_dup_email').text('Email Already Exists').css('color', 'red');
                } else {
                    $('#pat_dup_email').text('');
                }
            },
            error: function (error) {
                console.error('Error during AJAX request:', error);
            }
        });
    } else {
        $('#pat_dup_email').text('');  // Clear the message if input is empty
    }
});

</script>


                                <!-- <div class="row"> -->
                                <div class="form-group col-md-6"style="margin-left: -14px;">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="patient_gender">

                                    </select>
                                </div>
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script>
                                $(document).ready(function() {
                                    // Define gender options based on salutation
                                    var genderOptions = {
                                        '1': ['Male'],
                                        '2': ['Female'],
                                        '3': ['Male'],
                                        '4': ['Female'],
                                        '5': ['Other']
                                    };

                                    // Function to update gender dropdown options based on selected salutation
                                    function updateGenderOptions() {
                                        var selectedSalutation = $('#title option:selected').val();
                                        var options = genderOptions[selectedSalutation];

                                        console.log(options);
                                        // Clear existing options
                                        $('#gender').empty();

                                        // Add new options
                                        if (options) {

                                            options.forEach(function(option) {
                                                $('#gender').append($('<option>', {
                                                    value: option,
                                                    text: option
                                                }));
                                            });
                                        }
                                    }

                                    // Call updateGenderOptions on page load
                                    updateGenderOptions();

                                    // Bind change event handler to salutation dropdown
                                    $('#title').change(function() {
                                        updateGenderOptions();
                                    });
                                });
                                </script>

                                <?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.countrystatecity.in/v1/countries',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => array(
    'X-CSCAPI-KEY: Z3JlSnNtUUxReGJJZjV6M1pQcDlrRlNBT0hZdk9yYWRyQXJtMzhVQQ=='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$data = json_decode($response,true); 


?>

                                <div class="col-md-12">
                                    <fieldset
                                        style="border: 1px solid #1d76d1;border-radius: 10px; padding-right:20px;margin-left: -14px;">
                                        <legend style="font-size: 15px;width: 60px;margin-left: 13px;"> &nbsp;Address
                                        </legend>

                                        <div class="row ml-1">
                               

                                            <div class=" col-md-6 form-group">
                                                <label for="">Select State</label>
                                                <select name="statebycountry"  class="form-control"
                                                    id="statebycountry">
                                                    <option value="">Select State</option>

                                                </select>
                                            </div>

                                            <div class=" col-md-6 form-group">
                                                <label for="">Select City</label>
                                                <select name="citybystate"  class="form-control"
                                                    id="citybystate">
                                                    <option value="">Select City</option>


                                                </select>
                                            </div>
                                           

                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlTextarea1">Location</label>
                                                <input tyep="text" placeholder="Location" class="form-control"
                                                    name="patient_location" id="exampleFormControlTextarea2" rows="3">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlTextarea1">Address</label>
                                                <textarea placeholder="Address" class="form-control"
                                                    name="patient_address" id="exampleFormControlTextarea1" rows="1"
                                                    col="1"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>


                                <script>
                                $(document).ready(function() {
                                        var country_iso = 'IN';
                                        if (country_iso != '') {
                                            $.ajax({
                                                url: 'patient/state_ajax.php',
                                                method: 'POST',
                                                data: {
                                                    country_iso: country_iso
                                                },
                                                success: function(data) {
                                                    $('#statebycountry').empty();
                                                    $('#statebycountry').append(
                                                        '<option value="">Select State</option>'
                                                    );

                                                    var states = JSON.parse(data);

                                                    var states = JSON.parse(data);
 states.sort(function(a, b) {
                            var stateA = a.name.toUpperCase();
                            var stateB = b.name.toUpperCase();
                            if (stateA < stateB) {
                                return -1;
                            }
                            if (stateA > stateB) {
                                return 1;
                            }
                            return 0;
                        });

                                                    $.each(states, function(index, state) {
                                                        $('#statebycountry').append(
                                                            $('<option>', {
                                                                value: state
                                                                    .iso2,
                                                                text: state
                                                                    .name
                                                            })
                                                        );
                                                    });
                                                }
                                            });
                                        } else {
                                            // If no country is selected, clear the state options
                                            $('#statebycountry').empty();
                                            $('#statebycountry').append(
                                                '<option value="">Select State</option>');
                                        }
                                });
                                </script>


                                <script>
                                $(document).ready(function() {
                                    $('#statebycountry').change(function() {
                                        var country_iso = 'IN';
                                        var state_iso = $(this).val();
                                        if (country_iso != '') {
                                            $.ajax({
                                                url: 'patient/city_ajax.php',
                                                method: 'POST',
                                                data: {
                                                    country_iso: country_iso,
                                                    state_iso: state_iso
                                                },
                                                success: function(data) {
                                                    // console.log(data);
                                                    // Clear the previous state options
                                                    $('#citybystate').empty();
                                                    // Append a default option
                                                    $('#citybystate').append(
                                                        '<option value="">Select City</option>'
                                                    );

                                                    // Parse the JSON data
                                                    var states = JSON.parse(data);

                                                    // Loop through each state and append it to the select box
                                                    $.each(states, function(index, state) {
                                                        $('#citybystate').append(
                                                            $('<option>', {
                                                                value: state
                                                                    .name,
                                                                text: state
                                                                    .name
                                                            })
                                                        );
                                                    });
                                                }
                                            });
                                        } else {
                                            // If no country is selected, clear the state options
                                            $('#citybystate').empty();
                                            $('#citybystate').append(
                                                '<option value="">Select State</option>');
                                        }
                                    });
                                });
                                </script>

                                <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var inputField = document.getElementById('exampleFormControlTextarea1');

                                    // Add an event listener for the 'input' event
                                    inputField.addEventListener('input', function() {
                                        var words = this.value.split(
                                            ' '); // Split input value into words
                                        for (var i = 0; i < words.length; i++) {
                                            // Capitalize the first letter of each word
                                            words[i] = words[i].charAt(0).toUpperCase() + words[i]
                                                .slice(1);
                                        }
                                        // Join the words back together and set the input value
                                        this.value = words.join(' ');
                                    });
                                });
                                </script>
                             <script>
    $(document).ready(function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success')) {
            // $('#success-message').fadeIn().delay(2000).fadeOut(); 

            Swal.fire({
                icon: 'success',
                title: '<span style="font-size: 24px; color: #4CAF50;">Congratulations!</span>',
                html: `
                    <p style="font-size: 16px; color: #333; margin-bottom: 10px;">
                        Welcome to <strong>Medprone</strong>. Your account has been created successfully.
                    </p>
                    <p style="font-size: 14px; color: #555; line-height: 1.6;">
                        <strong>Note:</strong> Please ensure your account credentials remain confidential. Avoid sharing them with anyone.  
                        For assistance or any inquiries, feel free to contact our support team.
                    </p>
                    <p style="font-size: 14px; color: #555;">
                        Support Email: <a href="mailto:info@medprone.com" style="color: #007BFF;">info@medprone.com</a><br>
                        Contact Number: <strong style="color: #333;">9990721979</strong>
                    </p>
                `,
                width: '35%',
                showCloseButton: true,
                showConfirmButton: false,
                customClass: {
                    title: 'swal-title',
                    popup: 'swal-popup'
                }
            });

            
            const newUrl = window.location.origin + window.location.pathname;
            window.history.replaceState(null, null, newUrl); 
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .small-swal-title {
        font-size: 18px;
    }
    .small-swal-popup {
        font-size: 14px;
    }
    .small-swal-confirm-btn {
        font-size: 14px;
        padding: 6px 12px;
    }

    .swal-close-btn {
        border: none; /* Remove border */
        outline: none; /* Remove focus outline */
        box-shadow: none; /* Remove any shadow */
    }
</style>
<script>
    $(document).ready(function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success2')) {
            Swal.fire({
                icon: 'success',
                title: 'Congratulations!',
                html: `
                    You have Successfully Created <strong><?php echo $_GET['success2']; ?></strong> with Medprone.<br>
                    Login Details are Shared with your email-id.<br>
                    Kindly login to Medprone with your login credentials and now you can login & start using it.<br><br>
                    <strong>Note:</strong> Kindly Add minimum department, doctor, schedule to effectively use it.<br><br>
                    For any Support Contact us at: <br>
                    <a href="mailto:info@medprone.com">info@medprone.com</a> or <strong>9990721979</strong>
                `,
                width: '30%',
                showCloseButton: true, // Enable close button (cross icon)
                showConfirmButton: false, // Remove the "OK" button
                customClass: {
                    title: 'swal-title',
                    popup: 'swal-popup'
                }
            });

            const newUrl = window.location.origin + window.location.pathname;
            window.history.replaceState(null, null, newUrl); 
        }
    });
</script>


                                <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var inputField = document.getElementById('exampleFormControlTextarea2');

                                    // Add an event listener for the 'input' event
                                    inputField.addEventListener('input', function() {
                                        var words = this.value.split(
                                            ' '); // Split input value into words
                                        for (var i = 0; i < words.length; i++) {
                                            // Capitalize the first letter of each word
                                            words[i] = words[i].charAt(0).toUpperCase() + words[i]
                                                .slice(1);
                                        }
                                        // Join the words back together and set the input value
                                        this.value = words.join(' ');
                                    });
                                });
                                </script>

                                <!-- </div> -->
<div class="row" style="width: -webkit-fill-available">
    <div class="col-md-12 mt-3" style=" margin-left: -9px;">
        <label for="patient_username">Username</label>
        <input type="text" class="form-control" id="patient_username" name="patient_username" placeholder="Enter Username" required>
        <div id="username_match" class="mt-2"></div>
    </div>
    
    <div class="col-md-6 mt-3" style="margin-left: -9px;">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="patient_password" id="password" placeholder="Enter Password" required>
    </div>
    <div class="col-md-6 mt-3" style="margin-left: -14px; margin-bottom:20px;">
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" class="form-control" name="patient_cpassword" id="confirmPassword" placeholder="Enter Password" required>
        <span id="passwordMatch" style="position:absolute;margin-top: -12px;"></span>
    </div>
</div>

<script>
document.getElementById('patient_username').addEventListener('input', function() {
    var usernameInput = this.value.trim(); // Trim whitespace from the input
    // console.log(usernameInput)
// alert(usernameInput);
    if (usernameInput === '') {
        $('#username_match').html(''); // Clear the content of the username_match div
    } else {
        $.ajax({
            url: 'new_user/username_match.php',
            type: 'POST',
            data: {'userinput': usernameInput},
            success: function (response) {
                // console.log(response);
                $('#username_match').html(response);
                if (response.includes("not available")) {
                    $('#username_match').css('color', 'red');
					// $('#submitBtn').prop('disabled', true); 
					$('#submitButton').attr('type', 'button'); // Change button type to "button"
					

                } else {
                    $('#username_match').css('color', 'green');
					$('#submitButton').attr('type', 'submit'); // Change button type to "submit"

                }
	
            }
        });
    }
	$('#submitButton').click(function() {
        // Enlarge the username_match div for a brief moment
		$('#username_match').fadeOut(250).fadeIn(250);

    });
});

</script>



</div>


<!-- <div class="row d-flex align-items-center" style="margin-left: -8px; width: 70%;">
    <div class="col-md-4">
        <input type="radio" class="form-check-input" name="otp_method_p" id="whatsappOtp_p" style="height: 11px; width: 15px;" required>
        <label for="whatsappOtp">OTP on WhatsApp</label>
    </div>

    <div class="col-md-4">
        <input type="radio" class="form-check-input" name="otp_method_p" id="smsOtp_p" style="height: 11px; width: 15px;" required>
        <label for="smsOtp">OTP on SMS</label>
    </div>

  
</div> -->

<!-- OTP input field (Initially hidden) -->
<div class="row"  style="width: 100%; ">
    <div class="col-md-6" id="otpInputField_p" style="display:none; margin-left:-14px;">
        <input type="text" class="form-control" id="otpInput_p" placeholder="Enter your OTP" required>
        <div id="otpErrorMessage_p" style="display: none; color: red; font-size: 12px; margin-top: -8px;">
           Invalid OTP
        </div>
        <div id="otpsent_p" style=" display:none; color: green; font-size: 12px; margin-top: -8px; ">
        OTP Sent! Please check your phone for the OTP.
        </div>
        <div id="otpverify_p" style="display: none; color: green; font-size: 12px; margin-top: -8px;">
           OTP Verified Successfully !
        </div>
    </div>

    <div class="col-md-6 text-end">
        <button type="button" class="btn btn-primary" id="getOtpBtn_p" style="height: 35px; font-size: 12px; margin-left:-14px;">Generate OTP</button>
    </div>
    </div>
<!-- </div> -->
<script>
    $(document).ready(function () {
        // Handle Get OTP or Verify OTP button clicks dynamically
        $(document).on('click', '#getOtpBtn_p, #verifyOtpBtn_p', function () {
            $('#submitButton').prop('disabled', true);

            const buttonId = $(this).attr('id');
            // const isWhatsAppSelected = $('#whatsappOtp_p').is(':checked');
            // const isSmsSelected = $('#smsOtp_p').is(':checked');
            const phone_number = $('#phone').val();
            if(phone_number != ''){
                const pat_dup_phone = $('#pat_dup_phone').text().trim();
            const pat_dup_email = $('#pat_dup_email').text().trim();

            if (!pat_dup_phone) {
                if(!pat_dup_email){
            if (buttonId === 'getOtpBtn_p') {
                const otp_p = Math.floor(1000 + Math.random() * 9000);
                sessionStorage.setItem('otp_p', otp_p);
                // if (isWhatsAppSelected) {
                $(this).text('Verify OTP');
                $(this).attr('id', 'verifyOtpBtn_p');
                $('#otpInputField_p').show();


                    $.ajax({
                        url: 'register_validation_otp.php',
                        type: 'POST',
                        data: { otp: otp_p, phone_number: phone_number }, 
                        success: function (response) {
                            $('#otpsent_p').show();

                            console.log('WhatsApp OTP Sent: ', response);
                        },
                        error: function (error) {
                          
                        }
                    });
                // } else if (isSmsSelected) {
                //     $('#otpInputField_p').show();
                  
                // } 

            

            } else if (buttonId === 'verifyOtpBtn_p') {

                const enteredOtp = $('#otpInput_p').val();
                const storedOtp = sessionStorage.getItem('otp_p');

                if (enteredOtp === storedOtp) {
                    $('#submitButton').prop('disabled', false);
                    $(this).text('Verified');
                    $('#otpsent_p').hide();
                    $('#otpverify_p').show();
                    $('#otpErrorMessage_p').hide();
                } else {
                    $('#otpErrorMessage_p').show();
                    $('#otpsent_p').hide();
                    $('#otpverify_p').hide();
                    $('#submitButton').prop('disabled', true);


                }
            }
        } else {
                    Swal.fire("Error", "Please enter a different email ID.", "error");
                }
            } else {
                Swal.fire("Error", "Please enter a different phone number.", "error");
            }
        }else{
            Swal.fire("Error", "Enter Your Phone Number.", "error");
        }
        });
    });
</script>


<script>
$(document).ready(function() {
    $('#confirmPassword').on('keyup', function() {
        var password = $('#password').val();
        var confirmPassword = $('#confirmPassword').val();
        
        if (password == confirmPassword) {
            $('#passwordMatch').html('Passwords match').css('color', 'green');
            $('#submitButton').prop('disabled', false);
            $('#submitButton').css('cursor','pointer');
        }else {
    $('#passwordMatch').html('Passwords do not match').css('color', 'red');
    $('#submitButton').prop('disabled', true);
    $('#submitButton').css('cursor', 'not-allowed');
    $('#submitButton').css('background-color', 'white'); // Set background color to white
    $('#submitButton').css('color', '#06418f'); 
    $('#submitButton').css('border', '1px solid #c0d5f2 !important'); // Set border with important flag
// Set text color to a blue shade
// Set text color to blue
}

        
    });
});
</script>

<br>
<div class="form-group col-md-6 mb-3">
    <button type="submit" id="submitButton" name="submit" class="btn btn-primary btn-md" disabled
            style=" background-color: white; color: #06418f; border: 1px solid #c0d5f2;margin-left: -29px;margin-bottom: -33px;">
        Submit</button>
</div>

                              
                    </form>

      </div>
    </div>
  </div>
</div>

<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAccountModal2">
    Open Create Account Modal
</button> -->



<div class="modal fade" id="createAccountModal2" tabindex="-1" aria-labelledby="createAccountModalLabel" aria-hidden="true" style="overflow-y:scroll">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding: 0 20px;"> <!-- Added padding -->
            <div class="modal-header">
                <h5 class="modal-title" id="createAccountModalLabel">Register your Hospital / Clinic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

      
      <div class="modal-body">
      <form method="post" action="new_user/add_hospital_code.php" enctype="multipart/form-data"style="
    padding: 0px;
    box-shadow: none;display: ruby;">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="patient-info">Hospital / Clinic Name</label>
                                       
                                        <input type="text" class="form-control" style="margin-left: 11px; margin-left: 2px;"  name="hosname" required placeholder="Hospital name" id="patient-name">


                                </div>
                          

                                <div class="form-group col-md-6" style="margin-left: -14px;">
    <label for="phone">Phone Number</label>
    <div style="display:flex; margin-bottom:-16px;">
       
    <input type="text"  placeholder="Phone" style="height:auto; width:50px;" required
    name="hos_country" value="+91" class="form-control" id="country" readonly>
                                            <input type="text" placeholder="Phone" style="height:auto;" required
                                                name="hosphone" class="form-control" id="hospitalphone" >
                                            </div>
                                            <span id="hos_dup_phone" style="color:red; font-size:10px;"></span>
                                </div>
                              <script>
// $(document).ready(function () {
    $('#hospitalphone').on('keyup', function () {
        var phone = $(this).val();
        $('#hospital_submit').attr('disabled', true);
        $('#verifyOtpBtn').text('Generate OTP');
        $('#verifyOtpBtn').attr('id', 'getOtpBtn');
        $('#otpverified').val('');  
        $('#otpInput').val('');   
        $('#otpverified').css('display','none');
        $('#otpsent').css('display','none');
        $('#otpErrorMessage').css('display','none');
        if (phone) {
            $.ajax({
                url: 'hospital/hos_detail_check.php', 
                method: 'POST',
                data: { hosphone: phone },
                success: function (response) {
                    if(response == '1'){
                        $('#hos_dup_phone').text('Phone Already Exist with other Hospital');
                        $('#hospital_submit').prop('disabled', true); // Disable the button

                    }else{
                        $('#hos_dup_phone').text('');
                        // $('#hospital_submit').prop('disabled', false); // Enable the button


                    }
                    console.log('Server Response:', response);
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        }
    });
// });

                              </script>

                   

<div class="form-group col-md-6">
										<label for="email">Email</label>
										<input type="email" placeholder="Email" class="form-control"name="hosemail" id="hospitalEmail" >
                                        <span id="hos_dup_email" style="color:red; font-size:10px;"></span>

									</div>


                                    <script>
                                $(document).ready(function () {
    $('#hospitalEmail').on('input', function () {
        var email = $(this).val();
        $('#hospital_submit').attr('disabled', true);
        $('#verifyOtpBtn').text('Generate OTP');
        $('#verifyOtpBtn').attr('id', 'getOtpBtn_p');
        $('#otpverified').val('');  
        $('#otpInput').val('');   
        $('#otpverified').css('display','none');
        $('#otpsent').css('display','none');
        $('#otpErrorMessage').css('display','none');
        if (email) {
            $.ajax({
                url: 'hospital/hos_detail_check.php', 
                method: 'POST',
                data: { hosemail: email },
                success: function (response) {
                    if(response == '1'){
                        $('#hos_dup_email').text('Email Already Exist with other Hospital');
                        $('#hospital_submit').prop('disabled', true); // Disable the button

                    }else{
                        $('#hos_dup_email').text('');
                        // $('#hospital_submit').prop('disabled', false); // Enable the button


                    }
                    console.log('Server Response:', response_data);
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        }
    });
});

                              </script>



                                    <div class="form-group col-md-6">
										<label for="dob">Establishment Date</label>
										<input type="date" max="<?php echo $oneDayBefore;?>" placeholder="Establishment Date" name="hosdate" class="form-control" id="dob" >
									</div>
									


                                    <div class="form-group col-md-6">
										<label for="age">GST Number</label>
										<input type="text" placeholder="GST Number" value="" name="gstnum" class="form-control" id="" >
									</div>
                                    <script>
document.addEventListener('DOMContentLoaded', function() {
    var gstInput = document.querySelector('input[name="gstnum"]');
    if (gstInput) {
        gstInput.addEventListener('input', function(event) {
            // Convert the input value to uppercase
            this.value = this.value.toUpperCase();
        });
    }
});
</script>
                                    <?php
$sql_currency="select * from currency";
$result_currency=mysqli_query($conn,$sql_currency);


?>
                                    <!-- <div class="form-group col-md-6">
										<label for="Doctor-name">Select Currency</label>
										<select class="form-control" name="currency" id="" required>
										<option value="">Select Currency</option>
											<?php
													while($fetch=mysqli_fetch_assoc($result_currency))
													{
											?>
										
											<option value="<?php echo $fetch['currency_id']; ?>"><?php echo  $fetch['currency_name'] . " ( " .$fetch['currency_symbol'] . " )"; ?></option>
											
											<?php } ?>
										</select>
									</div> -->

                                    <input type="hidden" name="currency" value="3">


                                <div class="col-md-12">
                                    <fieldset
                                        style="border: 1px solid #1d76d1;border-radius: 10px; padding-right:20px;margin-left: -14px;">
                                        <legend style="font-size: 15px;width: 60px;margin-left: 13px;"> &nbsp;Address
                                        </legend>

                                        <div class="row ml-1">
                                            <!-- <div class=" form-group col-md-4">
                                                <label for="">Select Country</label>
                                                <select name="country-dependent"  id="country_dependent"
                                                    class="form-control">
                                                    <option value="">Select Country</option>
                                                    <?php
    foreach ($data as $datas) {
        ?>
                                                    <option value="<?php echo $datas['iso2']; ?>">
                                                        <?php echo $datas['name']; ?></option>
                                                    <?php
    }
    ?>
                                                </select>
                                            </div> -->
                                         

                                            <div class=" col-md-6 form-group">
                                                <label for="">Select State</label>
                                                <select name="statebycountry"  class="form-control"
                                                    id="statebycountry1">
                                                    <option value="">Select State</option>

                                                </select>
                                            </div>

                                            <div class=" col-md-6 form-group">
                                                <label for="">Select City</label>
                                                <select name="citybystate"  class="form-control"
                                                    id="citybystate1">
                                                    <option value="">Select City</option>


                                                </select>
                                            </div>
                                           
                                            <script>
                                $(document).ready(function() {
                                        var country_iso = 'IN';
                                        if (country_iso != '') {
                                            $.ajax({
                                                url: 'patient/state_ajax.php',
                                                method: 'POST',
                                                data: {
                                                    country_iso: country_iso
                                                },
                                                success: function(data) {
                                                    $('#statebycountry1').empty();
                                                    $('#statebycountry1').append(
                                                        '<option value="">Select State</option>'
                                                    );

                                                    var states = JSON.parse(data);

                                                    var states = JSON.parse(data);
 states.sort(function(a, b) {
                            var stateA = a.name.toUpperCase();
                            var stateB = b.name.toUpperCase();
                            if (stateA < stateB) {
                                return -1;
                            }
                            if (stateA > stateB) {
                                return 1;
                            }
                            return 0;
                        });

                                                    $.each(states, function(index, state) {
                                                        $('#statebycountry1').append(
                                                            $('<option>', {
                                                                value: state
                                                                    .iso2,
                                                                text: state
                                                                    .name
                                                            })
                                                        );
                                                    });
                                                }
                                            });
                                        } else {
                                            // If no country is selected, clear the state options
                                            $('#statebycountry1').empty();
                                            $('#statebycountry1').append(
                                                '<option value="">Select State</option>');
                                        }
                                });
                                </script>


                                <script>
                                $(document).ready(function() {
                                    $('#statebycountry1').change(function() {
                                        var country_iso = 'IN';
                                        var state_iso = $(this).val();
                                        if (country_iso != '') {
                                            $.ajax({
                                                url: 'patient/city_ajax.php',
                                                method: 'POST',
                                                data: {
                                                    country_iso: country_iso,
                                                    state_iso: state_iso
                                                },
                                                success: function(data) {
                                                    // console.log(data);
                                                    // Clear the previous state options
                                                    $('#citybystate1').empty();
                                                    // Append a default option
                                                    $('#citybystate1').append(
                                                        '<option value="">Select City</option>'
                                                    );

                                                    // Parse the JSON data
                                                    var states = JSON.parse(data);

                                                    // Loop through each state and append it to the select box
                                                    $.each(states, function(index, state) {
                                                        $('#citybystate1').append(
                                                            $('<option>', {
                                                                value: state
                                                                    .name,
                                                                text: state
                                                                    .name
                                                            })
                                                        );
                                                    });
                                                }
                                            });
                                        } else {
                                            // If no country is selected, clear the state options
                                            $('#citybystate1').empty();
                                            $('#citybystate1').append(
                                                '<option value="">Select State</option>');
                                        }
                                    });
                                });
                                </script>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlTextarea1">Location</label>
                                                <input tyep="text" placeholder="Location" class="form-control"
                                                    name="h_location" id="exampleFormControlTextarea2" rows="3">
                                            </div>
                                            <br>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlTextarea1">Address</label>
                                                <textarea placeholder="Address" class="form-control"
                                                    name="h_address" id="exampleFormControlTextarea1" rows="1"
                                                    col="1"></textarea>
                                            </div>

                                            <div class="form-group col-md-6">
										<label for="age">Pincode</label>
										<input type="text" placeholder="Area pincode" name="hoscode" class="form-control" id="code">
									</div>
                                        </div>
                                    </fieldset>
                                </div>


           

<div class="row" style="width: -webkit-fill-available">
    <div class="col-md-6 mt-3" style=" ">
        <label for="patient_username">Username</label>
        <input type="text" class="form-control" id="hospital_username" name="username" placeholder="Enter Username" required>
        <div id="hos_username_match" style="color:red; font-size:12px;" class="mt-2"></div>
    </div>

    <script>
$(document).ready(function () {
    $('#hospital_username').on('input', function () {
        var username = $(this).val();

        if (username) {
            $.ajax({
                url: 'hospital/hos_detail_check.php', 
                method: 'POST',
                data: { username: username },
                success: function (response) {
                    if(response == '1'){
                        $('#hos_username_match').text('Username Already Exist');
                        $('#hospital_submit').prop('disabled', true); // Disable the button

                    }else{
                        $('#hos_username_match').text('');
                        // $('#hospital_submit').prop('disabled', false); // Enable the button


                    }
                    console.log('Server Response:', response_data);
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        }
    });
});

                              </script>


    
    <div class="col-md-6 mt-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="hospital_password" placeholder="Enter Password" required>
    </div>
    
</div>
<!-- <div class="row d-flex align-items-center" style="margin-left: 10px; width: 70%;">
    <div class="col-md-4">
        <input type="radio" class="form-check-input" name="otp_method" id="whatsappOtp" style="height: 11px; width: 15px;" required>
        <label for="whatsappOtp">OTP on WhatsApp</label>
    </div>

    <div class="col-md-4">
        <input type="radio" class="form-check-input" name="otp_method" id="smsOtp" style="height: 11px; width: 15px;" required>
        <label for="smsOtp">OTP on SMS</label>
    </div>

  
</div> -->

<!-- OTP input field (Initially hidden) -->
 <div class="col-md-12">
<div class="row" style="margin-left: -30px;">
    <div class="col-md-6" id="otpInputField" style="display:none;">
        <input type="text" class="form-control" id="otpInput" placeholder="Enter your OTP" required>
        <div id="otpErrorMessage" style="display: none; color: red; font-size: 12px; margin-top: -14px; margin-left:8px;">
           Invalid OTP
        </div>
        <div id="otpsent" style="display: none; color: green; font-size: 12px; margin-top: -14px; margin-left:8px;">
        OTP Sent! Please check your phone for the OTP.
        </div>
        <div id="otpverified" style="display: none; color: green; font-size: 12px; margin-top: -14px; margin-left:8px;">
            OTP Verified Successfully!
        </div>
    </div>

    <div class="col-md-6 text-end">
        <button type="button" class="btn btn-primary" id="getOtpBtn" style="height: 35px; font-size: 14px;">Generate OTP</button>
    </div>
</div>
</div>
<script>
    $(document).ready(function () {
        $(document).on('click', '#getOtpBtn, #verifyOtpBtn', function () {
            const buttonId = $(this).attr('id');
            // const isWhatsAppSelected = $('#whatsappOtp').is(':checked');
            // const isSmsSelected = $('#smsOtp').is(':checked');
            const phone_number = $('#hospitalphone').val();
            if(phone_number != ''){

                const hos_dup_phone = $('#hos_dup_phone').text().trim();
            const hos_dup_email = $('#hos_dup_email').text().trim();

            if (!hos_dup_phone) {
                if(!hos_dup_email){

            if (buttonId === 'getOtpBtn') {
                const otp = Math.floor(1000 + Math.random() * 9000);
                sessionStorage.setItem('otp', otp);
                // if (isWhatsAppSelected) {

                $(this).text('Verify OTP');
                $(this).attr('id', 'verifyOtpBtn');
                $('#otpInputField').show();


                    $.ajax({
                        url: 'register_validation_otp.php',
                        type: 'POST',
                        data: { otp: otp, phone_number: phone_number }, 
                        success: function (response) {
                            $('#otpsent').show();

                            console.log('WhatsApp OTP Sent: ', response);
                        },
                        error: function (error) {
                          
                        }
                    });
                
            } else if (buttonId === 'verifyOtpBtn') {
                // Verify the OTP
                const enteredOtp = $('#otpInput').val();
                const storedOtp = sessionStorage.getItem('otp');

                if (enteredOtp === storedOtp) {
                    $('#hospital_submit').prop('disabled', false);
                    $(this).text('Verified');
                    $('#otpsent').hide();
                    $('#otpverified').show();
                    $('#otpErrorMessage').hide();

                } else {

                    $('#otpsent').hide();
                    $('#otpErrorMessage').show();
                    $('#hospital_submit').prop('disabled', true);


                }
            }
        } else {
                    Swal.fire("Error", "Please enter a different email ID.", "error");
                }
            } else {
                Swal.fire("Error", "Please enter a different phone number.", "error");
            }
        }else{
            Swal.fire("Error", "Enter Your Phone Number.", "error");
        }
        });
    });
</script>



</div>



<div class="form-group col-md-6 mb-3">
    <button type="submit" id="hospital_submit" disabled name="submit" class="btn btn-primary btn-md" 
    style=" background-color: white; color: #06418f; border: 1px solid #c0d5f2;margin-left: -28px;margin-bottom: -33px;">
    Submit</button>
</div>
</div>

                              
                    </form>

    </div>
  </div>
</div>

            <form action="#"  id="loginwithotpcard" style="display:none;" method="POST">
					
<div class="form-group d-flex align-items-center" style="gap: 10px; flex-wrap: nowrap;">
  <input type="text" class="form-control" name="country" readonly style="width: 70px; height: 44px; text-align: center;" value="+91">
  <input id="phone1" type="text" class="form-control" placeholder="Phone Number" style="color: black; height: 44px; text-align: center;">
</div>

		<br>
		<input type="text" style="display:none; color: black; text-align:center;" id="otpField2" placeholder="Enter OTP" class="form-control input" >
		<div id="optloginspan" >! Invalid OTP</div>

			<br>
            <div class="fb-submit">
					<input type="button" name="submit" id="submit" class="login" onclick="showOtpFeld()" value="Get OTP">
					<input type="button" name="submit" id="otp" class="login" onclick="showOtpField()" value="Log In" style="margin-top: -15px;">
					<a href="#" target="_self" class="forgot" style="margin-top:-20px;">Forgotten password?</a>
					<div class="line"></div>
                    </div>
                    <div class="button" style="width: max-content;margin: auto;padding: 15px 0px 15px 0px;">
                    <!-- <button class="btn btn-primary" type="button" style="background: #42b72a;border-color: #42b72a;border-radius: 6px;font-weight: 600;height: 50px;width: 120px; margin-bottom:3px;" data-bs-toggle="modal" data-bs-target="#chooseAccountModal">Register</button> -->

                    <a href="#" data-bs-toggle="modal" data-bs-target="#chooseAccountModal" id="registerNewUserButton" class="create-new-acc register_btn">Register</a>


					<a href="#" target="_self"  class="create-new-acc loginWithUsernameButton" id="loginwithusername">Login with Username</a>
                    </div>
				</form>


        </div>
    </div>


 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


   
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add User Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form action="add_otp_user_code.php" method="POST" style="max-width:fit-content !important;">
<label for="" style="font-size: 28px;">Personal Details</label>
<div class="widget-area-2 proclinic-box-shadow card" style="border-radius: 15px;margin-top: -6px;">
                            <div class="table-responsive mb-3" >
                         


    <div class="col-md-12">
        <div class="row">
        <div class="col-md-6" style="margin-top:7px;">

        <label style="font-weight:bold;">Name</label>
                
                <div class="input-group mb-3">
<div class="input-group-prepend">
</div>

<input type="text" class="form-control" name="user_username" required  placeholder=" Enter Name">
</div>
          
</div>



<script>
   


        function capitalizeWords(input) {
            const words = input.value.split(' ');
            for (let i = 0; i < words.length; i++) {
                words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1).toLowerCase();
            }
            input.value = words.join(' ');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const doctorNameInput = document.querySelector('input[name="doctor_name"]');
            doctorNameInput.addEventListener('keyup', function() {
                capitalizeWords(doctorNameInput);
            });
        });
    </script>
 
        <div class=" col-md-3" style="margin-top: 7px;" >
            <label for="patient-name" style="font-weight:bold;"> Age </label>
            <input type="text" class="form-control"  name="patage" placeholder=" Enter AGE" id="patientage">
            <div class="row">
                <div class="col-md-6" style="display:inherit; margin-top:3px;">
                        
                     <input type="radio" value="age" checked style="height: 10px;margin-top: 6px;" name="dobage"   id="ageradio"><span for="ageradio" style="font-size:10px;margin-top: 4px;">AGE</span>&nbsp;

                     <input type="radio" value="dob" style="height: 10px;margin-top: 6px;"    name="dobage" id="dobradio"><span for="dobradio" style="font-size:10px;margin-top: 4px;">DOB</span>&nbsp;

                </div>
            </div>
        </div>

                     <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script>
        $(document).ready(function() {
            function checkRadioValue() {
                var selectedValue = $('input[name="dobage"]:checked').val();
                if(selectedValue === "dob"){
                    $('#patientage').prop('readonly', true);
                    $('#patientage').val('');
                    $('#patientdob').prop('readonly', false);
                } else {
                    $('#patientage').prop('readonly', false);
                    $('#patientdob').prop('readonly', true);
                    $('#patientdob').val(' ');
                }
                console.log("Selected value: " + selectedValue);
            }

            $('#dobradio').change(checkRadioValue);
            $('#ageradio').change(checkRadioValue);
        });
    </script>

                                                    <div class=" col-md-3" style="margin-top: 7px;" >
                                                    <label for="patient-name" style="font-weight:bold;"> Date of Birth </label>
                                                        <input type="date" class="form-control" name="patdob" placeholder="Patient DOB" readonly id="patientdob">
                                                   
                                                    </div>

<div class="col-md-6">
    <label for="" style="font-weight:bold;">Gender</label>
    <select name="gender" class="form-control" id="gender">
        <option >Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
    </select>
</div>

<div class="col-md-6" >
<label style="font-weight:bold;">Phone Number</label>

<div style="display:flex;">
     <script>
     function setDefaultCountry(userCountry) {
            var selectElement = document.getElementById("countrypopup");
            var options = selectElement.options;

            for (var i = 0; i < options.length; i++) {
                // alert(1);
                if (options[i].value === userCountry) {
                    options[i].selected = true;
                    break;
                }
       }
}

</script>
     <input type="text" name="countrypopupinput" id="countrypopupinput" value="+91" readonly style="width:60px; height:auto; margin-right:10px;">


    <input type="text" class="form-control"  style="height:auto;" id="phone2" name="phone" placeholder="Enter Phone number" readonly>
</div>
</div>


</div>
<style>
    .select2-container{
        width: -webkit-fill-available !important;
    }
</style>
<div class="row">
<div class="col-md-6">
<label style="font-weight:bold;">Email</label>
    <input type="text" class="form-control" style="" name="email" placeholder="Enter Email">
</div>
</div> 
</div>
</div>
</div>
     <!-- Back to Top -->
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     <script>
                $(".js-example-basic-multiple-limit").select2({
                    tags: true,
                    placeholder: "Select Specialization",
                    



});
             </script>

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.countrystatecity.in/v1/countries',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => array(
    'X-CSCAPI-KEY: Z3JlSnNtUUxReGJJZjV6M1pQcDlrRlNBT0hZdk9yYWRyQXJtMzhVQQ=='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$data_country = json_decode($response,true); // Decode as associative array


?>

<label for="" style="font-size: 28px;margin-top: 21px;">Contact Details</label>
<div class="widget-area-2 proclinic-box-shadow card" style="border-radius: 15px;margin-top: -7px;padding: 25px;">
    <div class="row" >
        <div class="col-md-12">

    <fieldset style="border: 1px solid #1d76d1;border-radius: 10px; padding-right:20px; margin-bottom:24px;">
        <legend style="font-size: 15px;width: 62px;margin-left: 13px; margin-top:-14px; background-color:white;"> &nbsp;Address</legend>
        <div class="row ml-1">
            <!-- <div class="col-md-4 form-group ">
                 <label for="" style="font-weight:bold; width:127px;">Select Country</label>
                 <select name="country-dependent"  id="country_dependent" class="form-control">
                    <option value="">Select Country</option>
                        <?php
                    foreach ($data_country as $datas) {
                        if($datas['iso2'] == $data['doctor_country']){
                        ?>

                        <option selected value="<?php echo $datas['iso2']; ?>"><?php echo $datas['name']; ?></option>
                        <?php
                    }
                    else{?>
                        <option  value="<?php echo $datas['iso2']; ?>"><?php echo $datas['name']; ?></option>
                    <?php
                        }
                    }
                        ?>
                
    </select>
</div> -->
<div class="col-md-6 form-group" >
    <label for="" style="font-weight:bold;">Select State</label>
<select name="statebycountry"  class="form-control" id="statebycountry2">
<option value="">Select State</option>

</select>
</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->


<script>
        $(document).ready(function() {
                var country_iso = 'IN';
                if (country_iso != '') {
                    $.ajax({
                        url: 'patient/state_ajax.php',
                        method: 'POST',
                        data: { country_iso: country_iso },
                        success: function(data) {
                            $('#statebycountry2').empty();
                            $('#statebycountry2').append('<option value="">Select State</option>');

                            var states = JSON.parse(data);
                            states.sort(function(a, b) {
                            var stateA = a.name.toUpperCase();
                            var stateB = b.name.toUpperCase();
                            if (stateA < stateB) {
                                return -1;
                            }
                            if (stateA > stateB) {
                                return 1;
                            }
                            return 0;
                        });
                            $.each(states, function(index, state) {
                                $('#statebycountry2').append(
                                    $('<option>', {
                                        value: state.iso2,
                                        text: state.name
                                    })
                                );
                            });
                        }
                    });
                } else {
                    $('#statebycountry2').empty();
                    $('#statebycountry2').append('<option value="">Select State</option>');
                }
        });
    </script>


<div class=" col-md-6 form-group" style="margin-top: 0px;">
    <label for="" style="font-weight:bold;">Select City</label>
<select name="citybystate"  class="form-control" id="citybystate2">
<option value="">Select City</option>


</select>
</div>



<script>
        $(document).ready(function() {
            $('#statebycountry2').change(function() {
                var country_iso = 'IN';
                var state_iso = $(this).val();
                if (country_iso != '') {
                    $.ajax({
                        url: 'patient/city_ajax.php',
                        method: 'POST',
                        data: { country_iso: country_iso, state_iso:state_iso },
                        success: function(data) {
                            $('#citybystate2').empty();
                            $('#citybystate2').append('<option value="">Select City</option>');

                            var states = JSON.parse(data);

                            $.each(states, function(index, state) {
                                $('#citybystate2').append(
                                    $('<option>', {
                                        value: state.name,
                                        text: state.name
                                    })
                                );
                            });
                        }
                    });
                } else {
                    $('#citybystate2').empty();
                    $('#citybystate2').append('<option value="">Select City</option>');
                }
            });
        });
    </script>
 <div class="form-group col-md-6">
                                                        <label for="phone" style="font-weight:bold;">Location</label>
                                                        <textarea placeholder=" Enter Location" class="form-control"
                                                            name="doctor_location" id="exampleFormControlTextarea2"
                                                            rows="3"></textarea>
                                                    </div>


        <div class="col-md-6" >
        <label style="font-weight:bold">Address</label>
        <textarea type="text" class="form-control" rows="3" name="address" placeholder="Enter Address"  ></textarea>
        </div>
        </div>
    </fieldset>
 
</div>
<div class="col-md-12" style=" margin-bottom:24px;" >

        <label style="font-weight:bold;">Details</label>
        <textarea type="text" class="form-control" rows="11"  maxlength="1500"  name="details"  ></textarea>

    </div>
<div class="col-md-6" style="margin-bottom:24px;" >

<label style="font-weight:bold">Username</label>
<input type="text" class="form-control" id="popupusername" required name="user_name" placeholder="Enter User Name" >
<span id="usernamespan" style="font-size:11px;color:red;"></span>
</div>

<div class="col-md-6" >

    <label style="font-weight:bold">Password</label>
    <input type="password" class="form-control" id="password2" required  placeholder="Enter Password" >
</div>

<div class="col-md-6" >

<label style="font-weight:bold">Confirm Password</label>
<input type="password" class="form-control" id="confirmpassword2" required  name="user_password" placeholder="Enter Confirm Password" >
<span id="passwordMatch"></span>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
                  <script>
$(document).ready(function() {
    $('#confirmpassword2').on('keyup', function() {
    
        var password = $('#password2').val();
        var confirmPassword = $('#confirmpassword2').val();
        // console.log(password);
        // console.log(confirmpassword);
        if (password == confirmPassword) {
            $('#passwordMatch').html('Passwords match').css('color', 'green');
            $('#submitbtn').prop('disabled', false);
            $('#submitbtn').css('cursor','pointer');
        } else {
            $('#passwordMatch').html('Passwords do not match').css('color', 'red');
            $('#submitbtn').prop('disabled', true);
            $('#submitbtn').css('cursor','not-allowed');
        }
    });
});

$('#popupusername').on("keyup", function() {
    var username = $(this).val();
    if (username !== '') {
        $.ajax({
            url: "check_username.php",
            type: "POST",
            data: { username: username },
            dataType: "json",
            success: function(response) {
                console.log(response); // Debugging: Log the full response
                if (response.status === "taken") {
                    $('#usernamespan').html("Username Already Exists");
                    $('#submitbtn').attr('disabled', true);
                } else if (response.status === "available") {
                    $('#usernamespan').html("");
                    $('#submitbtn').attr('disabled', false);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", error);
                console.log("Response Text:", xhr.responseText); // Log full response
            }
        });
    }
});



</script>
        </div>
        <br>
    </div>
    <div class="col-md-12" style="margin-left: -16px;margin-top: 17px;">
        <button class="btn btn-primary" id="submitbtn" type="submit"  name="submit">Submit</button>
    </div>
</form>
      </div>
      
    </div>
  </div>
  

  
</div>



    <script>
		function showOtpFeld(){
			var country = document.getElementById('country').value;

			var phone= document.getElementById('phone1').value;
// alert(phone);
			if(country !=='' && phone !==''){
			$('#otpField2').css('display','block');
			// alert(phone);
			$.ajax({
                        url: 'otplogincode.php',
                        method: 'POST',
                        data: {
                            country: country, phone: phone
                        },
                        success: function(data) {
                            //alert(data);
                                   console.log(data);                         
                        }

                        
                    });

            }else{
                console.log("All fields are rquired");
            }

		}
		
        function showOtpField() {
    var otp = document.getElementById('otpField2').value;
    var phone = $('#phone1').val();

    if (otp !== '') {
        $.ajax({
            url: "otplogincode.php",
            type: "POST",
            data: { otp_enter: otp },
            success: function(response) {
                console.log(response);
                let data = JSON.parse(response);

                if (data.length > 0 && data[0].success === false) {
                    $('#staticBackdrop').modal('show');
                    $('#phone2').val(phone);
                } else if (data[0].success === true) {
                    if (data[0].username && data[0].password) {
                        let url = 'account_switch.php?user_type_name=' + data[0].user_type +
                            '&user_name=' + encodeURIComponent(data[0].username) +
                            '&user_password=' + encodeURIComponent(data[0].password) +
                            '&user_id=' + data[0].user_id;

                        if (data[0].is_refrence == 1) {
                            url += '&is_ref=1';
                        }

                        window.location.href = url;
                    } else {
                        window.location.href = 'dashboard/patient_dashboard.php';
                    }
                } else {
                    $('#optloginspan').css('display', 'block');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('AJAX error: ' + textStatus + ' : ' + errorThrown);
            }
        });
    }
}


	</script>


    <script>
  document.getElementById('loginwithotp').addEventListener('click', function() {
    var loginWithUsernameCard = document.getElementById('loginwithusernamecard');
    var loginWithOtpCard = document.getElementById('loginwithotpcard');

    // Add the flip-out animation to the username card
    loginWithUsernameCard.classList.add('animate__animated', 'animate__flipOutY');

    // When animation ends, switch to OTP card
    loginWithUsernameCard.addEventListener('animationend', function() {
      loginWithUsernameCard.style.display = 'none'; // Hide the username card
      loginWithOtpCard.style.display = 'block'; // Show the OTP card
      loginWithOtpCard.classList.add('animate__animated', 'animate__flipInY', 'animate__faster'); // Add flip-in animation
	  loginWithUsernameCard.classList.remove('animate__animated', 'animate__flipInY', 'animate__faster', 'animate__animated', 'animate__flipOutY')
    }, { once: true });
  });

  document.getElementById('loginwithusername').addEventListener('click', function() {
    var loginWithUsernameCard = document.getElementById('loginwithusernamecard');
    var loginWithOtpCard = document.getElementById('loginwithotpcard');

    // Add the flip-out animation to the OTP card
    loginWithOtpCard.classList.add('animate__animated', 'animate__flipOutY');

    // When animation ends, switch back to username card
    loginWithOtpCard.addEventListener('animationend', function() {
      loginWithOtpCard.style.display = 'none'; // Hide the OTP card
      loginWithUsernameCard.style.display = 'block'; // Show the username card
      loginWithUsernameCard.classList.add('animate__animated', 'animate__flipInY', 'animate__faster'); // Add flip-in animation
	  loginWithOtpCard.classList.remove('animate__animated', 'animate__flipInY', 'animate__faster', 'animate__animated', 'animate__flipOutY')

    }, { once: true });
  });
</script>

            <!-- Adstera Ad starts -->
            <!-- <script async="async" data-cfasync="false" src="//pl25644354.profitablecpmrate.com/9cc239aa2d2ab05001247ed2932b9200/invoke.js"></script> -->
            <!-- <div id="container-9cc239aa2d2ab05001247ed2932b9200"></div> -->
            <!-- Adstera Ad ends -->  

    <footer>
        <div class="footer-langs">
        
            <ol>
            <li><a href="index.php" target="_self">Sign Up</a></li>
				<li><a href="index.php" target="_self">Log In</a></li>
				<li><a href="home.html" target="_self">Home</a></li>
				<li><a href="https://medprone.com/who-we-are.html" target="_self">About Us</a></li>
				<li><a href="https://medprone.com/features.html" target="_self">Features </a></li>
				<li><a href="https://medprone.com/organization.html" target="_self">Organization </a></li>
				<li><a href="https://medprone.com/open-jobs.html" target="_self">Open Jobs</a></li>
				<li><a href="https://medprone.com/channel-partner.html" target="_self">Channel Partner</a></li>
				<li><a href="https://medprone.com/reseller.html" target="_self">Reseller</a></li>
				<li><a href="https://medprone.com/investor-relations.html" target="_self">Investor Relation</a></li>
				<li><a href="https://medprone.com/why-invest-in-MedProne.html" target="_self">Why Invest in Medprone?</a></li>
				<li><a href="https://medprone.com/hospital-management-system.html" target="_self">Hospital Management</a></li>
				<li><a href="https://medprone.com/clinic-management-system.html" target="_self">Clinic Management</a></li>
				<li><a href="https://medprone.com/financial-management-system.html" target="_self">Financial Management</a></li>
				<li><a href="https://medprone.com/labrotary-management-system.html" target="_self">Labrotary Management</a></li>
				<li><a href="https://medprone.com/inpatient-management-system.html" target="_self">Inpatient Management</a></li>
				<li><a href="https://medprone.com/outpatient-management-system.html" target="_self">Outpatient Management</a></li>
				<li><a href="https://medprone.com/operation-theatre-management-system.html" target="_self">Operation Theatre Management</a></li>
				<li><a href="https://medprone.com/materials-management-system.html" target="_self">Materials Management</a></li>
				<li><a href="https://medprone.com/nursing-management-system.html" target="_self">Nursing Management</a></li>
				<li><a href="https://medprone.com/pharmaceutical-management-system.html" target="_self">Pharmaceutical Management</a></li>
				<li><a href="https://medprone.com/radiology-management-system.html" target="_self">Radiology Management</a></li>
				<li><a href="https://medprone.com/phatology-management-system.html" target="_self">phatology Management System</a></li>
				<li><a href="https://medprone.com/blog.html" target="_self">Blogs</a></li>
				<li><a href="https://medprone.com/contact.html" target="_self">Contact Us</a></li>
            </ol>
            <small>Medprone © 2024</small>
        </div>
    </footer>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>