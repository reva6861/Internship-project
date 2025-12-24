<?php
		include "../database/db.php";
		// include "../database/auth.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Receptionist- Hospital Medprone</title>
    <!-- Fav  Icon Link -->
    <link rel="shortcut icon" type="image/png" href="../images/fav.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- themify icons CSS -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- Animations CSS -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/doctorcolor.css" id="style_theme">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../images/medprone_favicon.png" type="image/x-icon">
    <!-- morris charts -->
    <link rel="stylesheet" href="../charts/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../css/jquery-jvectormap.css">
    <link rel="stylesheet" href="../datatable/dataTables.bootstrap4.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (needed for collapse to work) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="../js/modernizr.min.js"></script>
    <style>
    .gradientbutton {
        background: white !important;
        color: #06418f !important;
        font-weight: 600 !important;
        border: 1px solid #c0d5f2 !important;
        /* font-size: 13px !important; */
    }

    .file-upload-container {
        text-align: center;
    }

    .file-upload-label {
        font-size: 16px;
        margin-bottom: 10px;
        color: #555;
    }

    .file-upload-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .file-upload-button {
        border: none;
        background-color: #95bde6;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-size: 14px;
        display: flex;
        align-items: center;
    }

    .file-upload-button:hover {
        background-color: #2980b9;
    }

    #file-name {
        margin-top: 10px;
        font-size: 14px;
        color: #333;
    }

    .file-input {
        display: none;
    }

    .file-icon {
        margin-right: 10px;
    }

    .non-crop {
        display: block;
        max-width: 100%;
    }

    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }

    .modal-lg {
        /* max-width: 540px !important; */
        width: fit-content !important;
    }
    </style>
</head>

<body>
    <!--/Pre Loader -->
    <div class="wrapper">
        <?php
			include "../header/header.php";
	$sql_salutation = "SELECT * FROM salutation";
	$result_salutation = mysqli_query($conn, $sql_salutation);

    $hospital_id = $_SESSION['auth_user']['client_id'];
    $sql_no_of_recep = "SELECT COUNT(*) AS recep_count FROM users WHERE user_type_id = 1 AND hospital_id = '$hospital_id'";
    $r_recep_limit = mysqli_query($conn, $sql_no_of_recep);

$f_recep_limit = mysqli_fetch_assoc($r_recep_limit);
$no_of_recep = $f_recep_limit['recep_count'];
	
	?>
        <!-- Breadcrumb -->
        <!-- Page Title -->
        <div class="row no-margin-padding">
            <div class="col-md-12" style="display:flex; ">
                <h3 class="block-title">Add Receptionist</h3>
                <a href="view_receptionist.php"><button class="btn gradientbutton"
                        style=" margin-right:19px;color:white; height:fit-content; ">Receptionist List</button></a>


                <!-- <div class="col-md-3"> -->

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../dashboard/dashboard.php">
                            <span class="ti-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Receptionist</li>
                    <li class="breadcrumb-item active">Add Receptionist</li>
                </ol>
            </div>
            <!-- </div> -->
        </div>
        <!-- /Page Title -->

        <!-- /Breadcrumb -->
        <!-- Main Content -->
        <div class="container-fluid">

            <div class="row">
                <!-- Widget Item -->
                <div class="col-md-12">
                    <div class="widget-area-2 proclinic-box-shadow" style="border-radius:15px;">
                        <div style="display:flex; justify-content:space-between;">
                        

                        </div>
                        <form method="post" action="add_receptionist_code.php" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Receptionist-info">Receptionist Information</label>
                                    <div class="input-group">
                                        <div style="width:80px;" class="custom-dropdown">
                                            <select class="form-control custom-select"
                                                style="height:39px; width:fit-content;" name="user_title_id"
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
                                        <input type="text" class="form-control" style="margin-left:14px;"
                                            name="user_name" required placeholder="Receptionist name" id="user-name">
                                    </div>

                                </div>
                                <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var inputField = document.getElementById('user-name');

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
                                <label for="">Dob</label>
                                <input type="date" name="user_age" class="form-control">
                                </div>

                                <script
                                    src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js">
                                </script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
                                </script>

                                <div class="form-group col-md-6">
                                    <label for="phone">Phone Number</label>
                                    <div style="display:flex;">
    

                              
<input type="text" class="form-control"  style="width:50px; height:42px; margin-right:20px;" id="country" required  name="country" value="+91" readonly> 

                                            <input type="text" placeholder="Phone" style="height:auto;" required
                                                name="user_phone" class="form-control" id="phone">
                                    </div>
                                </div>
                                <script>
                              
                                </script>



                                <script>
                                document.getElementById('phone').addEventListener('keypress', function(event) {
                                    // Get the character code of the pressed key
                                    var charCode = event.charCode || event.keyCode;
                                    // Allow only numeric characters (0-9)
                                    if (charCode < 48 || charCode > 57) {
                                        event.preventDefault();
                                    }
                                });
                                </script>


                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" placeholder="email" name="user_email" class="form-control"
                                        id="Email">
                                </div>
                                <script>
                                document.getElementById('Email').addEventListener('input', function() {
                                    var emailInput = this.value.trim();
                                    var atIndex = emailInput.indexOf('@');
                                    var dotIndex = emailInput.lastIndexOf('.');

                                    // Check if "@" is present and it is not the first or last character
                                    if (atIndex < 1 || atIndex === emailInput.length - 1) {
                                        this.setCustomValidity('Please enter a valid email address.');
                                    } else if (dotIndex < atIndex || dotIndex === emailInput.length - 1) {
                                        // Check if "." is present after "@" and it is not at the end of the string
                                        this.setCustomValidity('Please enter a valid email address.');
                                    } else {
                                        this.setCustomValidity('');
                                    }
                                });
                                </script>

                                <!-- <div class="row"> -->
                                <div class="form-group col-md-6">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="user_gender">

                                    </select>
                                </div>
<?php
        $sql_t="select * from user_type";
        $result_t=mysqli_query($conn,$sql_t);
       
        
?>
                                <div class="form-group col-md-6">
    <label for="gender">Receptionist Module</label>
    <select hidden class="form-control" id="user_type_select" required name="user_type_id" onchange="checkReceptionistType()">
        <option value="" disabled selected >Select Receptionist Module</option>
        
        <?php while($fetch = mysqli_fetch_assoc($result_t)) {

            if($fetch['user_type_name'] != "Pharmacist"){
            if($fetch['user_type_name'] == "Receptionist" || $fetch['user_type_name'] == "Pharmacist"){
            ?>
            <option value="<?php echo $fetch['user_type_id']; ?>"><?php echo $fetch['user_type_name']; ?></option>
        <?php }}} ?>
    </select>
    <br><button data-bs-toggle="collapse" data-bs-target="#collapseExample" class="btn-info">Select Receptionist Module</button>
         
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<style>
    .bootstrap-select{
        width: -webkit-fill-available !important;
    }
</style>

<?php

        $sql_d="select * from hospital_vs_doctor as hd join doctor  as d on d.doctor_id=hd.doctor_id where hd.hospital_id='$hospital_id' AND (hd.relieving_date >= CURDATE() OR hd.relieving_date ='NULL')";
        $result_d=mysqli_query($conn,$sql_d);
        $doctor_array=array();
        if(mysqli_num_rows($result_d) > 0)
        {
            while($fetch_d=mysqli_fetch_assoc($result_d))
            {
                $doctor_array[]=$fetch_d;
            }
        }
?>
                                <div class="form-group col-md-6">
                                    <label for="gender">Select Doctor</label>
                                  <!-- Select dropdown -->
                        <input type="hidden" class="selcteddoctorid" name="doctors_id">
                                   <div class="col-md-12" style="padding-left: 0;">
<select class="selectpicker" multiple required>
    <?php
    if (count($doctor_array) > 0) {
        if (count($doctor_array) == 1) {
            // If there's only one doctor, automatically select it
            $doctor_data = $doctor_array[0]; // Get the first (and only) doctor

            $dctorid=$doctor_data['doctor_id'];
            $sql_u="select * from users as u join doctor as d on d.doctor_user_id = u.user_id where d.doctor_id = $dctorid ";
            $result_u=mysqli_query($conn,$sql_u);
            $fetch_u=mysqli_fetch_assoc($result_u);
            $doctor_name=$fetch_u['user_username'];

            ?>
            <option value="<?php echo $doctor_data['doctor_id'] ?>" selected><?php echo $doctor_name; ?></option>
        <?php
        } else {
            // If there are multiple doctors, list them without selecting
            foreach ($doctor_array as $doctor_data) { 
                $dctorid=$doctor_data['doctor_id'];
                $sql_u="select * from users as u join doctor as d on d.doctor_user_id = u.user_id where d.doctor_id = $dctorid ";
                $result_u=mysqli_query($conn,$sql_u);
                $fetch_u=mysqli_fetch_assoc($result_u);
                $doctor_name=$fetch_u['user_username'];
                ?>
                <option value="<?php echo $doctor_data['doctor_id'] ?>"><?php echo $doctor_name; ?></option>
            <?php }
        }
    } else { ?>
        <option value="" selected>No doctors available</option>
    <?php }
    ?>
</select>

                                </div>

                                <script>
$(document).ready(function(){

    // $('.selectpicker').on('change', function () {
        // Get the selected values as an array
        var selectedValues = $('.selectpicker').val();
        
        // Convert the array to a comma-separated string
        var selectedValuesString = selectedValues ? selectedValues.join(',') : '';

        // Print the comma-separated values to the console
        $('.selcteddoctorid').val(selectedValuesString);
        // console.log("Selected values:", selectedValuesString);
    // });

    // Capture the selected values whenever the selection changes
    $('.selectpicker').on('change', function () {
        // Get the selected values as an array
        var selectedValues = $(this).val();
        
        // Convert the array to a comma-separated string
        var selectedValuesString = selectedValues ? selectedValues.join(',') : '';

        // Print the comma-separated values to the console
        $('.selcteddoctorid').val(selectedValuesString);
        // console.log("Selected values:", selectedValuesString);
    });
});

</script>
                                </div>

                                
<!-- <div class="col-md-6" id="collapsediv" style="display:none;"> -->
    <div class="collapse col-md-6" id="collapseExample">
        <div class="card card-body">
            <div class="row">
                <div class="col-md-11">
            <h3 class="widget-title" style="font-size: x-large;">Receptionist Module</h3>
            </div>
            <div class="row" style="padding: 10px 1px 1px 22px;">
        <div class="col-md-12">
            <label><input type="checkbox" name="options[]" value="appointment"> Appointment</label>
        </div>
        <div class="col-md-12">
            <label><input type="checkbox" name="options[]" value="payment"> Payment</label>
        </div>
        <div class="col-md-12">
            <label><input type="checkbox" id="prescription" name="options[]" value="prescription" onchange="checkPrescription()"> Prescription</label>
        </div>
<!-- 
        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="uploadrx" onchange="validatePrescription()">Uploaded Rx</label>
        </div> -->

        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="cheifcompalint" onchange="validatePrescription()"> Chief Complaint</label>
        </div>
        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="examination" onchange="validatePrescription()"> Examination</label>
        </div>
        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="diagnosis" onchange="validatePrescription()"> Diagnosis</label>
        </div>
        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="medication" onchange="validatePrescription()"> Medication</label>
        </div>
        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="procedure" onchange="validatePrescription()"> Procedure</label>
        </div>
        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="investigation" onchange="validatePrescription()"> Investigation</label>
        </div>
        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="advice" onchange="validatePrescription()"> Advice</label>
        </div>
        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="attachments" onchange="validatePrescription()"> Attachments</label>
        </div>
        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="followup" onchange="validatePrescription()"> Follow Up</label>
        </div>
        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="medicalbackground" onchange="validatePrescription()"> Medical Background</label>
        </div>
        <div class="col-md-8" style="margin-left: 50px;">
            <label><input type="checkbox" class="prescription-child" name="options[]" value="pastvisits" onchange="validatePrescription()"> Past Visits</label>
        </div>
        
       
    </div>
            </div>
            
        </div>
    </div>

<script>
function checkPrescription() {
    var prescription = document.getElementById("prescription");
    var children = document.querySelectorAll(".prescription-child");
    
    if (prescription.checked) {
        children.forEach(child => {
            child.checked = true;
        });
    }else{
        children.forEach(child => {
            child.checked = false;
        });
    }
}

function validatePrescription() {
    var prescription = document.getElementById("prescription");
    var children = document.querySelectorAll(".prescription-child");
    var allChecked = true;
    
    children.forEach(child => {
        if (!child.checked) {
            allChecked = false;
        }
    });
    
    prescription.checked = allChecked;
}
</script>
<!-- </div> -->
<script>
function checkReceptionistType() {
    var selectElement = document.getElementById('user_type_select');
    var selectedValue = selectElement.options[selectElement.selectedIndex].text.toLowerCase();

    if (selectedValue === 'receptionist') {
        $('#collapseExample').collapse('show'); // Ensure it's shown
        $('#collapsediv').css('display', 'block');
    } else {
        $('#collapseExample').collapse('hide'); // Ensure it's hidden
        $('#collapsediv').css('display', 'none');
    }
}

// Optionally, you can attach this function to the onchange event of the select element
document.getElementById('user_type_select').addEventListener('change', checkReceptionistType);


</script>
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


                                <div class="form-group col-md-6">
                                   
                                   <label for="">Receptionist Address</label>
                                  <textarea name="user_address" class="form-control" id="" placeholder="Enter Address"></textarea>
                                </div>
<div class="col-md-3 form-group" >
    <label for="">Joining Date</label>
    <input type="date" class="form-control" placeholder="Enter Joining date" required name="joining_date">
</div>
<div class="col-md-3 form-group" >
    <label for="">Relieving Date</label>
    <input type="date" class="form-control" placeholder="Enter Relieving Date" name="relieving_date">
</div>

                                <script>
                                $(document).ready(function() {
                                    $('#country_dependent').change(function() {
                                        var country_iso = $(this).val();
                                        if (country_iso != '') {
                                            $.ajax({
                                                url: '../patient/state_ajax.php',
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
                                });
                                </script>


                                <script>
                                $(document).ready(function() {
                                    $('#statebycountry').change(function() {
                                        var country_iso = $('#country_dependent').val();
                                        var state_iso = $(this).val();
                                        if (country_iso != '') {
                                            $.ajax({
                                                url: '../patient/city_ajax.php',
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
<div class="col-md-6 form-group" >
    <label for="">Receptionist-User-Name</label>
    <input type="text" class="form-control" placeholder="Enter Receptionist-User-Name" id="usernamecheck" required name="username">
    <span id="usernamespan" style="color:red;font-size:12px;"></span>
</div>
<script>
    $('#usernamecheck').on("keyup",function(){
        var username = $(this).val();
        console.log(username);
        if(username !== '')
    {
        $.ajax({
            url:'check_user.php',
            type:'POST',
            data:{username:username},
            success :function(data){
            
               if(data == '1')
               {
                $('#usernamespan').html('Receptionistname Already Exist !');
                $('#usernamespan').css('color','red');

                $('#submitbutton').attr('disabled',true);
               }else{
                $('#usernamespan').html('Receptionistname Available');
                $('#usernamespan').css('color','green');
                $('#submitbutton').attr('disabled',false);
               }
            }

        })
    }else{
        $('#usernamespan').html(' ');
        $('#submitbutton').attr('disabled',false);
    }
    })
</script>
<div class="col-md-6 form-group" >
    <label for="">Password</label>
    <input type="password" class="form-control" placeholder="Enter Password" required name="password">
</div>


                                <div class="" style="margin-top:28px; margin-left:10px;">
                                    <div class="file-upload-label">Upload Profile Picture</div>
                                    <div class="">
                                        <label for="file-input" class="file-upload-button"
                                            style="display:inline-block;">
                                            <span class="file-icon">📁</span>Choose File
                                        </label>
                                        <input type="file" name="fileupload" id="file-input" class="file-input"
                                            onclick="displayFileName()">
                                        <div id="file-name"></div>
                                    </div>
                                </div>
            
                            </div>
                            <div class="form-group col-md-6" style="display: flex; align-items: center;">
                            <input type="checkbox" style="margin: 0 8px 0 0;" name="invoicecheckbox"> <span style="font-weight: bold;">Send Invoice On Whatsapp</span>                    
            </div>
           
                            <script>
                            function displayFileName() {
                                const accountType = "<?php echo $account_type; ?>"; 
    const fileInput = document.getElementById('file-input');
    const fileNameDisplay = document.getElementById('file-name');
    
    if (accountType === 'free') {
        fileInput.value = ''; 
        fileInput.disabled = true; 

        Swal.fire({
            title: 'Upload Restricted',
            text: 'Uploading prescriptions is not available for free accounts. Upgrade to Premium to unlock this feature.',
            icon: 'warning',
            showCancelButton: true, 

            confirmButtonText: 'Upgrade to Premium',
            cancelButtonText: 'Close',

            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33'

        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'premium-plan.html';
            }else{
                fileInput.disabled = false;

            }
        });
    } else {
        if (fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
            fileNameDisplay.textContent = `${fileName}`;
        }
    }
                            }


                            window.onload = function() {
                                document.getElementById('username').value = '';
                                document.getElementById('password').value = '';
                            };
                            </script>
                            <div class="form-group col-md-6 mb-3">
                                <input type="submit" id="submitbutton" name="submit" class="btn gradientbutton btn-primary btn-lg"
                                    value="Submit">
                            </div>
                            <script>
    document.getElementById("user_type_select").addEventListener("change", function(event) {
        var account_type = "<?php echo $account_type; ?>";
        const selectElement = document.getElementById("user_type_select").value;
        var no_of_recep = "<?php echo $no_of_recep; ?>";

        if (account_type == 'free' && selectElement == 1 && no_of_recep >= 1) {
            document.getElementById("collapseExample").style.display = "none";
            document.getElementById("submitbutton").disabled = true;

            Swal.fire({
                title: 'Limit Reached',
                text: 'Max 1 Receptionist can be onboarded for free accounts. Upgrade to Premium.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Upgrade',
                cancelButtonText: 'Close',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '#'; // Redirect to Premium plan page
                }
            });
        } else if (account_type == 'free' && selectElement == 2) {
            document.getElementById("submitbutton").disabled = true;

            Swal.fire({
                title: 'Limit Reached',
                text: 'No pharmacist can be created in free accounts. Upgrade to Premium.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Upgrade',
                cancelButtonText: 'Close',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '#'; // Redirect to Premium plan page
                }
            });
        }
    });
</script>

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js">
                            </script>
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                            <!-- <script src="https://unpkg.com/dropzone"></script> -->
                            <!-- <script src="https://unpkg.com/cropperjs"></script> -->
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

                            <input type="hidden" name="image_upload" id="image_upload">
                            <script>
                            $(document).ready(function() {



                                var $modal = $('#modal');
                                var image = document.getElementById('sample_image');
                                var cropper;

                                $('#file-input').change(function(event) {
                                    // alert("hello");
                                    var files = event.target.files;
                                    var done = function(url) {
                                        image.src = url;
                                        $modal.modal('show');
                                    };


                                    if (files && files.length > 0) {

                                        reader = new FileReader();
                                        reader.onload = function(event) {
                                            done(reader.result);
                                        };
                                        reader.readAsDataURL(files[0]);
                                    }
                                });

                                $modal.on('shown.bs.modal', function() {
                                    cropper = new Cropper(image, {
                                        aspectRatio: 1,
                                        viewMode: 3,
                                        preview: '.preview'
                                    });
                                }).on('hidden.bs.modal', function() {
                                    cropper.destroy();
                                    cropper = null;
                                });

                                $("#crop").click(function() {
                                    canvas = cropper.getCroppedCanvas({
                                        width: 400,
                                        height: 400,
                                    });

                                    canvas.toBlob(function(blob) {
                                        //url = URL.createObjectURL(blob);
                                        var reader = new FileReader();
                                        reader.readAsDataURL(blob);
                                        reader.onloadend = function() {
                                            var base64data = reader.result;

                                            var formData = new FormData();

                                            formData.append('fileupload', base64data);
                                            // alert("hello");
                                            $('#image_upload').val(base64data);
                                            $modal.modal('hide');
                                        }
                                    });
                                });
                                $('#ajax-button').click(function() {

                                });

                            });
                            </script>


                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" style="z-index:10000;"
                                aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel">Crop Image Before Upload</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="img-container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <img src="" class="non-crop" id="sample_image"
                                                            style="max-width:100%; max-height:450px; " />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="preview"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary gradientbutton"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary gradientbutton"
                                                id="crop">Crop</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                            // Store the current scroll position before reloading
                            sessionStorage.setItem('scrollPosition', window.pageYOffset);

                            // Reload the page

                            // After the page reloads, restore the scroll position
                            window.onload = function() {
                                var scrollPosition = sessionStorage.getItem('scrollPosition');
                                if (scrollPosition !== null) {
                                    window.scrollTo(0, scrollPosition);
                                    sessionStorage.removeItem('scrollPosition');
                                }
                            };
                            </script>

                            <script>
                            
                            </script>
                    </div>
                    </form>

                </div>
            </div>
            <!-- /Widget Item -->
        </div>
        <?php
            include "../footer/footer.php";
    ?>
    </div>
    <!-- /Main Content -->
    </div>
    <!-- /Page Content -->
    </div>

    <script>
    function calculateAge() {
        var dob = document.getElementById('dob').value;
        var today = new Date();
        var birthDate = new Date(dob);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        document.getElementById('age').value = age;
    }
    </script>
    <script>
    const successMessage = document.getElementById('success-message');

    // Function to hide the success message
    const hideSuccessMessage = () => {
        successMessage.style.display = 'none';
    };

    // Set a timeout to hide the success message after 5 seconds (5000 milliseconds)
    setTimeout(hideSuccessMessage, 1000);



    const updateMessage = document.getElementById('update-message');

    // Function to hide the success message
    const hideUpdateMessage = () => {
        updateMessage.style.display = 'none';
    };

    // Set a timeout to hide the success message after 5 seconds (5000 milliseconds)
    setTimeout(hideUpdateMessage, 1000);



    const deleteMessage = document.getElementById('delete-message');

    // Function to hide the success message
    const hideDeleteMessage = () => {
        deleteMessage.style.display = 'none';
    };

    // Set a timeout to hide the success message after 5 seconds (5000 milliseconds)
    setTimeout(hideDeleteMessage, 1000);
    </script>
    <!-- Back to Top -->
    <a id="back-to-top" href="#" class="back-to-top">
        <span class="ti-angle-up"></span>
    </a>
    <!-- /Back to Top -->
    <!-- Jquery Library-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Popper Library-->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap Library-->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Datatable  -->
    <script src="../datatable/jquery.dataTables.min.js"></script>
    <script src="../datatable/dataTables.bootstrap4.min.js"></script>

    <!-- Custom Script-->
    <script src="../js/custom.js"></script>

</body>

</html>