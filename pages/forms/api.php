<?php
include_once 'include.php';
if(isset($_POST['submit']))
{  

    $book_no = $_POST['book_no'];
	 $date = $_POST['date'];
	 $complaint_no = $_POST['complaint_no'];
	 $district = $_POST['district'];
	 $taluka = $_POST['taluka'];
	 $police_station = $_POST['police_station'];
	 $sub_police_station = $_POST['complaint_no'];
	 $section = $_POST['section'];
	 $type_of_offence = $_POST['type_of_offence'];
	 $complaint_filer_name = $_POST['complaint_filer_name'];
	 $complaint_filer_address = $_POST['complaint_filer_address'];
	 $victim_name = $_POST['victim_name'];
	 $criminal_name = $_POST['criminal_name'];
	 $criminal_address = $_POST['criminal_address'];
	 $category_and_caste = $_POST['category_and_caste'];
	 $caste_certificate = $_POST['caste_certificate'];
	 $fir = $_POST['fir'];
	 $aadhaar_card = $_POST['aadhaar_card'];
	 $bank_info = $_POST['bank_info'];
	 $charge_sheet = $_POST['charge_sheet'];
	 $medical_report = $_POST['medical_report'];
	 $medical_conformatio_31_report = $_POST['medical_conformatio_31_report'];
	 $discription = $_POST['discription'];

$sql = "INSERT INTO complaint_form (book_no,date,complaint_no,district,taluka,
police_station,sub_police_station,section,type_of_offence,complaint_filer_name,
complaint_filer_address,victim_name,criminal_name,criminal_address,category_and_cast,
cast_certificate,fir,aadhaar_card,bank_info,charge_sheet,medical_report,
medical_conformatio_31_report,discription)
VALUES ('$book_no','$date','$complaint_no','$district', '$taluka', '$police_station','$sub_police_station', '$section', '$type_of_offence','$complaint_filer_name', '$complaint_filer_address', 
'$victim_name','$criminal_name', '$criminal_address', '$category_and_caste','$caste_certificate', '$fir', '$aadhaar_card','$bank_info', '$charge_sheet', '$medical_report','$medical_conformatio_31_report','$discription')";

if (mysqli_query($conn, $sql)) {
	header('Location: governmentform.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
		mysqli_close($conn);
}
?> 