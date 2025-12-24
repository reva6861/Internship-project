<?php
            include "../database/db.php";
            // include "../database/auth.php";
			// session_start();
            // error_reporting(0);
?>
<!DOCTYPE html>
<html>
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
  <!--/Pre Loader -->
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
						<div class="widget-area-2 proclinic-box-shadow" style="border-radius: 15px;">
										
							<div class="observed-table">
							   <!-- <h1>On Boarding Form</h1> -->
							</div>
                          <?php
                               $Doctor_id=$_GET['id'];
                               $sql="SELECT * FROM new_form WHERE Doctor_id=$Doctor_id" ;
                               $result=mysqli_query($conn,$sql);
                               
                               $array=mysqli_fetch_array($result);
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
                            <style>
                                .input{display:flex;}
                                .header{width:150px;
                                        height:30px;
                                        font-size:15px;}
                                .form-control{width:250px;}
                                .border{border:2px solid black;}
                                .split-container{display:flex;}
                                
                                .split{width:50%;
                                       height:100%;}
                                .left{left:0;}
                                .right{right:0;}
                                table,td{border:2px,solid,black;}
                                td{width:70px;}
                            </style>
                            <div class="card">
                                <div class="card-body" style="width:900px;">
                                    <div class="card-title"></div>
                                    <div class="card-text split-container">
                                        <form action="editcode.php" method="POST" enctype="multipart/form-data">
                                          <div class="row">
                                           <div class="col-md-6">
                                              <input type="hidden" name="doctor-id" value="<?php echo $Doctor_id ?>">
                                              <div class=input><div class=header>DOCTOR NAME:</div><input type="text"class=form-control name=doctor-name value="<?php echo $Doctor_name ?>"></div>
                                              <br>
                                              <div class=input><div class=header>MOBILE NO.:</div><input type="tel"class=form-control name=mobile value="<?php echo $Mobile ?>"></div>
                                              <br>
                                              <div class=input><div class=header>EMAIL ID:</div><input type="email"class=form-control name=email-id value="<?php echo $Email_id ?>"></div>
                                              <br>
                                              <div class=input><div class=header>CLINIC/HOSPITAL NAME:</div><input type="text"class=form-control name=clinic-name value="<?php echo $Clinic_name ?>"></div>
                                              <br>
                                              <div class=input><div class=header>ADDRESS:</div><input type="text"class=form-control name=address value="<?php echo $Address ?>"></div>
                                              <br>
                                             <div class=input><div class=header>QUALIFICATION:</div><input type="text"class=form-control name=qualification value="<?php echo $Qualification ?>"></div>
                                             <br>
                                             <div class=input><div class=header>SPECIALITY:</div><input type="text"class=form-control name=speciality value="<?php echo $Speciality ?>"></div>
                                             <br>
                                             <div class=input><div class=header>DOB:</div><input type="date"class=form-control name=dob value="<?php echo $DOB ?>"></div>
                                             <br>
                                             <div class=input><div class=header>CONTACT PERSON NAME:</div><input type="text"class=form-control name=contact-name value="<?php echo $Contact_name ?>"></div>
                                             <br>
                                             <div class=input><div class=header>CONTACT PERSON MOBILE NO.:</div><input type="tel"class=form-control name=contact-mobile value="<?php echo $Contact_mobile ?>"></div>
                                             <br>
                                             <div class=input><div class=header>CONTRACT START DATE:</div><input type="date"class=form-control name=contract-start-date value="<?php echo $Contract_start_date ?>"></div>
                                             <br>
                                             <h5><b>SALES CONSULTANT INFORMATION</b></h5>
                                             <div class=border style="width:400px;">
                                               <br>
                                               <div class=input><div class=header style="text-align:center;">COMPANY NAME:</div><input type="text"class=form-control style="width:200px;" name=company-name value="<?php echo $Company_name ?>"></div>
                                               <br>
                                               <div class=input><div class=header style="text-align:center;">ASSOCIATION:</div><input type="text"class=form-control style="width:200px;" name=association value="<?php echo $Association ?>"></div>
                                               <br>
                                               <div class=input><div class=header style="text-align:center;">SALES CONSULTANT NAME:</div><input type="text"class=form-control style="width:200px;" name=sales-name value="<?php echo $Sales_name ?>"></div>
                                               <br>
                                               <div class=input><div class=header style="text-align:center;">SALES CONSULTANT MOBILE:</div><input type="tel"class=form-control style="width:200px;" name=sales-mobile value="<?php echo $Sales_mobile ?>"></div>
                                               <br>
                                               <div class=input><div class=header style="text-align:center;">SALES CONSULTANT ID:</div><input type="text"class=form-control style="width:200px;" name=sales-id value="<?php echo $Sales_id ?>"></div>
                                               <br>
                                              </div>
                                               <br>
                                               <div class=input><div class=header>PAYMENT ATTACHMENT:</div><div style="margin-left:50px;">
                                                                                                           <input type="file" name=new-payment-attachment>
                                                                                                           <input type="hidden" name=old-payment-attachment value="<?php echo $Payment_attachment?>">
                                                                                                           <div class=header style="width:250px;"><?php echo $Payment_attachment ?></div>
                                                                                                           <br>
                                                                                                           </div>
                                                </div>
                                               <br>
                                               <div class=input><div class=header>TRANSACTION ID (OPTIONAL):</div><input type="text" class=form-control name=transaction-id value="<?php echo $Transaction_id ?>"></div>
                                               <br>
                                               
                                            </div>
                                            <div class="col-md-6">
                                              <div style="word-spacing:150px;"><h5>COSTING COST(Rs.)</h5></div>
                                            
                                              <table>
                                            
                                                <tr><td style="font-size:15px; width:200px;">BASE LICENSE:</td><td></td><td id="demo" style="padding-left:50px; padding-right:25px;"><input type="hidden" id="base-license" name="base-license" value="1000">1,000</td></tr>
                                                <tr><td style="font-size:15px; width:200px;">DOCTOR(S):</td><td><input type="number" id="number1" name="doctor-num" value="<?php echo $Doctor_num ?>" min=1 style="width:50px;  padding-left:15px;" oninput="myfunction1()"></td><td id="demo1" style="padding-left:50px; padding-right:25px;">0</td></tr>
                                                <tr><td style="font-size:15px; width:200px;">RECEPTIONIST/CORDINATOR:</td><td><input type="number" id="number2" name="receptionist-num" value="<?php echo $Receptionist_num ?>" min=1 style="width:50px;  padding-left:15px;"  oninput="myfunction2()"></td><td id="demo2" style="padding-left:50px; padding-right:25px;">0</td></tr>
                                                <tr><td style="font-size:15px; width:200px;">PHARMACY:</td><td><input type="number" id="number3" name="pharmacy-num" value="<?php echo $Pharmacy_num ?>" min=0 style="width:50px;  padding-left:15px;"  oninput="myfunction3()"></td><td id="demo3" style="padding-left:50px; padding-right:25px;">0</td></tr>
                                            
                                              </table>
                                              <br>
                                              <div style="display:flex; text-align:center;"><div style="width:200px">No. of months</div><div style="margin-left:85px;"><input type="number" min=1 id="months" oninput="myfunction1()" style="width:50px; padding-left:15px;" value="<?php echo $Months_num ?>" name="months-num"></div></div>
                                              <div style="display:flex; text-align:center;"><div style="width:200px"></div><div style="margin-left:85px;"><input type="text" readonly id="demo4" name="taxable-amount" style="width:100px; padding-left:30px;"> </div></div>
                                              <div style="display:flex; text-align:center;"><div style="width:200px">GST(18%)</div><div style="margin-left:85px;" name="gst"><input type="text" readonly id="demo5" name="gst" style="width:100px; padding-left:30px;"></div></div>
                                              <div style="display:flex; text-align:center;"><div style="width:200px"><b>TOTAL COST</b></div><div style="margin-left:85px;"><input type="text" readonly  id="demo6" name="total-cost" style="width:100px; padding-left:30px;"></div></div>
                                              <br><br>
                                              <div style="text-align:center;"><h5><b>PAYMENT QR CODE</b></h5></div>
                                              <div style="text-align:center;"><img src="New folder/payment.png" style="cover" height="300px" width="300px"></div>
                                            </div>
                                          </div>
                                          <div style="margin-left:400px;"><input type="submit" class="btn btn-primary" name="submit" value="submit"></div>
                                        </form>
                                     </div>
                                        
                                        
                                         
                              </div>
                                     
                                    


                                  </div>

                    
                            </div>
                            <script>
                               
                               function myfunction1(){
                                 
                                 const inputvalue=parseInt(document.getElementById("number1").value);
                                 
                                 const sum=(inputvalue-1)*1000;
                                 document.getElementById("demo1").innerHTML=sum.toLocaleString();
                                 const allsum=1000+parseInt(document.getElementById("demo1").innerHTML)+parseInt(document.getElementById("demo2").innerHTML)+parseInt(document.getElementById("demo3").innerHTML);
                                 const months=parseInt(document.getElementById("months").value);
                                 const totalsum=(months)*(allsum);
                                 document.getElementById("demo4").value=totalsum.toLocaleString();
                                 const gst=(18/100)*totalsum;
                                 document.getElementById("demo5").value=gst.toLocaleString();
                                 const totalcost=totalsum+gst;
                                 document.getElementById("demo6").value=totalcost.toLocaleString();
                                  
                                 
                               }
                               myfunction1();
                               
                               function myfunction2(){
                                 const inputvalue=document.getElementById("number2").value;
                                 
                                 const sum=(inputvalue-1)*500;
                                 document.getElementById("demo2").innerHTML=sum.toLocaleString();
                                 const allsum=1000+parseInt(document.getElementById("demo1").innerHTML)+parseInt(document.getElementById("demo2").innerHTML)+parseInt(document.getElementById("demo3").innerHTML)
                                 const months=parseInt(document.getElementById("months").value);
                                 const totalsum=(months)*(allsum);
                                 document.getElementById("demo4").value=totalsum.toLocaleString();
                                 const gst=(18/100)*totalsum;
                                 document.getElementById("demo5").value=gst.toLocaleString();
                                 const totalcost=totalsum+gst;
                                 document.getElementById("demo6").value=totalcost.toLocaleString();
                               }
                               myfunction2();
                               
                               function myfunction3(){
                                 const inputvalue=document.getElementById("number3").value;
                                 
                                 const sum=inputvalue*1000;
                                 document.getElementById("demo3").innerHTML=sum.toLocaleString();
                                 const allsum=1000+parseInt(document.getElementById("demo1").innerHTML)+parseInt(document.getElementById("demo2").innerHTML)+parseInt(document.getElementById("demo3").innerHTML)
                                 const months=parseInt(document.getElementById("months").value);
                                 const totalsum=(months)*(allsum);
                                 document.getElementById("demo4").value=totalsum.toLocaleString();
                                 const gst=(18/100)*totalsum;
                                 document.getElementById("demo5").value=gst.toLocaleString();
                                 const totalcost=totalsum+gst;
                                 document.getElementById("demo6").value=totalcost.toLocaleString();
                               }
                               myfunction3();

                               
                               
                              
                               
                            </script>

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
