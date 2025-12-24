<?php
            include "../database/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Setting | Medprone</title>
	<!-- Fav  Icon Link -->
	<link rel="icon" href="../images/title_favicon.png"  type="image/png">
	<link rel="shortcut icon" type="image/png" href="../images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/red.css" id="style_theme">
	<link rel="stylesheet" href="../css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="../charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="../css/jquery-jvectormap.css">
	<link rel="stylesheet" href="../datatable/dataTables.bootstrap4.min.css">

	<script src="../js/modernizr.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
	<?php
			include "../header/header.php";
	
	?>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">All On Boarding Form</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="../dashboard/dashboard.php">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Setting</li>
						<!-- <li class="breadcrumb-item active">Visited Patients</li> -->
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

            <?php

                  //fetching key value in varibale its select icon value                        
                  $key=$_GET['key'];
                  //echo $key;
                            ?>

                  <?php

                            //delete div bbox
                  if (isset($_GET['delete'])) {
                    $delete = $_GET['delete'];

                  } else {
                    $delete = "";
                  }

                  ?>

            <?php if (!empty($delete)): ?>
              <div class="alert alert-success alert-dismissible" style="width: 60%; margin-left:auto; margin-right:auto;margin-top:20px; padding:35px;" id="delete-message">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i> Success!</h5>
                      <?php echo $delete; ?>
                    </div>
            
            
              <?php endif; ?>


                  <?php
                  //update div box
          if (isset($_GET['update'])) {
            $update = $_GET['update'];

          } else {
            $update = "";
          }

          ?>

            <?php if (!empty($update)): ?>
              <div class="alert alert-success alert-dismissible" style="width: 60%; margin-left:auto; margin-right:auto;margin-top:20px; padding:35px;" id="update-message">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i> Success!</h5>
                      <?php echo $update; ?>
                    </div>
            
            
              <?php endif; ?>

                  <?php
                  //success div bbox
          if (isset($_GET['success'])) {
            $success = $_GET['success'];

          } else {
            $success = "";
          }

          ?>

            <?php if (!empty($success)): ?>
              <div class="alert alert-success alert-dismissible" style="width: 60%; margin-left:auto; margin-right:auto;margin-top:20px; padding:35px;" id="success-message">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i>Success!</h5>
                      <?php echo $success; ?>
                    </div>
            
            
              <?php endif; ?>


                  <?php
                  //error div bbox
          if (isset($_GET['error'])) {
            $errorMessage = $_GET['error'];

          } else {
            $errorMessage = "";
          }

          ?>

            <?php if (!empty($errorMessage)): ?>
              <div class="alert alert-warning alert-dismissible" style="width: 60%; margin-left:auto; margin-right:auto;margin-top:20px; padding:35px;" id="success-message" >
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                      <?php echo $errorMessage; ?>
                    </div>
            
              <?php endif; ?>

	<!--/Pre Loader -->
	<div class="wrapper">
	
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow" style="border-radius: 15px; width:928px;">
										
							<div class="observed-table">
							   <!-- <h1>On Boarding Form</h1> -->
              </div>
                          <style>
                            table,td,th{
                              border:2px solid black;
                              font-size:15px;
                              
                            }
                            .custom-select{
                              position:relative;
                            }
                            .custom-select select {
                              display: none;
                            }
                            @media(min-width:320px) and (max-width:767px){
                              .navandlogo{
                                           position: fixed;
                                           height: 53px;
                                           width: 100vw !important; 
                                          }
                              .proclinic-box-shadow{
                                                    width:100% !important}
                              th,td{width:50px;}
                              .newtable{overflow-x:auto;}
                              .search{margin-left:100px !important;}
                              }                              
                            
                            

                          </style>
                            
                              <select class="custom-select" style="width:70px;">10
                                <option>10</option>
                                <option>25</option>
                                <option>50</option>
                                <option>100</option>
                              </select>

                              <input class=search type=text style="margin-left:600px;" placeholder="Search...">
                            
                            <br><br>
                          <div class=newtable>      
                            <table class="table table-striped table-bordered">
                                  <tr>
                                      <th>#</th>
                                      <th>Doctor_name</th>
                                      <th>Clinic_name</th>
                                      <th>Address</th>
                                      <th>Base_license</th>
                                      <th>Total_cost</th>
                                      <th>Action</th>
                                  </tr>
                                  <?php
                               $sql="SELECT * FROM new_form";
                               $result=mysqli_query($conn,$sql);
                               
                               while($array=mysqli_fetch_array($result)){
                                   $Doctor_id=$array['Doctor_id'];
                                   $Doctor_name=$array['Doctor_name'];
                                   $Mobile=$array['Mobile'];
                                   $Email_id=$array['Email_id'];
                                   $Clinic_name=$array['Clinic_name'];
                                   $Address=$array['Address'];
                                   $Qualification=$array['Qualification'];
                                   $Speciality=$array['Speciality'];
                                   $DOB=$array['DOB'];
                                   $Contact_name=$array['Contact_name'];
                                   $Contact_mobile=$array['Contact_mobile'];
                                   $Contract_start_date=$array['Contract_start_date'];
                                   $Company_name=$array['Company_name'];
                                   $Association=$array['Association'];
                                   $Sales_name=$array['Sales_name'];
                                   $Sales_mobile=$array['Sales_mobile'];
                                   $Sales_id=$array['Sales_id'];
                                   $Payment_attachment=$array['Payment_attachment'];
                                   $Transaction_id=$array['Transaction_id'];
                                   $Base_license=$array['Base_license'];
                                   $Doctor_num=$array['Doctor_num'];
                                   $Receptionist_num=$array['Receptionist_num'];
                                   $Pharmacy_num=$array['Pharmacy_num'];
                                   $Months_num=$array['Months_num'];
                                   $Taxable_amount=$array['Taxable_amount'];
                                   $GST=$array['GST'];
                                   $Total_cost=$array['Total_cost'];
                                   
                              ?>
                                    <tr>
                                      <td><?php echo $Doctor_id ?></td>
                                      <td><a href="all_details.php?id=<?php echo  $Doctor_id ?>" style="text-decoration: underline;"><?php echo $Doctor_name ?></a><br>
                                         <?php echo $Mobile ?><br>
                                         <?php echo  $Email_id ?>
                                     </td>
                                     
                                     <td><?php echo $Clinic_name ?></td>
                                     <td><?php echo $Address ?></td>
                                     <td><?php echo $Base_license ?></td>
                                     <td><?php echo $Total_cost ?></td>
                                     <td><div style="display:flex; justify-content:space-around;"><a href="edit.php?id=<?php echo $array['Doctor_id']; ?>"><img src="images/edit.png" style="width:31px; height:30px; border-radius:8px;"></a><a href="delete.php?id=<?php echo $array['Doctor_id'] ?>"><img src="images/delete.png" style="width:31px; height:30px; border-radius:8px;"></a></td>
                                     
                                     
                                    </tr>
                              <?php
                                  }
                              ?>
                            </table>
                          </div>
                              


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
	</div>
	</div>


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
	<script src="../js/custom-datatables.js"></script>

</body>
</html>