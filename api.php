<?php
include_once 'include.php';
if(isset($_POST['save']))
{	 
	 $complaint_no = $_POST['complaint_no'];
	 $sql = "INSERT INTO complaints (complaint_no)
	 VALUES ('$complaint_no')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>