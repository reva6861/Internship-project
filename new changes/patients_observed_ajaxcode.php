<?php
            include "../database/db.php";
            include "../database/auth.php";
error_reporting(0);
// echo "hello";
            
            if(isset($_POST['hospital_observed_id']))
            {
                
                $hospital_id=$_POST['hospital_observed_id'];
                // $doctor_id=$_POST['doctor_id'];
                $currentdate=$_POST['currentdate'];
                // print_r($doctor_ids);
                if(!empty($_POST['selectedOptions']))
                {
                    $doctor_ids=$_POST['selectedOptions'];
                    if(isset($_SESSION['auth_user']['client_id']))
                    {
                        $doctor_idstr=implode("','",$doctor_ids);
                    }else{
                        $doctor_idstr=$doctor_ids;
                    }
                $sql='';
                if(!empty($doctor_idstr))
                {

                // $sql="SELECT * FROM patient where doctor_id=$doctor_id ORDER BY patient_id DESC";
                 $sql="SELECT * from appointment as a join users as u on u.user_id=a.user_id JOIN patient_prescription as pp on pp.user_id = a.user_id where a.appointment_status='Observed' and pp.presc_doctor_id in ('$doctor_idstr') and pp.presc_hospital_id='$hospital_id' and a.appointment_id=pp.appointment_id AND DATE(pp.presc_date)='$currentdate' GROUP by pp.presc_date order by pp.presc_date DESC;";

                }else{
                    $sql="SELECT * from appointment as a join users as u on u.user_id=a.user_id JOIN patient_prescription as pp on pp.user_id = a.user_id where a.appointment_status='Observed' and pp.presc_hospital_id='$hospital_id' and a.appointment_id=pp.appointment_id AND DATE(pp.presc_date)='$currentdate' GROUP by pp.presc_date order by pp.presc_date DESC;";
                }
                $result=mysqli_query($conn,$sql);
                $userdata=array();
                while($fetch=mysqli_fetch_assoc($result))
                {
                    $userdata[]=$fetch;
                } 
                $new_count = count($userdata);

                // Store the count in the session
                $_SESSION['appoint_count'] = $new_count;
                ?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<table  class="table table-bordered table-striped display" id="example1">
                            <thead>
                                <tr>
                                    
                                    <th>#</th>
                                    <th>Patient Name</th>
                                    <th>Phone</th>
                                    <th>Visit Time</th>  
                                    <th>Doctor Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sr=1;
                                    foreach($userdata as $data)
                                    {
                                        $sql_sal="select * from salutation where salute_id='".$data['salute_id']."'";
                                        $result_sal=mysqli_query($conn,$sql_sal);
                                        $fetch_sal=mysqli_fetch_assoc($result_sal);
                                        $salute_name=!empty($fetch_sal['salute_name']) ? $fetch_sal['salute_name'] : '';
                                ?>
                                <tr>
                                    
                                    <td><?php echo $sr; ?><input type="hidden" value="<?php echo $_SESSION['appoint_count']; ?>" id="session_value"></td>
                                    <td style="display: block;">
                                        <div style="display:flex;">
                                            
                                           
                                             <div><img class=patient style="height:50px; width:50px; border-radius: 4px;" src="../images/patient/Devendra_Kumar1/IMG_0269.jpeg"></div>
                                             <div style="display: grid; margin-left:10px;">
                                                 <?php echo $salute_name.' '.$data['user_username'] ?>
                                                 <span style="font-size: 11px;">
                                                     <label style="line-height: 0;" id="patient_age<?php echo $data['appointment_id'];?>"></label>, <?php echo $data['user_gender']; ?>
                                                 </span>
                                                 <span style="font-size: 11px;">Appointment Id - <?php echo $data['appointment_id'] ?></span>
                                             </div>
                                                                       
                                        </div>
                                    </td>
                                    <td><?php echo $data['user_country_code'].' '.$data['user_phone']; ?></td>	
                                    <td><?php echo date('h:i a', strtotime($data['presc_date'])); ?></td>
                                    <script>
$(document).ready(function() {
    var dob = '<?php echo $data['user_dob'];?>'; // Assuming PHP variable 'patient_dob' holds the date of birth

    function calculateAge(dob) {
        if (dob.includes("-")) {
            // Case for DOB in "YYYY-MM-DD" format
            var today = new Date();
            var birthDate = new Date(dob);
            var ageYears = today.getFullYear() - birthDate.getFullYear();
            var ageMonths = today.getMonth() - birthDate.getMonth();

            if (ageMonths < 0 || (ageMonths === 0 && today.getDate() < birthDate.getDate())) {
                ageYears--;
                ageMonths += 12;
            }

            var ageString = '';
            if (ageYears > 0) {
                ageString += ageYears + ' Year' + (ageYears !== 1 ? 's' : '');
            }
            if (ageMonths > 0) {
                if (ageString.length > 0) ageString += ' '; // add a space if years were added
                ageString += ageMonths + ' Month' + (ageMonths !== 1 ? 's' : '');
            }

            $('#patient_age<?php echo $data['appointment_id'];?>').text(ageString);
            
        } else if (dob.includes("/")) {
            // Case for DOB in "Y/M" format
            var parts = dob.split('/');
            var years = parseInt(parts[0], 10);
            var months = parseInt(parts[1], 10);

            var ageString = '';
            if (years > 0) {
                ageString += years + " Year" + (years !== 1 ? "s" : "");
            }
            if (months > 0) {
                if (ageString.length > 0) ageString += " "; // add a space if years were added
                ageString += months + " Month" + (months !== 1 ? "s" : "");
            }

            $('#patient_age<?php echo $data['appointment_id'];?>').text(ageString);
            
        } else if (dob) {
            // If the format is not recognized, assume it's in years directly
            $('#patient_age<?php echo $data['appointment_id'];?>').text(dob + ' Years');
        } 
    }

    calculateAge(dob); // Call the function to calculate age on document ready
});
</script>
                                   	<?php
                                        $sql_h="select * from hospital_vs_doctor where hospital_id='".$data['presc_hospital_id']."' and doctor_id='".$data['presc_doctor_id']."'";
                                        $result_h=mysqli_query($conn,$sql_h);
                                        $fetch_h=mysqli_fetch_assoc($result_h);
                                        $designation=$fetch_h['designation'];

                                        $sql_d="select * from doctor as d join users as u on u.user_id = d.doctor_user_id where d.doctor_id='".$data['presc_doctor_id']."'";
                                        $result_d=mysqli_query($conn,$sql_d);
                                        $fetch_d=mysqli_fetch_assoc($result_d);
                                        $doctor_name=$fetch_d['user_username'];
                                    ?>
                                    <td><span><?php echo 'Dr. ' . $doctor_name; ?></span><br>
                                    <span style=""><?php echo $designation; ?></span></td>
                                    
                                    <td>
                                    <?php
                                        // $url = "../prescription/prescription_view.php?patient_id=" . $data['patient_id'] . '&presc_id=' . $data['presc_id'] . '&doctor_id=' . $data['doctor_id'] . '&presc_date=' . $data['presc_date'] .'&appointment_id='.$data['appointment_id'];
                                      
                                    ?>

<!-- <a href="<?php echo $url; ?>" target="_blank"><button class="btn btn-primary">View Presc</button></a> -->
<?php
                                       $url1 = "../prescription/prescription_whatsapp_pdf.php?patient_id=" . $data['user_id'] . '&presc_id=' . $data['presc_id'] . '&doctor_id=' . $data['presc_doctor_id'] . '&presc_date=' . $data['presc_date'] .'&appointment_id=' . $data['appointment_id'] . '&is_whatsapp=0';
                                                                                            
                                       $url2 = "../prescription/upload_prescription_view.php?patient_id=" . $data['user_id'] . '&presc_id=' . $data['presc_id'] . '&doctor_id=' . $data['presc_doctor_id'] . '&presc_date=' . $data['presc_date'] .'&appointment_id=' . $data['appointment_id'];

                                       $url3 = "../prescription/prescription_view.php?patient_id=" . $data['user_id'] . '&presc_id=' . $data['presc_id'] . '&doctor_id=' . $data['presc_doctor_id'] . '&presc_date=' . $data['presc_date'] .'&appointment_id=' . $data['appointment_id'];
                                      
                                       $user_type_id=$_SESSION['auth_user']['user_type_id'];
                                    $sql_t="select * from user_type where user_type_id='$user_type_id'";
                                    $result_t=mysqli_query($conn,$sql_t);
                                    $fetch_t=mysqli_fetch_assoc($result_t);
                                    $user_type_name=$fetch_t['user_type_name'];

                                       $presc_check = $data['presc_check'];


                                       $output = ''; // Initialize the $output variable
                                       if($user_type_name == 'Pharmacist')
			                        	{
                                            $output .= '<a href="' . $url1 . '" target="_blank"><button class="btn btn-primary">View Presc</button></a>';

                                        }else{
                                            if ($presc_check == 1) {
                                                $output .= '<a href="' . $url2 . '" target="_blank"><button class="btn btn-primary">View Presc</button></a>';
                                            } else {
                                                $output .= '<a href="' . $url3 . '" target="_blank"><button class="btn btn-primary">View Presc</button></a>';
                                            }
                                        }
                                      
                                       
                                       echo $output; // Make sure to output the result
                                       ?>
</td>

                                                                

                                    </div>

                                </td>
                                </tr>
                                
                                <?php $sr++; } ?>
                            </tbody>
                        </table>
                            
<style>
.dataTables_filter label{
font-size: 0px; /* Hide the text by setting font-size to 0 */


}

</style>
<script>
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script>
<script>


</script>


           <?php }else{
            ?>
            <table  class="table table-bordered table-striped display" id="example1">
                            <thead>
                                <tr>
                                    
                                    <th>#</th>
                                    <th>Patient Name</th>
                                    <th>Phone</th>
                                    <th>Visit Time</th>  
                                    <th>Doctor Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6" style="text-align:center;">No data available in table</td>
                                </t>
                            </tbody>
            </table>
            <?php
           }
            }


if(isset($_POST['hospital_observed_refresh_id']))
{

    $hospital_id=$_POST['hospital_observed_refresh_id'];
    // $doctor_id=$_POST['doctor_id'];
    $currentdate=$_POST['currentdate'];

  
    $doctor_ids=$_POST['selectedOptions'];
    if(isset($_SESSION['auth_user']['client_id']))
    {
        $doctor_idstr=implode("','",$doctor_ids);
    }else{
        $doctor_idstr=$doctor_ids;
    }
    $sql='';
    if(!empty($doctor_idstr))
    {
    // $sql="SELECT * FROM patient where doctor_id=$doctor_id ORDER BY patient_id DESC";
    $sql="SELECT * from appointment as a join users as u on u.user_id=a.user_id JOIN patient_prescription as pp on pp.user_id = a.user_id where  a.appointment_status='Observed' and pp.presc_doctor_id in ('$doctor_idstr') and pp.presc_hospital_id='$hospital_id' and a.appointment_id=pp.appointment_id AND DATE(pp.presc_date)='$currentdate' GROUP by pp.presc_date order by pp.presc_date DESC;";
    }else{
        $sql="SELECT * from appointment as a join users as u on u.user_id=a.user_id JOIN patient_prescription as pp on pp.user_id = a.user_id where  a.appointment_status='Observed' and pp.presc_hospital_id='$hospital_id' and a.appointment_id=pp.appointment_id AND DATE(pp.presc_date)='$currentdate' GROUP by pp.presc_date order by pp.presc_date DESC;";
    }
    // echo $sql;
    $result=mysqli_query($conn,$sql);
    $userdata=array();
    while($fetch=mysqli_fetch_assoc($result))
    {
        $userdata[]=$fetch;
    } 
    echo count($userdata);
    

}

?>