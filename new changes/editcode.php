<?php
 include "../database/db.php";
 if(isset($_POST['submit'])){
    $doctor_id=$_POST['doctor-id'];
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
    //new uploaded file
    if($_FILES['new-payment-attachment']['error'] === 0){
        $file_name=$_FILES['new-payment-attachment']['name'];
        $file_target="upload-images/".$file_name;
        $file_tmp=$_FILES['new-payment-attachment']['tmp_name'];
        move_uploaded_file($file_tmp,$file_target);
    }
    
    //old uploaded file
    else{$file_target=$_POST['old-payment-attachment'];}
    

    $transaction_id=$_POST['transaction-id'];
    $base_license=$_POST['base-license'];
    $doctor_num=$_POST['doctor-num'];
    $receptionist_num=$_POST['receptionist-num'];
    $pharmacy_num=$_POST['pharmacy-num'];

    $months_num=$_POST['months-num'];
    $taxable_amount=$_POST['taxable-amount'];
    $gst=$_POST['gst'];
    $total_cost=$_POST['total-cost'];
    $sql="UPDATE new_form SET Doctor_name='$doctor_name',Mobile='$mobile',Email_id='$email_id',Clinic_name='$clinic_name',Address='$address',Qualification='$qualification',Speciality='$speciality',DOB='$dob',Contact_name='$contact_name',Contact_mobile='$contact_mobile',Contract_start_date='$contract_start_date',Company_name='$company_name',Association='$association',Sales_name='$sales_name',Sales_mobile='$sales_mobile',Sales_id='$sales_id',Payment_attachment='$file_target',Transaction_id='$transaction_id',Base_license='$base_license',Doctor_num='$doctor_num',Receptionist_num='$receptionist_num',Pharmacy_num='$pharmacy_num',Months_num='$months_num',Taxable_amount='$taxable_amount',GST='$gst',Total_cost='$total_cost' WHERE Doctor_id='$doctor_id'";
    $result=mysqli_query($conn,$sql);

    

 }
?>