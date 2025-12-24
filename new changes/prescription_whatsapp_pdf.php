<?php
require_once '../vendor/autoload.php'; // Include TCPDF library
include "../database/db.php";
include "../database/auth.php";
error_reporting(0);
use setasign\Fpdi\Tcpdf\Fpdi;

if(isset($_SESSION['auth_user']['doctor_id'])){
    $doctor_id = $_SESSION['auth_user']['doctor_id'];
    $sql_doctor_id = "SELECT doctor_id FROM doctor WHERE doctor_user_id = '$doctor_id'";
    $r_doctor_id = mysqli_query($conn, $sql_doctor_id);
    $fetch_doctor_id = mysqli_fetch_assoc($r_doctor_id);
    $doctor_table_id = $fetch_doctor_id['doctor_id'];

}else{
    $doctor_table_id = $_GET['doctor_id'];
}
// $doctor_id=$_SESSION['auth_user']['doctor_id'];
if(isset($_SESSION['session_hospital_id'])){
    $hospital_id = $_SESSION['session_hospital_id'];
}elseif(isset($_SESSION['auth_user']['client_id'])){
    $hospital_id = $_SESSION['auth_user']['client_id'];
}else{
    $hospital_id = $_GET['hospital_id'];
}
// $hospital_id =  $_SESSION['session_hospital_id'] ;
// define('PDF_MARGIN_LEFT', 10);
// define('PDF_MARGIN_RIGHT', 10);
// define('PDF_MARGIN_TOP', 10);
// define('PDF_MARGIN_BOTTOM', 10);


$sql = "SELECT header_image , footer_image, template_id,enable_watermark, watermark_text, watermark_type, fontsize,opacity,fontcolor, rotate FROM prescription_template WHERE doctor_id = '$doctor_table_id' AND hospital_id = '$hospital_id'";

$result = mysqli_query($conn, $sql);

$fetch = mysqli_fetch_assoc($result);
$watermark_text = $fetch['watermark_text'];
$fontsize = $fetch['fontsize'];
$opacity = $fetch['opacity'];
$fontcolor = $fetch['fontcolor'];
$rotate = $fetch['rotate'];
$header_image = $fetch['header_image'];
$footer_image = $fetch['footer_image'];
$watermark_type = $fetch['watermark_type'];
$enable_watermark = $fetch['enable_watermark'];
$template_id = empty($fetch['template_id']) ? 1 : $fetch['template_id'];

$header_image_path = "../images/prescription_template/" . $header_image;
$footer_image_path = "../images/prescription_template/" . $footer_image;

if(!empty($header_image) && !empty($footer_image_path) && $template_id == 2){
if(file_exists($header_image_path) && file_exists($footer_image_path)){
    $template_id = 2;
}else{
    $template_id = 1;
}
}else{
    $template_id = 1;

}


 $sql = "SELECT * FROM patient_prescription WHERE presc_id='".$_GET['presc_id']."'";
 $result = mysqli_query($conn, $sql);
 $image = mysqli_fetch_assoc($result);
 
 
 $prescription_image = $image['presc_image'];
 $presc_status = $image['presc_check'];
//  echo $presc_status;
 $image_array = explode(',', $prescription_image);


if($template_id == 2){
    $imagePath = "../images/prescription_template/" . $footer_image;
    
    // Use getimagesize() to get the dimensions of the image
    $imageSize = getimagesize($imagePath);
    $imageWidth = $imageSize[0];
    $imageHeight = $imageSize[1];
    $aspect_ratio = $imageHeight / $imageWidth;
    
    $new_height_of_footer = $aspect_ratio * 210;
    }

    if($presc_status != 1)
{
if($template_id == 2 ){
   
class MyPDF extends TCPDF {
    public $header_image;   
    public $footer_image;
    public $watermark_text;
    public $fontsize;
    public $opacity;
    public $fontcolor;
    public $rotate;
    public $watermark_type;
    public $enable_watermark;

    public function Header() {
        

        $image_file = '../images/prescription_template/' . $this->header_image; 
       
        list($width, $height) = getimagesize($image_file);
        $aspect_ratio = $height / $width;
        $new_height = $aspect_ratio * 210; 
    

        $pdfWidth = 210 - PDF_MARGIN_LEFT - PDF_MARGIN_RIGHT;
        $pdfHeight = 297 - PDF_MARGIN_TOP - PDF_MARGIN_BOTTOM;



    $this->Image($image_file, 0, 0, 210, $new_height, '', '', 'T', false, 300, '', false, false, 0, false, false, false);
    if($this->enable_watermark == 1  &&  $this->watermark_type == "text"){
        $this->SetAlpha($this->opacity);
        $this->SetFont('helvetica', '', $this->fontsize);
        
        $hexColor = $this->fontcolor; 
        list($r, $g, $b) = sscanf($hexColor, "#%02x%02x%02x");
        $this->SetTextColor($r, $g, $b);
        
        $centerX = $pdfWidth / 2;
        $centerY = $pdfHeight / 2;
        
        $this->StartTransform();
        
        // Rotate around the center point
        $this->Rotate($this->rotate, $centerX, $centerY);
        
        // Get the width of the text
        $textWidth = $this->GetStringWidth($this->watermark_text);
        // Get the height of the text
        $textHeight = $this->GetFontSize();
        
        // Calculate the position to center the text
        $posX = $centerX - ($textWidth / 2);
        $posY = $centerY - ($textHeight/10);
        
        $this->SetXY($posX, $posY);
        
        $this->Cell($textWidth, $textHeight, $this->watermark_text, 0, 0, 'C');
        
        $this->StopTransform();
    }
    
    if($this->enable_watermark == 1  && $this->watermark_type == "image") {
        
        $this->SetAlpha($this->opacity);
        $image_file_watermark = '../images/prescription_template/' . $this->watermark_text;
        list($original_width, $original_height) = getimagesize($image_file_watermark);
        $aspect_ratio = $original_width / $original_height;
        

    $watermarkWidth = 100;
    $watermarkHeight = $watermarkWidth / $aspect_ratio; // Height adjusted to maintain aspect ratio
    $pdfWidth = $this->getPageWidth() - PDF_MARGIN_LEFT - PDF_MARGIN_RIGHT;
    $pdfHeight = $this->getPageHeight() - PDF_MARGIN_TOP - PDF_MARGIN_BOTTOM;

    $watermarkX = ($pdfWidth - $watermarkWidth) / 2 + PDF_MARGIN_LEFT;
    $watermarkY = ($pdfHeight - $watermarkHeight) / 2 + PDF_MARGIN_TOP;

    $this->Image($image_file_watermark, $watermarkX, $watermarkY, $watermarkWidth, $watermarkHeight, '', '', '', false, 300, '', false, false, 0, true, false, false);
}

    $this->SetTopMargin($new_height+2); 
    $this->SetY(10); // Adjust the value as needed



    }

    // Page footer
    public function Footer() {
        
        $image_file = '../images/prescription_template/' . $this->footer_image; 
        list($width, $height) = getimagesize($image_file);
        
        $aspect_ratio = $height / $width;
        $new_height = $aspect_ratio * 210; 

        $this->SetY(-$new_height); 
        $this->Image($image_file, 0, $this->GetY(), 210, $new_height, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
            
    }
    
    
}

// Create new PDF document
$pdf = new MyPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetMargins(PDF_MARGIN_LEFT, 0.1, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(true, $new_height_of_footer);
}
}
if($template_id == 1 || $presc_status == 1){

    class CustomPDF extends TCPDF {
        // Add a footer method for custom footer content
        public function Footer() {
            // Set the position at 15 mm from the bottom
            $this->SetY(-15);
            // Set font
            $this->SetFont('helvetica', '', 8);
    
            // Add copyright text with a clickable link
            $html = '© ' . date('Y') . ' <b>MedProne</b>. All rights reserved.';
            $this->writeHTMLCell(0, 10, '', '', $html, 0, 1, false, true, 'C');
        }
    }
    
    // $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf = new CustomPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pdf->SetMargins(PDF_MARGIN_LEFT,0.1 , PDF_MARGIN_RIGHT);
    $pdf->SetAutoPageBreak(true, 45);

}
$pdf->header_image = $header_image;
$pdf->footer_image = $footer_image;
$pdf->watermark_text = $watermark_text;
$pdf->fontsize = $fontsize;
$pdf->opacity = $opacity;
$pdf->fontcolor = $fontcolor;
$pdf->rotate = $rotate;
$pdf->watermark_type = $watermark_type;
$pdf->enable_watermark = $enable_watermark;

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetSubject('Your Subject');
$pdf->SetKeywords('TCPDF, PDF, example, test');

// Add a page
$pdf->AddPage();
$pdf->SetFont('times', 'B', 20); // 'B' is for bold, size 16
$pdf->Cell(0, 1, 'Prescription', 0, 1, 'C');
// $pdf->SetY($pdf->GetY() - 4); 

// Include Bootstrap CSS
$pdf->writeHTML('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">');
if (isset($_GET['patient_id'])) {
    $patient_id = $_GET['patient_id'];
    $presc_id = $_GET['presc_id'];
    $doctor_id = $_GET['doctor_id'];
    $presc_date = $_GET['presc_date'];
    $appointment_id = $_GET['appointment_id'];
    
    $sql="Select * from patient_prescription as pp join hospital as h on h.hospital_id=pp.presc_hospital_id join doctor as d on d.doctor_id=pp.presc_doctor_id join users as u on u.user_id=pp.user_id WHERE pp.user_id = $patient_id AND pp.presc_id = $presc_id AND pp.presc_doctor_id = $doctor_id AND pp.presc_date = '$presc_date';";
    $result = mysqli_query($conn, $sql);
    $data = array();
    if (mysqli_num_rows($result) > 0) {
        while ($fetch = mysqli_fetch_assoc($result)) {
            $data[] = $fetch;
        }
    } else {
        echo "error";
    }


    // Set font
    $pdf->SetFont('times', '', 12);

    foreach ($data as $datas) {

        $sql_patient_image_name = "SELECT * FROM users WHERE user_id = '$patient_id'";
        $result_patient_image_name = mysqli_query($conn, $sql_patient_image_name);
        $fetch_patient_image_name = mysqli_fetch_assoc($result_patient_image_name);
        $patient_image_name = $fetch_patient_image_name['image'];
        $patient_image_url = $fetch_patient_image_name['user_image'];


        
$patient_name = $datas['user_username']; 
$currentDateTime = date('Y-m-d_H-i-s');

$patient_name_lower = strtolower($patient_name);
$patient_name_lower_underscored = str_replace(' ', '_', $patient_name_lower);
$filename = $patient_name_lower_underscored . "_prescription" .  $currentDateTime .".pdf";

$pdf->SetTitle($filename);

 

        // echo $datas['hospital_country'];

        $sql_d="select * from doctor as d join users as u on u.user_id = d.doctor_user_id where u.user_id = '".$datas['doctor_user_id']."'";
        $result_d=mysqli_query($conn,$sql_d);
        $fetch_d = mysqli_fetch_assoc($result_d);
        $doctor_name=$fetch_d['user_username'];
        $doctor_phone=$fetch_d['user_phone'];
        $doctor_email=$fetch_d['user_email'];
        $doctor_country_code=$fetch_d['user_country_code'];
     



$hospital_view_array_address = [];
$hospital_view_array_address[] = !empty($datas['hospital_address']) ? $datas['hospital_address'] : '';
$hospital_view_array_address[] = !empty($datas['hospital_location']) ? $datas['hospital_location'] : '';
                                                        

//////////////////////////////country api /////////////////////////////////////////////////////////////////////////////

if(!empty($datas['hospital_country'])){


    $country_iso = $datas['hospital_country'];
    $hospital_view_array_address[] = !empty($datas['hospital_city']) ? $datas['hospital_city'] : '';

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.countrystatecity.in/v1/countries/' . $country_iso . '/states',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HTTPHEADER => array(
        'X-CSCAPI-KEY: Z3JlSnNtUUxReGJJZjV6M1pQcDlrRlNBT0hZdk9yYWRyQXJtMzhVQQ=='
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    $data_state_address = json_decode($response,true);
    
    foreach ($data_state_address as $dataa) {
    
        if($dataa['iso2'] == $datas['hospital_state'] ){
            $state_view_name  =  $dataa['name'];
            $state_view_iso2  =  $dataa['iso2'];
    
        }
    
    }


    $hospital_view_array_address[] = $state_view_name;




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
$data_view_address = json_decode($response,true);

foreach ($data_view_address as $dataa) {

    if($dataa['iso2'] == $datas['hospital_country'] ){
        $country_view_name  = $dataa['name'];
        $country_view_iso2  =  $dataa['iso2'];

    }

} 

$hospital_view_array_address[] = $country_view_name;
$hospital_view_array_address = array_filter($hospital_view_array_address);
$hospital_full_address = implode(", " , $hospital_view_array_address);


}



        $sql_med = "select * from patient_medicine where patient_id=$patient_id and presc_id=$presc_id";
        $result_med = mysqli_query($conn, $sql_med);
        $sql_sal="select * from salutation where salute_id='".$datas['salute_id']."'";
												$result_sal=mysqli_query($conn,$sql_sal);
												$fetch_sal=mysqli_fetch_assoc($result_sal);
												$salute_name=$fetch_sal['salute_name'];

$dateString = $datas['presc_date'];
$date = new DateTime($dateString);

// Format date
$formattedDate = $date->format('d-M-Y h:i A');
$html = '
<table cellpadding="5" cellspacing="0" style="border-collapse: collapse;">
    <tr style="height: 10px;">';
    if($template_id == 1){
    if (!empty($datas['hospital_image_url'])) {
        // Check if the URL ends with an image extension
        $image_extensions = ['jpg', 'jpeg', 'png', 'gif','jfif']; // Add more if needed
        $url_extension = pathinfo($datas['hospital_image_url'], PATHINFO_EXTENSION);
        
        if (in_array(strtolower($url_extension), $image_extensions)) {

              if (@getimagesize($datas['hospital_image_url'])) {
                // Use the hospital image URL if it points to an image file
                $html .= '
                    <td style="width: 13%; height: 73px; vertical-align: middle;">
                        <div style="height: 100px; width: 200px;">
                            <img src="' . $datas['hospital_image_url'] . '" style="width: 250px;" alt="Hospital Image">
                        </div>
                    </td>
                ';
              

            } else {
                // Use the default image if the hospital image URL does not point to an image file
                $html .= '
                    <td style="width: 13%; vertical-align: middle;">
                        <img src="../images/prescription_logo2.png" style="width: 250px;" alt="Default Image">
                    </td>
                ';
            }
        } else {
            // Use the default image if the hospital image URL does not point to an image file
            $html .= '
                <td style="width: 13%; vertical-align: middle;">
                    <img src="../images/prescription_logo2.png" style="width: 250px;" alt="Default Image">
                </td>
            ';
        }
    } else {
        // Use the default image if the hospital image URL is empty
        $html .= '
            <td style="width: 13%; vertical-align: middle;">
                <img src="../images/prescription_logo2.png" style="width: 250px;" alt="Default Image">
            </td>
        ';
    }
    
 
        $html.='<td style="width: 40%;line-height: 0.8;vertical-align: middle;">
        <p style="font-weight: bold; line-height: 0.5;font-family: sans-serif;font-size:12px;">' . $datas['hospital_name'] . '</p>
        <p style="line-height: 0.5;font-family: sans-serif;font-size:10px;">' . $datas['hospital_phone'] . '</p>

        <p style="line-height: 1;font-family: sans-serif;font-size:10px;">' . $hospital_full_address . '</p>
    </td>
    <td style="width: 50%; text-align: right;line-height: 0.8;">
        <p style="font-weight: bold; line-height: 0.5;font-family: sans-serif;font-size:12px;">' . 'Dr. ' . $doctor_name . '</p>
        <p style="line-height: 0.5;font-size:9px;font-family: sans-serif;">' . $datas['specializations'] . '</p>
        <p style="line-height: 0.5;font-size:9px;font-family: sans-serif;">' . $doctor_country_code . ' ' .  $doctor_phone . ' | ' . $doctor_email .  '</p>
    </td>';

    }
        $html.='</tr>
    </table>

    <hr>
    <table style="border-collapse: collapse; width: 100%;">
    <tr style="height: 30px;">';
    
    $image_url = $datas['user_image'];
    $image_url = str_replace(' ', '%20', $image_url);
    if(!empty($image_url)){
    $headers = @get_headers($image_url);
}else{
        $headers = '';

    }

    // if(strpos($datas['image_url'], $patient_image_name) !== false)
    if ($headers && strpos($headers[0], '200') !== false ) 
    
    
    {

        

        $dob = $datas['user_dob'];
        $patient_id = $datas['user_id'];
        
        // Function to calculate age based on date of birth
        function calculateAge($dob) {
            if (strpos($dob, '-') !== false) {
                // Case: Full Date of Birth (e.g., "24-10-2022")
                $today = new DateTime();
                $birthDate = new DateTime($dob);
                $age = $today->diff($birthDate);
                $years = $age->y;
                $months = $age->m;
                return ($years > 0 ? "{$years} Year" . ($years !== 1 ? "s" : "") : "") .
                       ($months > 0 ? " {$months} Month" . ($months !== 1 ? "s" : "") : "");
            } elseif (strpos($dob, '/') !== false) {
                // Case: Age format "24/10" (24 years, 10 months) or "24/" (only 24 years)
                $parts = explode('/', $dob);
                $years = isset($parts[0]) ? trim($parts[0]) : 0;
                $months = isset($parts[1]) && trim($parts[1]) !== '' ? trim($parts[1]) : 0; // Default months to 0 if missing
        
                $birthDate = new DateTime("-{$years} Years -{$months} Months");
                $age = (new DateTime())->diff($birthDate);
                return ($age->y > 0 ? "{$age->y} Year" . ($age->y !== 1 ? "s" : "") : "") .
                       ($age->m > 0 ? " {$age->m} Month" . ($age->m !== 1 ? "s" : "") : "");
            } else {
                // Case: Only years provided (e.g., "24")
                return "{$dob} Year" . ($dob !== "1" ? "s" : "");
            }
        }
        
        
        $patient_age = calculateAge($dob);

        $presc_follow_up = !empty($datas['presc_follow_up']) 
        ? date("d-M-Y", strtotime($datas['presc_follow_up'])) 
        : '';
                $datas['user_gender'] = ucfirst($datas['user_gender']);
        
    $html.='<td rowspan="3" style="width:53px;vertical-align: middle;" >
    <img src="'.$datas['user_image'].'" style="line-height:0.02;width: 67px;"  alt="Image" >
    </td>
    <td style="width: 50%; line-height: 1.3;">
            <span style="font-weight: bold;font-family: sans-serif;font-size:10px;">Name: ' .$salute_name." ". $datas['user_username'] . '</span><span style="font-family: sans-serif;font-size:10px;"> (<span style="font-weight: lighter;font-family: sans-serif;font-size:10px; id="patient_age"">' . $datas['user_gender'] . ', ' . $patient_age . '</span>)</span>
        </td>
        <td style="width: 42%; text-align: right; line-height: 1.3;">

            <span style="font-weight: bold;font-family: sans-serif;font-size:10px;padding-left:10px;">Contact: </span><span style="font-size: 10px;font-family: sans-serif;">' . $datas['user_country_code'] . ' ' . $datas['user_phone'] . '</span>
            
        </td>
    </tr>
    <tr style="height: 30px;">
        <td style="width: 40%; line-height: 1.3;">
            <span style="font-weight: bold;font-family: sans-serif;font-size:10px;">Date & Time: </span><span style="font-size:10px;font-family: sans-serif;">' . $formattedDate . '</span>
        </td>
        <td style="width: 50%; text-align: right; line-height: 1.3;">
            <span style="font-weight: bold;font-family: sans-serif;font-size:10px;">Patient ID: </span><span style="font-size:10px;font-family: sans-serif;">' . $datas['user_id'] . '</span>
        </td>
    </tr>

    
    <tr style="height: 30px;">
    <td style="width: 50%; line-height: 1.3;">
        <span style="font-weight: bold;font-family: sans-serif;font-size:10px;">Follow Up: </span><span style="font-size:10px;font-family: sans-serif;">' . $presc_follow_up.' '. $datas['presc_time'] . '</span>
    </td>
    <td style="width: 40%; text-align: right; line-height: 1.3;">
        <span style="font-weight: bold;font-family: sans-serif;font-size:10px;">Appointment ID: </span><span style="font-size:10px;">' . $appointment_id . '</span>
    </td>
</tr>
    </table>
    ';
   
    }else{
       
// Assume $data_patient['patient_dob'] and $data_patient['patient_id'] are already set
$dob = $datas['user_dob'];
$patient_id = $datas['user_id'];

// Function to calculate age based on date of birth
function calculateAge($dob) {
    if (strpos($dob, '-') !== false) {
        // Case for DOB in date format (YYYY-MM-DD)
        $today = new DateTime();
        $birthDate = new DateTime($dob);
        $age = $today->diff($birthDate);
        $years = $age->y;
        $months = $age->m;
        
        if ($years == 0) {
            return "{$months} Month" . ($months !== 1 ? "s" : "");
        } else {
            $yearString = "{$years} Year" . ($years !== 1 ? "s" : "");
            $monthString = $months > 0 ? " {$months} Month" . ($months !== 1 ? "s" : "") : "";
            return $yearString . $monthString;
        }
    } elseif (strpos($dob, '/') !== false) {
        // Case for DOB in "Y/M" format
        list($years, $months) = explode('/', $dob);
        $years = (int)$years;
        $months = (int)$months;
        
        // Convert "Y/M" format to a DateTime object
        $birthDate = new DateTime("-{$years} Years -{$months} Months");
        $today = new DateTime();
        $age = $today->diff($birthDate);
        $years = $age->y;
        $months = $age->m;
        
        if ($years == 0) {
            return "{$months} Month" . ($months !== 1 ? "s" : "");
        } else {
            $yearString = "{$years} Year" . ($years !== 1 ? "s" : "");
            $monthString = $months > 0 ? " {$months} Month" . ($months !== 1 ? "s" : "") : "";
            return $yearString . $monthString;
        }
    } else {
        // If DOB is not in a recognized format, return as is (assume it's already an age or a string)
        return $dob . ' Year';
    }
}  

$patient_age = calculateAge($dob);


$presc_follow_up = !empty($datas['presc_follow_up']) 
? date("d-M-Y", strtotime($datas['presc_follow_up'])) 
: '';

        $html.='
        <td style="width: 50%; line-height: 1.3;">
                <span style="font-weight: bold;font-family: sans-serif;font-size:10px;">Name: ' .$salute_name." ". $datas['user_username'] . '</span><span style="font-family: sans-serif;font-size:10px;"> (<span style="font-weight: lighter;font-family: sans-serif;font-size:10px; id="patient_age"">' . $datas['user_gender'] . ', ' .$patient_age  . '</span>)</span>
            </td>
            <td style="width: 50%; text-align: right;  line-height: 1.3;">
                <span style="font-weight: bold;font-family: sans-serif;font-size:10px;">Contact: </span><span style="font-size: 10px;font-family: sans-serif;">' . $datas['user_country_code'] . ' ' . $datas['user_phone'] . '</span>
            </td>
        </tr>
        <tr style="height: 30px;">
            <td style="width: 50%; line-height: 1.5;">
                <span style="font-weight: bold;font-family: sans-serif;font-size:10px;">Date & Time: </span><span style="font-size:10px;font-family: sans-serif;">' . $formattedDate . '</span>
            </td>
            <td style="width: 50%; text-align: right; line-height: 1.5;">
                <span style="font-weight: bold;font-family: sans-serif;font-size:10px;">Patient ID: </span><span style="font-size:10px;font-family: sans-serif;">' . $datas['user_id'] . '</span>
            </td>
        </tr>
        <tr style="height: 30px;">
        <td style="width: 50%; line-height: 1.5;">
            <span style="font-weight: bold;font-family: sans-serif;font-size:10px;">Follow Up: </span><span style="font-size:10px;font-family: sans-serif;">' . $presc_follow_up.' '.$datas['presc_time'] . '</span>
        </td>
        <td style="width: 50%; text-align: right; line-height: 1.5;">
            <span style="font-weight: bold;font-family: sans-serif;font-size:10px;">Appointment ID: </span><span style="font-size:10px;font-family: sans-serif;">' . $appointment_id . '</span>
        </td>
    </tr>
        </table>';
        
    };
   $html.="<hr>";
    if(!empty($datas['presc_chiefcomplaint']))
    {
$html.='&nbsp;&nbsp;&nbsp;<label style="font-weight: bold;font-size:10px;font-family: sans-serif;line-height:3;">  Chief Complaint:</label>
<ul style="line-height:0.7;">';
    $chiefcomplaint = explode(", ", $datas['presc_chiefcomplaint']);
    foreach ($chiefcomplaint as $chiefcomplaintvalue) {
        $html .= '<li style="line-height:1;font-family: sans-serif;font-size:10px;">' . $chiefcomplaintvalue . '</li>';

    }
$html .= '</ul>';
}
       
    if(!empty($datas['presc_examination']))
    {
    $html.='&nbsp;&nbsp;&nbsp;<label style="font-weight: bold;line-height: 1;font-family: sans-serif;font-size:10px;">  EXAMINATION NOTES:</label>
    <ul style="line-height: 1">
        <li style="font-family: sans-serif;font-size:10px;">' . (empty($datas['presc_examination']) ? 'No - Examination For ' . $datas['patient_name'] : $datas['presc_examination']) . '</li>
    </ul>';
    }
if( !empty($datas['presc_temperature']) || !empty($datas['presc_pulse']) || !empty($datas['presc_respiratory']) || !empty($datas['presc_bp']) || !empty($datas['presc_spo2']) || !empty($datas['presc_height']) || !empty($datas['presc_weight']))
{
    $html.='&nbsp;&nbsp;&nbsp;<label style="font-weight: bold;line-height: 1;font-family: sans-serif;font-size:10px;">  Vitals:</label>';
}
$html.='<ul style="line-height: 0.7">';
    if(!empty($datas['presc_temperature']))
    {
    $html.='
    
        <li style="line-height:1;font-family: sans-serif;font-size:10px;">' .'Temperature: '.$datas['presc_temperature'].' F'. '</li>
    ';
    }
    if(!empty($datas['presc_pulse']))
    {
    $html.='
 
        <li style="line-height:1;font-family: sans-serif;font-size:10px;">' .'Pulse: '.$datas['presc_pulse'].' bpm'. '</li>
   ';
    }
    if(!empty($datas['presc_respiratory']))
    {
    $html.='
  
        <li style="line-height:1;font-family: sans-serif;font-size:10px;">' .'Respiratory Rate: '.$datas['presc_respiratory'].' rpm'. '</li>
    ';
    }
    if(!empty($datas['presc_bp']))
    {
    $html.='
    
        <li style="line-height:1;font-family: sans-serif;font-size:10px;">' .'Blood Pressure: '.$datas['presc_bp'].' mmhg'. '</li>
    ';
    }
    if(!empty($datas['presc_spo2']))
    {
    $html.='
   
        <li style="line-height:1;font-family: sans-serif;font-size:10px;">' .'Spo2: '.$datas['presc_spo2'].' %'. '</li>
    ';
    }
    if(!empty($datas['presc_height']))
    {
    $html.='
   
        <li style="line-height:1;font-family: sans-serif;font-size:10px;">' .'Height: '.$datas['presc_height'].' cms'. '</li>
    ';
    }
    if(!empty($datas['presc_weight']))
    {
    $html.='
        <li style="line-height:1;font-family: sans-serif;font-size:10px;">' .'Weight: '.$datas['presc_weight'].' kgs'. '</li>
    ';
    }
    $html.="</ul>";

    if(!empty($datas['presc_diagnosis']))
    {
    $html.='&nbsp;&nbsp;&nbsp;<label style="font-weight: bold;line-height:1;font-family: sans-serif;font-size:10px;">  DIAGNOSIS:</label><span style="font-family: sans-serif;font-size:10px;"> ' . (empty($datas['presc_diagnosis']) ? 'No - Diagnosis ' : $datas['presc_diagnosis']) . '</span>';
    }
    
    if(mysqli_num_rows($result_med) > 0)
    {
    $html.='<br>
    <br style="line-height:0.9">
    <img src="../images/prescription.png" alt="Image" style="width: 20px;display:block;line-height: 2.5">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    
    $html.='<table  cellpadding="1" cellspacing="0" border="1" style="width: 100%;border-color: #ebedf0;" class="table table-striped">
    <tr style="background-color: #edeff2;font-family: sans-serif;">
        <th style="width: 4%;font-size: 10px;">#</th>
        <th style="width: 48%;font-size: 10px;">Medicine Name </th>
        <th style="width: 48%;font-size: 10px;">Regime and Instruction</th>
    </tr>';

        // Loop through medicine data
        $sr = 1;
        while ($fetch_med = mysqli_fetch_assoc($result_med)) {
            $medicine_name = $fetch_med['medicine_name'];
            $sql_drug_name = "SELECT drug_name FROM medicine WHERE medicine_name= '$medicine_name'";
            $result_drug_name = mysqli_query($conn, $sql_drug_name);
            $fetch_drug_name = mysqli_fetch_assoc($result_drug_name);

            if(empty($fetch_drug_name['drug_name'])){

                $drug_name = "";
                }
                else{
                $drug_name = " ( " . $fetch_drug_name['drug_name'] . " )";

            }
            if(empty($fetch_med['medicine_instuction'])){
            $med_instruction = " ";
            }
            else{
                $med_instruction = " ( " . $fetch_med['medicine_instuction'] . " )";
                
                }
                
            $html .= '
        <tr style="font-family: sans-serif;">
            <td style="font-size: 9px;">' . $sr . '</td>
            <td style="vertical-align:middle;font-size: 9px;">' . $fetch_med['medicine_name']  . $drug_name  . '</td>
            <td style="font-size: 9px;">' . $fetch_med['medicine_frequency'] . ' (' . '<span>' . $fetch_med['medicine_timing'] . ' For ' . $fetch_med['medicine_duration'] . ' ' . $fetch_med['medicine_day'] . ')</span><br> ' . $med_instruction . '</td>
        </tr>';
            $sr++;
        }

        $html .= '
    </table>';
    }
       $html.='<br>
        <br>';
        if(!empty($datas['presc_procedure']))
        {
    $html.='&nbsp;&nbsp;&nbsp;<label style="font-weight: bold;font-size:10px;font-family: sans-serif;">  PROCEDURE:</label>
    <ul style="line-height:0.7">';
        $procedure = explode(", ", $datas['presc_procedure']);
        foreach ($procedure as $procedurevalue) {
            $html .= '<li style="line-height:1;font-family: sans-serif;font-size:10px;">' . $procedurevalue . '</li>';
        }
    $html .= '</ul>';
    }
    
        if(!empty($datas['presc_investigation']))
        {
    $html.='&nbsp;&nbsp;&nbsp;<label style="font-weight: bold;font-family: sans-serif;font-size:10px; line-height:0.7;">  INVESTIGATIONS:</label>
    <ul style="display: flex !important; flex-wrap: wrap !important;line-height:0.7;font-family: sans-serif;">';
        $advice = explode(", ", $datas['presc_investigation']);
        foreach ($advice as $advicevalue) { 
            $html .= '<li style="line-height:1;font-size:10px;">' . $advicevalue . '</li>';
        }
    $html .= '</ul>';
    }

        if(!empty($datas['presc_advice']))
        {
    $html.='&nbsp;&nbsp;&nbsp;<label style="font-weight: bold;font-size:10px;font-family: sans-serif;line-height:1;">  ADVICE:</label>
    <ul style="line-height:0.7;">';
        $advice = explode(", ", $datas['presc_advice']);
        foreach ($advice as $advicevalue) {
            $html .= '<li style="line-height:1;font-family: sans-serif;font-size:10px;">' . $advicevalue . '</li>';
        }
        $html .= '</ul>';
    }
        
       
    $html .= '<table >
    <tr style="height: 10px; font-family: sans-serif;">
        <td style="width: 70%; vertical-align: middle;"></td>
        <td style="width: 30%;text-align:center;">';

if ($datas['enable_signature'] == 1) {
    $html .= '<div style="text-align: center; margin-right: 0;line-height:0.1;">
            <img src="' . $datas['doctor_signature'] . '" alt="Image" style="height: 60px;text-align: right; display: inline-block;"><br>
        </div>';
}

$html .= '<p style="font-weight: bold; line-height: 1.2; font-size: 9px;">' . 'Dr. ' . $doctor_name . '</p>
        </td>   
    </tr>
</table>';


// echo $html;

    }


    $sql_p="select * from users where user_id='$patient_id'";
    $result_p=mysqli_query($conn,$sql_p);
    $fetch_p=mysqli_fetch_assoc($result_p);
    $patient_name=$fetch_p['user_username'];

    if ($presc_status == 1) {
        $formattedPatientName = str_replace(' ', '_', $patient_name);
        
        $pdf = new Fpdi(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetMargins(0, 0, 0, true); // Reset all margins
        $pdf->SetAutoPageBreak(false, 0); // Disable auto page break
        $pdf->setPrintHeader(false); // Disable header
        $pdf->setPrintFooter(false); // Disable footer
    
        $image_array2 = array_filter($image_array, function($value) {
            return !empty($value);
        });
        $base_dir = $_SERVER['DOCUMENT_ROOT'] . '/images/prescription_upload/'.$formattedPatientName.'_'.$appointment_id.'/';
    
        foreach ($image_array2 as $img_url) {
            $full_path = $base_dir . basename($img_url);
            // $full_path = $img_url;
            error_log("Processing file: " . $full_path);
    
            $file_ext = pathinfo($full_path, PATHINFO_EXTENSION);
    
            if ($file_ext === 'pdf') {
                if (file_exists($full_path)) {
                    $pageCount = $pdf->setSourceFile($full_path);
                    for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                        $tplId = $pdf->importPage($pageNo);
                        $size = $pdf->getTemplateSize($tplId);
    
                        $pdf->AddPage($size['orientation'], array($size['width'], $size['height']));
                        $pdf->useTemplate($tplId);
                    }
                } else {
                    error_log("PDF file not found: " . $full_path);
                }
            } else {
                if ($full_path) {
                    $imageSize = getimagesize($full_path);
                    if ($imageSize !== false) {
                        $pdf->AddPage();
                        $imageWidth = $imageSize[0];
                        $imageHeight = $imageSize[1];
    
                        // Fit the image to page size while maintaining aspect ratio
                        $pdfPageWidth = $pdf->getPageWidth();
                        $pdfPageHeight = $pdf->getPageHeight();
                        $aspectRatio = $imageWidth / $imageHeight;
    
                        // Determine the size of the image on the PDF page
                        if ($pdfPageWidth / $pdfPageHeight > $aspectRatio) {
                            $imgHeight = $pdfPageHeight;
                            $imgWidth = $imgHeight * $aspectRatio;
                        } else {
                            $imgWidth = $pdfPageWidth;
                            $imgHeight = $imgWidth / $aspectRatio;
                        }
    
                        // Center the image on the page
                        $x = ($pdfPageWidth - $imgWidth) / 2;
                        $y = ($pdfPageHeight - $imgHeight) / 2;
    
                        $pdf->Image($full_path, $x, $y, $imgWidth, $imgHeight, '', '', '', true, 300, '', false, false, 0);
                    } else {
                        error_log("Image size could not be determined: " . $full_path);
                    }
                } else {
                    error_log("Image file not found: " . $full_path);
                }
            }
        }
    }
    
else{
    $pdf->writeHTML($html, true, false, true, false, '');

}  
    // Check if content has been added to PDF
    if ($pdf->getNumPages() === 0) {
        error_log("No content added to PDF.");
    }

    $tempFile = tempnam(sys_get_temp_dir(), 'pdf_');
if($_GET['is_whatsapp'] == 1){
  
 $pdf->Output($tempFile, 'F');
 
 $currentDateTime = date('Y-m-d_H-i-s');

$patient_name = $datas['user_username']; 

$patient_name_lower = strtolower($patient_name);
$patient_name_lower_underscored = str_replace(' ', '_', $patient_name_lower);


 
 $filename = $patient_name_lower_underscored . "_prescription" .  $currentDateTime .".pdf";
 $directory = "../prescription_pdf/" . $filename;
$patient_phone = $datas['user_country_code'] . ' ' .$datas['user_phone'];




 if (rename($tempFile, $directory)) {
    chmod($directory, 0644); 

 } 

 if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
$link = "https";
else
  $link = "http";
 
$link .= "://";
 
$link .= $_SERVER['HTTP_HOST'];
 


$prescription_url = $link."/prescription_pdf/" . $filename;

$params=array(
    'token' => 'loqnkcskgm5zd0cd',
    'to' => $patient_phone,
    'filename' => $filename,
    'document' => $prescription_url,
    'caption' => 'Prescription'
    );
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.ultramsg.com/instance85287/messages/document",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => http_build_query($params),
    CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded"
    ),
    ));

    // print_r($params);

    $response = curl_exec($curl);
    $err = curl_error($curl);


    curl_close($curl);

    if ($err) {
    echo "cURL Error #:" . $err;
    } else {
    echo $response;
    }

}else{



    $currentDateTime = date('Y-m-d_H-i-s');

$patient_name = $datas['user_username']; 

$patient_name_lower = strtolower($patient_name);
$patient_name_lower_underscored = str_replace(' ', '_', $patient_name_lower);


 
 $filename = $patient_name_lower_underscored . "_prescription" .  $currentDateTime .".pdf";
    
// Get the PDF content
$pdf_content = $pdf->Output('', 'S');


// Set headers to force download
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename .'.pdf"');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Content-Length: ' . strlen($pdf_content));
echo $pdf_content;

}

    // if (file_exists($directory)) {

    //     if (unlink($directory)) {
    //         echo "File '$filename' deleted successfully.";
    //     } else {
    //         echo "Error deleting file '$filename'.";
    //     }
    // }
 
//  // Output the file content
 readfile($tempFile);

 // Delete the temporary file
//  unlink($tempFile);
 $success="Prescription Send On Whatsapp";
 if($_GET['is_whatsapp'] == 1){
 if ($presc_status != 1 ) {
   

    header('location:../prescription/prescription_view.php?patient_id='.$patient_id.'&presc_id=' . $presc_id . '&doctor_id=' . $doctor_id . '&presc_date=' . $presc_date .'&appointment_id='.$_GET['appointment_id'] . '&success='. $success);

 }else{
    header('location:../prescription/upload_prescription_view.php?patient_id='.$patient_id.'&presc_id=' . $presc_id . '&doctor_id=' . $doctor_id . '&presc_date=' . $presc_date .'&appointment_id='.$_GET['appointment_id'] . '&success='. $success);
 }
 }

}
?>