<html style="width: 100%; height: 100%; border: 0; margin: 0">
	
	<head>
		<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>The Web</title>
		<link rel="stylesheet" href="css/global.css" type="text/css">
		<link rel="stylesheet" href="css/display_data.css" type="text/css">
	</head>
	
	
	<body style="width: 100%; height: 100%; border: 0; margin: 0">
		<table style="width: 100%; height: 100%; border-spacing: 0; border: 3px none blue; background-color: #3F1111; color: silver;">
			
			<!-- Header -->
			<tr>
			  <td style="width: 10%; border: 1px none black; height: 10%; background-color: #2a0000; color: #C0C0C0; font-size: 0px;">&nbsp;</td>
			  <td colspan="2" style="width: 45%; border: 2px none orange; height: 80px; background-color: #2a0000; color: #C0C0C0; font-size: 60px;">Search Results</td>
			</tr>
			
			<!-- Body -->
			<tr>								
		
				<!-- sidebar -->
				<td valign="top" style="width: 10%; border: 1px solid black; height: 80%; background-color: #3F0000; color: #C0C0C0;"><br>
					<a href="index.html" style="text-decoration : none; color : silver;">Home</a><br>
					<a href="new_search.php" style="text-decoration : none; color : silver;">New Search</a><br>
					<a><u>Display Data</u></a><br>
				</td>
					
				<!-- body left -->
				<td style="width: 70%; border: 1px none white; height: 100%; position:fixed  background-color: #3F0000; color: #C0C0C0;">
				
					<!-- Header Column -->
					<table style="width:99%; height: 5%; border: 1px solid black; background-color: #2a0000; color: white;">
						<tr>
							
							<td style="border:1px solid black;width:33%">StartTime</td> 
							<td style="border:1px solid black;width:33%">EndTime</td>
							<td style="border:1px solid black;width:33%">EventType</td>
							
						</tr>
					</table>
					
					<!-- Data Columns -->
					<div style="width:100%; height:95%; position:fixed   border: 1px solid white; background-color: #3F0000;">
						<div style="width:70%; overflow-y:scroll; height:75%; position:fixed; background-color: #3F0000; border: 1px solid black;">
							<?php

								$host = "localhost";
								$username = "davidm";
								$password = "password";
								$dbname = "solar";

								// Create connection
								$conn = new mysqli($host, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								} 

								
								$channel_number = $_GET['channel'];  					//Radial: Channel Number
								//echo "Channel Number = $channel_number<br><br>";

								$selected_measurement = $_GET['measurement'];  			//Radial: Measurement Type
								//echo "Selected measurement = $selected_measurement<br>";

								$start_date = $_GET['start'];  							//Date: Start Time (mm/dd/yyyy)
								//echo "Start time = $start_date<br>";

								$start_hour = $_GET['hour_start']; 		 				//Integer: Hour
								//echo "Start hour = $start_hour<br>";

								$start_minute = $_GET['minute_start'];  				//Integer: Minute
								//echo "Start minute = $start_minute<br><br>";

								$end_date = $_GET['end'];  								//Date: End Time (mm/dd/yyy)
								//echo "End time = $end_date<br>";

								$end_hour = $_GET['hour_end'];  						//Integer: Hour
								//echo "End hour = $end_hour<br>";

								$end_minute = $_GET['minute_end'];  					//Integer: Minute
								//echo "End minute = $end_minute<br><br>";
								
								
								

								if ($selected_channel == 193)
								{
									$start_hour_min = $start_hour . ":" . $start_minute . ":" . "8";
									$end_hour_min = $end_hour . ":" . $end_minute . ":" . "8";			//hour minute second
									$start_date_min = $start_date;
									$end_date_min = $end_date;
								}
								else
								{
									$start_hour_min = $start_hour . ":" . $start_minute . ":" . "11";
									$end_hour_min = $end_hour . ":" . $end_minute . ":" . "11";	
									$start_date_min = $start_date;
									$end_date_min = $end_date;
								}
																
								
								$final_start_time = $start_date . " " . $start_hour_min;
								$final_end_time = $end_date . " " . $end_hour_min;
								
								
								
								
								
								
								
								$active_region = 0; 
								$coronal_hole = 0;
								$filament = 0;
								$flare = 0;
								$sigmoid = 0;
								$sunspot = 0;
								
								$event_string = "";
								
								if (isset($_GET['event_ar'])) {							// Boolean: Shown Events
									$active_region = 1;
									$event_string = $event_string . ",ar";
								}
								if (isset($_GET['event_ch'])) {
									$coronal_hole = 1;
									$event_string = $event_string . ",ch";
								}
								if (isset($_GET['event_fi'])) {
									$filament = 1;
									$event_string = $event_string . ",fi";
								}
								if (isset($_GET['event_fl'])) {
									$flare = 1;
									$event_string = $event_string . ",fl";
								}
								if (isset($_GET['event_sg'])) {
									$sigmoid = 1;
									$event_string = $event_string . ",sg";
								}
								if (isset($_GET['event_ss'])) {
									$sunspot = 1;
									$event_string = $event_string . ",ss";
								}
								
								$event_string= ltrim ($event_string, ',');
								
								
								$sql_where = "";
								$sql_or = FALSE;
								if($active_region == 1 or $coronal_hole == 1 or $filament == 1 or $flare == 1 or $sigmoid == 1 or $sunspot == 1)
								{
									
									$sql_where = $sql_where . "";
									
									if($active_region == 1){
										if($sql_or == FALSE){
											$sql_where = $sql_where . " EventType='AR'";
											$sql_or = TRUE;
										}else{
											$sql_where = $sql_where . " OR EventType='AR'";
										}
									}
									
									if($coronal_hole == 1){
										if($sql_or == FALSE){
											$sql_where = $sql_where . " EventType='CH'";
											$sql_or = TRUE;
										}else{
											$sql_where = $sql_where . " OR EventType='CH'";
										}
									}
									
									if($filament == 1){
										if($sql_or == FALSE){
											$sql_where = $sql_where . " EventType='FI'";
											$sql_or = TRUE;
										}else{
											$sql_where = $sql_where . " OR EventType='FI'";
										}
									}
									
									if($flare == 1){
										if($sql_or == FALSE){
											$sql_where = $sql_where . " EventType='FL'";
											$sql_or = TRUE;
										}else{
											$sql_where = $sql_where . " OR EventType='FL'";
										}
									}

									if($sigmoid == 1){
										if($sql_or == FALSE){
											$sql_where = $sql_where . " EventType='SG'";
											$sql_or = TRUE;
										}else{
											$sql_where = $sql_where . " OR EventType='SG'";
										}
									}
									
									if($sunspot == 1){
										if($sql_or == FALSE){
											$sql_where = $sql_where . " EventType='SS'";
											$sql_or = TRUE;
										}else{
											$sql_where = $sql_where . " OR EventType='SS'";
										}
									}
									
								}	
									

								//$event_string= ltrim ($event_string, ',');
								

								
								$final_input = "getVideo " . $start_date . " " . $start_hour_min . " " . $end_date . " " . $end_hour_min . " " . $event_string . " " . $selected_measurement . " " . $channel_number;

								
								// DEBUG - SHOW BASH COMMAND
								shell_exec ( "mkdr abc123abc" );
								//echo "final_input = '$final_input'<br><br>";
								
								
								$sql = "SELECT EventID, StartTime, EndTime, EventType FROM Event WHERE StartTime BETWEEN '$final_start_time' AND '$final_end_time' AND ($sql_where) ORDER BY StartTime ASC";
								
								$result = $conn->query($sql);
								if($result == FALSE){
									echo "null";
									echo "$sql";

								}

								elseif ($result && $result->num_rows) {
									 echo "<table width=\"100%\",height=\"80%\", id=\"myTable\", align = \"left\" style=\"color:white; background-color: #3F0000;\">";
									 // output data of each row
									 while($row = $result->fetch_assoc()) {
										 echo "<tr> <td style=\"border:1px solid black;width:33%\">" . $row["StartTime"]. "</td>   <td style=\"border:1px solid black;width:33%\">" . $row["EndTime"]. "</td>   <td style=\"border:1px solid black;width:33%\">" . $row["EventType"]. "</td></tr>";
									 }
									 echo "</table>";
								} else {
									 echo "0 results";
								}

								$conn->close();
							?> 
						
						 
							<!-------------------------------------------------------------------------------------------------------------- 
							<table width="100%",height="80%", id="myTable", align = "left" style="color:white; background-color: #3F0000;"> 

								<tbody>
									<tr>
										<td style="border:1px solid black;width:25%"><div>input start time</div></td>
										<td style="border:1px solid black;width:25%"><div>input end time</div></td>
										<td style="border:1px solid black;width:25%"><div>input data1</div></td>
										<td style="border:1px solid black;width:25%"><div>input data2</div></td>
									</tr>
									
									<tr>
										<td style="border:1px solid black;"><div>input start time</div></td>
										<td style="border:1px solid black;"><div>input end time</div></td>
										<td style="border:1px solid black;"><div>input data1</div></td>
										<td style="border:1px solid black;"><div>input data2</div></td>
									</tr>
									
									<tr>
										<td style="border:1px solid black;"><div>input start time</div></td>
										<td style="border:1px solid black;"><div>input end time</div></td>
										<td style="border:1px solid black;"><div>input data1</div></td>
										<td style="border:1px solid black;"><div>input data2</div></td>
									</tr>

									
								</tbody>
							</table> 
							-------------------------------------------------------------------------------------------------------------------------------------->
						</div>
					</div>
				</td>																		
					
				<!--  body right -->
				<td valign="top" style="width: 20%; height: 100%; border: 1px none black; color: #C0C0C0; background-color: #3f0000;">
					<object width="100%" height="100%" align="RIGHT">
						<param name="movie" value="video.swf">
						<param name="quality" value="high" />
						<param name="wmode" value="transparent">
						<embed src="video.swf" width="50%" height="50%">
						</embed>
					</object>

					
					<!-- DEBUG <button onclick="myFunction()">Try it</button> 
					<script>
						function myFunction() {
							var table = document.getElementById("myTable");
							var row = table.insertRow(0);
							var cell1 = row.insertCell(0);
							var cell2 = row.insertCell(1);
							cell1.innerHTML = "NEW CELL1";
							cell2.innerHTML = "NEW CELL2";
						}
					</script>-->
				</td>																							
			</tr>		
			
			<!-- Footer -->
			<tr>																		
				<td colspan="3" style="width: 100%; border: 1px solid black; height: 10%; color: #C0C0C0; background-color: #2a0000;">
					Brendan Burns, David Bell, David Miller, Joshua Leger <br> Solar Sailors
				</td>
			</tr>																			
		</table>
	</body>
</html>
