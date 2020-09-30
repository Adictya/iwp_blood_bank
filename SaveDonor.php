<?php
	 $don_name = $_POST['name'];
	 $don_city = $_POST['Donorcity'];
	 $don_number = $_POST['phoneNumber'];
	 $don_Bgroup = $_POST['BloodGroup'];
	 $don_RhFactor = $_POST['Rh_Factor'];
	 if($_POST['Address']){
		$don_Address = $_POST['Address'];
	 }
	 else
		 $don_Address = NULL;
	$conn = mysqli_connect("localhost","root","","iwp_blood") or die("Connection Failed");
	$sql = "INSERT INTO `donor` (`Donor_id`, `Name`, `City`, `Phone Number`, `Blood Type`, `Rh Factor`, `Address`) VALUES (NULL, '{$don_name}', '{$don_city}', '{$don_number}', '{$don_Bgroup}', '{$don_RhFactor}', '{$don_Address}') ";
	$result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

	 header(
		 "Location: http://localhost/iwp_theory/homepage.php"
	 );

	 mysqli_close($conn);
?>
