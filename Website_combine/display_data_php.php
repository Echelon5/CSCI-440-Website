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
					<a href="new_search.html" style="text-decoration : none; color : silver;">New Search</a><br>
					<a><u>Display Data</u></a><br>
				</td>
					
				<!-- body left -->
				<td style="width: 70%; border: 1px none white; height: 100%; position:fixed  background-color: #3F0000; color: #C0C0C0;">
				
					<!-- Header Column -->
					<table style="width:99%; height: 5%; border: 1px solid black; background-color: #2a0000; color: white;">
						<tr>
							<td style="border:1px solid black;width:20%">EventID</td>
							<td style="border:1px solid black;width:20%">StartTime</td> 
							<td style="border:1px solid black;width:20%">EndTime</td>
							<td style="border:1px solid black;width:20%">EventType</td>
							<td style="border:1px solid black;width:20%">IID</td>
						</tr>
					</table>
					
					<!-- Data Columns -->
					<div style="width:100%; height:95%; position:fixed   border: 1px solid white; background-color: #3F0000;">
						<div style="width:70%; overflow-y:scroll; height:75%; position:fixed; background-color: #3F0000; border: 1px solid black;">
							<?php
								//$host = "joshatron.ddns.net";
								$host = "localhost";
								$username = "davidm";
								$password = "password";
								$dbname = "solartest";

								// Create connection
								$conn = new mysqli($host, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 

								$sql = "SELECT * FROM Event";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									 echo "<table width=\"100%\",height=\"80%\", id=\"myTable\", align = \"left\" style=\"color:white; background-color: #3F0000;\">";
									 // output data of each row
									 while($row = $result->fetch_assoc()) {
										 echo "<tr><td style=\"border:1px solid black;width:20%\">" . $row["EventID"]. "</td>   <td style=\"border:1px solid black;width:20%\">" . $row["StartTime"]. "</td>   <td style=\"border:1px solid black;width:20%\">" . $row["EndTime"]. "</td>   <td style=\"border:1px solid black;width:20%\">" . $row["EventType"]. "</td>   <td style=\"border:1px solid black;width:20%\">" . $row["IID"]. "</td></tr>";
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

					
					<!-- DEBUG <button onclick="myFunction()">Try it</button> -->
					<script>
						function myFunction() {
							var table = document.getElementById("myTable");
							var row = table.insertRow(0);
							var cell1 = row.insertCell(0);
							var cell2 = row.insertCell(1);
							cell1.innerHTML = "NEW CELL1";
							cell2.innerHTML = "NEW CELL2";
						}
					</script>
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