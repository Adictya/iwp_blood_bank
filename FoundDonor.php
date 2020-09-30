<?php
	include 'header.php';
	  $don_city = $_POST['Donorcity'];
	  $don_Bgroup = $_POST['BloodGroup'];
	  $don_RhFactor = $_POST['Rh_Factor'];
	 $conn = mysqli_connect("localhost","root","","iwp_blood") or die("Connection Failed");
	 $sql = "SELECT * FROM `donor` WHERE `City` LIKE '${don_city}' AND `Blood Type` LIKE '${don_Bgroup}' AND `Rh Factor` LIKE '${don_RhFactor}'";
	 $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");
?>


		<div class="container">
			<div class="Register">
<table cellpadding="7px">
	<thead>
		<th>Donor ID</th>
		<th>Name</th>
		<th>City</th>
		<th>Phone Number</th>
		<th>Blood Type</th>
		<th>Rh Factor</th>
		<th>Address</th>
	</thead>
	<tbody>
<?php
	 if(mysqli_num_rows($result)>0){

		 while($row = mysqli_fetch_assoc($result)){


?>
	<tr>
	<td><?php echo $row['Donor_id'] ?></td>
	<td><?php echo $row['Name'] ?></td>
	<td><?php echo $row['City'] ?></td>
	<td><?php echo $row['Phone Number'] ?></td>
	<td><?php echo $row['Blood Type'] ?></td>
	<td><?php echo $row['Rh Factor'] ?></td>
	<td><?php echo $row['Address'] ?></td>
	</tr>
<?php


		 }}
?>
</tbody>
</table>
</div>
</div>
