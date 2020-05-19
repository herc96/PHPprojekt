<?php 



	print '
	<center><h1>Kontakt obrazac</h1>
	<div id="contact">
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2769.3234898992832!2d15.73891193446205!3d46.04464547828997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765955513c23769%3A0xb620a7e88010b2b6!2sUl.%20Augusta%20%C5%A0enoe%203%2C%2049290%2C%20Klanjec!5e0!3m2!1shr!2shr!4v1589571774244!5m2!1shr!2shr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 		
	<form action="http://work2.eburza.hr/pwa/responsive-page/html/send-contact.php" id="contact_form" name="contact_form" method="POST">
		<label for="fname">Ime *</label>
		<input type="text" id="fname" name="firstname" placeholder="Vaše ime.." required>
			
		<label for="lname">Prezime *</label>
		<input type="text" id="lname" name="lastname" placeholder="Vaše prezime..." required>
				
		<label for="email">Vaš email *</label>
		<input type="email" id="email" name="email" placeholder="Vaš email..." required>

		<label for="country">Država</label>
		<select id="country" name="country">';
		
		$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'].'"';
					
					if ($row['country_code']=="HR") print ' selected';
					
					print '>' . $row['country_name'] . '</option>';
				}
		print'
		</select>

		<label for="subject">Subjekt</label>
		<textarea id="subject" name="subject" placeholder="Upišite nešto..." style="height:200px"></textarea>
		<input type="submit" value="Pošalji">
		</form>
	</div></center>';
?>
