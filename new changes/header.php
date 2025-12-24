<?php

// session_start();
include "../database/db.php";
include "../database/auth.php";
error_reporting(0);

// $hospital_name = $_SESSION['auth_user']['hospital_name'];

?>


<!doctype html>	
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MEDPRONE - Hospital</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/doctorcolor.css" id="style_theme	">
	<link rel="stylesheet" href="../css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="../charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="../css/jquery-jvectormap.css">
	<link rel="stylesheet" href="../datatable/dataTables.bootstrap4.min.css">
	<link rel="icon" href="../images/logo.png" sizes="32x32" type="image/png">

	<script src="../js/modernizr.min.js"></script>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="../js/popper.min.js"></script>
	<!-- Bootstrap Library-->
	<script src="../js/bootstrap.min.js"></script>
	<!-- jvectormap -->
	<script src="../js/jquery-jvectormap.min.js"></script>
	<script src="../js/jquery-jvectormap-world-mill.js"></script>
	<script src="../js/jquery.vmap.usa.js"></script>
	<script src="../js/jquery.vmap.india.js"></script>
	<script src="../js/custom-vector.js"></script>
	<!-- Custom Script-->
	<script src="../js/custom.js"></script>
	<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
	<style>

.logofortab{
	margin-top:12px;
}
		/* Custom CSS to position the menu at the bottom */
 .bottom-menu {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #f8f9fa;
      padding: 0px 10px 0px 10px !important;
    }
    /* Custom CSS to style menu items */
    .bottom-menu .navbar-nav {
      display:contents;
      justify-content: space-around;
      width: 100%;
      margin: 0;
      padding: 0;
    }
    .bottom-menu .nav-item {
      text-align: center;
    }
    .bottom-menu .nav-link {
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #212529;
      font-size: 0.85rem;
    }
    .bottom-menu .nav-link i {
      font-size: 1.5rem;
      margin-bottom: 0.2rem;
    }
    @media (min-width: 576px) {
      .bottom-menu {
        display: none; /
      }
    }
	/* =================================================================== */
		@media only screen and (min-width: 320px) and (max-width: 768px) {
  /* CSS rules for mobile screens */
  .hospitalname{
	text-align:left;

  }
  body {
      padding-bottom: 90px;
    }
  .mobilemenu{
	font-size:20px !important; 
  }

  .mobilename{
	padding-bottom:15px;
	margin:auto;
	text-align:center;
	/* margin-right:70px !important; */

  }
  .laptopname{
	display:none;
  }

 .laptopmenubutton{
	display:none;
 }
  
 .container-fluid{
	padding:unset;
 }
 .navbar{
	padding:0px;
 }
 .container-fluid{
	display:block !important;
}
.navandlogo{
	display: flex;
    justify-content: space-between;
    padding-top: 0px !important;
    position: fixed;
    top: 0;
    z-index: 1000 !important;
    background: #95bde6;
	margin:auto;
	width: -webkit-fill-available !important;

}
nav.navbar.navbar-default {
       
        position: relative !important;
        top: 0;
        z-index: 100 !important;
    }
.logofortab{
	margin:auto;
	margin-top: 9px !important;
}
.breadcrumb{
	display:none;
}
}

@media only screen and (min-width: 768px) and (max-width: 1024px) {


	.hospitalname{
	text-align:left;

  }
  body {
      padding-bottom: 90px;
    }
  .mobilemenu{
	font-size:20px !important; 
  }

  .mobilename{
	padding-bottom:15px;
	margin:auto;
	text-align:center;
	/* margin-right:70px !important; */

  }
  .laptopname{
	display:none;
  }

 .laptopmenubutton{
	display:none;
 }
  
 .container-fluid{
	padding:unset;
 }
 .navbar{
	padding:0px;
 }



.navandlogo{
	display: flex;
    justify-content: space-between;
    /* padding-top: 17px; */
    position: fixed;
    top: 0;
    z-index: 1000 !important;
    background: #95bde6;
	margin:auto;
	width: -webkit-fill-available !important;

}
.container-fluid{
	display:block !important;
}
.logofortab{
	margin:auto;
	margin-top: 8px !important;
}
.quickstats{
	/* text-align:end; */
}
.breadcrumb{
	/* display:none; */
}
.block-title{
	width:443px;
}
}

		@media screen and (min-width: 1024px) {
		.mobilename{
			display:none;
		}
		.mobmenubutton{
			display:none;
		}
		.openmenu-close{
			display:none;
		}
		#openmenu-closediv{
			display: none;
		}
}

#sidebarCollapse1{
/* padding:10px; */
font-size:17px;
cursor:pointer;
background:#555;
color:#fff;
border-radius:50%;
}
.openmenu-close{
	
	margin-left: 44% !important;
    margin-top: 10px;
    position: inherit !important;
    background: white;
    border-radius: 41px;
	z-index: 100000000 !important;

}

/*///////////////////////////////////////////////////////////////////////////////////*/
#sidebar-li{
      padding: 10px 1px 8px 1px;

    }
    #sidebar-li:hover {
    background-color: #95bde6;
    border-radius: 10px; /* Apply border-radius to all corners */
    
}
#sidebar-li:hover #appmenu{
  color:#08203e;
}
#sidebar-li:hover #petmenu{
  color:#08203e;
}
#sidebar-li:hover #schmenu{
  color:#08203e;
}
#sidebar-li:hover #medmenu{
  color:#08203e;
}
#sidebar-li:hover #suppmenu{
  color:#08203e;
}
#sidebar-li:hover #suppmenu{
  color:#08203e;
}
#sidebar-li:hover #paymenu {
  color: #08203e;
}

#sidebar-li:hover #prescmenu {
  color: #08203e;
}
#sidebar-li:hover #medibackmenu {
  color: #08203e;
}
#sidebar-li:hover #patmenu {
  color: #08203e;
}
#sidebar-li:hover #profilemenu {
  color: #08203e;
}
#sidebar-li:hover #dashmenu {
  color: #08203e;
}
#sidebar-li:hover #depmenu {
  color: #08203e;
}
#sidebar-li:hover #profilemenu {
  color: #08203e;
}
#sidebar-li:hover #docmenu {
  color: #08203e;
}
#sidebar-li:hover #allappointment {
  color: #08203e;
}
#sidebar-li:hover #settingmenu {
  color: #08203e;
}

#sidebar-li:hover .ti-dash:before {
  background-image: url('../images/Menu_icons/Dashboard2.png');
  
}
#sidebar-li:hover .ti-hospitalprofile:before {
  background-image: url('../images/Menu_icons/Hospital2.png');
  
}
#sidebar-li:hover .ti-usermanagement:before {
  background-image: url('../images/Menu_icons/User2.png');
  
}
#sidebar-li:hover .ti-department:before {
  background-image: url('../images/Menu_icons/Department2.png');
  
}
#sidebar-li:hover .ti-profile:before {
  background-image: url('../images/Menu_icons/Doctor2.png');
}
#sidebar-li:hover .ti-mediback:before {
  background-image: url('../images/Menu_icons/Prescription2.png');
}

#sidebar-li:hover .ti-appointment:before {
  background-image: url('../images/Menu_icons/Appointment2.png');
}
#sidebar-li:hover .ti-allappointment:before {
  background-image: url('../images/Menu_icons/Appointment2.png');
}

#sidebar-li:hover .ti-medicalDiary:before {
  background-image: url('../images/Menu_icons/Appointment2.png');
}

#sidebar-li:hover .ti-patient:before {
  background-image: url('../images/Menu_icons/Patient2.png');
}

#sidebar-li:hover .ti-schedule:before {
  background-image: url('../images/Menu_icons/Schedule2.png');
}
 
#sidebar-li:hover .ti-payment:before {
  background-image: url('../images/Menu_icons/Payment2.png');
}
#sidebar-li:hover .ti-medicine:before {
  background-image: url('../images/Menu_icons/Medicine2.png');
}
#sidebar-li:hover .ti-supplier:before {
  background-image: url('../images/Menu_icons/Supplier2.png');
}
#sidebar-li:hover .ti-prescription:before {
  background-image: url('../images/Menu_icons/Prescription2.png');
}
#sidebar-li:hover .ti-setting:before {
  background-image: url('../images/Menu_icons/Setting3.png');
}


/* Default styles */
.scrollable {
    overflow-y: hidden;
    height: -webkit-fill-available;
}

/* When content overflows, show scrollbar */
.scrollable:hover {
    overflow-y: auto; /* Show the scrollbar */
}

/* For WebKit (Chrome, Safari) */
.scrollable::-webkit-scrollbar {
    width: 1px !important; /* Set the default width of the scrollbar */
}

/* For WebKit (Chrome, Safari) */
.scrollable::-webkit-scrollbar-thumb {
    background-color: #95bde6;
    border-radius: 100px; /* Optional: Add border-radius */
}

/* For Firefox */
.scrollable {
    scrollbar-width: thin; /* Set the default width of the scrollbar */
}

/* For Firefox */
.scrollable::-webkit-scrollbar-thumb {
    background-color: #95bde6; 
}

.scrollable {
    scrollbar-color: #95bde6 transparent !important; /* Color of the scrollbar thumb and track */
}

/* Media query for responsive scrollbar */
@media screen and (max-width: 768px) {
    

    #sidebar.active ul li a{
      padding: 0px 4px;
      font-size: 17px !important;
      margin-bottom: 7px;
    }
	
}
@media screen and (min-width: 1024px) {
.mobilename{
	display:none;
}
.mobmenubutton{
	display:none;
}
.openmenu-close{
	display:none;
}
#openmenu-closediv{
	display: none;
}
}

/* Media query for responsive scrollbar */
@media screen and (max-width: 768px) {
    
    #sidebar-ul {
        position: relative !important;
    }
    #medicine-expend{
		top: 0px !important;
    }
    #doctor-expend{
		top: 0px !important;
    }
    #department-expend{
		top: 0px !important;	
    }
	#usermanagement-expend{
		top: 0px !important;	
    }
    #supplier-expend{
		top: 0px !important;
    }
    #patient-expend{
		top: 0px !important;
    }
    #schedule-expend{
		top: 0px !important;
    }
    #appoint-expend{
		top: 0px !important;
    }
	#setting-expend{
		top: 0px !important;
    }
    #sidebar.active ul li a{
      padding: 0px 4px;
      font-size: 17px !important;
      margin-bottom: 7px;
    }
}
@media screen and (max-width: 1024px) {
    .scrollable{
      position: relative !important;
    }
  }

  @media only screen and (min-width: 768px) and (max-width: 1024px) {
  .hospitalname{
	text-align:left;

  }
  #hlogodiv{
    padding-top: 65px !important;
  }
  #appoint-expend{
	padding-left:46px !important;
  }
  #patient-expend{
	padding-left:88px !important; 
  }

  .mobilemenu{
	font-size:20px !important; 
  }

  .mobilename{
	padding-bottom:15px;
	margin:auto;
	text-align:center;
	

  }
  .laptopname{
	display:none;
  }

 .laptopmenubutton{
	display:none;
 }
  
 .container-fluid{
	padding:unset;
 }
 .navbar{
	padding:0px;
 }



 .quickstats{
  /* text-align:end; */
 }
 .container-fluid{
	display:block !important;
}
.navandlogo{
	padding-bottom:12px;
	margin:auto;

}
.logofortab{
	margin:auto;
}
#hospital-label
{
	display: none;
}
.hospital-select{
	margin:auto;
}
.hospital-select-div{
	padding: 6px 0px 4px 0px;
  
  margin:auto;
}


}
@media screen and (max-width: 1024px) {
    .scrollable{
      position: relative !important;
    }
    .mobilename{
	display:block;
}
.mobmenubutton{
	display:block;
}
.openmenu-close{
	display:block;
	        z-index: 100000000 !important;
}
    
  }

  @media only screen and (min-width: 1200px) and (max-width: 1440px) {
    .sidebar_ul {
     
    position: fixed !important;
   
    }
	
  }

  @media only screen and (min-width: 300px) and (max-width: 768px) {
    .sidebar_ul {
    		position: fixed !important;
    }

	
	
  }

  @media only screen and (min-width: 768px) and (max-width: 1024px) {
    .sidebar_ul {
   			 position: unset !important;
    }
	
	.components{
        margin-left: 0px !important;
	}
	.mobilename{
		margin-top: 17px;
	}
	.hospitalname{
		margin-top: -3px;	
	}

  
  }

  @media only screen and (min-width: 1024px) and (max-width: 1199px) {
    
	.components{
        margin-left: 6px !important;
		/* position: static !important; */
	}
	

  
  
}

/* Show the dropdown on hover */
.dropdown-hover:hover .dropdown-menu {
  display: block;
}

/* Ensure that the dropdown-menu is positioned correctly */
.dropdown-hover .dropdown-menu {
  position: absolute;
  display: none;
  top: 100%;
  left: 0;
  margin-top: 0.125rem;
}

@media screen and (max-width: 767px) {
.pharm_or_recep{
	text-align:center !important;
}
}
#sidebar ul li ul.list-unstyled a {
	font-size: 12px;
}

div:where(.swal2-container).swal2-top, div:where(.swal2-container).swal2-center, div:where(.swal2-container).swal2-bottom {
    grid-template-columns: auto minmax(0, 1fr) auto;
    z-index: 10000000000000 !important;
}

	</style>
</head>

<body>
	<!-- Pre Loader -->
	 <?php
	//  echo 1; 
	 ?>
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<!-- <div class="wrapper"> -->
		<!-- Sidebar -->

	

		<nav id="sidebar" >
		<div class="row justify-content-center" id="openmenu-closediv" style="position: sticky; top: 0; padding-bottom: 4px;">
    <div class="col-md-12 text-center"> <!-- Adjust the column width as needed -->
        <img width="38" height="38" id="closeIcon" class="openmenu-close" src="../images/cross_icon.png" />
    </div>
</div>

		<script>
    $(document).ready(function(){
        // Add click event handler to the image
        $('.openmenu-close').click(function(){
            // Remove the 'active' class from the <nav> element with id 'sidebar'
            $('#sidebar').removeClass('active');
        });
    });
</script>
<script>
  $(document).ready(function () {
    // Check if the AJAX request has already been made
    const ajaxExecuted = localStorage.getItem('ajaxExecuted');

    if (!ajaxExecuted) {
      const hospitalId = $('#hospital_id').val();

      if (hospitalId) {
        $.ajax({
          url: '../database/auth.php', // PHP script to update session variable
          type: 'POST',
          data: { sessionhospital_id: hospitalId },
          async: false, // Ensure synchronous execution
          success: function (response) {
            // console.log('Session variable updated:', response);

            // Set a flag in localStorage to indicate that the AJAX has run
            localStorage.setItem('ajaxExecuted', 'true');

            // Reload the page to reflect session changes in PHP
            location.reload();
          },
          error: function (xhr, status, error) {
            console.error('Error updating session variable:', error);
          },
        });
      }
    }
  });
</script>


		<?php
				$hospital_id = $_SESSION['auth_user']['client_id'];
				$doctor_id = $_SESSION['auth_user']['doctor_id'];
				$patient_id = $_SESSION['auth_user']['patient_id'];
				$supplier_id = $_SESSION['auth_user']['supplier_id'];

				$user_type_name =  $_SESSION['auth_user']['user_type_name'];
				// $free_or_paid = $_SESSION['auth_user']['account_type'];

				if($patient_id){
					
				$sql_name = "SELECT user_username FROM users WHERE user_id = '$patient_id'";
				$result_name = mysqli_query($conn, $sql_name);
				$fetch_name = mysqli_fetch_assoc($result_name);
				$fetch_patient_name = $fetch_name['user_username'];
				}


				else if($hospital_id){
					$sql_name = "select * from users as u join hospital as h on h.hospital_user_id=u.user_id where h.hospital_id = '$hospital_id'";
				$result_name = mysqli_query($conn, $sql_name);
				$fetch_name = mysqli_fetch_assoc($result_name);
				$fetch_hospital_name = $fetch_name['hospital_name'];


				}
				else if($doctor_id){
					if(isset($_SESSION['auth_user']['is_ref'])){

					
						$sql_name = "SELECT ref_doctor_name FROM refered_doctor WHERE refered_doctor_id = '$doctor_id'";
						$result_name = mysqli_query($conn, $sql_name);
						$fetch_name = mysqli_fetch_assoc($result_name);
						$fetch_doctor_name = $fetch_name['ref_doctor_name'];
							}else{
		
								$sql_name = "SELECT user_username FROM users WHERE user_id = '$doctor_id'";
						$result_name = mysqli_query($conn, $sql_name);
						$fetch_name = mysqli_fetch_assoc($result_name);
						$fetch_doctor_name = $fetch_name['user_username'];
		
							}

				
			}
			else if($supplier_id){
				$sql_name = "SELECT supplier_name FROM supplier WHERE supplier_id = '$supplier_id'";
				$result_name = mysqli_query($conn, $sql_name);
				$fetch_name = mysqli_fetch_assoc($result_name);
				$supplier_name = $fetch_name['supplier_name'];
				
			}

			if($user_type_name == 'doctor'){
				$hospital_id_acc = $_SESSION['session_hospital_id'];

			}elseif($user_type_name == 'hospital' || $user_type_name == '
			' || $user_type_name == 'Pharmacist'){
				$hospital_id_acc = $_SESSION['auth_user']['client_id'];
						
			}


			
					$sql_hos_user_id=  "SELECT hospital_user_id FROM hospital WHERE hospital_id = '$hospital_id_acc'";
					$r_hos_user_id = mysqli_query($conn, $sql_hos_user_id);
					$f_hos_user_id = mysqli_fetch_assoc($r_hos_user_id);
					$hospital_user_id = $f_hos_user_id['hospital_user_id'];

					if ($user_type_name != 'patient') {
						$sql_account_type = "SELECT * FROM users AS u 
											 JOIN hospital AS h ON h.hospital_user_id = u.user_id 
											 JOIN subscription AS s ON s.hospital_id = h.hospital_id 
											 WHERE u.user_id = '$hospital_user_id'";
					
						$r_account_type = mysqli_query($conn, $sql_account_type);
						$f_account_type = mysqli_fetch_assoc($r_account_type);
					
						$current_date = date('Y-m-d'); // Get current date
						$subscription_end_date = $f_account_type['sed'] ?? ''; // Fetch end_date from the database
					
						// Check if the account is paid and the subscription is still valid
						if ($f_account_type['account_type'] == 'paid' && !empty($subscription_end_date) && $subscription_end_date >= $current_date) {
							$account_type = 'paid';
						} else {
							$account_type = 'free';
						}
					}

					$sql_appointment_limit = "SELECT COUNT(*) AS appointment_count FROM appointment WHERE hospital_id = '$hospital_id_acc' AND MONTH(appointment_date) = MONTH(CURRENT_DATE()) AND YEAR(appointment_date) = YEAR(CURRENT_DATE())";
					$r_appointment_limit = mysqli_query($conn, $sql_appointment_limit);

					$f_appointment_limit = mysqli_fetch_assoc($r_appointment_limit);
				    $no_of_appointments = $f_appointment_limit['appointment_count'];
					// $no_of_appointments = 25;



					if($user_type_name == 'patient'){
						// $account_type = ($free_or_paid == 'free' || $free_or_paid == '') ? 'free' : 'paid';
						$account_type ='';
						
					}


				$sql_pharmacy = "SELECT pharmacy FROM subscription WHERE hospital_id = '$hospital_id'";
				$result_pharmacy = mysqli_query($conn, $sql_pharmacy);
				$pharmacy = mysqli_fetch_assoc($result_pharmacy);
				// echo $pharmacy['pharmacy'];
                if($patient_id){

				$sql_image_url = "SELECT user_image FROM users WHERE user_id = '$patient_id'";
				$result_image_url = mysqli_query($conn, $sql_image_url);
				$fetch_image_url = mysqli_fetch_assoc($result_image_url);
				}
				else if($hospital_id){

					$sql_image_url = "SELECT hospital_image_url FROM hospital WHERE hospital_id = '$hospital_id'";
					$result_image_url = mysqli_query($conn, $sql_image_url);
					$fetch_image_url = mysqli_fetch_assoc($result_image_url);
					}
				else if($doctor_id){

						$sql_image_url = "SELECT user_image FROM users WHERE user_id = '$doctor_id'";
						$result_image_url = mysqli_query($conn, $sql_image_url);
						$fetch_image_url = mysqli_fetch_assoc($result_image_url);
				}

				else if($supplier_id){

					$sql_image_url = "SELECT * FROM supplier WHERE supplier_id = '$supplier_id'";
					$result_image_url = mysqli_query($conn, $sql_image_url);
					$fetch_image_url = mysqli_fetch_assoc($result_image_url);
				}
				
		?>


		<?php

$user_type_id=$_SESSION['auth_user']['user_type_id'];
$user_id=$_SESSION['auth_user']['user_id'];
$sql_t="select * from user_type where user_type_id='$user_type_id'";
$result_t=mysqli_query($conn,$sql_t);
$fetch_t=mysqli_fetch_assoc($result_t);
$user_type_name=$fetch_t['user_type_name'];
// echo $user_type_name;
$patient_sql="select * from users where user_id='$patient_id'";
$result_patient = mysqli_query($conn, $patient_sql);



?>
	<div class="sidebar-header" style="background:#95bde6; padding-bottom:30px; height:97px !important; position:sticky; top:0; ">
	<?php 
	
			if($_SESSION['auth_user']['user_type_name'] == 'Pharmacist')
			{
		?>
		<a href="../dashboard/pharmacist_dashboard.php" ><img src="../images/logo.png" class="logo" alt="logo"width="100%"></a>
		<?php }elseif($_SESSION['auth_user']['user_type_name'] == 'doctor'){ ?>
			<a href="../dashboard/doctor_dashboard.php" ><img src="../images/logo.png" class="logo" alt="logo"width="100%"></a>
	<?php	}elseif($_SESSION['auth_user']['user_type_name'] == 'patient'){ ?>
			<a href="../dashboard/patient_dashboard.php" ><img src="../images/logo.png" class="logo" alt="logo"width="100%"></a>
	<?php	}else{ ?>
			<a href="../dashboard/dashboard.php" ><img src="../images/logo.png" class="logo" alt="logo"width="100%"></a>
	<?php	} ?>
	</div>
			<div class="row" style="overflow: auto !important;height: 471px !important;">
				<div class="col-md-12" styel="background:#1d76d1!important;">

		<ul class="list-unstyled components scrollable sidebar_ul" id="sidebar-ul" style="margin-left:6px;margin-top:6px; margin-right:6px;background: #1d76d1;padding:7px;border-radius: 7px 7px 7px 7px;">
			
		<?php 
				if($_SESSION['auth_user']['user_type_name'] == 'Pharmacist')
				{
		?>
				<li id="sidebar-li">
					<a href="../dashboard/pharmacist_dashboard.php" id="dashmenu" style="display:flex;" >
						<span class="ti-dash"></span>&nbsp; Dashboard
					</a>
					<ul class="collapse list-unstyled" id="nav-dashboard">
					
					</ul>
				</li>
				<li id="sidebar-li">
					<a href="../userprofile/user_profile.php" id="profilemenu" style="display:flex;" >
						<span class="ti-hospitalprofile"></span>&nbsp; Profile
					</a>
				</li>

				<li id="sidebar-li">
					<a href="../prescription/patients_observed.php" id="prescmenu" style="display:flex;">
						<span class="ti-prescription"></span>&nbsp; Prescriptions
					</a>
					</li>
				<li id="sidebar-li">
					<a href="../payment/payments.php" id="paymenu" style="display: flex;">
						<span class="ti-payment"></span>&nbsp; Payments
					</a>
				</li>

				<?php

				if(isset($pharmacy['pharmacy']) && $pharmacy['pharmacy'] ===  'yes'){
					
					?>
					
				<li id="sidebar-li">
						<a href="#" id="medmenu" style="display:flex;" data-toggle="collapse" >
							<span class="ti-medicine"></span>&nbsp; Medicine
							<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="medicine-expend"></i>
						</a>
						<ul class="list-unstyled" id="med-menu">
							<li>
								<a href="../medicine/add_medicine.php">Add-View Medicine</a>
							</li>
							<li>
								<a href="../medicine/medicine_stock.php">Medicine Stocks</a>
							</li>
						
						</ul>
					</li>
				<li id="sidebar-li">
					
				<script>
    $(document).ready(function(){
        $('#med-menu').hide(); // Corrected class to match HTML

        $('#medmenu').click(function(){ // Corrected ID to match HTML
            $('#med-menu').toggle(); // Corrected ID to match HTML
			$('#medicine-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#medicine-expend').addClass('ti-plus');
    });
</script>
						<a href="#" id="suppmenu" style="display:flex;" data-toggle="collapse" >
							<span class="ti-supplier"></span>&nbsp; Supplier
							<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="supplier-expend"></i>
						</a>
						<ul class="list-unstyled" id="supp-menu">
							<li>
								<a href="../supplier/add_supplier.php">Add Supplier</a>
							</li>
							<li>
								<a href="../supplier/all_supplier.php">All Supplier</a>
							</li>
						
						</ul>
					</li>
					
				<script>
    $(document).ready(function(){
        $('#supp-menu').hide(); // Corrected class to match HTML

        $('#suppmenu').click(function(){ // Corrected ID to match HTML
            $('#supp-menu').toggle(); // Corrected ID to match HTML
			$('#supplier-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#supplier-expend').addClass('ti-plus');
    });
</script>					
<?php } ?>

		<?php }elseif($_SESSION['auth_user']['user_type_name'] == 'Receptionist'){ 
			// echo 1;
			
				$sql_t="select * from users where user_id='$user_id'";
				$result_t=mysqli_query($conn,$sql_t);
				$fetch_t=mysqli_fetch_assoc($result_t);
				$user_modules=$fetch_t['user_modules'];

				$user_module=explode(',',$user_modules);


				
				
$prescriptionDisplayed = false; // Flag to ensure the Prescriptions menu is shown only once

foreach ($user_module as $usermodule) {
    if ($usermodule == 'appointment') { 
?>
				<li id="sidebar-li">
					<a href="../dashboard/dashboard.php" id="dashmenu" style="display:flex;" >
						<span class="ti-dash"></span>&nbsp; Dashboard
					</a>
					<ul class="collapse list-unstyled" id="nav-dashboard">
					
					</ul>
				</li>
        <!-- <li id="sidebar-li">
					<a href="../allappointment/appointments.php" id="allappointment" style="display:flex;" >
						<span class="ti-allappointment"></span>&nbsp; All Appointments
					</a>
				
				
		</li> -->

		
		<?php




$sql_no_of_doctors = "SELECT COUNT(*) AS doctor_count FROM hospital_vs_doctor WHERE hospital_id = '$hospital_id_acc' AND (relieving_date >= CURDATE() OR relieving_date IS NULL OR relieving_date = 'NULL')";
$r_doctor_limit = mysqli_query($conn, $sql_no_of_doctors);

$f_doctor_limit = mysqli_fetch_assoc($r_doctor_limit);
$no_of_doctor = $f_doctor_limit['doctor_count'];

?>

<li id="sidebar-li">
					<a href="#" id="docmenu" style="display:flex;" data-toggle="collapse" >
						<span class="ti-profile"></span>&nbsp; Doctors
						<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="doctor-expend"></i>

					</a>        
					<ul class="list-unstyled" id="doc-menu">
						<li>
							<a href="../doctor/add_doctor.php" id="hospital_add_doctor" class="mobilemenu">Add Doctor</a>
						</li>
						<li>
							<a href="../doctor/doctors.php" class="mobilemenu">All Doctors</a>
						</li>
						<!-- <li>
							<a href="about_doctor.php">Doctor Details</a>
						</li>
						<li>
							<a href="edit_doctor.php">Edit Doctor</a>
						</li> -->
					</ul>
				</li>

				<script>
    $(document).ready(function(){
        $('#doc-menu').hide(); // Corrected class to match HTML

        $('#docmenu').click(function(){ // Corrected ID to match HTML
            $('#doc-menu').toggle(); // Corrected ID to match HTML
   // Toggle class for plus and minus icon
   $('#doctor-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#doctor-expend').addClass('ti-plus');
});
</script>

				<script>
    document.getElementById('hospital_add_doctor').addEventListener('click', function(event) {
        event.preventDefault(); 

        const accountType = '<?php echo $account_type; ?>';
        const noOfDoctor = <?php echo $no_of_doctor; ?>;

        const redirectUrl = '<?php echo '../doctor/add_doctor.php'; ?>';

        // Check the conditions
        if (accountType === 'free' && noOfDoctor >= 1) {
            Swal.fire({
                title: 'Limit Reached',
                text: 'Max 1 doctor can be onboarded for free accounts. Upgrade to Premium.',
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
        } else {
            window.location.href = redirectUrl;
        }
    });
</script>
		<?php
// $sql_appointment_limit = "SELECT COUNT(*) AS appointment_count FROM appointment WHERE hospital_id = '$hospital_id' AND MONTH(appointment_date) = MONTH(CURRENT_DATE()) AND YEAR(appointment_date) = YEAR(CURRENT_DATE())";
// $r_appointment_limit = mysqli_query($conn, $sql_appointment_limit);

// $f_appointment_limit = mysqli_fetch_assoc($r_appointment_limit);
// $no_of_appointments = $f_appointment_limit['appointment_count'];
// $no_of_appointments = 25;

?>
      <li id="sidebar-li" style="position: relative;">
            <a href="#" id="appmenu" data-toggle="collapse" style="display: flex;">
			<span class="ti-appointment"></span> &nbsp; Appointments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="appoint-expend"></i>
            </a>
            <ul class="list-unstyled" id="app-menu">
                <li>
                    <a href="../appointment/add_appointment.php" id="doctor_add_appointment" class="mobilemenu">Add Appointment</a>
                </li>
                <li>
                    <a href="../allappointment/appointments.php" class="mobilemenu">All Appointments</a>
                </li>
				<li>
                    <a href="../appointment/cancelled_appointments.php" class="mobilemenu">Cancelled Appointments</a>
                </li>
            </ul>
        </li>

        <script>
        $(document).ready(function(){
            $('#app-menu').hide();

            $('#appmenu').click(function(){
                $('#app-menu').toggle();
                $('#appoint-expend').toggleClass('ti-plus ti-minus');
            });

            $('#appoint-expend').addClass('ti-plus');
        });
        </script>
<?php 
    } elseif ($usermodule == 'payment') { 
?>
        <li id="sidebar-li">
            <a href="../payment/payments.php" id="paymenu" style="display: flex;">
                <span class="ti-payment"></span>&nbsp; Payments
            </a>
        </li>
<?php 
    } elseif (!$prescriptionDisplayed && in_array($usermodule, [
        'cheifcompalint', 'examination', 'diagnosis', 'medication', 
        'procedure', 'investigation', 'advice', 'attachments', 
        'followup', 'medicalbackground', 'pastvists'
    ])) { 
?>
        <li id="sidebar-li">
            <a href="../prescription/patient_appointments_reception.php" id="prescmenu" style="display: flex;">
                <span class="ti-prescription"></span>&nbsp; Prescriptions
            </a>
        </li>
<?php 
        $prescriptionDisplayed = true; // Set flag to true after displaying the menu
   		}
}

		}elseif($_SESSION['auth_user']['user_type_name'] == 'patient')
		{    ?>
			<li id="sidebar-li">
			<a href="../dashboard/patient_dashboard.php" id="dashmenu" style="display:flex;" >
				<span class="ti-dash"></span>&nbsp; Dashboard
			</a>
			<ul class="collapse list-unstyled" id="nav-dashboard">
			
			</ul>
		</li>

	<li id="sidebar-li">
      <a href="../patient/patient_profile.php" id="profilemenu" style="display: flex;">
        <span class="ti-profile"></span>&nbsp; My Profile
      </a>
    </li>
	
	<li id="sidebar-li">
					<a href="../medical_background/medical_background.php" id="medibackmenu" style="display:flex;">
					<span class="ti-mediback"></span>&nbsp; Medical Background
					</a>
					</li>
					<li id="sidebar-li">
            <a href="../prescription/single_patient_prescription.php" id="prescmenu" style="display: flex;">
                <span class="ti-prescription"></span>&nbsp; Prescriptions
            </a>
        </li>
		<!-- <li id="sidebar-li">
            <a href="../payment/patient_payment.php" id="paymenu" style="display: flex;">
                <span class="ti-payment"></span>&nbsp; Payments
            </a>
        </li> -->
<?php
$sql_appointment_limit = "SELECT COUNT(*) AS appointment_count FROM appointment WHERE patient_id = '$patient_id' AND MONTH(appointment_date) = MONTH(CURRENT_DATE()) AND YEAR(appointment_date) = YEAR(CURRENT_DATE())";
$r_appointment_limit = mysqli_query($conn, $sql_appointment_limit);

$f_appointment_limit = mysqli_fetch_assoc($r_appointment_limit);
$no_of_appointments = $f_appointment_limit['appointment_count'];
// $no_of_appointments = 25;

?>

<li id="sidebar-li">
      <a href=""id="appmenu" data-toggle="collapse"  style="display: flex;">
	  <span class="ti-appointment"></span> &nbsp; Appointments&nbsp;&nbsp;
	  <i style="position: absolute;top: 12px;right: 0;font-size: 16px;font-weight: 600;" id="reference-expend"></i>
      </a>
      <ul class="list-unstyled" id="app-menu">
        <!-- <li>
          <a href="../appointment/doctor_appointments.php" class="mobilemenu">All Appointments</a>
        </li> -->
       
        <li >
              <a href="../appointment/patient_add_appointment.php" id="patient_add_appointment" class="mobilemenu">Add Appointment</a>
            </li>
        <li>
		<a href="../appointment/patient_appointments.php?hospital_id=<?php echo $hospital_id;?>" class="mobilemenu">All Appointments</a>
        </li>
		
      </ul>
    </li>

	<li id="sidebar-li">
      <a href=""id="appmenu-diary" data-toggle="collapse"  style="display: flex;">
	  <span class="ti-medicalDiary"></span> &nbsp;Medical Diary&nbsp;&nbsp;
	  <i style="position: absolute;top: 12px;right: 0;font-size: 16px;font-weight: 600;" id="diary-expend"></i>
      </a>
	  <ul class="list-unstyled" id="app-menu-diary">
        <!-- <li>
          <a href="../appointment/doctor_appointments.php" class="mobilemenu">All Appointments</a>
        </li> -->
       
        <li >
              <a href="../medical_diary/add_medical_diary.php" id="patient_add_appointment" class="mobilemenu">Add Medical Record</a>
        </li>
        <li>
		<a href="../medical_diary/view_medical_diary.php?hospital_id=<?php echo $hospital_id;?>" class="mobilemenu">All Medical Records</a>
        </li>
		
      </ul>
    </li>
	<script>
$(document).ready(function(){
    $('#app-menu-diary').hide(); 

    $('#appmenu-diary').click(function(){ 
        $('#app-menu-diary').toggle(); 

        // Toggle class for plus and minus icon
        $('#diary-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#diary-expend').addClass('ti-plus');
});

    </script>

	<script>
    document.getElementById('patient_add_appointment').addEventListener('click', function(event) {
        event.preventDefault(); 

        const accountType = '<?php echo $account_type; ?>';
        const noOfAppointments = <?php echo $no_of_appointments; ?>;
        const redirectUrl = '<?php echo '../appointment/patient_add_appointment.php'; ?>';

        // Check the conditions
        if (accountType === 'free' && noOfAppointments >= 25) {
            Swal.fire({
                title: 'Limit Reached',
                text: 'Max 25 bookings allowed for free accounts. Upgrade to Premium.',
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
        } else {
            // Redirect if conditions are not met
            window.location.href = redirectUrl;
        }
    });
</script>



    <script>
$(document).ready(function(){
    $('#app-menu').hide(); 

    $('#appmenu').click(function(){ 
        $('#app-menu').toggle(); 

        // Toggle class for plus and minus icon
        $('#reference-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#reference-expend').addClass('ti-plus');
});

    </script>
			

		<li id="sidebar-li">
						<a href="#" id="settingmenu" data-toggle="collapse"  style="display:flex;">
							<span class="ti-setting"></span>&nbsp; Settings
              <i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="setting-expend"></i>
						</a>
						<ul class="list-unstyled" id="setting-menu">
							<li>
								<a href="../setting/account_prefrence.php">Set Login Preference</a>
							</li>
							<li>
								<a href="../setting/medical_diary_template.php">Med Record Share</a>
							</li>
						
						</ul>
					</li>
          <script>
    $(document).ready(function(){
        $('#setting-menu').hide(); // Corrected class to match HTML

        $('#settingmenu').click(function(){ // Corrected ID to match HTML
            $('#setting-menu').toggle(); // Corrected ID to match HTML
            $('#setting-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#setting-expend').addClass('ti-plus');
    });
</script>


	<?php
		}elseif($_SESSION['auth_user']['user_type_name'] == 'doctor'){
			if(!isset($_SESSION['auth_user']['is_ref'] )){

			// doctor header
			?>

<li id="sidebar-li">
      <a href="../dashboard/doctor_dashboard.php" id="dashmenu" style="display: flex;">
        <span class="ti-dash"></span> &nbsp; Dashboard
      </a>
      
    </li>
    <li id="sidebar-li">
      <a href="../doctor/doctor_profile.php" id="profilemenu" style="display: flex;">
        <span class="ti-profile"></span>&nbsp; My Profile
      </a>
    </li>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#hospital_id').change(function() {
            var hospitalId = $(this).val();
            var doctorId = $(this).find('option:selected').data('doctorid');

            // Make an AJAX request to store the hospital ID in session
            $.ajax({
                type: 'POST',
                url: '../database/auth.php', // Change the URL to the PHP script that handles session storage
				data: { sessionhospital_id: hospitalId },
                success: function(response) {
                    // console.log('Hospital ID stored in session successfully.');
                    // You can do further processing here if needed
                },
                error: function(xhr, status, error) {
                    console.error('Error storing hospital ID in session:', error);
                }
            });
        });

		
    });
	$(document).ready(function() {
           
            var hospitalId = $('#hospital_id').find('option:selected').data('hospid');

			// console.log(hospitalId);
            // Make an AJAX request to store the hospital ID in session
           
            $.ajax({
                type: 'POST',
                url: '../database/auth.php', // Change the URL to the PHP script that handles session storage
				data: { sessionhospital_id: hospitalId },
                success: function(response) {
    
                },
                error: function(xhr, status, error) {
                    console.error('Error storing hospital ID in session:', error);
                }
            });
            
        });
</script>

    <?php

	$hospital_ids=!empty($_SESSION['session_hospital_id']) ? $_SESSION['session_hospital_id'] : $_SESSION['auth_user']['hospital_id'];
  // Fetch the subscription details for the given hospital_id
  $sql = "SELECT sed FROM subscription WHERE hospital_id = '$hospital_ids'";
  $result = mysqli_query($conn, $sql);


  $sql_doc_table_id = "SELECT doctor_id FROM doctor WHERE doctor_user_id = '$doctor_id'";
  $r_doc_table_id = mysqli_query($conn, $sql_doc_table_id);
  $f_doc_table_id = mysqli_fetch_assoc($r_doc_table_id);
  $doctor_table_id = $f_doc_table_id['doctor_id'];
  
//   if ($result) {
//     $fetch = mysqli_fetch_assoc($result);
//     $sed = $fetch['sed'];
    
//     // Get the current date in 'Y-m-d' format
//     $currentDate = new DateTime('now', new DateTimeZone('Asia/Kolkata')); // IST timezone

//     if ($sed !== null && !empty($sed)) {
//         // Convert $sed to a DateTime object
//         $sedDate = new DateTime($sed, new DateTimeZone('America/New_York')); // Assuming $sed is in EST
//         $sedDate->setTimezone(new DateTimeZone('Asia/Kolkata')); // Convert to IST timezone

//         if ($sedDate->format('Y-m-d') < $currentDate->format('Y-m-d')) {
//             // Format the date'
//             // print_r($currentDate);
//             $formattedsed = $sedDate->format("d-M-Y");
            
//             echo '<script type="text/javascript">',
//             'Swal.fire({',
//             '  title: "Subscription Expired<br>on ' . $formattedsed . '",',
//             '  text: "Your Subscription has expired on ' . $formattedsed . '. Contact MedProne support to renew it.",',
//             '  icon: "warning"',
//             '});',
//             '</script>';
        
//             $url = "";
//             $urlrx = "";
//             $urlallapt = "";

//         } else {

//             $url = "../appointment/add_appointment.php";
//             $urlrx = "../dashboardrx/create_rx.php";
//             $urlallapt = "../allappointment/doctor_appointments.php";
//         }

//     } else {
//         $url = "../appointment/add_appointment.php";
//         $urlrx = "../dashboardrx/create_rx.php";
//         $urlallapt = "../allappointment/doctor_appointments.php";
//     }
// } else {
//     echo "Error: " . mysqli_error($conn);
// }

// $sql_appointment_limit = "SELECT COUNT(*) AS appointment_count FROM appointment WHERE hospital_id = '$hospital_ids' AND MONTH(appointment_date) = MONTH(CURRENT_DATE()) AND YEAR(appointment_date) = YEAR(CURRENT_DATE())";
// $r_appointment_limit = mysqli_query($conn, $sql_appointment_limit);

// $f_appointment_limit = mysqli_fetch_assoc($r_appointment_limit);
// $no_of_appointments = $f_appointment_limit['appointment_count'];
// $no_of_appointments = 25;
  
?>
    <!-- <li id="sidebar-li">
      <a href="<?php echo $urlallapt; ?>" id="allappointment" style="display: flex;">
        <span class="ti-allappointment"></span>&nbsp; All Appointments
      </a>
    </li> -->
  
	<li id="sidebar-li">
      <a href=""id="appmenu" data-toggle="collapse"  style="display: flex;">
        <span class="ti-appointment"></span> &nbsp; Appointments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i style="margin:auto;padding-left: 4px;font-size: 16px;font-weight: 600;margin-top: 3px !important;" id="reference-expend"></i>
      </a>
      <ul class="list-unstyled" id="app-menu">
        <!-- <li>
          <a href="../appointment/doctor_appointments.php" class="mobilemenu">All Appointments</a>
        </li> -->
       
        <li >
              <a href="<?php echo $url; ?>" id="doctor_add_appointment" class="mobilemenu">Add Appointment</a>
        </li>

        <li>
          <a href="../allappointment/doctor_appointments.php" class="mobilemenu">All Appointments</a>
        </li>

		<li>
          <a href="../appointment/cancel_appointments.php" class="mobilemenu">Cancelled Appointments</a>
        </li>

      </ul>
    </li>





    <script>
$(document).ready(function(){
    $('#app-menu').hide(); 

    $('#appmenu').click(function(){ 
        $('#app-menu').toggle(); 

        // Toggle class for plus and minus icon
        $('#reference-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#reference-expend').addClass('ti-plus');
});

    </script>

    <li id="sidebar-li">
      <a href="" id="patmenu" data-toggle="collapse"  style="display: flex;">
        <span class="ti-patient"></span>&nbsp; Patients
        <i style="margin:auto;padding-left: 107px;font-size: 16px;font-weight: 600;" id="patient-expend"></i>
      </a>
      <ul class="list-unstyled" id="pat-menu">
        <li>
          <a href="../patient/add_patient.php" class="mobilemenu">Add Patient</a>
        </li>
        <li>
          <a href="../patient/patients.php" class="mobilemenu">All Patients</a>
        </li>
        <!-- <li>
          <a href="../patient/patients_observed.php" class="mobilemenu">Visited Patients</a>
        </li> -->
      </ul>
    </li>
    <script>
    $(document).ready(function(){
        $('#pat-menu').hide(); // Corrected class to match HTML

        $('#patmenu').click(function(){ // Corrected ID to match HTML
            $('#pat-menu').toggle(); // Corrected ID to match HTML
            $('#patient-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#patient-expend').addClass('ti-plus');
  });
</script>

    <li id="sidebar-li">
      <a href="" id="schmenu" data-toggle="collapse"  style="display: flex;">
        <span class="ti-schedule"></span>&nbsp; Schedule
        <i style="margin:auto;padding-left: 101px;font-size: 16px;font-weight: 600;" id="schedule-expend"></i>
      </a>
      <ul class="list-unstyled" id="sch-menu">
        <li>
          <a href="../availability/availability.php" class="mobilemenu">Regular Schedule</a>
        </li>
        <li>
          <a href="../availability/special_days.php" class="mobilemenu">Special Days</a>
        </li>
       
      </ul>
    </li>
    <script>
    $(document).ready(function(){
        $('#sch-menu').hide(); // Corrected class to match HTML

        $('#schmenu').click(function(){ // Corrected ID to match HTML
            $('#sch-menu').toggle(); // Corrected ID to match HTML
            $('#schedule-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#schedule-expend').addClass('ti-plus');
    });
</script>
	<li id="sidebar-li">
      <a href="../prescription/patients_observed.php" id="prescmenu" style="display:flex;">
        <span class="ti-prescription"></span>&nbsp; Prescriptions
      </a>
    </li>
	<li id="sidebar-li">
      <a href="../payment/payments.php" id="paymenu" style="display: flex;">
        <span class="ti-payment"></span>&nbsp; Payments
      </a>
    </li>
    <?php
        //  $session_hospital_id = $_SESSION['session_hospital_id'];
        $session_hospital_id=!empty($_SESSION['session_hospital_id']) ? $_SESSION['session_hospital_id'] : $_SESSION['auth_user']['hospital_id'];

        $sql_subs="select * from subscription where hospital_id=' $session_hospital_id'";
         $result_subs=mysqli_query($conn,$sql_subs);
         $fetch_subs=mysqli_fetch_assoc($result_subs);
         $pharmacy=$fetch_subs['pharmacy'];
         if($pharmacy == 'yes')
         {
    ?>
    <li id="sidebar-li">
						<a href="#" id="medmenu" data-toggle="collapse"  style="display:flex;">
							<span class="ti-medicine"></span>&nbsp; Medicine
              <i style="margin:auto;padding-left: 105px;font-size: 16px;font-weight: 600;" id="medicine-expend"></i>
						</a>
						<ul class="list-unstyled" id="med-menu">
							<li>
								<a href="../medicine/add_medicine.php">Add-View Medicine</a>
							</li>
							<li>
								<a href="../medicine/medicine_stock.php">Medicine Stocks</a>
							</li>
						
						</ul>
					</li>
				<li id="sidebar-li">
					
				<script>
    $(document).ready(function(){
        $('#med-menu').hide(); // Corrected class to match HTML

        $('#medmenu').click(function(){ // Corrected ID to match HTML
            $('#med-menu').toggle(); // Corrected ID to match HTML
            $('#medicine-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#medicine-expend').addClass('ti-plus');
    });
</script>
						<a href="#" id="suppmenu" data-toggle="collapse"  style="display:flex;">
							<span class="ti-supplier"></span>&nbsp; Supplier
              <i style="margin:auto;padding-left: 109px;font-size: 16px;font-weight: 600;" id="supplier-expend"></i>
						</a>

						<ul class="list-unstyled" id="supp-menu">
							<li>
								<a href="../supplier/add_supplier.php">Add Supplier</a>
							</li>
							<li>
								<a href="../supplier/all_supplier.php">All Supplier</a>
							</li>
						
						</ul>
					</li>
          <?php } ?>

	<li id="sidebar-li">
      <a href="../medical_diary/shared_patient_visits.php" id="prescmenu" style="display:flex;">
        <span class="ti-prescription"></span>&nbsp; Shared by Patient
      </a>
    </li>					
				<script>
    $(document).ready(function(){
        $('#supp-menu').hide(); // Corrected class to match HTML

        $('#suppmenu').click(function(){ // Corrected ID to match HTML
            $('#supp-menu').toggle(); // Corrected ID to match HTML
            $('#supplier-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#supplier-expend').addClass('ti-plus');
    });
</script>

<li id="sidebar-li">
      <a id="referencemenu" data-toggle="collapse"  style="display: flex;">
        <span class="ti-appointment"></span> &nbsp; References
        <i style="margin:auto;padding-left: 89px;font-size: 16px;font-weight: 600;margin-top: 3px !important;" id="reference-expen"></i>
      </a>
      <ul class="list-unstyled" id="reference-menu">
        <li >
              <a href="../references/reference_given.php" class="mobilemenu">Reference Given</a>
            </li>
        <li>
          <a href="../references/reference_received.php"  class="mobilemenu">Reference Received</a>
        </li>
      </ul>
    </li>
    <script>
$(document).ready(function(){
    $('#reference-menu').hide(); 

    $('#referencemenu').click(function(){ 
        $('#reference-menu').toggle(); 

        // Toggle class for plus and minus icon
        $('#reference-expen').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#reference-expen').addClass('ti-plus');
});

    </script>


<li id="sidebar-li">
						<a href="#" id="settingmenu" data-toggle="collapse"  style="display:flex;">
							<span class="ti-setting"></span>&nbsp; Setting
              <i style="margin:auto;padding-left: 105px;font-size: 16px;font-weight: 600;" id="setting-expend"></i>
						</a>
						<ul class="list-unstyled" id="setting-menu">
							<li>
								<a href="../setting/add_quicktype.php">Add Quick Type</a>
							</li>
							<!-- <li>
								<a href="../setting/default_country.php">Default Country</a>
							</li> -->
							<li>
								<a href="../setting/refresh_page.php">Refresh Page</a>
							</li>
              <li>
								<a href="../setting/add_source.php">Add Sources</a>
							</li>
              <li>
								<a href="../setting/prescription_template.php">Prescription Template</a>
							</li>
              <li>
								<a href="../setting/permissions.php">Permissions</a>
							</li>
            
							<!-- <li>
								<a href="../medicine/medicine_stock.php">Medicine Stocks</a>
							</li> -->
						
						</ul>
					</li>

          <script>
    $(document).ready(function(){
        $('#setting-menu').hide(); // Corrected class to match HTML

        $('#settingmenu').click(function(){ // Corrected ID to match HTML
            $('#setting-menu').toggle(); // Corrected ID to match HTML
            $('#setting-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#setting-expend').addClass('ti-plus');
    });
</script>

	<?php }
	else{

		?>
		
		
		<!-- <ul class="list-unstyled components scrollable" id="sidebar-ul" style="margin-left: 6px;margin-right: 6px;position: fixed;margin-top: 6px;"> -->
			<li id="sidebar-li">
			  <a href="../dashboard/ref_doctor_dashboard.php" id="dashmenu" style="display: flex;">
				<span class="ti-dash"></span> &nbsp; Dashboard
			  </a>
			  
			</li>
			<li id="sidebar-li">
			  <a  id="profilemenu" href="../doctor/ref_doctor_profile.php" style="display: flex;">
				<span class="ti-profile"></span>&nbsp; My Profile
			  </a>
			</li>
			<li id="sidebar-li">
			  <a id="referencemenu" data-toggle="collapse"  style="display: flex;">
				<span class="ti-appointment"></span> &nbsp; References
				<i style="margin:auto;padding-left: 89px;font-size: 16px;font-weight: 600;margin-top: 3px !important;" id="reference-expend"></i>
			  </a>
			  <ul class="list-unstyled" id="reference-menu">
				<li >
					  <a href="../references/reference_given.php" class="mobilemenu">Reference Given</a>
					</li>
				<li>
				  <a href="../references/reference_received.php"  class="mobilemenu">Reference Received</a>
				</li>
			  </ul>
			</li>
			<script>
		$(document).ready(function(){
			$('#reference-menu').hide(); 
		
			$('#referencemenu').click(function(){ 
				$('#reference-menu').toggle(); 
		
				// Toggle class for plus and minus icon
				$('#reference-expend').toggleClass('ti-plus ti-minus'); 
			});
		
			// Set initial class to ti-plus
			$('#reference-expend').addClass('ti-plus');
		});
		
			</script>
			  <li id="sidebar-li" class="disabled">
			  <a href=""id="appmenu" data-toggle="collapse"  style="display: flex;">
				<span class="ti-appointment"></span> &nbsp; Appointments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<i style="margin:auto;padding-left: 4px;font-size: 16px;font-weight: 600;margin-top: 3px !important;" id="reference-expend"></i>
			  </a>
			  <ul class="list-unstyled" id="app-menu">
				<!-- <li>
				  <a href="../appointment/doctor_appointments.php" class="mobilemenu">All Appointments</a>
				</li> -->
			   
				<li >
					  <a  class="mobilemenu">Add Appointment</a>
				</li>
		
				<li>
				  <a  class="mobilemenu">All Appointments</a>
				</li>
		
				<li>
				  <a class="mobilemenu">Cancelled Appointments</a>
				</li>
		
			  </ul>
			</li>
			<script>
		$(document).ready(function(){
			$('#app-menu').hide(); 
		
			$('#appmenu').click(function(){ 
				$('#app-menu').toggle(); 
		
				// Toggle class for plus and minus icon
				$('#appoint-expend').toggleClass('ti-plus ti-minus'); 
			});
		
			// Set initial class to ti-plus
			$('#appoint-expend').addClass('ti-plus');
		});
		
			</script>
		
			<li id="sidebar-li" class="disabled">
			  <a id="patmenu2"  data-toggle="collapse"  style="display: flex;">
				<span class="ti-patient"></span>&nbsp; Patients
				<i style="margin:auto;padding-left: 107px;font-size: 16px;font-weight: 600;" id="patient-expend2"></i>
			  </a>
			  <ul class="list-unstyled" id="pat-menu2">
				<li>
				  <a  class="mobilemenu">Add Patient</a>
				</li>
				<li>
				  <a  class="mobilemenu">All Patients</a>
				</li>
				<!-- <li>
				  <a href="../patient/patients_observed.php" class="mobilemenu">Visited Patients</a>
				</li> -->
			  </ul>
			</li>
			<script>
			$(document).ready(function(){
				$('#pat-menu2').hide(); // Corrected class to match HTML
		
				$('#patmenu2').click(function(){ // Corrected ID to match HTML
					$('#pat-menu2').toggle(); // Corrected ID to match HTML
					$('#patient-expend2').toggleClass('ti-plus ti-minus'); 
			});
		
			// Set initial class to ti-plus
			$('#patient-expend2').addClass('ti-plus');
		  });
		</script>
		
		<style>
			.disabled {
			  /* pointer-events: none; */
			  cursor:not-allowed;
			  opacity: 0.3; /* Makes it look faded */
			}
		  </style>
			<li id="sidebar-li" class="disabled">
			  <a id="schmenu2" data-toggle="collapse" style="display: flex;">
				<span class="ti-schedule"></span>&nbsp; Schedule
				<i style="margin:auto;padding-left: 101px;font-size: 16px;font-weight: 600;" id="schedule-expend2"></i>
			  </a>
			  <ul class="list-unstyled" id="sch-menu2">
				<li>
				  <a class="mobilemenu">Regular Schedule</a>
				</li>
				<li>
				  <a class="mobilemenu">Special Days</a>
				</li>
				
				</ul>
			  </li>
			<script>
			$(document).ready(function(){
				$('#sch-menu2').hide(); // Corrected class to match HTML
		
				$('#schmenu2').click(function(){ // Corrected ID to match HTML
					$('#sch-menu2').toggle(); // Corrected ID to match HTML
					$('#schedule-expend2').toggleClass('ti-plus ti-minus'); 
			});
		
			// Set initial class to ti-plus
			$('#schedule-expend2').addClass('ti-plus');
		 });
		</script>
			<li id="sidebar-li" class="disabled">
			  <a id="prescmenu" style="display:flex;">
				<span class="ti-prescription"></span>&nbsp; Prescriptions
			  </a>
			</li>
			<li id="sidebar-li" class="disabled">
			  <a  id="paymenu" style="display: flex;">
				<span class="ti-payment"></span>&nbsp; Payments
			  </a>
			</li>
			<?php
				 $session_hospital_id = $_SESSION['session_hospital_id'];
				 $sql_subs="select * from subscription where hospital_id=' $session_hospital_id'";
				 $result_subs=mysqli_query($conn,$sql_subs);
				 $fetch_subs=mysqli_fetch_assoc($result_subs);
				 $pharmacy=$fetch_subs['pharmacy'];
				 if($pharmacy == 'yes')
				 {
			?>
			<li id="sidebar-li" class="disabled">
								<a  id="medmenu" data-toggle="collapse"  style="display:flex;">
									<span class="ti-medicine"></span>&nbsp; Medicine
					  <i style="margin:auto;padding-left: 105px;font-size: 16px;font-weight: 600;" id="medicine-expend"></i>
								</a>
								<ul class="list-unstyled" id="med-menu">
									<li>
										<a >Add-View Medicine</a>
									</li>
									<li>
										<a >Medicine Stocks</a>
									</li>
								
								</ul>
							</li>
						<li id="sidebar-li" class="disabled">
							
						<script>
			$(document).ready(function(){
				$('#med-menu').hide(); // Corrected class to match HTML
		
				$('#medmenu').click(function(){ // Corrected ID to match HTML
					$('#med-menu').toggle(); // Corrected ID to match HTML
					$('#medicine-expend').toggleClass('ti-plus ti-minus'); 
			});
		
			// Set initial class to ti-plus
			$('#medicine-expend').addClass('ti-plus');
			});
		</script>
								<a  data-toggle="collapse"  style="display:flex;">
									<span class="ti-supplier"></span>&nbsp; Supplier
					  <i style="margin:auto;padding-left: 109px;font-size: 16px;font-weight: 600;" id="supplier-expend"></i>
								</a>
		
								<ul class="list-unstyled" id="supp-menu">
									<li>
										<a >Add Supplier</a>
									</li>
									<li>
										<a >All Supplier</a>
									</li>
								
								</ul>
							</li>
				  <?php } ?>
							
						<script>
			$(document).ready(function(){
				$('#supp-menu').hide(); // Corrected class to match HTML
		
				$('#suppmenu').click(function(){ // Corrected ID to match HTML
					$('#supp-menu').toggle(); // Corrected ID to match HTML
					$('#supplier-expend').toggleClass('ti-plus ti-minus'); 
			});
		
			// Set initial class to ti-plus
			$('#supplier-expend').addClass('ti-plus');
		    });
		</script>
		
		<li id="sidebar-li" class="disabled">
								<a  id="settingmenu" data-toggle="collapse"  style="display:flex;">
									<span class="ti-setting"></span>&nbsp; Setting
					  <i style="margin:auto;padding-left: 105px;font-size: 16px;font-weight: 600;" id="setting-expend"></i>
								</a>
								<ul class="list-unstyled" id="setting-menu">
									<li>
										<a >Add Quick Type</a>
									</li>
									<li>
										<a >Refresh Page</a>
									</li>
					  <li>
										<a >Add Sources</a>
									</li>
					  <li>
										<a >Prescription Template</a>
									</li>
					
									<!-- <li>
										<a href="../medicine/medicine_stock.php">Medicine Stocks</a>
									</li> -->
								
								</ul>
							</li>
		
				  <script>
			$(document).ready(function(){
				$('#setting-menu').hide(); // Corrected class to match HTML
		
				$('#settingmenu').click(function(){ // Corrected ID to match HTML
					$('#setting-menu').toggle(); // Corrected ID to match HTML
					$('#setting-expend').toggleClass('ti-plus ti-minus'); 
			});
		
			// Set initial class to ti-plus
			$('#setting-expend').addClass('ti-plus');
			});
		</script>
		
		  </ul>
		
		<?php
		
		
			}
		
	
	
}elseif($_SESSION['auth_user']['user_type_name'] == 'Supplier')
		{    ?>
			<li id="sidebar-li">
			<a href="../dashboard/supplier_dashboard.php" id="dashmenu" style="display:flex;" >
				<span class="ti-dash"></span>&nbsp; Dashboard
			</a>
			<ul class="collapse list-unstyled" id="nav-dashboard">
			
			</ul>
		</li>

	<li id="sidebar-li">
      <a href="../supplier/supplier_profile.php" id="profilemenu" style="display: flex;">
        <span class="ti-profile"></span>&nbsp; Profile
      </a>
    </li>

	<li id="sidebar-li">
			<a href="#" id="medmenu" style="display:flex;" data-toggle="collapse" >
				<span class="ti-medicine"></span>&nbsp; Medicine
				<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="medicine-expend"></i>
			</a>
			<ul class="list-unstyled" id="med-menu">
				<li>
					<a href="../medicine/add_medicine.php">Add-View Medicine</a>
				</li>
				<li>
					<a href="../medicine/supplier_medicine_stock.php">Medicine Stocks</a>
				</li>
						
			</ul>
	</li>

				<li id="sidebar-li">
					
				<script>
    $(document).ready(function(){
        $('#med-menu').hide(); // Corrected class to match HTML

        $('#medmenu').click(function(){ // Corrected ID to match HTML
            $('#med-menu').toggle(); // Corrected ID to match HTML
			$('#medicine-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#medicine-expend').addClass('ti-plus');
    });
</script>
	
	<!-- <li id="sidebar-li">
					<a href="../medical_background/medical_background.php" id="medibackmenu" style="display:flex;">
					<span class="ti-mediback"></span>&nbsp; Medical Background
					</a>
					</li>
					<li id="sidebar-li">
            <a href="../prescription/single_patient_prescription.php" id="prescmenu" style="display: flex;">
                <span class="ti-prescription"></span>&nbsp; Prescriptions
            </a>
        </li> -->
		<!-- <li id="sidebar-li">
            <a href="../payment/patient_payment.php" id="paymenu" style="display: flex;">
                <span class="ti-payment"></span>&nbsp; Payments
            </a>
        </li> -->
<?php
$sql_appointment_limit = "SELECT COUNT(*) AS appointment_count FROM appointment WHERE patient_id = '$patient_id' AND MONTH(appointment_date) = MONTH(CURRENT_DATE()) AND YEAR(appointment_date) = YEAR(CURRENT_DATE())";
$r_appointment_limit = mysqli_query($conn, $sql_appointment_limit);

$f_appointment_limit = mysqli_fetch_assoc($r_appointment_limit);
$no_of_appointments = $f_appointment_limit['appointment_count'];
// $no_of_appointments = 25;

?>

<!-- <li id="sidebar-li">
      <a href=""id="appmenu" data-toggle="collapse"  style="display: flex;">
	  <span class="ti-appointment"></span> &nbsp; Appointments&nbsp;&nbsp;
	  <i style="position: absolute;top: 12px;right: 0;font-size: 16px;font-weight: 600;" id="reference-expend"></i>
      </a>
      <ul class="list-unstyled" id="app-menu">
     
       
        <li >
              <a href="../appointment/patient_add_appointment.php" id="patient_add_appointment" class="mobilemenu">Add Appointment</a>
            </li>
        <li>
		<a href="../appointment/patient_appointments.php?hospital_id=<?php echo $hospital_id;?>" class="mobilemenu">All Appointments</a>
        </li>
		
      </ul>
    </li>

	<li id="sidebar-li">
      <a href=""id="appmenu-diary" data-toggle="collapse"  style="display: flex;">
	  <span class="ti-medicalDiary"></span> &nbsp;Medical Diary&nbsp;&nbsp;
	  <i style="position: absolute;top: 12px;right: 0;font-size: 16px;font-weight: 600;" id="diary-expend"></i>
      </a>
	  <ul class="list-unstyled" id="app-menu-diary">
    
       
        <li >
              <a href="../medical_diary/add_medical_diary.php" id="patient_add_appointment" class="mobilemenu">Add Medical Record</a>
        </li>
        <li>
		<a href="../medical_diary/view_medical_diary.php?hospital_id=<?php echo $hospital_id;?>" class="mobilemenu">All Medical Records</a>
        </li>
		
      </ul>
    </li> -->
	<script>
$(document).ready(function(){
    $('#app-menu-diary').hide(); 

    $('#appmenu-diary').click(function(){ 
        $('#app-menu-diary').toggle(); 

        // Toggle class for plus and minus icon
        $('#diary-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#diary-expend').addClass('ti-plus');
});

    </script>

	<script>
    document.getElementById('patient_add_appointment').addEventListener('click', function(event) {
        event.preventDefault(); 

        const accountType = '<?php echo $account_type; ?>';
        const noOfAppointments = <?php echo $no_of_appointments; ?>;
        const redirectUrl = '<?php echo '../appointment/patient_add_appointment.php'; ?>';

        // Check the conditions
        if (accountType === 'free' && noOfAppointments >= 25) {
            Swal.fire({
                title: 'Limit Reached',
                text: 'Max 25 bookings allowed for free accounts. Upgrade to Premium.',
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
        } else {
            // Redirect if conditions are not met
            window.location.href = redirectUrl;
        }
    });
</script>



    <script>
$(document).ready(function(){
    $('#app-menu').hide(); 

    $('#appmenu').click(function(){ 
        $('#app-menu').toggle(); 

        // Toggle class for plus and minus icon
        $('#reference-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#reference-expend').addClass('ti-plus');
});

    </script>
			

		<!-- <li id="sidebar-li">
						<a href="#" id="settingmenu" data-toggle="collapse"  style="display:flex;">
							<span class="ti-setting"></span>&nbsp; Settings
              <i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="setting-expend"></i>
						</a>
						<ul class="list-unstyled" id="setting-menu">
							<li>
								<a href="../setting/account_prefrence.php">Set Login Preference</a>
							</li>
							<li>
								<a href="../setting/medical_diary_template.php">Med Record Share</a>
							</li>
						
						</ul>
					</li> -->
          <script>
    $(document).ready(function(){
        $('#setting-menu').hide(); // Corrected class to match HTML

        $('#settingmenu').click(function(){ // Corrected ID to match HTML
            $('#setting-menu').toggle(); // Corrected ID to match HTML
            $('#setting-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#setting-expend').addClass('ti-plus');
    });
</script>


	<?php
		}
		else{ ?>
				

				<li id="sidebar-li">
					<a href="../dashboard/dashboard.php" id="dashmenu" style="display:flex;" >
						<span class="ti-dash"></span>&nbsp; Dashboard
					</a>
					<ul class="collapse list-unstyled" id="nav-dashboard">
					
					</ul>
				</li>
				<li id="sidebar-li">
					<a href="../hospital/profile.php" id="profilemenu" style="display:flex;" >
						<span class="ti-hospitalprofile"></span>&nbsp; Hospital Profile
					</a>
				
				
				</li>
			
					<script>
		$(document).ready(function(){
			$('#pat-menu').hide(); // Corrected class to match HTML

			$('#patmenu').click(function(){ // Corrected ID to match HTML
				$('#pat-menu').toggle(); // Corrected ID to match HTML
				$('#patient-expend').toggleClass('ti-plus ti-minus'); 
		});

		// Set initial class to ti-plus
		$('#patient-expend').addClass('ti-plus');
		});
	</script>
					<li id="sidebar-li" >
					<a href="" id="patmenu" style="display:flex;" data-toggle="collapse" >
						<span class="ti-patient"></span>&nbsp; Patients
						<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="patient-expend"></i>
					</a>
					<ul class="list-unstyled" id="pat-menu">
						<li>
							<a href="../patient/add_patient.php" class="mobilemenu">Add Patient</a>
						</li>
						<li>
							<a href="../patient/patients.php" class="mobilemenu">All Patients</a>
						</li>
						
					</ul>   
				</li>

				<?php




$sql_no_of_doctors = "SELECT COUNT(*) AS doctor_count FROM hospital_vs_doctor WHERE hospital_id = '$hospital_id_acc' AND (relieving_date >= CURDATE() OR relieving_date IS NULL OR relieving_date = 'NULL')";
$r_doctor_limit = mysqli_query($conn, $sql_no_of_doctors);

$f_doctor_limit = mysqli_fetch_assoc($r_doctor_limit);
$no_of_doctor = $f_doctor_limit['doctor_count'];

?>
				<li id="sidebar-li">
					<a href="#" id="docmenu" style="display:flex;" data-toggle="collapse" >
						<span class="ti-profile"></span>&nbsp; Doctors
						<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="doctor-expend"></i>

					</a>        
					<ul class="list-unstyled" id="doc-menu">
						<li>
							<a href="../doctor/add_doctor.php" id="hospital_add_doctor" class="mobilemenu">Add Doctor</a>
						</li>
						<li>
							<a href="../doctor/doctors.php" class="mobilemenu">All Doctors</a>
						</li>
						<!-- <li>
							<a href="about_doctor.php">Doctor Details</a>
						</li>
						<li>
							<a href="edit_doctor.php">Edit Doctor</a>
						</li> -->
					</ul>
				</li>

				
<script>
    document.getElementById('hospital_add_doctor').addEventListener('click', function(event) {
        event.preventDefault(); 

        const accountType = '<?php echo $account_type; ?>';
        const noOfDoctor = <?php echo $no_of_doctor; ?>;
        const redirectUrl = '<?php echo '../doctor/add_doctor.php'; ?>';

        // Check the conditions
        if (accountType === 'free' && noOfDoctor >= 1) {
            Swal.fire({
                title: 'Limit Reached',
                text: 'Max 1 doctor can be onboarded for free accounts. Upgrade to Premium.',
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
        } else {
            // Redirect if conditions are not met
            window.location.href = redirectUrl;
        }
    });
</script>




				
				<script>
    $(document).ready(function(){
        $('#doc-menu').hide(); // Corrected class to match HTML

        $('#docmenu').click(function(){ // Corrected ID to match HTML
            $('#doc-menu').toggle(); // Corrected ID to match HTML
   // Toggle class for plus and minus icon
   $('#doctor-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#doctor-expend').addClass('ti-plus');
});
</script>

<?php 

// $sql_appointment_limit = "SELECT COUNT(*) AS appointment_count FROM appointment WHERE hospital_id = '$hospital_id' AND MONTH(appointment_date) = MONTH(CURRENT_DATE()) AND YEAR(appointment_date) = YEAR(CURRENT_DATE())";
// $r_appointment_limit = mysqli_query($conn, $sql_appointment_limit);

// $f_appointment_limit = mysqli_fetch_assoc($r_appointment_limit);
// $no_of_appointments = $f_appointment_limit['appointment_count'];
// $no_of_appointments = 25;






?>
<!-- <li id="sidebar-li">
					<a href="../allappointment/appointments.php" id="allappointment" style="display:flex;" >
						<span class="ti-allappointment"></span>&nbsp; All Appointments
					</a>
				
				
				</li> -->
				<li id="sidebar-li" style="position: relative;">
    <a href="#" id="appmenu" data-toggle="collapse" style="display: flex;">
	<span class="ti-appointment"></span> &nbsp; Appointments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="appoint-expend"></i>
    </a>
    <ul class="list-unstyled" id="app-menu">
        <li>
            <a href="../appointment/add_appointment.php" id="doctor_add_appointment" class="mobilemenu">Add Appointment</a>
        </li>
       
		<li>
            <a href="../allappointment/appointments.php" class="mobilemenu">All Appointments</a>
        </li>
		<li>
            <a href="../appointment/cancelled_appointments.php" class="mobilemenu">Cancelled Appointments</a>
        </li>
    </ul>
</li>
				
				<script>
    $(document).ready(function(){
        $('#app-menu').hide(); // Corrected class to match HTML

        $('#appmenu').click(function(){ // Corrected ID to match HTML
            $('#app-menu').toggle(); // Corrected ID to match HTML
      // Toggle class for plus and minus icon
	  $('#appoint-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#appoint-expend').addClass('ti-plus');
    });
</script>
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

				<?php

				if(isset($pharmacy['pharmacy']) && $pharmacy['pharmacy'] ===  'yes'){
					
					?>
					
				<li id="sidebar-li">
						<a href="#" id="medmenu" style="display:flex;" data-toggle="collapse" >
							<span class="ti-medicine"></span>&nbsp; Medicine
							<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="medicine-expend"></i>
						</a>
						<ul class="list-unstyled" id="med-menu">
							<li>
								<a href="../medicine/add_medicine.php">Add-View Medicine</a>
							</li>
							<li>
								<a href="../medicine/medicine_stock.php">Medicine Stocks</a>
							</li>
						
						</ul>
					</li>
				<li id="sidebar-li">
					
				<script>
    $(document).ready(function(){
        $('#med-menu').hide(); // Corrected class to match HTML

        $('#medmenu').click(function(){ // Corrected ID to match HTML
            $('#med-menu').toggle(); // Corrected ID to match HTML
			$('#medicine-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#medicine-expend').addClass('ti-plus');
    });
</script>
						<a href="#" id="suppmenu" style="display:flex;" data-toggle="collapse" >
							<span class="ti-supplier"></span>&nbsp; Supplier
							<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="supplier-expend"></i>
						</a>
						<ul class="list-unstyled" id="supp-menu">
							<li>
								<a href="../supplier/add_supplier.php">Add Supplier</a>
							</li>
							<li>
								<a href="../supplier/all_supplier.php">All Supplier</a>
							</li>
						
						</ul>
					</li>
					
				<script>
    $(document).ready(function(){
        $('#supp-menu').hide(); // Corrected class to match HTML

        $('#suppmenu').click(function(){ // Corrected ID to match HTML
            $('#supp-menu').toggle(); // Corrected ID to match HTML
			$('#supplier-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#supplier-expend').addClass('ti-plus');
    });
</script>					
<?php } ?>

<li id="sidebar-li">
      <a href="../prescription/patients_observed.php" id="prescmenu" style="display:flex;">
        <span class="ti-prescription"></span>&nbsp; Prescriptions
      </a>
    </li>
<li id="sidebar-li">
      <a href="../payment/payments.php" id="paymenu" style="display: flex;">
        <span class="ti-payment"></span>&nbsp; Payments
      </a>
    </li>


<li id="sidebar-li">
      <a href="" id="schmenu" style="display:flex;" data-toggle="collapse" >
        <span class="ti-schedule"></span>&nbsp; Schedule
		<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="schedule-expend"></i>
      </a>
      <ul class="list-unstyled" id="sch-menu">
        <li>
          <a href="../availability/availability.php" class="mobilemenu">Regular Schedule</a>
        </li>
        <li>
          <a href="../availability/special_days.php" class="mobilemenu">Special Days</a>
        </li>
       
      </ul>
    </li>
    <script>
    $(document).ready(function(){
        $('#sch-menu').hide(); // Corrected class to match HTML

        $('#schmenu').click(function(){ // Corrected ID to match HTML
            $('#sch-menu').toggle(); // Corrected ID to match HTML
			$('#schedule-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#schedule-expend').addClass('ti-plus');
    });
</script>
					<?php
 $sql_no_of_recep = "SELECT COUNT(*) AS recep_count FROM users WHERE user_type_id = 1 AND hospital_id = '$hospital_id_acc'";
 $r_recep_limit = mysqli_query($conn, $sql_no_of_recep);

$f_recep_limit = mysqli_fetch_assoc($r_recep_limit);
$no_of_recep = $f_recep_limit['recep_count'];


?>
                <li id="sidebar-li">
					<a href="#" id="depmenu" style="display:flex;" data-toggle="collapse" >
					<span class="ti-department"></span>&nbsp; Department
					<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="department-expend"></i>

					</a>
					<ul class="list-unstyled" id="dep-menu">
						<li>
							<a href="../department/add_department.php" class="mobilemenu">Add Department</a>
						</li>
						<li>
							<a href="../department/view_department.php" class="mobilemenu">All Departments</a>
						</li>
						
					</ul>   
				</li>

				<li id="sidebar-li">
					<a href="#" id="usermanagementmenu" style="display:flex;" data-toggle="collapse" >
					<span class="ti-usermanagement"></span>&nbsp; User Management
					<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="usermanagement-expend"></i>

					</a>
					<ul class="list-unstyled" id="usermanagement-menu">
						<li>
							<!-- <a href="../usermanagement/add_user.php" class="mobilemenu">Add User</a> -->
				 <!--Receptionist Menu  -->
				<li id="sidebar-li">
					<a href="#" id="receptionistmenu" style="display:flex;" data-toggle="collapse" >
					<span class="ti-receptionist"></span>&nbsp; Receptionist
					<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="receptionist-expend"></i>

					</a>
					<ul class="list-unstyled" id="receptionist-menu">
						<li>
							<a href="../usermanagement/add_receptionist.php" id="add_recep" class="mobilemenu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Receptionist</a>
							
						</li>


						<li>
							<a href="../usermanagement/view_receptionist.php" class="mobilemenu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Receptionist</a>
						</li>
						
					</ul>   
				</li>
							<script>
    document.getElementById('add_recep').addEventListener('click', function(event) {
		var account_type = "<?php echo $account_type; ?>";
        var no_of_recep = "<?php echo $no_of_recep; ?>";
        if (account_type == 'free' && no_of_recep >= 1) {

        event.preventDefault(); 
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


		}
    });


	
</script>
						</li>
						<li>
				<!--Pharmacist Menu  -->
				<li id="sidebar-li">
					<a href="#" id="pharmacistmenu" style="display:flex;" data-toggle="collapse" >
					<span class="ti-pharmacist"></span>&nbsp; Pharmacist
					<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="pharmacist-expend"></i>

					</a>
					<ul class="list-unstyled" id="pharmacist-menu">
						<li>
							<a href="../usermanagement/add_pharmacist.php" id="add-pharma" class="mobilemenu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Pharmacist</a>
							
						</li>
						<li>
							<a href="../usermanagement/view_pharmacist.php" id="view-pharma" class="mobilemenu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Pharmacist</a>
						</li>
						
					</ul>   
				</li>

				<script>
	document.getElementById('add-pharma').addEventListener('click', function(event) {
		var account_type = "<?php echo $account_type; ?>";
        if (account_type == 'free') {

        event.preventDefault(); 
		Swal.fire({
                title: 'Limit Reached',
                text: 'No Pharmacist can be created in free accounts. Upgrade to Premium.',
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

<script>
		document.getElementById('view-pharma').addEventListener('click', function(event) {
		var account_type = "<?php echo $account_type; ?>";
        if (account_type == 'free') {

        event.preventDefault(); 
		Swal.fire({
                title: 'Limit Reached',
                text: 'No Pharmacist can be created in free accounts. Upgrade to Premium.',
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

				<!--Nurses Menu  -->

				<?php
if($account_type == 'free'){
				?>
				<li id="sidebar-li">
					<a href="#" id="nurcemenu" style="display:flex;" data-toggle="collapse" >
					<span class="ti-nurce"></span>&nbsp; Nurses
					<i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="nurce-expend"></i>

					</a>
					<ul class="list-unstyled" id="nurce-menu">
						<li>
							<a href="../usermanagement/add_nurse.php" id="add_nurse" class="mobilemenu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Nurses</a>
							
						</li>
						<li>
							<a href="../usermanagement/view_nurse.php" id="view_nurse" class="mobilemenu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Nurses</a>
						</li>
						
					</ul>   
				</li>
				<?php } ?>
						</li>
						
					</ul>   
				</li>
				<script>
					document.getElementById('add_nurse').addEventListener('click', function(event) {
		var account_type = "<?php echo $account_type; ?>";
        if (account_type == 'free') {

        event.preventDefault(); 
		Swal.fire({
                title: 'Limit Reached',
                text: 'No Pharmacist can be created in free accounts. Upgrade to Premium.',
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

<script>
					document.getElementById('view_nurse').addEventListener('click', function(event) {
		var account_type = "<?php echo $account_type; ?>";
        if (account_type == 'free') {

        event.preventDefault(); 
		Swal.fire({
                title: 'Limit Reached',
                text: 'No Pharmacist can be created in free accounts. Upgrade to Premium.',
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
				<li id="sidebar-li">
						<a href="#" id="settingmenu" data-toggle="collapse"  style="display:flex;">
							<span class="ti-setting"></span>&nbsp; Settings
              <i style="position: absolute; top: 12px; right: 0; font-size: 16px; font-weight: 600;" id="setting-expend"></i>
						</a>
						<ul class="list-unstyled" id="setting-menu">
							<li>
								<a href="../setting/refresh_page.php">Refresh Page</a>
							</li>
							<li>
								<a href="../setting/onboarding_form.php">On Boarding Form</a>
							</li>
							<li>
								<a href="../setting/all_on_boarding_form.php">All On Boarding Form</a>
							</li>
						
						</ul>
					</li>
          <script>
    $(document).ready(function(){
        $('#setting-menu').hide(); // Corrected class to match HTML

        $('#settingmenu').click(function(){ // Corrected ID to match HTML
            $('#setting-menu').toggle(); // Corrected ID to match HTML
            $('#setting-expend').toggleClass('ti-plus ti-minus'); 
    });

    // Set initial class to ti-plus
    $('#setting-expend').addClass('ti-plus');
    });
</script>
<?php } ?>
				
			</ul>
	
			</div>
			</div>

			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('doctor_add_appointment').addEventListener('click', function(event) {
        event.preventDefault(); 

        const accountType = '<?php echo $account_type; ?>';
        const noOfAppointments = <?php echo $no_of_appointments; ?>;
        const redirectUrl = '<?php echo '../appointment/add_appointment.php'; ?>';

        // Check the conditions
        if (accountType === 'free' && noOfAppointments >= 25) {
            Swal.fire({
                title: 'Limit Reached',
                text: 'Max 25 bookings allowed for free accounts. Upgrade to Premium.',
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
        } else {
            // Redirect if conditions are not met
            window.location.href = redirectUrl;
        }
    });
</script>


				<script>
		$(document).ready(function(){
			$('#dep-menu').hide(); // Corrected class to match HTML

			$('#depmenu').click(function(){ // Corrected ID to match HTML
				$('#dep-menu').toggle(); // Corrected ID to match HTML
		// Toggle class for plus and minus icon
		$('#department-expend').toggleClass('ti-plus ti-minus'); 
		});

		// Set initial class to ti-plus
		$('#department-expend').addClass('ti-plus');
	});
	
	$(document).ready(function(){
			$('#usermanagement-menu').hide(); // Corrected class to match HTML

			$('#usermanagementmenu').click(function(){ // Corrected ID to match HTML
				$('#usermanagement-menu').toggle(); // Corrected ID to match HTML
		// Toggle class for plus and minus icon
		$('#usermanagement-expend').toggleClass('ti-plus ti-minus'); 
		});

		// Set initial class to ti-plus
		$('#usermanagement-expend').addClass('ti-plus');
	});

	$(document).ready(function(){
			$('#receptionist-menu').hide(); // Corrected class to match HTML

			$('#receptionistmenu').click(function(){ // Corrected ID to match HTML
				$('#receptionist-menu').toggle(); // Corrected ID to match HTML
		// Toggle class for plus and minus icon
		$('#receptionist-expend').toggleClass('ti-plus ti-minus'); 
		});

		// Set initial class to ti-plus
		$('#receptionist-expend').addClass('ti-plus');
	});

	$(document).ready(function(){
			$('#pharmacist-menu').hide(); // Corrected class to match HTML

			$('#pharmacistmenu').click(function(){ // Corrected ID to match HTML
				$('#pharmacist-menu').toggle(); // Corrected ID to match HTML
		// Toggle class for plus and minus icon
		$('#pharmacist-expend').toggleClass('ti-plus ti-minus'); 
		});

		// Set initial class to ti-plus
		$('#pharmacist-expend').addClass('ti-plus');
	});

	$(document).ready(function(){
			$('#nurce-menu').hide(); // Corrected class to match HTML

			$('#nurcemenu').click(function(){ // Corrected ID to match HTML
				$('#nurce-menu').toggle(); // Corrected ID to match HTML
		// Toggle class for plus and minus icon
		$('#nurce-expend').toggleClass('ti-plus ti-minus'); 
		});

		// Set initial class to ti-plus
		$('#nurce-expend').addClass('ti-plus');
	});

	</script>
		</nav>
		<div id="sidebar-overlay">

		</div>
		<script>
  $(document).ready(function() {
    $('.openmenu-close').click(function() {
        // $('#sidebar').toggleClass('active');
        $('#sidebar-overlay').toggle(); // Show/hide the overlay when toggling the sidebar
    });
    $('#sidebarCollapse1').click(function() {
        // $('#sidebar').toggleClass('active');
        $('#sidebar-overlay').toggle(); // Show/hide the overlay when toggling the sidebar
    });
});

</script>
		<style>
  .actives{
    background: #95bde6;
    border-radius: 10px;
    color: #08203e;
  }
  .dash-back:before {
    background-image: url('../images/Menu_icons/Dashboard2.png');
}
.profile-back:before {
    background-image: url('../images/Menu_icons/Doctor2.png');
}
.appoint-back:before {
    background-image: url('../images/Menu_icons/Appointment2.png');
}
.patient-back:before {
    background-image: url('../images/Menu_icons/Patient2.png');
}
.schedule-back:before {
    background-image: url('../images/Menu_icons/Schedule2.png');
}
.presc-back:before {
    background-image: url('../images/Menu_icons/Prescription2.png');
}
.mediback-back:before {
    background-image: url('../images/Menu_icons/Prescription2.png');
}
.medicine-back:before {
    background-image: url('../images/Menu_icons/Medicine2.png');
}
.supplier-back:before {
    background-image: url('../images/Menu_icons/Supplier2.png');
}
.payment-back:before {
    background-image: url('../images/Menu_icons/Payment2.png');
}
.hospital-back:before {
    background-image: url('../images/Menu_icons/Hospital2.png');
}
.department-back:before {
    background-image: url('../images/Menu_icons/Department2.png');
}
.allappoint-back:before {
    background-image: url('../images/Menu_icons/Appointment2.png');
}
.setting-back:before {
    background-image: url('../images/Menu_icons/Setting3.png');
}



</style>
<script>
$(document).ready(function(){
    // Add click event handler to the image
    $('.openmenu-close').click(function(){
        // Remove the 'active' class from the <nav> element with id 'sidebar'
        $('#sidebar').removeClass('active');
    });

    // Highlight selected tab
    var currentPageUrl = window.location.pathname;
var pathStartIndex = currentPageUrl.indexOf('/', 1); // Find the second occurrence of "/"
var pathEndIndex = currentPageUrl.indexOf('/', pathStartIndex + 1); // Find the third occurrence of "/"
var currentUrls = currentPageUrl.substring(pathStartIndex, pathEndIndex); 
currentUrls += '/'; // Add a trailing slash
// console.log(currentUrls);

    // console.log("Current Page URL:", currentPageUrl); // Debug statement

    $('#sidebar-ul li').each(function() {
        var menuLink = $(this).find('a').attr('href');

        // Convert relative URLs to absolute paths
        var absoluteMenuLink = new URL(menuLink, window.location.origin).pathname;
var pathStartIndex = absoluteMenuLink.indexOf('/', 1); // Find the second occurrence of "/"
var currentUrl = absoluteMenuLink.substring(0, pathStartIndex + 1); // Extract the substring starting from the beginning up to the second occurrence of "/"


        // Ensure consistent trailing slashes for comparison
        currentPageUrl = currentPageUrl.replace(/\/$/, ''); // Remove trailing slash if present
        absoluteMenuLink = absoluteMenuLink.replace(/\/$/, ''); // Remove trailing slash if present
      // console.log(currentUrl);
      // console.log(currentUrls);
        if (currentUrl.trim() === currentUrls.trim()) { // Trim both URLs before comparison
          // console.log(currentUrl);
            // Add 'active' class to the closest <li> element
            if (currentUrl == '/dashboard/') {
                $('.ti-dash').addClass('dash-back');
              
            }
          if (currentUrl == '/doctor/') {
              $('.ti-profile').addClass('profile-back');
          }
          if (currentUrl == '/patient/') {
           $('.ti-profile').addClass('profile-back');
         }
         if (currentUrl == '/appointment/' || currentUrl == '/allappointment/') {
           $('.ti-appointment').addClass('appoint-back');
         }
         if (currentUrl == '/allappointment/') {
           $('.ti-allappointment').addClass('allappoint-back');
         }

         if (currentUrl == '/patient/') {
           $('.ti-patient').addClass('patient-back');
         }
         if (currentUrl == '/availability/') {
           $('.ti-schedule').addClass('schedule-back');
         }
         if (currentUrl == '/prescription/') {
           $('.ti-prescription').addClass('presc-back');
         }
		 if (currentUrl == '/medical_background/') {
           $('.ti-mediback').addClass('mediback-back');
         }
         if (currentUrl == '/payment/') {
           $('.ti-payment').addClass('payment-back');
         }
         if (currentUrl == '/medicine/') {
           $('.ti-medicine').addClass('medicine-back');
         }
         if (currentUrl == '/supplier/') {
           $('.ti-supplier').addClass('supplier-back');
         }
         if (currentUrl == '/hospital/') {
           $('.ti-hospitalprofile').addClass('hospital-back');
         }
         if (currentUrl == '/department/') {
           $('.ti-department').addClass('department-back');
         }
		 if (currentUrl == '/usermanagement/') {
           $('.ti-usermanagement').addClass('usermanagement-back');
         }
		 if (currentUrl == '/setting/') {
           $('.ti-setting').addClass('setting-back');
         }

		 if (currentUrl == '/medical_diary/') {
           $('.ti-medicalDiary').addClass('appoint-back');
         }

            $(this).addClass('actives');

            // Show the parent <ul> element if it's a submenu
            $(this).parents('ul').addClass('show');
            // Add 'active' class to the parent <li> element
            $(this).parents('li').addClass('actives');
            
        }
    });

    // Add 'active' class to the clicked <li> element
    $('#sidebar-ul li').click(function() {
        $('#sidebar-ul li').removeClass('actives'); // Remove 'active' class from all <li> elements
     
    });

    // Add 'active' class to the clicked <a> element
    $('#sidebar-ul li a').click(function(e) {
        // e.stopPropagation(); // Prevent the click event from bubbling up to the parent <li>
        $('#sidebar-ul li').removeClass('actives'); // Remove 'active' class from all <li> elements
        // Add 'active' class to the parent <li> element
        $(this).closest('li').addClass('actives');
    });
});
</script>

		<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // Add click event handler to the span icon
        $('#sidebarCollapse1').click(function(){
            // Toggle the 'active' class for the <nav> element with id 'sidebar'
            $('#sidebar').toggleClass('active');
        });
    });
</script>

		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<?php 

			if($account_type == ''){
				?>
	<nav class="navbar navbar-default" style="position:sticky; top:0; z-index:1000 !important;">
	<div class="container-fluid" style="margin-top:-3px;">

<?php
			 		}elseif($account_type == 'free'){
			 ?>
			<nav class="navbar navbar-default" style="position:sticky; top:0; z-index:1000 !important;padding-top: 0px;">
				<div class="container-fluid" style="margin: 10px 0px -16px 0px;">
				<?php
					}else{ ?>
			<nav class="navbar navbar-default" style="position:sticky; top:0; z-index:1000 !important;">
			<div class="container-fluid" style="">
				<?php	}
				?>
				<div class="responsive-logo">
					<div style="background-color:#95bde6 !important;" class="mobmenubutton">
			<div style="display:flex; justify-content:space-between; padding-top:17px;" class="navandlogo">
					<ul class="nav" style="margin-left:10px;">
						<li class="nav-item mobsidebar" style="padding-top:6px;">
							<span class="ti-menumobile" id="sidebarCollapse1"></span>
						</li>
</ul>
						<a href="../dashboard/dashboard.php" class="logofortab" ><img src="../images/logo.png" style="background-color:#95bde6 !important; width: 65%;
   "  class="logo" alt="logo"></a>
						<ul class="nav" >

						<?php
							if($_SESSION['auth_user']['user_type_name'] == 'doctor'){
								$r_doc_id = mysqli_query($conn, "SELECT doctor_id FROM doctor WHERE doctor_user_id = '" . $_SESSION['auth_user']['user_id'] . "'");
								$f_doc_id = mysqli_fetch_assoc($r_doc_id);
								$doctor_noti_id = $f_doc_id['doctor_id'];
								$hospital_noti_id = $_SESSION['session_hospital_id'];
							}

							?>
			<style>
/* Wrapper to position the notification icon and count */
.notification-icon-wrapper {
    position: relative;
    display: inline-block;
}

/* Notification icon styling */
.ti-announcementdesktop {
    font-size: 24px; /* Adjust the size as needed */
    color: #000;    /* Adjust the color as needed */
}

/* Notification count styling */
.notification-count_mob {
    position: absolute;
    top: -5px;
    right: -4px;
    background-color: green;
    color: white;
    font-size: 12px;
    font-weight: bold;
    border-radius: 50%;
    padding: 2px 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 18px;
    min-height: 18px;
    line-height: 1;
}
</style>

						<li class="nav-item ">
							<a class="dropdown-toggle" data-toggle="dropdown" style="padding-top:5px;" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<div class="notification-icon-wrapper">

								<span class="ti-announcementmobile"></span>
								<span class="notification-count_mob" id="notifcation_count_mob"></span> <!-- Replace 5 with dynamic notification count -->
								</div>
							</a>
							<?php
							$user_type_name = $_SESSION['auth_user']['user_type_name'];
							if($user_type_name == 'doctor'){
							$appoint_noti_url = '../allappointment/doctor_appointments.php';
							}elseif($user_type_name == 'patient'){
							$appoint_noti_url = '../appointment/patient_appointments.php';
						    }else
							$appoint_noti_url = '../allappointment/appointments.php';

							if($user_type_name == 'patient'){
								$prescription_noti_url = '../prescription/single_patient_prescription.php';
							}else{
								$prescription_noti_url = '../prescription/patients_observed.php';
							}

							if($user_type_name == 'patient'){
								$invoice_noti_url = '../payment/patient_payment.php';
							}else{
								$invoice_noti_url = '../payment/payments.php';
							}

							?>
							<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" style="background:#1d76d1; color:white; border-top:2px solid white;" href="<?php echo $appoint_noti_url;?>">
			                      <span class="ti-wheelchair"></span> Appointment Created 
								  <span id="pending-appointment" style="border-radius:50%;" class="badge badge-success"></span>
								 </a> 

								<a class="dropdown-item" style="background:#1d76d1; color:white;" href="<?php echo $appoint_noti_url;?>">
									<span class="ti-wheelchair"></span> Appointment Approved
									<span id="approved-appointment" style="border-radius:50%;" class="badge badge-success"></span>

								</a>

								<?php
								if($_SESSION['auth_user']['user_type_name'] == 'patient'){
									?>
								<a class="dropdown-item" style="background:#1d76d1; color:white;" href="<?php echo $invoice_noti_url;?>">
									<span class="ti-money"></span>Invoice Created
									<span id="invoice-created" style="border-radius:50%;" class="badge badge-success"></span>

								</a>

								<?php } ?>

								<!-- <?php
								if($_SESSION['auth_user']['user_type_name'] != 'patient' && $_SESSION['auth_user']['user_type_name'] != 'Receptionist'){
									?>
								<a class="dropdown-item" style="background:#1d76d1; color:white;" href="../patient/patients.php">
									<span class="ti-wheelchair" ></span> New Patient Added
									<span id="new-patient" style="border-radius:50%;" class="badge badge-success"></span>

								</a>

								<?php } ?> -->

								<?php
								if($_SESSION['auth_user']['user_type_name'] == 'patient'){
									?>
								
								<a class="dropdown-item" style="background:#1d76d1; color:white;" href="<?php echo $prescription_noti_url;?>">
									<span class="ti-wheelchair" ></span> Prescription created
									<span id="new-prescription" style="border-radius:50%;" class="badge badge-success"></span>
								</a>

								<?php } ?>
							</div>
						</li>
						</ul>


						<script>
    function fetchNotifications() {
        var doctor_id = "<?php echo $doctor_noti_id; ?>";
        var hospital_id = "<?php echo $hospital_noti_id; ?>";
		var user_type_name = "<?php echo $_SESSION['auth_user']['user_type_name']?>";
		$.ajax({
    url: '../header/notification_ajax.php', 
    type: 'POST', 
    success: function(response) {
		// console.log(response);
		var data = JSON.parse(response);
		// alert(user_type_name);
		if(user_type_name == 'patient'){
			var total_noti = data.appointment + data.appointment_approved + data.new_prescription + data.invoice_created;
		}else{

			var total_noti = data.appointment + data.appointment_approved;
		}
		// alert(total_noti);
		if(total_noti > 0){
			$('#notifcation_count_mob').show();
			$('#notifcation_count_mob').text(total_noti);
			
		}else{
			$('#notifcation_count_mob').hide();

		}
		if(data.appointment > 0){
            $('#pending-appointment').text(data.appointment); 
			$('#pending-appointment').show();
		}else{
			$('#pending-appointment').hide();

		}
		if(data.appointment_approved > 0){
			$('#approved-appointment').text(data.appointment_approved); 
			$('#approved-appointment').show();
		}else{
			$('#approved-appointment').hide();

		}
	

		// if(data.new_patient > 0){
		// 	$('#new-patient').text(data.new_patient); 
		// 	$('#new-patient').show();
		// }else{
		// 	$('#new-patient').hide();

		// }


if(user_type_name == 'patient'){
		if(data.new_prescription > 0){
			$('#new-prescription').text(data.new_prescription); 
			$('#new-prescription').show();
		}else{
			$('#new-prescription').hide();

		}

		if(data.invoice_created > 0){
			$('#invoice-created').text(data.invoice_created); 
			$('#invoice-created').show();
		}else{
			$('#invoice-created').hide();

		}
	}
	
    },
    error: function(xhr, status, error) {
        // Improved error logging
        console.error('Error fetching notifications:', error);
    }
});

    }
    setInterval(fetchNotifications, 1000);
</script>



						<ul class="nav" style="padding-top:6px; margin-right:17px;">
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-usermobile"></span>
							</a>
							<?php
							if($patient_id)
								{ 
									?>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5 style="background:#1d76d1"><?php echo $fetch_patient_name;?></h5>
								

									<?php

		
		$sql_p="select * from users where user_id='$patient_id'";
		$result_p=mysqli_query($conn,$sql_p);
	    $fetch_p=mysqli_fetch_assoc($result_p);
		$user_type_ids=$fetch_p['user_type_id'];
		$user_name=$fetch_p['user_name'];
		$user_password=$fetch_p['user_password'];
		$user_phone=$fetch_p['user_phone'];
		$user_image=$fetch_p['user_image'];
		$user_type_id=explode(',',$user_type_ids);
			
?>
	<div class="" style="background:#1d76d1;">
	<script>
$(document).ready(function() {
    var user_image = '<?php echo $user_image; ?>';
    var default_image = '../images/mobile_icons/Logout.png';  // Default image path

    // Function to check if image is valid by creating an img element
    function isImageValid(url, callback) {
        var img = new Image();
        img.onload = function() {
            callback(true);  // Image is valid
        };
        img.onerror = function() {
            callback(false);  // Image is not valid
        };
        img.src = url;  // Set image URL to start loading
    }

    // Check if the user image is valid
    if (user_image && user_image.trim() !== '') {
        isImageValid(user_image, function(isValid) {
            if (isValid) {
                // If the user image exists and is valid, set it as the background
                $('.ti-usermobile').css('background-image', 'url("' + user_image + '")');
            } else {
                // If the user image is not valid, set the default image
                $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
            }
        });
    } else {
        // If the user image URL is empty, set the default image
        $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
    }
});
</script>

  <?php
						foreach($user_type_id as $usertypeid) { 
							
							$sql_u = "SELECT * FROM user_type WHERE user_type_id='".$usertypeid."'";
							$result_u = mysqli_query($conn, $sql_u);
							$fetch_u = mysqli_fetch_assoc($result_u);
							$user_type_name = $fetch_u['user_type_name'];
// echo $user_type_name;
							// Check if the user type is not "Hospital"
							if($user_type_name != 'Patient') {
								if($user_type_name == 'Hospital')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer; " data-user="Hospital"><img src="../images/Menu_icons/Hospital.png" title="Switch to Hospital" style="height: 32px;" alt=""></a>

								<?php }elseif($user_type_name == 'Doctor')
								{ ?>

<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-around;">
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Doctor"><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt="">






									<label for="" style="margin-top: 9px; font-size:12px; color:white; cursor:pointer;">Switch to Doctor</label></a>
									</div>
									</div>

							<?php	}elseif($user_type_name == 'Receptionist'){
?>
<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-around;">
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Receptionist"><img src="../images/Menu_icons/profile.png" title="Switch to Receptionist" style="height: 32px;" alt="">
									<label for="" style="margin-top: 9px; font-size:12px; color:white; cursor:pointer;">Switch to Receptionist</label>
									</a>
									</div>
									</div>
<?php
							}elseif($user_type_name == 'Pharmacist'){

?>

<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-around;">
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Pharmacist"><img src="../images/Menu_icons/profile.png" title="Switch to Pharmacist" style="height: 32px;" alt="">

									<label for="" style="margin-top: 9px; font-size:12px; color:white; cursor:pointer;">Switch to Pharmacist</label>
									</a>
									</div>
									</div>

<?php

							}
							}else{ 
								
								?>

							<a style="padding: 5px;border-radius: 5px; background:#95bde6;"><img src="../images/Menu_icons/Profile.png" title="Switch to Patient" style="height: 32px;" alt=""></a>
								
							
						<?php	}
						}
						?>

</div>


						<script>
    $('#panelcahnge').on("change", function() {
        var type_name = $(this).val();
		var user_name = '<?php echo $user_name; ?>';
		var user_password = '<?php echo $user_password; ?>';
		var user_phone = '<?php echo $user_phone; ?>';

		window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password + '&phone=' + user_phone + 'id=1';
        // //alert(type_name);

    });
</script>



									<form action="../logout.php" method="Post" style="background:#1d76d1;">
										<a class="dropdown-item" name="logout">
											 
											<span class="ti-power-off" style="color:white;"></span><input type="submit" style="background: none;border: none;cursor: pointer;color:white;" name="submit" value="Logout"> </a>
								</form>

							</div>
							<?php }elseif($_SESSION['auth_user']['user_type_name'] == 'Receptionist'){
								
								$sql_recep_name = "SELECT user_username FROM users WHERE user_id  = '" . $_SESSION['auth_user']['user_id'] ."'";
								$r_recep_name = mysqli_query($conn, $sql_recep_name);
								$fetch_recep_name = mysqli_fetch_assoc($r_recep_name);


								
								?>

								<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5 style="background:#1d76d1"><?php echo $fetch_recep_name['user_username'];?></h5>
                                
								<?php
		$user_ids=$_SESSION['auth_user']['user_id'];
		$sql_p="select * from users where user_id='$user_ids'";
		$result_p=mysqli_query($conn,$sql_p);
	    $fetch_p=mysqli_fetch_assoc($result_p);
		$user_type_ids=$fetch_p['user_type_id'];
		$user_name=$fetch_p['user_name'];
		$user_password=$fetch_p['user_password'];
		$user_phone=$fetch_p['user_phone'];
		$user_type_id=explode(',',$user_type_ids);


		$sql_image = "SELECT user_image FROM users WHERE user_id = '$user_ids'";
		$result_image = mysqli_query($conn, $sql_image);
		$fetch_image = mysqli_fetch_assoc($result_image);
		$hospital_image=!empty($fetch_image['image_url']) ? $fetch_image['image_url'] : '../images/mobile_icons/Logout2.png';
			
		
?>
	<script>
$(document).ready(function() {
    var user_image = '<?php echo $hospital_image; ?>';
    var default_image = '../images/mobile_icons/Logout.png';  // Default image path

    // Function to check if image is valid by creating an img element
    function isImageValid(url, callback) {
        var img = new Image();
        img.onload = function() {
            callback(true);  // Image is valid
        };
        img.onerror = function() {
            callback(false);  // Image is not valid
        };
        img.src = url;  // Set image URL to start loading
    }

    // Check if the user image is valid
    if (user_image && user_image.trim() !== '') {
        isImageValid(user_image, function(isValid) {
            if (isValid) {
                // If the user image exists and is valid, set it as the background
                $('.ti-usermobile').css('background-image', 'url("' + user_image + '")');
            } else {
                // If the user image is not valid, set the default image
                $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
            }
        });
    } else {
        // If the user image URL is empty, set the default image
        $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
    }
});
</script>
<div class="btn-group col-md-12 form-control" style="background: #1d76d1;justify-content: space-around;display: flex;height: 53px;">

  <?php
						foreach($user_type_id as $usertypeid) { 
							$sql_u = "SELECT * FROM user_type WHERE user_type_id='".$usertypeid."'";
							$result_u = mysqli_query($conn, $sql_u);
							$fetch_u = mysqli_fetch_assoc($result_u);
							$user_type_name = $fetch_u['user_type_name'];

							// Check if the user type is not "Hospital"
							if($user_type_name != 'Receptionist') {
									
								if($user_type_name == 'Patient')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Patient"><img src="../images/Menu_icons/profile1.png" title="Switch to Patient" style="height: 32px;" alt=""></a>
								<?php }elseif($user_type_name == 'Doctor')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Doctor"><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt=""></a>
							<?php	}
							}else{ ?>

							<a class="switchaccount" style="padding: 5px;border-radius: 5px;"  data-user="Patient"> <img src="../images/Menu_icons/Patient.png" title="Switch to Patient" style="height: 32px;" alt=""></a>


						<?php	}
						}
						?>

  <!-- </div> -->
</div>
						
						<script>
    $('#panelcahnge').on("change", function() {
        var type_name = $(this).data('user');
		var user_name = '<?php echo $user_name; ?>';
		var user_password = '<?php echo $user_password; ?>';
		var user_phone = '<?php echo $user_phone; ?>';

		window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password + '&phone=' + user_phone + 'id=2';
        // //alert(type_name);

    });
</script>

									<form action="../logout.php" method="Post" style="background:#1d76d1;">
										<a class="dropdown-item" name="logout">
											 
											<span class="ti-power-off" style="color:white;"></span><input type="submit" style="background: none;border: none;cursor: pointer;color:white;" name="submit" value="Logout"> </a>
								</form>

							</div>


						

								<?php
							}elseif($_SESSION['auth_user']['user_type_name'] == 'Pharmacist'){

									
								$sql_recep_name = "SELECT user_username FROM users WHERE user_id  = '" . $_SESSION['auth_user']['user_id'] ."'";
								$r_recep_name = mysqli_query($conn, $sql_recep_name);
								$fetch_recep_name = mysqli_fetch_assoc($r_recep_name);
								?>
								<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5 style="background:#1d76d1"><?php echo $fetch_recep_name['user_username'];?></h5>

								<?php
		$user_ids=$_SESSION['auth_user']['user_id'];
		$sql_p="select * from users where user_id='$user_ids'";
		$result_p=mysqli_query($conn,$sql_p);
	    $fetch_p=mysqli_fetch_assoc($result_p);
		$user_type_ids=$fetch_p['user_type_id'];
		$user_name=$fetch_p['user_name'];
		$user_password=$fetch_p['user_password'];
		$user_phone=$fetch_p['user_phone'];
		$user_type_id=explode(',',$user_type_ids);


		$sql_image = "SELECT user_image FROM users WHERE user_id = '$user_ids'";
		$result_image = mysqli_query($conn, $sql_image);
		$fetch_image = mysqli_fetch_assoc($result_image);
		$hospital_image=!empty($fetch_image['image_url']) ? $fetch_image['image_url'] : '../images/mobile_icons/Logout2.png';
			
		
?>
	<script>
$(document).ready(function() {
    var user_image = '<?php echo $hospital_image; ?>';
    var default_image = '../images/mobile_icons/Logout.png';  // Default image path

    // Function to check if image is valid by creating an img element
    function isImageValid(url, callback) {
        var img = new Image();
        img.onload = function() {
            callback(true);  // Image is valid
        };
        img.onerror = function() {
            callback(false);  // Image is not valid
        };
        img.src = url;  // Set image URL to start loading
    }

    // Check if the user image is valid
    if (user_image && user_image.trim() !== '') {
        isImageValid(user_image, function(isValid) {
            if (isValid) {
                // If the user image exists and is valid, set it as the background
                $('.ti-usermobile').css('background-image', 'url("' + user_image + '")');
            } else {
                // If the user image is not valid, set the default image
                $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
            }
        });
    } else {
        // If the user image URL is empty, set the default image
        $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
    }
});
</script>
<div class="btn-group col-md-12 form-control" style="background: #1d76d1;justify-content: space-around;display: flex;height: 53px;">

  <?php
						foreach($user_type_id as $usertypeid) { 
							$sql_u = "SELECT * FROM user_type WHERE user_type_id='".$usertypeid."'";
							$result_u = mysqli_query($conn, $sql_u);
							$fetch_u = mysqli_fetch_assoc($result_u);
							$user_type_name = $fetch_u['user_type_name'];

							// Check if the user type is not "Hospital"
							if($user_type_name != 'Pharmacist') {
									
								if($user_type_name == 'Patient')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Patient"><img src="../images/Menu_icons/profile1.png" title="Switch to Patient" style="height: 32px;" alt=""></a>
								<?php }elseif($user_type_name == 'Doctor')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Doctor"><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt=""></a>
							<?php	}
							}else{ ?>

							<a class="switchaccount" style="padding: 5px;border-radius: 5px;"  data-user="Patient"> <img src="../images/Menu_icons/Patient.png" title="Switch to Patient" style="height: 32px;" alt=""></a>


						<?php	}
						}
						?>

  <!-- </div> -->
</div>
						
						<script>
    $('#panelcahnge').on("change", function() {
        var type_name = $(this).data('user');
		var user_name = '<?php echo $user_name; ?>';
		var user_password = '<?php echo $user_password; ?>';
		var user_phone = '<?php echo $user_phone; ?>';

		window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password + '&phone=' + user_phone + 'id=3';
        // //alert(type_name);

    });
</script>

									<form action="../logout.php" method="Post" style="background:#1d76d1;">
										<a class="dropdown-item" name="logout">
											 
											<span class="ti-power-off" style="color:white;"></span><input type="submit" style="background: none;border: none;cursor: pointer;color:white;" name="submit" value="Logout"> </a>
								</form>

							</div>

								<?php
							}
							else if($hospital_id){
								?>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5 style="background:#1d76d1"><?php echo $fetch_hospital_name;?></h5>
								<?php
		$user_ids=$_SESSION['auth_user']['hospital_userid'];
		$sql_p="select * from users where user_id='$user_ids'";
		$result_p=mysqli_query($conn,$sql_p);
	    $fetch_p=mysqli_fetch_assoc($result_p);
		$user_type_ids=$fetch_p['user_type_id'];
		$user_name=$fetch_p['user_name'];
		$user_password=$fetch_p['user_password'];
		$user_phone=$fetch_p['user_phone'];
		$user_type_id=explode(',',$user_type_ids);


		$sql_image = "SELECT hospital_image_url FROM hospital WHERE hospital_id = '$hospital_id'";
		$result_image = mysqli_query($conn, $sql_image);
		$fetch_image = mysqli_fetch_assoc($result_image);
		$hospital_image=!empty($fetch_image['hospital_image_url']) ? $fetch_image['hospital_image_url'] : '../images/mobile_icons/Logout2.png';
			
		
?>
	<script>
$(document).ready(function() {
    var user_image = '<?php echo $hospital_image; ?>';
    var default_image = '../images/mobile_icons/Logout.png';  // Default image path

    // Function to check if image is valid by creating an img element
    function isImageValid(url, callback) {
        var img = new Image();
        img.onload = function() {
            callback(true);  // Image is valid
        };
        img.onerror = function() {
            callback(false);  // Image is not valid
        };
        img.src = url;  // Set image URL to start loading
    }

    // Check if the user image is valid
    if (user_image && user_image.trim() !== '') {
        isImageValid(user_image, function(isValid) {
            if (isValid) {
                // If the user image exists and is valid, set it as the background
                $('.ti-usermobile').css('background-image', 'url("' + user_image + '")');
            } else {
                // If the user image is not valid, set the default image
                $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
            }
        });
    } else {
        // If the user image URL is empty, set the default image
        $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
    }
});
</script>
<div class="" style="background: #1d76d1;">

  <?php
						foreach($user_type_id as $usertypeid) { 
							$sql_u = "SELECT * FROM user_type WHERE user_type_id='".$usertypeid."'";
							$result_u = mysqli_query($conn, $sql_u);
							$fetch_u = mysqli_fetch_assoc($result_u);
							$user_type_name = $fetch_u['user_type_name'];

							// Check if the user type is not "Hospital"
							if($user_type_name != 'Hospital') {
									
								if($user_type_name == 'Patient')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Patient"><img src="../images/Menu_icons/profile1.png" title="Switch to Patient" style="height: 32px;" alt=""></a>
								<?php }elseif($user_type_name == 'Doctor')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Doctor"><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt=""></a>
							<?php	}
							}elseif($account_type == 'paid'){
								$sql_access = "SELECT doctor_id FROM hospital_vs_doctor WHERE hospital_id = '$hospital_id_acc' AND hospital_access = 1";
								$r_access = mysqli_query($conn, $sql_access);
								$f_access = mysqli_fetch_assoc($r_access);
								$doctor_access_id = $f_access['doctor_id'];
								
								$sql_doc_free = " SELECT  users.user_name, users.user_password FROM users INNER JOIN doctor ON doctor.doctor_user_id = users.user_id WHERE doctor.doctor_id = '$doctor_access_id';";
								$r_doc_free = mysqli_query($conn, $sql_doc_free);
								$f_doc_free = mysqli_fetch_assoc($r_doc_free);
								$doc_free_username = $f_doc_free['user_name'];
								$doc_free_userpassword = $f_doc_free['user_password'];
								
								if(isset($doctor_access_id)){
								?>

<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-around;">
<a class="switchaccount_free" style="padding: 5px;cursor:pointer;" data-user="Doctor"><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt="">
<label style="margin-top: 9px; font-size:12px; color:white; cursor:pointer;">Switch to Doctor</label></a>

</div>
</div>
								
								
								
							<?php }}else{ ?>
<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white;" >
<div class="col-md-12" style="display: flex; justify-content: space-around;">
							<a style="padding: 5px;border-radius: 5px; background:#95bde6"><img src="../images/Menu_icons/Hospital.png" title="Switch to Hospital" style="height: 32px;" alt="">
							<label for="" style="margin-top: 9px; font-size:12px; color:white; cursor:pointer;">Switch to Hospital</label></a>

							</div>
							</div>
						<?php	
						
					
					if($account_type == 'free'){
					
					
					
			$sql_doc_free = "SELECT u.user_name, u.user_password FROM hospital_vs_doctor h JOIN doctor d ON h.doctor_id = d.doctor_id JOIN users u ON d.doctor_user_id = u.user_id WHERE h.hospital_id = '$hospital_id' AND (h.relieving_date IS NULL OR h.relieving_date >= CURDATE() OR h.relieving_date = 'NULL') LIMIT 1";
			$r_doc_free = mysqli_query($conn, $sql_doc_free);
			$f_doc_free = mysqli_fetch_assoc($r_doc_free);
			$doc_free_username = $f_doc_free['user_name'];
			$doc_free_userpassword = $f_doc_free['user_password'];


					
					
					
					
					?>

<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-around;">
<a class="switchaccount_free" style="padding: 5px;cursor:pointer;" data-user="Doctor"><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt="">
<label style="margin-top: 9px; font-size:12px; color:white; cursor:pointer;">Switch to Doctor</label></a>

</div>
</div>

<?php
				}}
						}
						?>

  <!-- </div> -->
</div>
						
						<script>
    $('#panelcahnge').on("change", function() {
        var type_name = $(this).data('user');
		var user_name = '<?php echo $user_name; ?>';
		var user_password = '<?php echo $user_password; ?>';
		var user_phone = '<?php echo $user_phone; ?>';

		window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password + '&phone=' + user_phone + 'id=4';
        // //alert(type_name);

    });
</script>

									<form action="../logout.php" method="Post" style="background:#1d76d1;">
										<a class="dropdown-item" name="logout">
											 
											<span class="ti-power-off" style="color:white;"></span><input type="submit" style="background: none;border: none;cursor: pointer;color:white;" name="submit" value="Logout"> </a>
								</form>

							</div>
							<?php }else if($doctor_id){
								?>
								
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY" style="background: #92722a;">
								
									<?php
		$user_ids=$_SESSION['auth_user']['hospital_userid'];
		$sql_p="select * from users where user_id='$doctor_id'";
		$result_p=mysqli_query($conn,$sql_p);
	    $fetch_p=mysqli_fetch_assoc($result_p);
		$user_type_ids=$fetch_p['user_type_id'];
		$user_name=$fetch_p['user_name'];
		$user_image=!empty($fetch_p['user_image']) ? $fetch_p['user_image'] : '../images/mobile_icons/Logout2.png';
		$user_username=$fetch_p['user_username'];
		$user_password=$fetch_p['user_password'];
		$user_type_id=explode(',',$user_type_ids);
			
		
?>
	<script>
$(document).ready(function() {
    var user_image = '<?php echo $user_image; ?>';
    var default_image = '../images/mobile_icons/Logout.png';  // Default image path

    // Function to check if image is valid by creating an img element
    function isImageValid(url, callback) {
        var img = new Image();
        img.onload = function() {
            callback(true);  // Image is valid
        };
        img.onerror = function() {
            callback(false);  // Image is not valid
        };
        img.src = url;  // Set image URL to start loading
    }

    // Check if the user image is valid
    if (user_image && user_image.trim() !== '') {
        isImageValid(user_image, function(isValid) {
            if (isValid) {
                // If the user image exists and is valid, set it as the background
                $('.ti-usermobile').css('background-image', 'url("' + user_image + '")');
            } else {
                // If the user image is not valid, set the default image
                $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
            }
        });
    } else {
        // If the user image URL is empty, set the default image
        $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
    }
});
</script>
								<h5 style="background: #1d76d1"><?php echo 'Dr. '.$user_username;?></h5>		
	<div class="" style="background: #1d76d1;">

	<?php
			if(count($user_type_id) > 1)
			{
						foreach($user_type_id as $usertypeid) { 
							$sql_u = "SELECT * FROM user_type WHERE user_type_id='".$usertypeid."'";
							$result_u = mysqli_query($conn, $sql_u);
							$fetch_u = mysqli_fetch_assoc($result_u);
							$user_type_name = $fetch_u['user_type_name'];

							// Check if the user type is not "Hospital"
							if($user_type_name != 'Doctor') {
								
								if($user_type_name == 'Hospital')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Hospital"><img src="../images/Menu_icons/Hospital.png" title="Switch to Hospital" style="height: 32px;" alt=""></a>
								<?php }elseif($user_type_name == 'Patient')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Patient"><img src="../images/Menu_icons/profile1.png" title="Switch to Patient" style="height: 32px;" alt=""></a>
								<?php }elseif($user_type_name == 'Doctor')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Patient"><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt=""></a>
							<?php	}
							}else{ ?>
								<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; margin-bottom:3px;" >
								<div class="col-md-12"  style="display: flex; justify-content: space-around;">
																<a style="padding: 5px;border-radius: 5px;background:#95bde6; "><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt=""></a>
																</div>
								</div>
														<?php	}
														}
													}elseif($account_type == 'paid'){
								
								// echo $doctor_table_id;
								
								$sql_access = "SELECT hospital_access FROM hospital_vs_doctor WHERE hospital_id = '$hospital_id_acc' AND doctor_id = '$doctor_table_id'";
								$r_access = mysqli_query($conn, $sql_access);
								$f_access = mysqli_fetch_assoc($r_access);
								$access_value = $f_access['hospital_access'];
								$is_access = ($access_value == '' || $access_value == 0) ? 0 :1;
								
								$sql_hos_free = "SELECT user_name, user_password FROM users WHERE user_id = '$hospital_user_id'";
								$r_hos_free = mysqli_query($conn, $sql_hos_free);
								$f_hos_free = mysqli_fetch_assoc($r_hos_free);
								$free_hos_username = $f_hos_free['user_name'];
								$free_hos_password = $f_hos_free['user_password'];
														
													?>
																<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
														<div class="col-md-12"  style="display: flex; justify-content: space-around;">
									<a class="switchaccount" style="padding: 5px; cursor: pointer;" data-user="Patient">
										<img src="../images/Menu_icons/Patient.png" title="Switch to Patient" style="height: 32px;" alt="">
									
									<label for="" style=" margin-top: 9px; font-size:12px; color:white; cursor:pointer">Switch to Patient</label>
									</a>
								</div>
								</div>
								
								<?php 
								if($is_access == 1){
								?>
								
								<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white;">
														<div class="col-md-12"  style="display: flex; justify-content: space-around;">
								
																	<a class="switchaccount_free" style="padding: 5px;cursor:pointer;" data-user="Hospital"><img src="../images/Menu_icons/Hospital.png" title="Switch to Hospital" style="height: 32px;" alt="">
									<label for="" style=" margin-top: 9px; font-size:12px; color:white; cursor:pointer">Switch to Hospital</label></a>
								</div>
								</div>
								
								
								
													<?php
													}}else{ ?>
													<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; margin-bottom:3px;" >
														<div class="col-md-12"  style="display: flex; justify-content: space-around;">
									<a class="switchaccount" style="padding: 5px; cursor: pointer;" data-user="Patient">
										<img src="../images/Menu_icons/Patient.png" title="Switch to Patient" style="height: 32px;" alt="">
										<label for="" style=" margin-top: 9px; font-size:12px; color:white; cursor:pointer">Switch to Patient</label>
									</a>
								</div>
								</div>
								
												<?php 
											if($account_type == 'free'){
								$sql_hos_free = "SELECT user_name, user_password FROM users WHERE user_id = '$hospital_user_id'";
								$r_hos_free = mysqli_query($conn, $sql_hos_free);
								$f_hos_free = mysqli_fetch_assoc($r_hos_free);
								$free_hos_username = $f_hos_free['user_name'];
								$free_hos_password = $f_hos_free['user_password'];
								
								
												?>
																	<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white;">
														<div class="col-md-12"  style="display: flex; justify-content: space-around;">
								
																	<a class="switchaccount_free" style="padding: 5px;cursor:pointer;" data-user="Hospital"><img src="../images/Menu_icons/Hospital.png" title="Switch to Hospital" style="height: 32px;" alt="">
									<label for="" style=" margin-top: 9px; font-size:12px; color:white; cursor:pointer">Switch to Hospital</label></a>
								</div>
								</div>
								
												<?php
											}	
											
											}
														?>
	

  <!-- //////////000001 -->
</div>

						<script>
    $('#panelcahnge').on("change", function() {
        var type_name = $(this).val();
		var user_name = '<?php echo $user_name; ?>';
		var user_password = '<?php echo $user_password; ?>';

		// window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password;
        // //alert(type_name);

    });
</script>


									<form action="../logout.php" method="Post" style="background:#1d76d1;">
										<a class="dropdown-item" name="logout">
											 
											<span class="ti-power-off" style="color:white;"></span><input type="submit" style="background: none;border: none;cursor: pointer;color:white;" name="submit" value="Logout"> </a>
								</form>

							</div>
							<?php }else if($supplier_id){
								
								?>
								
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY" style="background: #92722a;">
								
									<?php
		
		$sql_p="select * from supplier where supplier_id='$supplier_id'";
		$result_p=mysqli_query($conn,$sql_p);
	    $fetch_p=mysqli_fetch_assoc($result_p);
		$supplier_name=$fetch_p['supplier_name'];
		$supplier_image=!empty($fetch_p['supplier_image']) ? $fetch_p['supplier_image'] : '../images/mobile_icons/Logout2.png';
	
			
		
?>
	<script>
$(document).ready(function() {
    var user_image = '<?php echo $supplier_image; ?>';
    var default_image = '../images/mobile_icons/Logout.png';  // Default image path

    // Function to check if image is valid by creating an img element
    function isImageValid(url, callback) {
        var img = new Image();
        img.onload = function() {
            callback(true);  // Image is valid
        };
        img.onerror = function() {
            callback(false);  // Image is not valid
        };
        img.src = url;  // Set image URL to start loading
    }

    // Check if the user image is valid
    if (user_image && user_image.trim() !== '') {
        isImageValid(user_image, function(isValid) {
            if (isValid) {
                // If the user image exists and is valid, set it as the background
                $('.ti-usermobile').css('background-image', 'url("' + user_image + '")');
            } else {
                // If the user image is not valid, set the default image
                $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
            }
        });
    } else {
        // If the user image URL is empty, set the default image
        $('.ti-usermobile').css('background-image', 'url("' + default_image + '")');
    }
});
</script>
<h5 style="background: #1d76d1"><?php echo 'Dr. '.$supplier_name;?></h5>		
	<div class="" style="background: #1d76d1;">


  <!-- //////////000001 -->
</div>

						<script>
    $('#panelcahnge').on("change", function() {
        var type_name = $(this).val();
		var user_name = '<?php echo $user_name; ?>';
		var user_password = '<?php echo $user_password; ?>';

		// window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password;
        // //alert(type_name);

    });
</script>


									<form action="../logout.php" method="Post" style="background:#1d76d1;">
										<a class="dropdown-item" name="logout">
											 
											<span class="ti-power-off" style="color:white;"></span><input type="submit" style="background: none;border: none;cursor: pointer;color:white;" name="submit" value="Logout"> </a>
								</form>

							</div>
							<?php }?>
						</li>
</ul>
</div>




<?php 
$sql_sed = "SELECT sed FROM subscription WHERE hospital_id = '$hospital_id_acc'";
$r_sed = mysqli_query($conn, $sql_sed);
$f_sed = mysqli_fetch_assoc($r_sed);

  if($patient_id){
?>
<div style="padding-top:22px; background:white;display: flex; justify-content: space-between; align-items: center;" id="hlogodiv">

<h3 class="hospitalname mobilename" style="color: #494d66;font-size: 20px;margin-top: 50px;margin-bottom: -24px;text-align: left;margin-left: 5px;"><?php echo $fetch_patient_name;?></h3>

</div>


						</div>

						<div style="display:flex; align-items: center;">
						<img src="<?php echo $fetch_image_url['user_image'];?>"  onerror="this.src='../images/patient_default.png'"  alt="Hospital Logo" class="laptopname" style="height:56px;border-radius: 5px;   ">
						<h3 class="hospitalname laptopname"  style="margin: 0; margin:0px;  margin-left:17px;" ><?php echo $fetch_patient_name;?></h3>


						</div>


					</div>
  <?php }
 else if($hospital_id){
	
	?>

						
		<?php
		if($account_type == 'free'){
			$hospital_image_url = '../images/hospital_default.png';
?>
	<div style="padding-top:22px; background:white;display: flex; justify-content: space-between; align-items: center;padding-bottom: 15px;margin-bottom: 13px;" id="hlogodiv">
<h3 class="hospitalname mobilename" style="color: #494d66;font-size: 16px;margin-top: 31px;margin-bottom: -15px;text-align: left;margin-left: 5px;"><?php echo $fetch_hospital_name;?></h3>

	<h3 style="color: #95bde6;font-size: 12px;text-align: right;margin: 16px 5px -7px 0px;background: white;
    border: 1px solid #95bde6;padding: 8px;border-radius: 4px;">Appointments &nbsp;&nbsp;<?php echo $no_of_appointments . ' / 25';?></h3>	

<?php }else{ 
	   $hospital_image_url = $fetch_image_url['hospital_image_url'];
	?>

	<div style="padding-top:22px; background:white;display: flex; justify-content: space-between; align-items: center;margin-bottom: 22px;" id="hlogodiv">
	<h3 class="hospitalname mobilename" style="color: #494d66;font-size: 20px;margin-top: 50px;margin-bottom: -24px;text-align: left;margin-left: 5px;"><?php echo $fetch_hospital_name;?></h3>

	<h3 style="color: #494d66; font-size: 12px; text-align: right;margin: 49px 5px -7px 0px;">Valid Upto: <?php echo date('d-m-Y', strtotime($f_sed['sed'])); ?></h3>	
<?php } ?>

	</div>	

	
	
</div>
<div style="display:flex; align-items: center;">
							<!-- echi hi -->
						<img src="<?php echo $hospital_image_url;?>"  onerror="this.src='../images/hospital_default.png'"  alt="Hospital Logo" class="laptopname" style="height:56px;border-radius: 5px;   ">
						<h3 class="hospitalname laptopname"  style="margin: 0; margin:0px;  margin-left:17px;" ><?php echo $fetch_hospital_name.'';?></h3>
						</div>

						

					</div>
  <?php } else if($doctor_id){

?>

	
<div style="padding-top:22px; background:white;display: flex; justify-content: space-between; align-items: center;" id="hlogodiv">


<?php
		if($account_type == 'free'){
			$image_url = '../images/doctor_default.png';
?>
<h3 class="hospitalname mobilename" style="color: #494d66;font-size: 16px;margin-top: 31px;margin-bottom: -15px;text-align: left;margin-left: 5px;"><?php echo 'Dr. '.$fetch_doctor_name;?></h3>

	<h3 style="color: #95bde6;font-size: 12px;text-align: right;margin: 16px 5px -7px 0px;background: white;
    border: 1px solid #95bde6;padding: 8px;border-radius: 4px;">Appointments &nbsp;&nbsp;<?php echo $no_of_appointments . ' / 25';?></h3>	

<?php }else{ 
		   $image_url = $fetch_image_url['user_image'];

	?>
	
	<h3 class="hospitalname mobilename" style="color: #494d66;font-size: 20px;margin-top: 50px;margin-bottom: -24px;text-align: left;margin-left: 5px;"><?php echo 'Dr. '.$fetch_doctor_name;?></h3>

	<h3 style="color: #494d66; font-size: 12px; text-align: right;margin: 49px 5px -7px 0px;">Valid Upto: <?php echo date('d-m-Y', strtotime($f_sed['sed'])); ?></h3>	
<?php } ?>
</div>
</div>
						<div style="display:flex; align-items: center;">
							<?php 
							if(isset($_SESSION['auth_user']['is_ref'])){?>
							
							<img src="<?php echo $image_url;?>"  onerror="this.src='../images/doctor_default.png'"  alt="Hospital Logo" class="laptopname" style="height:63px;border-radius: 5px;   ">
							<?php }else{ ?>
								<img src="<?php echo $image_url;?>"  onerror="this.src='../images/doctor_default.png'"  alt="Hospital Logo" class="laptopname" style="height:56px;border-radius: 5px;   ">

<?php } ?>
						<h3 class="hospitalname laptopname"  style="margin: 0; margin:0px;  margin-left:17px;" ><?php echo 'Dr. '.$fetch_doctor_name;?></h3>
						</div>

						

					</div>
  <?php }elseif($supplier_id){
?>
<div style="padding-top:22px; background:white;display: flex; justify-content: space-between; align-items: center;" id="hlogodiv">

<h3 class="hospitalname mobilename" style="color: #494d66;font-size: 20px;margin-top: 50px;margin-bottom: -24px;text-align: left;margin-left: 5px;"><?php echo $supplier_name;?></h3>
</div>	

						</div>

						<div style="display:flex; align-items: center;">
						<img src="<?php echo $fetch_image_url['supplier_image'];?>"  onerror="this.src='../images/patient_default.png'"  alt="Hospital Logo" class="laptopname" style="height:79px;border-radius: 5px;   ">
						<h3 class="hospitalname laptopname"  style="margin: 0; margin:0px;  margin-left:17px;" ><?php echo $supplier_name;?></h3>


						</div>
					</div>
  <?php }?>
  <?php
		if($_SESSION['auth_user']['user_type_name'] == 'doctor')
		{ ?>


<?php
		$doctor_id=$_SESSION['auth_user']['doctor_id'];
	    $sql_hospital="select hd.hospital_id from hospital_vs_doctor as hd join doctor as d on d.doctor_id = hd.doctor_id join users as u on u.user_id = d.doctor_user_id where u.user_id=$doctor_id AND (hd.relieving_date ='NULL' || hd.relieving_date >= CURDATE())";
		$result_hospital = mysqli_query($conn, $sql_hospital);

		$hospital_array = array();

		if (mysqli_num_rows($result_hospital) > 0) {

			while ($fetch_hospital = mysqli_fetch_assoc($result_hospital)) {
				 $hospital_array[] = $fetch_hospital['hospital_id'];
			}
		}
						// $fetch_hospital=mysqli_fetch_assoc($result_hospital);
						// $ho_id=$fetch_hospital['hospital_id'];
						// $hospital_array=explode(',',$ho_id);
						
			
			?>
					<div class="col-md-3 hospital-select-div" style="display: flex;padding-bottom: 12px;    margin-top: 10px;">
	
					<?php
          if(count($hospital_array)>0){
			if(count($hospital_array) > 1)
			{
	?>
		<select name="" id="hospital_id" class="form-control hospital-select" style="width: 240px; margin:auto;">
    <option disabled>Select Hospital</option>
    <?php foreach ($hospital_array as $hosp_data) { 
        $sql_hosp = "SELECT * FROM hospital WHERE hospital_id = $hosp_data";
        $result_hosp = mysqli_query($conn, $sql_hosp);
        $fetch_hosp = mysqli_fetch_assoc($result_hosp);
        $hosp_name = $fetch_hosp['hospital_name'];
        $selected = ($_SESSION['session_hospital_id'] ?? '') == $hosp_data ? 'selected' : ''; // Check if this option is selected
    ?>
    <option value="<?php echo $hosp_data; ?>" <?php echo $selected; ?> data-hospid="<?php echo $hosp_data; ?>" data-doctorid="<?php echo $doctor_id; ?>"><?php echo $hosp_name; ?></option>
    <?php } ?>
</select>

<?php }else{?>
	<select name="" id="hospital_id"  readonly class="form-control hospital-select" style="width: 240px;margin-left:auto; visibility:hidden;">
    <?php foreach ($hospital_array as $hosp_data) { 
        $sql_hosp = "SELECT * FROM hospital WHERE hospital_id = $hosp_data";
        $result_hosp = mysqli_query($conn, $sql_hosp);
        $fetch_hosp = mysqli_fetch_assoc($result_hosp);
        $hosp_name = $fetch_hosp['hospital_name'];
        $selected = ($_SESSION['session_hospital_id'] ?? '') == $hosp_data ? 'selected' : ''; // Check if this option is selected
    ?>
    <option value="<?php echo $hosp_data; ?>" <?php echo $selected; ?> data-hospid="<?php echo $hosp_data; ?>" data-doctorid="<?php echo $doctor_id; ?>"><?php echo $hosp_name; ?></option>
    <?php } ?>
</select>
<?php 
} 

}?>





		
    </div>


	<?php }
  ?>
  

					<div>
		<div class="laptopmenubutton">
					<ul class="nav" style="margin-right:4px;">
						<li class="nav-item lapsidebar">
							<span class="ti-menudesktop"   id="sidebarCollapse"></span>
						</li>
						<script>
        document.getElementById("sidebarCollapse").addEventListener("click", function() {
            var sidebarHeader = document.querySelector(".sidebar-header");
            if (sidebarHeader.style.paddingBottom === "75px") {
                sidebarHeader.style.paddingBottom = "45px";
            } else {
                sidebarHeader.style.paddingBottom = "75px";
            }
        });
    </script>


<li class="nav-item lapannouncement">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <div class="notification-icon-wrapper">
            <span class="ti-announcementdesktop"></span>
            <span class="notification-count" id="notifcation_count"></span> <!-- Replace 5 with dynamic notification count -->
        </div>
    </a>


							<?php
							if($_SESSION['auth_user']['user_type_name'] == 'doctor'){
								$r_doc_id = mysqli_query($conn, "SELECT doctor_id FROM doctor WHERE doctor_user_id = '" . $_SESSION['auth_user']['user_id'] . "'");
								$f_doc_id = mysqli_fetch_assoc($r_doc_id);
								$doctor_noti_id = $f_doc_id['doctor_id'];
								$hospital_noti_id = $_SESSION['session_hospital_id'];
							}

							?>
			<style>
/* Wrapper to position the notification icon and count */
.notification-icon-wrapper {
    position: relative;
    display: inline-block;
}

/* Notification icon styling */
.ti-announcementdesktop {
    font-size: 24px; /* Adjust the size as needed */
    color: #000;    /* Adjust the color as needed */
}

/* Notification count styling */
.notification-count {
    position: absolute;
    top: -18px;
    right: 9px;
    background-color: green;
    color: white;
    font-size: 12px;
    font-weight: bold;
    border-radius: 50%;
    padding: 2px 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 18px;
    min-height: 18px;
    line-height: 1;
}
</style>


							<?php
							$user_type_name = $_SESSION['auth_user']['user_type_name'];
							if($user_type_name == 'doctor'){
							$appoint_noti_url = '../allappointment/doctor_appointments.php';
							}elseif($user_type_name == 'patient'){
							$appoint_noti_url = '../appointment/patient_appointments.php';
						    }else
							$appoint_noti_url = '../allappointment/appointments.php';

							if($user_type_name == 'patient'){
								$prescription_noti_url = '../prescription/single_patient_prescription.php';
							}else{
								$prescription_noti_url = '../prescription/patients_observed.php';
							}

							if($user_type_name == 'patient'){
								$invoice_noti_url = '../payment/patient_payment.php';
							}else{
								$invoice_noti_url = '../payment/payments.php';
							}

							if(isset($_SESSION['auth_user']['is_ref'])){
								$noti_css_ref = 'max-width:256px; overflow:visible;';
							}else{
								$noti_css_ref = '';
							}

							?>
							<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY" style="<?php echo $noti_css_ref;?>">
							<h5>Notifications</h5>
								<a class="dropdown-item" style="background:#1d76d1; color:white; border-top:2px solid white;" href="<?php echo $appoint_noti_url;?>">
			                      <span class="ti-wheelchair"></span> Appointment Created 
								  <span id="pending-appointment" style="border-radius:50%;" class="badge badge-success"></span>
								 </a> 

								<a class="dropdown-item" style="background:#1d76d1; color:white;" href="<?php echo $appoint_noti_url;?>">
									<span class="ti-wheelchair"></span> Appointment Approved
									<span id="approved-appointment" style="border-radius:50%;" class="badge badge-success"></span>

								</a>

								<?php
								if($_SESSION['auth_user']['user_type_name'] == 'patient'){
									?>
								<a class="dropdown-item" style="background:#1d76d1; color:white;" href="<?php echo $invoice_noti_url;?>">
									<span class="ti-money"></span>Invoice Created
									<span id="invoice-created" style="border-radius:50%;" class="badge badge-success"></span>

								</a>

								<?php } ?>

								<!-- <?php
								if($_SESSION['auth_user']['user_type_name'] != 'patient' && $_SESSION['auth_user']['user_type_name'] != 'Receptionist'){
									?>
								<a class="dropdown-item" style="background:#1d76d1; color:white;" href="../patient/patients.php">
									<span class="ti-wheelchair" ></span> New Patient Added
									<span id="new-patient" style="border-radius:50%;" class="badge badge-success"></span>

								</a>

								<?php } ?> -->

								<?php
								if($_SESSION['auth_user']['user_type_name'] == 'patient'){
									?>
								
								<a class="dropdown-item" style="background:#1d76d1; color:white;" href="<?php echo $prescription_noti_url;?>">
									<span class="ti-wheelchair" ></span> Prescription created
									<span id="new-prescription" style="border-radius:50%;" class="badge badge-success"></span>
								</a>

								<?php } ?>
							</div>
						</li>
						<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

						<?php 

						// if($_SESSION['auth_user']['user_type_name'] == 'doctor'){

							?>
						<script>
    function fetchNotifications() {
        var doctor_id = "<?php echo $doctor_noti_id; ?>";
        var hospital_id = "<?php echo $hospital_noti_id; ?>";
		var user_type_name = "<?php echo $_SESSION['auth_user']['user_type_name']?>";
		$.ajax({
    url: '../header/notification_ajax.php', 
    type: 'POST', 
    success: function(response) {
		// console.log(response);
		var data = JSON.parse(response);
		// alert(user_type_name);
		if(user_type_name == 'patient'){
			var total_noti = data.appointment + data.appointment_approved + data.new_prescription + data.invoice_created;
// alert(total_noti);
		}else{

			var total_noti = data.appointment + data.appointment_approved;
		}
		// alert(total_noti);
		if(total_noti > 0){
			$('#notifcation_count').show();
			$('#notifcation_count').text(total_noti);
			
		}else{
			$('#notifcation_count').hide();

		}
		if(data.appointment > 0){
            $('#pending-appointment').text(data.appointment); 
			$('#pending-appointment').show();
		}else{
			$('#pending-appointment').hide();

		}
		if(data.appointment_approved > 0){
			$('#approved-appointment').text(data.appointment_approved); 
			$('#approved-appointment').show();
		}else{
			$('#approved-appointment').hide();

		}
	

		// if(data.new_patient > 0){
		// 	$('#new-patient').text(data.new_patient); 
		// 	$('#new-patient').show();
		// }else{
		// 	$('#new-patient').hide();

		// }


if(user_type_name == 'patient'){
		if(data.new_prescription > 0){
			$('#new-prescription').text(data.new_prescription); 
			$('#new-prescription').show();
		}else{
			$('#new-prescription').hide();

		}

		if(data.invoice_created > 0){
			$('#invoice-created').text(data.invoice_created); 
			$('#invoice-created').show();
		}else{
			$('#invoice-created').hide();

		}
	}
	
    },
    error: function(xhr, status, error) {
        // Improved error logging
        console.error('Error fetching notifications:', error);
    }
});

    }
    setInterval(fetchNotifications, 1000);
</script>
 
						</script>
<!-- laptop logout and switch menus -->
						<li class="nav-item" >
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<?php
									if($patient_id)
									{
										$sql_p="select * from users where user_id='$patient_id'";
										$result_p=mysqli_query($conn,$sql_p);
										$fetch_p=mysqli_fetch_assoc($result_p);
										$user_type_ids=$fetch_p['user_type_id'];
										$user_image=$fetch_p['user_image'];
								?>
								<div class="profile-container">
									<img src="<?php echo $user_image; ?>" class="ti-userdesktop" 
										onerror="this.onerror=null; this.src='../images/mobile_icons/Logout2.png';" 
										alt="User Profile">
								</div>


								<?php }elseif($doctor_id)
								{ 
									$user_ids=$_SESSION['auth_user']['hospital_userid'];
									$sql_p="select * from users where user_id='$doctor_id'";
									$result_p=mysqli_query($conn,$sql_p);
									$fetch_p=mysqli_fetch_assoc($result_p);
									if($account_type == 'free'){

										$user_image='../images/mobile_icons/Logout2.png';
									}else{
										$user_image=$fetch_p['user_image'];

									}

									?>
							<div class="profile-container">
								<!-- <span class="ti-userdesktop" style="margin-right:2px;"></span> -->
								 <img src="<?php echo $user_image; ?>" class="ti-userdesktop" onerror="this.onerror=null; this.src='../images/mobile_icons/Logout2.png';" alt="">
								 </div>
								<?php }elseif($_SESSION['auth_user']['user_type_name'] == 'Receptionist')
								{ 
									$sql_image = "SELECT user_image FROM users WHERE user_id = '" . $_SESSION['auth_user']['user_id'] . "'";
									$result_image = mysqli_query($conn, $sql_image);
									$fetch_image = mysqli_fetch_assoc($result_image);
									if($account_type == 'paid')
									{
										$hospital_image=!empty($fetch_image['hospital_image_url']) ? $fetch_image['hospital_image_url'] : '../images/mobile_icons/Logout2.png';
									}else{
										$hospital_image = '../images/mobile_icons/Logout2.png';
									}

									?>
<div class="profile-container">
									<img src="<?php echo $hospital_image; ?>" class="ti-userdesktop" onerror="this.onerror=null; this.src='../images/mobile_icons/Logout2.png';" alt="">
									</div>


								<?php }elseif($_SESSION['auth_user']['user_type_name'] == 'Pharmacist'){
										$sql_image = "SELECT user_image FROM users WHERE user_id = '" . $_SESSION['auth_user']['user_id'] . "'";
										$result_image = mysqli_query($conn, $sql_image);
										$fetch_image = mysqli_fetch_assoc($result_image);
if($account_type == 'paid')
{
	$hospital_image=!empty($fetch_image['hospital_image_url']) ? $fetch_image['hospital_image_url'] : '../images/mobile_icons/Logout2.png';
}else{
	$hospital_image = '../images/mobile_icons/Logout2.png';
}
?>
<div class="profile-container">
									<img src="<?php echo $hospital_image; ?>" class="ti-userdesktop" onerror="this.onerror=null; this.src='../images/mobile_icons/Logout2.png';" alt="">
									</div>
<?php
								}elseif($hospital_id){

$sql_image = "SELECT hospital_image_url FROM hospital WHERE hospital_id = '$hospital_id'";
$result_image = mysqli_query($conn, $sql_image);
$fetch_image = mysqli_fetch_assoc($result_image);

if($account_type == 'paid')
{
	$hospital_image=!empty($fetch_image['hospital_image_url']) ? $fetch_image['hospital_image_url'] : '../images/mobile_icons/Logout2.png';
}else{
	$hospital_image = '../images/mobile_icons/Logout2.png';
}
?>

<div class="profile-container">
									<img src="<?php echo $hospital_image; ?>" class="ti-userdesktop" onerror="this.onerror=null; this.src='../images/mobile_icons/Logout2.png';" alt="">
									</div>
<?php


								}elseif($supplier_id)
								{
									$sql_p="select * from supplier where supplier_id='$supplier_id'";
									$result_p=mysqli_query($conn,$sql_p);
									$fetch_p=mysqli_fetch_assoc($result_p);
								
									$supplier_image=$fetch_p['supplier_image'];
							?>
							<div class="profile-container">
								<img src="<?php echo $supplier_image; ?>" class="ti-userdesktop" 
									onerror="this.onerror=null; this.src='../images/mobile_icons/Logout2.png';" 
									alt="User Profile">
							</div>


							<?php } ?>
							</a>
							
							
							<?php
							if($patient_id)
								{ 
									?>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5 style="background:#1d76d1"><?php echo $fetch_patient_name;?></h5>
								

									<?php

		
		$sql_p="select * from users where user_id='$patient_id'";
		$result_p=mysqli_query($conn,$sql_p);
	    $fetch_p=mysqli_fetch_assoc($result_p);
		$user_type_ids=$fetch_p['user_type_id'];
		$user_name=$fetch_p['user_name'];
		$user_password=$fetch_p['user_password'];
		$user_phone=$fetch_p['user_phone'];
		$user_type_id=explode(',',$user_type_ids);
			
?>
	<div class="" style="background:#1d76d1;">

  <?php
						foreach($user_type_id as $usertypeid) { 
							
							$sql_u = "SELECT * FROM user_type WHERE user_type_id='".$usertypeid."'";
							$result_u = mysqli_query($conn, $sql_u);
							$fetch_u = mysqli_fetch_assoc($result_u);
							$user_type_name = $fetch_u['user_type_name'];
// echo $user_type_name;
							// Check if the user type is not "Hospital"
							if($user_type_name != 'Patient') {
								if($user_type_name == 'Hospital')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer; " data-user="Hospital"><img src="../images/Menu_icons/Hospital.png" title="Switch to Hospital" style="height: 32px;" alt=""></a>

								<?php }elseif($user_type_name == 'Doctor')
								{ ?>

<a class="switchaccount" style="cursor:pointer;" data-user="Doctor">
<div style=" border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-evenly; padding: 9px;">
										<img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt="">






									<label for="" style="margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:3px;">Switch to Doctor</label></a>
									</div>
									</div>

							<?php	}elseif($user_type_name == 'Receptionist'){
?>
	<a class="switchaccount" style="cursor:pointer;" data-user="Receptionist">
<div style="border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-evenly; padding:9px;">
										<img src="../images/Menu_icons/profile.png" title="Switch to Receptionist" style="height: 32px;" alt="">
							<label for="" style="margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:10px;">Switch to Receptionist</label>
						</div>
					</div>
				</a>
<?php
							}elseif($user_type_name == 'Pharmacist'){

?>

<a class="switchaccount" style="cursor:pointer;" data-user="Pharmacist">
<div style="border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-evenly; padding:9px; ">
										<img src="../images/Menu_icons/profile.png" title="Switch to Pharmacist" style="height: 32px;" alt="">

									<label for="" style="margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:-10px;">Switch to Pharmacist</label>
								</div>
							</div>
						</a>

<?php

							}
							}else{ 
								
								?>

							<a style="padding: 5px;border-radius: 5px; background:#95bde6;"><img src="../images/Menu_icons/Profile.png" title="Switch to Patient" style="height: 32px;" alt=""></a>
								
							
						<?php	}
						}
						?>

</div>


						<script>
    $('.switchaccount').on("click", function() {
        var type_name = $(this).data('user');
		var user_name = '<?php echo $user_name; ?>';
		var user_password = '<?php echo $user_password; ?>';
		var user_phone = '<?php echo $user_phone; ?>';

		window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password + '&phone=' + user_phone + 'id=5';
        //alert(type_name);

    });
</script>

<a class="dropdown-item" href="../logout.php?submit=Logout" name="logout" style="background:#1d76d1; border:1px solid #ced4da; border-radius:.25rem; border-color:white; display:flex; justify-content:space-evenly; cursor:pointer;">
									<form action="../logout.php" method="Post" style="margin-left:-41px;">
											 
											<span class="ti-power-off" style="color:white"></span><input type="submit" style="background: none;border: none;cursor: pointer;color:white;" name="submit" value="Logout"> 
										</form>
									</a>
								<?php } elseif($_SESSION['auth_user']['user_type_name'] == 'Receptionist'){
										$sql_recep_name = "SELECT user_username FROM users WHERE user_id  = '" . $_SESSION['auth_user']['user_id'] ."'";
										$r_recep_name = mysqli_query($conn, $sql_recep_name);
										$fetch_recep_name = mysqli_fetch_assoc($r_recep_name);
									?>

<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5 style="background:#1d76d1"><?php echo $fetch_recep_name['user_username'];?></h5>
								
				



									<?php
		$user_ids=$_SESSION['auth_user']['user_id'];
		$sql_p="select * from users where user_id='$user_ids'";
		$result_p=mysqli_query($conn,$sql_p);
	    $fetch_p=mysqli_fetch_assoc($result_p);
		$user_type_ids=$fetch_p['user_type_id'];
		$user_name=$fetch_p['user_name'];
		$user_password=$fetch_p['user_password'];
		$user_phone=$fetch_p['user_phone'];
		$user_type_id=explode(',',$user_type_ids);
			
		
?>

<div class="" style="background:#1d76d1;">

  <?php
						foreach($user_type_id as $usertypeid) { 
							$sql_u = "SELECT * FROM user_type WHERE user_type_id='".$usertypeid."'";
							$result_u = mysqli_query($conn, $sql_u);
							$fetch_u = mysqli_fetch_assoc($result_u);
							$user_type_name = $fetch_u['user_type_name'];

							// Check if the user type is not "Hospital"
							if($user_type_name != 'Receptionist') {
									
								if($user_type_name == 'Patient')
								{ ?>

<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-around;">
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Patient"><img src="../images/Menu_icons/profile.png" title="Switch to Patient" style="height: 32px;" alt="">

									<label style="margin-top: 9px; font-size:12px; color:white; cursor:pointer;">Switch to Patient</label>
									</a>
									</div>
									</div>

								<?php }elseif($user_type_name == 'Doctor')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Doctor"><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt=""></a>
							<?php	}
							}else{ ?>
	<a style="border-radius: 5px;cursor:pointer;" class="switchaccount" data-user="Patient">
<div style=" border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-evenly; padding:9px;">
								<img src="../images/Menu_icons/Patient.png" title="Switch to Patient" style="height: 32px;" alt="">

							<label for="" style="margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:-10px;">Switch to Patient</label>
						</div>
					</div>
				</a>
						<?php	}
						}
						?>

  <!-- </div> -->
</div>

						

						<script>
    $('.switchaccount').on("click", function() {
        var type_name = $(this).data('user');
		var user_name = '<?php echo $user_name; ?>';
		var user_password = '<?php echo $user_password; ?>';
		var user_phone = '<?php echo $user_phone; ?>';

		window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password + '&phone=' + user_phone + 'id=6';
        //alert(type_name);

    });
</script>

<a class="dropdown-item" href="../logout.php?submit=Logout" name="logout" style="background:#1d76d1; border:1px solid #ced4da; border-radius:.25rem; border-color:white; display:flex; justify-content:space-evenly; cursor:pointer;">
<form action="../logout.php" method="Post" style="margin-left:-41px;">
											 
											<span class="ti-power-off" style="color:white"></span><input type="submit" style="background: none;border: none;cursor: pointer;color:white;" name="submit" value="Logout"> 
										</form>
									</a>
								
								<?php 
								}elseif($_SESSION['auth_user']['user_type_name'] == 'Pharmacist'){
									$sql_recep_name = "SELECT user_username FROM users WHERE user_id  = '" . $_SESSION['auth_user']['user_id'] ."'";
									$r_recep_name = mysqli_query($conn, $sql_recep_name);
									$fetch_recep_name = mysqli_fetch_assoc($r_recep_name);
?>



<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5 style="background:#1d76d1"><?php echo $fetch_recep_name['user_username'];?></h5>
								
								
								<!-- <a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a> -->



									<?php
		$user_ids=$_SESSION['auth_user']['user_id'];
		$sql_p="select * from users where user_id='$user_ids'";
		$result_p=mysqli_query($conn,$sql_p);
	    $fetch_p=mysqli_fetch_assoc($result_p);
		$user_type_ids=$fetch_p['user_type_id'];
		$user_name=$fetch_p['user_name'];
		$user_password=$fetch_p['user_password'];
		$user_phone=$fetch_p['user_phone'];
		$user_type_id=explode(',',$user_type_ids);
			
		
?>

<div class="" style="background:#1d76d1;">

  <?php
						foreach($user_type_id as $usertypeid) { 
							$sql_u = "SELECT * FROM user_type WHERE user_type_id='".$usertypeid."'";
							$result_u = mysqli_query($conn, $sql_u);
							$fetch_u = mysqli_fetch_assoc($result_u);
							$user_type_name = $fetch_u['user_type_name'];

							// Check if the user type is not "Hospital"
							if($user_type_name != 'Pharmacist') {
									
								if($user_type_name == 'Patient')
								{ 	?>

<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-around;">


									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Patient"><img src="../images/Menu_icons/profile.png" title="Switch to Patient" style="height: 32px;" alt="">

									<label style="margin-top: 9px; font-size:12px; color:white; cursor:pointer;">Switch to Patient</label>
									</a>
									</div>
									</div>


								<?php }elseif($user_type_name == 'Doctor')
								{ ?>
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Doctor"><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt=""></a>
							<?php	}
							}else{ ?>

<div style=" border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<a style="border-radius: 5px;cursor:pointer; " class="switchaccount" data-user="Patient">
<div class="col-md-12"  style="display: flex; justify-content: space-evenly; padding: 9px;">

								<img src="../images/Menu_icons/Patient.png" title="Switch to Patient" style="height: 32px;" alt="">

							<label style="margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:-10px;">Switch to Patient</label>
						</div>
					</div>
				</a>


						<?php	}
						}
						?>

  <!-- </div> -->
</div>

						

						<script>
    $('.switchaccount').on("click", function() {
        var type_name = $(this).data('user');
		var user_name = '<?php echo $user_name; ?>';
		var user_password = '<?php echo $user_password; ?>';
		var user_phone = '<?php echo $user_phone; ?>';

		window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password + '&phone=' + user_phone + 'id=7';
        //alert(type_name);

    });
</script>

<a class="dropdown-item" href="../logout.php?submit=Logout" name="logout" style="background:#1d76d1; border:1px solid #ced4da; border-radius:.25rem; border-color:white; display:flex; justify-content:space-evenly; cursor:pointer;">
<form action="../logout.php" method="Post" style="margin-left:-41px;">
											 
											<span class="ti-power-off" style="color:white"></span><input type="submit" style="background: none;border: none;cursor: pointer;color:white;" name="submit" value="Logout">
										</form>
									</a>

<?php

								}else if($hospital_id)
								{
									?>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5 style="background:#1d76d1"><?php echo $fetch_hospital_name;?></h5>
								
								
								<!-- <a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a> -->



									<?php
		$user_ids=$_SESSION['auth_user']['hospital_userid'];
		$sql_p="select * from users where user_id='$user_ids'";
		$result_p=mysqli_query($conn,$sql_p);
	    $fetch_p=mysqli_fetch_assoc($result_p);
		$user_type_ids=$fetch_p['user_type_id'];
		$user_name=$fetch_p['user_name'];
		$user_password=$fetch_p['user_password'];
		$user_phone=$fetch_p['user_phone'];
		$user_type_id=explode(',',$user_type_ids);
			
		
?>

<div class="" style="background:#1d76d1;">

  <?php
						foreach($user_type_id as $usertypeid) { 
							$sql_u = "SELECT * FROM user_type WHERE user_type_id='".$usertypeid."'";
							$result_u = mysqli_query($conn, $sql_u);
							$fetch_u = mysqli_fetch_assoc($result_u);
							$user_type_name = $fetch_u['user_type_name'];

							// Check if the user type is not "Hospital"
							if($user_type_name != 'Hospital') {
									
								if($user_type_name == 'Patient')
								{ ?>

<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-around;">
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Patient"><img src="../images/Menu_icons/profile.png" title="Switch to Patient" style="height: 32px;" alt=""></a>

								</div>
								</div>
								<?php }elseif($user_type_name == 'Doctor')
								{ ?>
								<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
								<div class="col-md-12"  style="display: flex; justify-content: space-around;">
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Doctor"><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt=""></a>
								</div>
								</div>
							<?php	}
							}elseif($account_type == 'paid'){
								$sql_access = "SELECT doctor_id FROM hospital_vs_doctor WHERE hospital_id = '$hospital_id_acc' AND hospital_access = 1";
								$r_access = mysqli_query($conn, $sql_access);
								$f_access = mysqli_fetch_assoc($r_access);
								$doctor_access_id = $f_access['doctor_id'];
								
								$sql_doc_free = " SELECT  users.user_name, users.user_password FROM users INNER JOIN doctor ON doctor.doctor_user_id = users.user_id WHERE doctor.doctor_id = '$doctor_access_id';";
								$r_doc_free = mysqli_query($conn, $sql_doc_free);
								$f_doc_free = mysqli_fetch_assoc($r_doc_free);
								$doc_free_username = $f_doc_free['user_name'];
								$doc_free_userpassword = $f_doc_free['user_password'];
								
								if(isset($doctor_access_id)){
								?>

<a class="switchaccount_free" style="cursor:pointer;" data-user="Doctor">
<div style="border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-evenly; padding:9px;">
	
<img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt="">
<label style="margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:-28px;">Switch to Doctor</label>

</div>
</div>
</a>
								
								
								
							<?php }}else{ ?>
<!-- <a style="border-radius: 5px; background:#95bde6">
<div style="border:1px solid #ced4da; border-radius:.25rem; border-color:white;" >
<div class="col-md-12" style="display: flex; justify-content: space-evenly; padding:9px; ">
								<img src="../images/Menu_icons/Hospital.png" title="Switch to Hospital" style="height: 32px;" alt="">
							<label for="" style="margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:-10px;">Switch to Hospital</label>
							
						</div>
					</div>
				</a> -->
						<?php	
						
					
					if($account_type == 'free' && $no_of_doctor > 0){
					
					
					
			$sql_doc_free = "SELECT u.user_name, u.user_password FROM hospital_vs_doctor h JOIN doctor d ON h.doctor_id = d.doctor_id JOIN users u ON d.doctor_user_id = u.user_id WHERE h.hospital_id = '$hospital_id' AND (h.relieving_date IS NULL OR h.relieving_date >= CURDATE() OR h.relieving_date = 'NULL') LIMIT 1";
			$r_doc_free = mysqli_query($conn, $sql_doc_free);
			$f_doc_free = mysqli_fetch_assoc($r_doc_free);
			$doc_free_username = $f_doc_free['user_name'];
			$doc_free_userpassword = $f_doc_free['user_password'];
			$doc_free_userphone = $f_doc_free['user_phone'];


					
					
					
					
					?>

<a class="switchaccount_free" style="cursor:pointer;" data-user="Doctor">
<div style="border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
<div class="col-md-12"  style="display: flex; justify-content: space-evenly; padding: 9px;">
	<img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt="">
<label style="margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:-28px;">Switch to Doctor</label>

</div>
</div>
</a>

<?php
				}}
						}
						?>

  <!-- </div> -->
</div>

						

						<script>
    $('.switchaccount').on("click", function() {
        var type_name = $(this).data('user');
		var user_name = '<?php echo $user_name; ?>';
		var user_password = '<?php echo $user_password; ?>';
		var user_phone = '<?php echo $user_phone; ?>';

		window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password + '&phone=' + user_phone + 'id=8';
        //alert(type_name);

    });
</script>
<script>
    $('.switchaccount_free').on("click", function() {
        var type_name = $(this).data('user');
		var user_name = '<?php echo $doc_free_username; ?>';
		var user_password = '<?php echo $doc_free_userpassword; ?>';
		var user_phone = '<?php echo $doc_free_userphone; ?>';


		window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password + '&phone=' + user_phone + 'id=9';

    });
</script>

<a class="dropdown-item" href="../logout.php?submit=Logout" name="logout" style="background:#1d76d1; border:1px solid #ced4da; border-radius:.25rem; border-color:white; display:flex; justify-content:space-evenly; cursor:pointer;">
<form action="../logout.php" method="Post" style="margin-left:-41px;">
											 
											<span class="ti-power-off" style="color:white"></span><input type="submit" style="background: none;border: none;cursor: pointer;color:white;" name="submit" value="Logout"> 
										</form>
									</a>
								<?php }else if($doctor_id)
								{

									if(isset($_SESSION['auth_user']['is_ref'])){

										$switch_menu_css = 'max-width:256px; overflow:visible;';
									}else{
										
										$switch_menu_css = '';
									}
								


									?>
									
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY" style="<?php echo $switch_menu_css;?>">
							
								
									<?php
		$user_ids=$_SESSION['auth_user']['hospital_userid'];
		$sql_p="select * from users where user_id='$doctor_id'";
		$result_p=mysqli_query($conn,$sql_p);
	    $fetch_p=mysqli_fetch_assoc($result_p);
		$user_type_ids=$fetch_p['user_type_id'];
		$user_name=$fetch_p['user_name'];
		$user_username=$fetch_p['user_username'];
		$user_password=$fetch_p['user_password'];
		$user_phone=$fetch_p['user_phone'];
		$user_type_id=explode(',',$user_type_ids);
			
		
?>
								<h5 style="background:#1d76d1"><?php echo 'Dr. '.$user_username;?></h5>		
	<div class="" style="background:#1d76d1;">

	<?php
				if(!isset($_SESSION['auth_user']['is_ref'])){

			if(count($user_type_id) > 1)
			{
						foreach($user_type_id as $usertypeid) { 
							$sql_u = "SELECT * FROM user_type WHERE user_type_id='".$usertypeid."'";
							$result_u = mysqli_query($conn, $sql_u);
							$fetch_u = mysqli_fetch_assoc($result_u);
							$user_type_name = $fetch_u['user_type_name'];

							// Check if the user type is not "Hospital"
							if($user_type_name != 'Doctor') {
								
								if($user_type_name == 'Hospital')
								{ ?>
								<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; margin-bottom:3px;" >
								<div class="col-md-12"  style="display: flex; justify-content: space-around;">
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Hospital"><img src="../images/Menu_icons/Hospital.png" title="Switch to Hospital" style="height: 32px;" alt=""></a>

									</div>
</div>
								<?php }elseif($user_type_name == 'Patient')
								{ ?>
								<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; margin-bottom:3px;" style="display: flex; justify-content: space-around;" >
								<div class="col-md-12">
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Patient"><img src="../images/Menu_icons/profile.png" title="Switch to Patient" style="height: 32px;" alt=""></a>

									</div>
</div>
								<?php }elseif($user_type_name == 'Doctor')
								{ ?>

<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; margin-bottom:3px;" >
<div class="col-md-12"  style="display: flex; justify-content: space-around;">
									<a class="switchaccount" style="padding: 5px;cursor:pointer;" data-user="Patient">
										<img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt=""></a>

									</div>
</div>
							<?php	}
							}else{ ?>
<div style="padding:.375rem .75rem; border:1px solid #ced4da; border-radius:.25rem; border-color:white; margin-bottom:3px;" >
<div class="col-md-12"  style="display: flex; justify-content: space-around;">
								<a style="padding: 5px;border-radius: 5px;background:#95bde6; "><img src="../images/Menu_icons/Doctor.png" title="Switch to Doctor" style="height: 32px;" alt=""></a>
								</div>
</div>
						<?php	}
						}
					}elseif($account_type == 'paid'){

// echo $doctor_table_id;

$sql_access = "SELECT hospital_access FROM hospital_vs_doctor WHERE hospital_id = '$hospital_id_acc' AND doctor_id = '$doctor_table_id'";
$r_access = mysqli_query($conn, $sql_access);
$f_access = mysqli_fetch_assoc($r_access);
$access_value = $f_access['hospital_access'];
$is_access = ($access_value == '' || $access_value == 0) ? 0 :1;

$sql_hos_free = "SELECT user_name, user_password FROM users WHERE user_id = '$hospital_user_id'";
$r_hos_free = mysqli_query($conn, $sql_hos_free);
$f_hos_free = mysqli_fetch_assoc($r_hos_free);
$free_hos_username = $f_hos_free['user_name'];
$free_hos_password = $f_hos_free['user_password'];
						
					?>
									<a class="switchaccount" style=" cursor: pointer;" data-user="Patient">
								<div style="border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
						<div class="col-md-12"  style="display: flex; justify-content: space-evenly;  padding:9px;">
        <img src="../images/Menu_icons/Patient.png" title="Switch to Patient" style="height: 32px;" alt="">
    
    <label for="" style=" margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:-10px;">Switch to Patient</label>
</div>
</div>
</a>

<?php 
if($is_access == 1){
?>

<a class="switchaccount_free" style="cursor:pointer;" data-user="Hospital">
<div style=" border:1px solid #ced4da; border-radius:.25rem; border-color:white;">
						<div class="col-md-12"  style="display: flex; justify-content: space-evenly; padding:9px;">

										<img src="../images/Menu_icons/Hospital.png" title="Switch to Hospital" style="height: 32px;" alt="">
    <label for="" style=" margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:-10px;">Switch to Hospital</label>
</div>
</div>
</a>



					<?php
					}}else{ ?>
									<a class="switchaccount" style=" cursor: pointer;" data-user="Patient">
								<div style="border:1px solid #ced4da; border-radius:.25rem; border-color:white; " >
						<div class="col-md-12"  style="display: flex; justify-content: space-evenly;  padding:9px;">
        <img src="../images/Menu_icons/Patient.png" title="Switch to Patient" style="height: 32px;" alt="">
    
    <label for="" style=" margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:-10px;">Switch to Patient</label>
</div>
</div>
</a>

				<?php 
			if($account_type == 'free'){
$sql_hos_free = "SELECT user_name, user_password FROM users WHERE user_id = '$hospital_user_id'";
$r_hos_free = mysqli_query($conn, $sql_hos_free);
$f_hos_free = mysqli_fetch_assoc($r_hos_free);
$free_hos_username = $f_hos_free['user_name'];
$free_hos_password = $f_hos_free['user_password'];
$free_hos_phone = $f_hos_free['user_phone'];


				?>

<a class="switchaccount_free" style="cursor:pointer;" data-user="Hospital">
<div style=" border:1px solid #ced4da; border-radius:.25rem; border-color:white;">
						<div class="col-md-12"  style="display: flex; justify-content: space-evenly; padding:9px;">

										<img src="../images/Menu_icons/Hospital.png" title="Switch to Hospital" style="height: 32px;" alt="">
    <label for="" style=" margin-top: 9px; font-size:12px; color:white; cursor:pointer; margin-left:-10px;">Switch to Hospital</label>
</div>
</div>
</a>

				<?php
			}	
			
			}
						?>
	

  
</div>
<?php } ?>

<script>
    $('.switchaccount').on("click", function() {
        var type_name = $(this).data('user');
		var user_name = '<?php echo $user_name; ?>';
		var user_password = '<?php echo $user_password; ?>';
		var user_phone = '<?php echo $user_phone; ?>';


		window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password + '&phone=' + user_phone + 'id=10';

    });

	$('.switchaccount_free').on("click", function() {
        var type_name = $(this).data('user');
		var user_name = '<?php echo $free_hos_username; ?>';
		var user_password = '<?php echo $free_hos_password; ?>';
		var user_phone = '<?php echo $free_hos_phone; ?>';


		window.location.href = '../account_switch.php?user_type_name=' + type_name + '&user_name=' + user_name + '&user_password=' + user_password + '&phone=' + user_phone + 'id=11';

    });
</script>



<a class="dropdown-item" href="../logout.php?submit=Logout" name="logout" style="background:#1d76d1; border:1px solid #ced4da; border-radius:.25rem; border-color:white; display:flex; justify-content:space-evenly; cursor:pointer;">
									<form action="../logout.php" method="Post" style="margin-left:-41px;" >
											 
											<span class="ti-power-off" style="color:white;"></span><input type="submit" style="background: none;border: none;cursor: pointer;    color: white;" name="submit" value="Logout"> 
										</form>
									</a>
								<?php }elseif($_SESSION['auth_user']['user_type_name'] == 'Supplier'){
										$sql_recep_name = "SELECT supplier_name FROM supplier WHERE supplier_id  = '" . $_SESSION['auth_user']['supplier_id'] ."'";
										$r_recep_name = mysqli_query($conn, $sql_recep_name);
										$fetch_recep_name = mysqli_fetch_assoc($r_recep_name);
									?>

<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5 style="background:#1d76d1"><?php echo $fetch_recep_name['supplier_name'];?></h5>
								


<a class="dropdown-item" href="../logout.php?submit=Logout" name="logout" style="background:#1d76d1; border:1px solid #ced4da; border-radius:.25rem; border-color:white; display:flex; justify-content:space-evenly; cursor:pointer;">
<form action="../logout.php" method="Post" style="margin-left:-41px;">
											 
											<span class="ti-power-off" style="color:white"></span><input type="submit" style="background: none;border: none;cursor: pointer;color:white;" name="submit" value="Logout"> 
										</form>
									</a>
								
								<?php 
								}?>
							</div>
						
						</li>
					</ul>
				
				</div>
				
				
				</div>

				<!-- </div> -->

		<!-- Bottom Menu -->
		<?php
		if($patient_id)
		{
?>
		<!-- Bottom Menu -->
		<!-- <nav class="bottom-menu navbar navbar-light bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../dashboard/patient_dashboard.php">
        <i class="fas fa-home" style="color: #06418f !important;font-size: 22px;"></i>
        <span style="font-size: 11px;font-weight: bold;">Home</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../patient/patients.php">
        <i class="fas fa-user-friends" style="color: #06418f !important;font-size: 22px;"></i>
         <span style="font-size: 11px;font-weight: bold;">Patients</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../appointment/add_appointment.php" style="margin-top: 20px;">
    
        <img src="../images/rx_icon.png" alt="" style="position: absolute;margin-top: -3.5rem !important;box-shadow: 2px 0px 17px 0px;border-radius: 35px;width: 50px;">
        <span style="font-size: 11px;font-weight: bold;">Appointment</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="far fa-calendar-alt" style="color: #06418f !important;font-size: 22px;"></i>
         <span style="font-size: 11px;font-weight: bold;">Calendar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../hospital/profile.php">
        <i class="fas fa-user" style="color: #06418f !important;font-size: 22px;"></i>
        <span style="font-size: 11px;font-weight: bold;">Profile</span>
      </a>
    </li>
  </ul>
</nav> -->
<?php
		}elseif($doctor_id)
		{ ?>
<!-- Bottom Menu -->
<nav class="bottom-menu navbar navbar-light bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../dashboard/doctor_dashboard.php">
        <i class="fas fa-home" style="color: #08203E !important;font-size: 22px;"></i>
        <span style="font-size: 11px;font-weight: bold;">Home</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../patient/patients.php">
        <i class="fas fa-user-friends" style="color: #08203E !important;font-size: 22px;"></i>
         <span style="font-size: 11px;font-weight: bold;">Patients</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../dashboardrx/create_rx.php" style="margin-top: 20px;">
        <!-- <i class="fas fa-prescription-bottle-alt"></i> -->
        <img src="../images/rx_icon.png" alt="" style="position: absolute;margin-top: -3.5rem !important;box-shadow: 2px 0px 17px 0px;border-radius: 35px;width: 50px;">
        <!-- <span style="font-size: 11px;font-weight: bold;">Appointment</span> -->
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="far fa-calendar-alt" style="color: #08203E !important;font-size: 22px;"></i>
         <span style="font-size: 11px;font-weight: bold;">Calendar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../doctor/doctor_profile.php">
        <i class="fas fa-user" style="color: #08203E !important;font-size: 22px;"></i>
        <span style="font-size: 11px;font-weight: bold;">Profile</span>
      </a>
    </li>
  </ul>
</nav>
		<?php }elseif($hospital_id)
		{ ?>

<!-- Bottom Menu -->
<nav class="bottom-menu navbar navbar-light bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../dashboard/dashboard.php">
        <i class="fas fa-home" style="color: #08203E !important;font-size: 22px;"></i>
        <span style="font-size: 11px;font-weight: bold;">Home</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../patient/patients.php">
        <i class="fas fa-user-friends" style="color: #08203E !important;font-size: 22px;"></i>
         <span style="font-size: 11px;font-weight: bold;">Patients</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../appointment/add_appointment.php" style="margin-top: 20px;">
        <!-- <i class="fas fa-prescription-bottle-alt"></i> -->
        <img src="../images/rx_icon.png" alt="" style="position: absolute;margin-top: -3.5rem !important;box-shadow: 2px 0px 17px 0px;border-radius: 35px;width: 50px;">
        <span style="font-size: 11px;font-weight: bold;">Appointment</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="far fa-calendar-alt" style="color: #08203E !important;font-size: 22px;"></i>
         <span style="font-size: 11px;font-weight: bold;">Calendar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../hospital/profile.php">
        <i class="fas fa-user" style="color: #08203E !important;font-size: 22px;"></i>
        <span style="font-size: 11px;font-weight: bold;">Profile</span>
      </a>
    </li>
  </ul>
</nav>

	<?php	}
		
		$user_id=$_SESSION['auth_user']['user_id'];
		$sql_u="select * from users as u join user_type as ut on ut.user_type_id=u.user_type_id where u.user_id='$user_id'";
		$result_u=mysqli_query($conn,$sql_u);
		$fetch_u=mysqli_fetch_assoc($result_u);
		$user_name=$fetch_u['user_username'];
		$user_type=$fetch_u['user_type_name'];
		if(!empty($user_name) && ( $user_type == "Pharmacist"))
		{
?>

			<div class="row" style="width: -webkit-fill-available;">
					<div class="col-md-12 pharm_or_recep " style="text-align: end;">
						<label for="" style="font-size: 14px;line-height: 1;"><?php echo 'Hello, '.$user_name. ' ' . '('.$user_type.')' ?></label>
					</div>
				</div>
		<?php }else{ ?>

<?php
// echo $user_type_name;
			if(($user_type_name == 'doctor' || $user_type_name == 'Receptionist' || $user_type_name == 'Hospital')){
				if($account_type == 'free'){
				?>
			<div class="row" style="width: -webkit-fill-available; margin-top:-10px; margin-bottom:14px;" >
    <div class="col-md-12" style="text-align: end; display: flex; align-items: center; justify-content: flex-end; "id="appoint_limit">

            <button class="btn gradientbutton appointmentbuttonheader"  style="width: 150px; background: white !important; color: #06418f !important; border: 1px solid #c0d5f2; font-size: 11px; text-align:center !important;">
                Appointments &nbsp;&nbsp;<?php echo $no_of_appointments . ' / 25';?>
            </button>
    </div>
</div>

<?php }elseif($account_type == 'paid'){
	$sql_sed = "SELECT sed FROM subscription WHERE hospital_id = '$hospital_id_acc'";
	$r_sed = mysqli_query($conn, $sql_sed);
	$f_sed = mysqli_fetch_assoc($r_sed);
	?>

	<div class="row" style="width: -webkit-fill-available; margin-top:-10px; margin-bottom:14px;" >
    <div class="col-md-12" style="text-align: end; display: flex; align-items: center; justify-content: flex-end; "id="appoint_limit">
	<?php
			if($user_type_name == 'Receptionist')
			{ ?>
		<div id="validupdiv" style="display: inline-block; width: 30%; height: 10px;color: #1d76d1; font-size: 11px; line-height: 13px;font-weight: bold; border-radius:4px;">
		<?php echo 'Valid Upto:&nbsp;&nbsp;' . date('d-m-Y', strtotime($f_sed['sed'])); ?>
        </div>
			<?php

			}elseif($user_type_name == 'Pharmacist'){ ?>

		<div id="validupdiv" style="display: inline-block; width: 30%; height: 10px;color: #1d76d1; font-size: 11px; line-height: 13px;font-weight: bold; border-radius:4px;">
		<?php echo 'Valid Upto:&nbsp;&nbsp;' . date('d-m-Y', strtotime($f_sed['sed'])); ?>
        </div>
			<?php

			}elseif($doctor_id){ ?>

		<div id="validupdiv" style="display: inline-block; width: 30%; height: 10px;color: #1d76d1; font-size: 11px; line-height: 13px;font-weight: bold; border-radius:4px;">
		<?php echo 'Valid Upto:&nbsp;&nbsp;' . date('d-m-Y', strtotime($f_sed['sed'])); ?>
        </div>
			<?php

			}elseif($hospital_id){ ?>

		<div id="validupdiv" style="display: inline-block; width: 30%; height: 17px;color: #1d76d1; font-size: 11px; line-height: 13px;font-weight: bold; border-radius:4px;">
		<?php echo 'Valid Upto:&nbsp;&nbsp;' . date('d-m-Y', strtotime($f_sed['sed'])); ?>
        </div>
			<?php

			}elseif($patient_id)
			{ ?>
			
			<?php

			}
	?>

		
    </div>
</div>

	<?php } ?>

<?php 
if($user_type_name == 'Receptionist'){?>
<div class="row" style="margin-left: auto; margin-top: -14px;padding-bottom: 15px;">
	<div class="col-md-12" style="margin-left:auto;">
<label for="" style="font-size: 14px;line-height: 1;"><?php echo 'Hello, '.$user_name. ' ' . '('.$user_type.')' ?></label>
</div>
</div>
<?php }?>
				<?php }else{?>
				
					<div class="row" style="width: -webkit-fill-available; ">
					<div class="col-md-12 " style="text-align: end;">
						<label for="" style="font-size: 14px;line-height: 1;"> </label>
					</div>
				</div>
				
				<?php } ?>
 				


	<?php	} ?>
			</nav>
			<script>
    function adjustDivStyles() {
        const div = document.getElementById("appoint_limit");
        const div1 = document.getElementById("appoint_limit_1");

        if (window.innerWidth <= 768) { 
            div.style.justifyContent = "center"; 
            div1.style.width = "31%"; 
        } else { 
            div.style.justifyContent = "flex-end"; 
            div1.style.width = "11%"; 
        }
    }

    // Run on page load
    window.onload = adjustDivStyles;

    // Run whenever the window is resized
    window.onresize = adjustDivStyles;
</script>
			<!-- /Top Navigation -->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
	<!-- /Back to Top -->
    <!-- Jquery Library-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Popper Library-->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap Library-->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Custom Script-->
    <script src="../js/custom.js"></script>
  </body>
</html>

