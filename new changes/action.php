<?php
 include "../database/db.php";
 if(isset($_POST['submit'])){
    $doctor_name=$_POST['doctor-name'];
    $mobile=$_POST['mobile'];
    $email_id=$_POST['email-id'];
    $clinic_name=$_POST['clinic-name'];

    $address=$_POST['address'];
    $qualification=$_POST['qualification'];
    $speciality=$_POST['speciality'];
    $dob=$_POST['dob'];
    $contact_name=$_POST['contact-name'];
    $contact_mobile=$_POST['contact-mobile'];
    $contract_start_date=$_POST['contract-start-date'];
    $company_name=$_POST['company-name'];
    $association=$_POST['association'];
    
    $sales_name=$_POST['sales-name'];
    $sales_mobile=$_POST['sales-mobile'];
    $sales_id=$_POST['sales-id'];
    $file_name=$_FILES['payment-attachment']['name'];
    $file_target="upload-images/".$file_name;
    $file_tmp=$_FILES['payment-attachment']['tmp_name'];
    move_uploaded_file($file_tmp,$file_target);
    $transaction_id=$_POST['transaction-id'];
    $base_license=$_POST['base-license'];
    $doctor_num=$_POST['doctor-num'];
    $receptionist_num=$_POST['receptionist-num'];
    $pharmacy_num=$_POST['pharmacy-num'];

    $months_num=$_POST['months-num'];
    $taxable_amount=$_POST['taxable-amount'];
    $gst=$_POST['gst'];
    $total_cost=$_POST['total-cost'];
    $sql="INSERT INTO new_form(Doctor_name,Mobile,Email_id,Clinic_name,Address,Qualification,Speciality,DOB,Contact_name,Contact_mobile,Contract_start_date,Company_name,Association,Sales_name,Sales_mobile,Sales_id,Payment_attachment,Transaction_id,Base_license,Doctor_num,Receptionist_num,Pharmacy_num,Months_num,Taxable_amount,GST,Total_cost) VALUES('$doctor_name','$mobile','$email_id','$clinic_name','$address','$qualification','$speciality','$dob','$contact_name','$contact_mobile','$contract_start_date','$company_name','$association','$sales_name','$sales_mobile','$sales_id','$file_target','$transaction_id','$base_license','$doctor_num','$receptionist_num','$pharmacy_num','$months_num','$taxable_amount','$gst','$total_cost')";
    $result=mysqli_query($conn,$sql);
    

 }
?>