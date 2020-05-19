<?php
print '
<!DOCTYPE html>
<html lang="en">
<head>
	  <title>Vremenska prognoza - Zagreb</title>
	 
	
	</head>
	<body>
	<center>
		
			<p>https://www.metaweather.com/api/location/851128/2020/4/10/</p>
				<h4> Prognoza za Zagreb</h4>
				<br>Datum: 10.04.2020.</p>';
			# DOCUMENTATION: https://www.metaweather.com/api/
			#$url = 'https://www.metaweather.com/api/location/search/?query=zag';
			$url = 'https://www.metaweather.com/api/location/851128/2020/4/10/';
			
			$json = file_get_contents($url);
			$json_data = json_decode($json,true);
			
			foreach($json_data as $key => $value) { 
			print '
				<p><img style="width: 100px;" src="https://www.metaweather.com/static/img/weather/' . $json_data[$key]["weather_state_abbr"] . '.svg" alt="' . $json_data[$key]["weather_state_abbr"] . '"></p>
				<p><strong>weather_state_name:</strong> ' . $json_data[$key]["weather_state_name"] . '</p>
				<p><strong>wind_direction_compass:</strong> ' . $json_data[$key]["wind_direction_compass"] . '</p>
				<p><strong>created:</strong> ' . $json_data[$key]["created"] . '</p>
				<p><strong>applicable_date:</strong> ' . $json_data[$key]["applicable_date"] . '</p>
				<p><strong>min_temp:</strong> ' . $json_data[$key]["min_temp"] . '</p>
				<p><strong>max_temp:</strong> ' . $json_data[$key]["max_temp"] . '</p>
				<p><strong>the_temp:</strong> ' . $json_data[$key]["the_temp"] . '</p>
				<p><strong>wind_speed:</strong> ' . $json_data[$key]["wind_speed"] . '</p>
				<p><strong>wind_direction:</strong> ' . $json_data[$key]["wind_direction"] . '</p>
				<p><strong>air_pressure:</strong> ' . $json_data[$key]["air_pressure"] . '</p>
				<p><strong>humidity:</strong> ' . $json_data[$key]["humidity"] . '</p>
				<p><strong>visibility:</strong> ' . $json_data[$key]["visibility"] . '</p>
				<p><strong>predictability:</strong> ' . $json_data[$key]["predictability"] . '</p>
				<hr>';
			}
		print '
		</div>
		<center>
	</body>
</html>';
?>