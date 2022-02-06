<?php
include_once 'connectivity.php';
if(isset($_POST['save']))
{	 
	
	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	
	 $sql = "INSERT INTO data (name,email,password) VALUES ('$name','$email','$password')";
	 if (mysqli_query($conn, $sql)) {
		header("location:addnewuser.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


$selectquery="select * from data";
$result = mysqli_query($conn,$selectquery);

?>
