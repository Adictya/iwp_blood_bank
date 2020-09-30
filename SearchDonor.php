<?php
		include 'header.php';
?>

<div class="container">
			<div class="Register">
				<div class="loginHeading">
					Enter Donor Preference
				</div>

				<form method="POST" action="FoundDonor.php">
					<div class="inputLegend">
						Select your City
					</div>
					<select name="Donorcity">
						<option value="Chennai">Chennai</option>
						<option value="Tambaram">Tambaram</option>
						<option value="Adyar">Adyar</option>
						<option value="Velachery">Ambattur</option>
						<option value="Avadi">Avadi</option>
						<option value="Perambur">Perambur</option>
					</select>
					<div class="inputLegend">
						Select your Blood Group
					</div>
					<select name="BloodGroup">
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="AB">AB</option>
						<option value="O">O</option>
					</select>
					<div class="inputLegend">
						Select Rh Factor
					</div>
					<input
						type="radio"
						value="POSITIVE"
						class="checkinput"
						name="Rh_Factor"
						id="radio2"
					/>
					<label for="radio2">POSITIVE</label><br />
					<input
						type="radio"
						value="NEGATIVE"
						class="checkinput"
						name="Rh_Factor"
						id="radio3"
					/>
					<label for="radio3">NEGATIVE</label><br />
					<input type="submit" class="submitButton" value="Find Donor" />
				</form>
			</div>
</div>
