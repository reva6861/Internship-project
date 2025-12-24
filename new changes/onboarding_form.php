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
					<h3 class="block-title">On Boarding Form</h3>
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
	<div class="wrapper" style="display:block;">
	
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
                            <style>
                                .input{display:flex;}
                                .header{width:150px;
                                        height:30px;
                                        font-size:15px;
                                        padding-top:10px;}
                                .form-control{width:250px;}
                                .border{border:2px solid black;}
                                .split-container{display:flex;}
                                
                                .split{width:50%;
                                       height:100%;}
                                .left{left:0;}
                                .right{right:0;}
                                table,td{border:2px,solid,black;}
                                td{width:70px;}
                                
                                @media(min-width:320px) and (max-width:767px){
                                        *, *::before, *::after {
                                          box-sizing: border-box;
                                        }
                                       html, body{overflow-x: hidden;
                                                  box-sizing: border-box;}
                                       .card{width:100%;
                                             overflow: hidden;}
                                       .navandlogo{
                                                   position: fixed;
                                                   height: 53px;
                                                   width: 100vw !important; 
                                                   }
                                       
                                       .bottom-menu{width: 100vw !important; }
                                       
                                       
                                       
                                       
                                       .costing{margin-left:10% !important;
                                                }
                                      
                                       
  
                                       .box{
                                            width:100%;
                                            box-sizing: border-box;
                                            margin-left:0px !important;
                                            
                                            }
                                       .months{margin-left:20px !important;
                                               
                                               font-size:15px !important;}
                                       .taxable-amount{margin-left:20px !important;
                                                       
                                                      font-size:15px !important;}
                                       .gst{margin-left:20px !important;
                                            
                                            font-size:15px !important;}
                                       .total-cost{margin-left:20px !important;
                                                   
                                                   font-size:15px !important;}
                                       .payment{margin-left:50px !important;
                                                width:100px;}
                                       .pqc{width:200px;
                                            font-size:4vw;}
                                       .p{margin-left:60px !important;}
                                       .submit{margin-left:120px !important;
                                               margin-top:70px !important;}
                                       .proclinic-box-shadow{height:auto !important;
                                                             width:100vw !important}
                                       .footer{width:100%;}
                                       .navbar{width:100%;}
                                       .card-body{width:100% !important;}
                                       .card-text{width:100% !important;}
                                       .row{width:100% !important;}
                                       .input{width:300px !important;}
                                       .header{width:100px !important;
                                               font-size:12px;}
                                       .form-control{width:35vw !important;
                                                     margin-left:5% !important;}
                                       .sci{font-size:4vw;
                                            }
                                       .pay{width:100px;
                                           height:100px;
                                           margin-left:60px;}
                                       form{width:100% !important;}
                                       .border{width:77vw !important;}
                                       .file{font-size:10px;
                                             
                                             }
                                       .cost{font-size:15px;
                                             word-spacing:20vw;}
                                       td{font-size:12px !important;
                                          width:5% !important;}
                                       .m{width:30px !important;
                                          padding-left:5px !important;}
                                       .tx{width:80px !important;
                                           padding-left:30px !important;}
                                       .g{width:80px !important;
                                          padding-left:30px !important;}
                                       .tc{width:80px !important;
                                           padding-left:30px !important;}
                                       .mon{margin-left:90px !important;}
                                       .tax{margin-left:60px !important;}
                                       .gstnew{margin-left:60px !important;}
                                       .total{margin-left:60px !important;}
                                       .mon1{width:120px !important;
                                             margin-right:0px !important;}
                                       .tax2{width:120px !important;
                                             }
                                       .gstnew3{width:120px !important;}
                                       .total4{width:120px !important;}
                                       .doc{width:30px !important;
                                            padding-left:5px !important;}
                                       .recep{width:30px !important;
                                              padding-left:5px !important;}
                                       .phar{width:30px !important;
                                             padding-left:5px !important;}
                                       .money{width:50px !important;
                                              padding-right:10px !important;
                                              padding-left:30px !important;}
                                       
                                      }
                                @media(min-width:768px) and (max-width:900px){
                                  .submit{margin-left:50% !important;}
                                  .proclinic-box-shadow{height:auto !important;}
                                  .navandlogo{width: 100vw !important;}
                                  html, body{overflow-x: hidden;}
                                  .card{
                                             overflow: hidden;}
                                  .box{margin-left:0px !important;
                                               }
                                  td{font-size:12px !important;
                                          width:10% !important;}
                                  .cost{font-size:15px;
                                             word-spacing:110px;}
                                  .months{margin-left:20px !important;
                                               
                                               font-size:15px !important;}
                                  .taxable-amount{margin-left:20px !important;
                                                       
                                                      font-size:15px !important;}
                                  .gst{margin-left:20px !important;
                                            
                                            font-size:15px !important;}
                                  .total-cost{margin-left:20px !important;
                                                   
                                                   font-size:15px !important;}
                                  .mon{margin-left:80px !important;}
                                  .tax{margin-left:60px !important;}
                                  .gstnew{margin-left:60px !important;}
                                  .total{margin-left:60px !important;}
                                  .payment{margin-left:20px !important;}
                                  .p{margin-left:20px !important;}
                                  .second{height:60% !important;}
                                                
                                }
                                 @media(width:344px){
                                  .cost{word-spacing:90px;}
                                  .money{ padding-right:5px !important;
                                          padding-left:10px !important;}
                                  .months{margin-left:2px !important;
                                               
                                               font-size:15px !important;}
                                  .taxable-amount{margin-left:0px !important;
                                                       
                                                      font-size:15px !important;}
                                  .gst{margin-left:0px !important;
                                            
                                            font-size:15px !important;}
                                  .total-cost{margin-left:0px !important;
                                                   
                                                   font-size:15px !important;}
                                  .sci{font-size:12px;}
                                 }
                                 @media(min-width:1024px){
                                  html, body{overflow-x: hidden;}
                                  

                                 }
                                
                                
                            </style>
                            <div class="card">
                                <div class="card-body" >
                                    <div class="card-title"></div>
                                    <div class="card-text split-container">
                                        <form action="action.php" method="POST" enctype="multipart/form-data">
                                          <div class="row">
                                           <div class="col-md-6">
                                              <div class=input><div class=header>DOCTOR NAME:</div><input type="text"class=form-control name=doctor-name placeholder="Name" ></div>
                                              <br>
                                              <div class=input><div class=header>MOBILE NO.:</div><input type="tel"class=form-control name=mobile placeholder="Phone"></div>
                                              <br>
                                              <div class=input><div class=header>EMAIL ID:</div><input type="email"class=form-control name=email-id placeholder="Email"></div>
                                              <br>
                                              <div class=input><div class=header>CLINIC/HOSPITAL NAME:</div><input type="text"class=form-control name=clinic-name placeholder="Clinic name"></div>
                                              <br>
                                              <div class=input><div class=header>ADDRESS:</div><input type="text"class=form-control name=address placeholder="Address"></div>
                                              <br>
                                             <div class=input><div class=header>QUALIFICATION:</div><input type="text"class=form-control name=qualification placeholder="Qualification"></div>
                                             <br>
                                             <div class=input><div class=header>SPECIALITY:</div><input type="text"class=form-control name=speciality placeholder="Speciality"></div>
                                             <br>
                                             <div class=input><div class=header>DOB:</div><input type="date"class=form-control name=dob placeholder="DOB"></div>
                                             <br>
                                             <div class=input><div class=header>CONTACT PERSON NAME:</div><input type="text"class=form-control name=contact-name placeholder="Name"></div>
                                             <br>
                                             <div class=input><div class=header>CONTACT PERSON MOBILE NO.:</div><input type="tel"class=form-control name=contact-mobile placeholder="Phone"></div>
                                             <br>
                                             <div class=input><div class=header>CONTRACT START DATE:</div><input type="date"class=form-control name=contract-start-date></div>
                                             <br>
                                             <div style="width:400px;"><h5 class="sci"><b>SALES CONSULTANT INFORMATION</b></h5></div>
                                             <div class=border style="width:370px;">
                                               <br>
                                               <div class=input><div class=header style="margin-left:15px;">COMPANY NAME:</div><input type="text"class=form-control style="width:200px;" name=company-name placeholder="Company name"></div>
                                               <br>
                                               <div class=input><div class=header style="margin-left:15px;">ASSOCIATION:</div><input type="text"class=form-control style="width:200px;" name=association placeholder="Association"></div>
                                               <br>
                                               <div class=input><div class=header style="margin-left:15px;">SALES CONSULTANT NAME:</div><input type="text"class=form-control style="width:200px;" name=sales-name placeholder="Name"></div>
                                               <br>
                                               <div class=input><div class=header style="margin-left:15px;">SALES CONSULTANT MOBILE:</div><input type="tel"class=form-control style="width:200px;" name=sales-mobile placeholder="Phone"></div>
                                               <br>
                                               <div class=input><div class=header style="margin-left:15px;">SALES CONSULTANT ID:</div><input type="text"class=form-control style="width:200px;" name=sales-id placeholder="ID"></div>
                                               <br>
                                              </div>
                                               <br>
                                               <div class=input><div class=header>PAYMENT ATTACHMENT:</div><div style="margin-left:50px;"><input type="file" name=payment-attachment class=file></div></div>
                                               <br>
                                               <div class=input><div class=header>TRANSACTION ID (OPTIONAL):</div><input type="text" class=form-control name=transaction-id placeholder="Transaction ID"></div>
                                               <br>
                                               
                                            </div>
                                            <div class="col-md-6 second">
                                              <div class="costing" style="word-spacing:170px; margin-left:50px; width:370px;"><h5 class="cost">COSTING COST(Rs.)</h5></div>
                                            
                                              <table  class="box" style="margin-left:50px;">
                                            
                                                <tr><td style="font-size:15px; width:200px;">BASE LICENSE:</td><td></td><td class=money id="demo" style="padding-left:50px; padding-right:25px;"><input type="hidden" id="base-license" name="base-license" value="1000">1,000</td></tr>
                                                <tr><td style="font-size:15px; width:200px;">DOCTOR(S):</td><td><input class=doc type="number" id="number1" name="doctor-num" value=1 min=1 style="width:50px; padding-left:15px;" oninput="myfunction1()"></td><td class=money id="demo1" style="padding-left:50px; padding-right:25px;">0</td></tr>
                                                <tr><td style="font-size:15px; width:200px;">RECEPTIONIST/CORDINATOR:</td><td><input class=recep type="number" id="number2" name="receptionist-num" value=1 min=1 style="width:50px; padding-left:15px;"  oninput="myfunction2()"></td><td class=money id="demo2" style="padding-left:50px; padding-right:25px;">0</td></tr>
                                                <tr><td style="font-size:15px; width:200px;">PHARMACY:</td><td><input class=phar type="number" id="number3" name="pharmacy-num" value=0 min=0 style="width:50px; padding-left:15px;"  oninput="myfunction3()"></td><td class=money id="demo3" style="padding-left:50px; padding-right:25px;">0</td></tr>
                                            
                                              </table>
                                              <br>
                                              <div class="months" style="display:flex; text-align:center; margin-left:70px; width:350px;"><div class=mon1 style="width:150px; margin-right:30px;">No. of months</div><div class=mon style="margin-left:150px;"><input class=m type="number" min=1 id="months" oninput="myfunction1()" style="width:50px; padding-left:15px;" value=1 name="months-num"></div></div>
                                              <div class="taxable-amount" style="display:flex; text-align:center; margin-left:70px; width:350px;"><div class=tax2 style="width:150px;"></div><div class=tax style="margin-left:140px;"><input class=tx type="text" readonly id="demo4" name="taxable-amount" style="width:100px; padding-left:40px;"> </div></div>
                                              
                                              <div class="gst" style="display:flex; text-align:center; margin-left:70px; width:350px;"><div class=gstnew3 style="width:150px;">GST(18%)</div><div class=gstnew style="margin-left:140px;"  name="gst"><input class=g type="text" readonly id="demo5" name="gst" style="width:100px; padding-left:40px;"></div></div>
                                              <div class="total-cost" style="display:flex; text-align:center; margin-left:70px; width:350px;"><div class=total4 style="width:150px;"><b>TOTAL COST</b></div><div class= total style="margin-left:140px;"><input class=tc type="text" readonly  id="demo6" name="total-cost" style="width:100px; padding-left:40px;"></div></div>
                                              <br><br>
                                              <div class="p" style="text-align:center; margin-left:120px;"><h5 class="pqc"><b>PAYMENT QR CODE</b></h5></div>
                                              <div class="payment" style="text-align:center; margin-left:100px;"><img class=pay src="New folder/payment.png" style="cover" height="300px" width="300px"></div>
                                            </div>
                                          </div>
                                          <div style="margin-left:400px;" class="submit"><input type="submit" class="btn btn-primary" name="submit" value="submit"></div>
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
