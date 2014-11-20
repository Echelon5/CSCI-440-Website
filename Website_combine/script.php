<?php
$active_region = 0; //Active Region booean
$coronal_hole = 0; //Coronal Hole
$filament = 0; //Filament
$flare = 0; //Flare
$sigmoid = 0; //Sigmoid
$sunspot = 0; //Sunspot



$channel_number = $_GET['channel'];  //Selected measurement

echo "Channel Number = $channel_number<br><br>";



$selected_measurement = $_GET['measurement'];  //Selected measurement

echo "Selected measurement = $selected_measurement<br>";


$start_date = $_GET['start'];  //Selected measurement

echo "Start time = $start_date<br>";


$start_hour = $_GET['hour_start'];  //Selected measurement
echo "Start hour = $start_hour<br>";

$start_minute = $_GET['minute_start'];  //Selected measurement
echo "Start minute = $start_minute<br><br>";







$end_date = $_GET['end'];  //Selected measurement

echo "End time = $end_date<br>";


$end_hour = $_GET['hour_end'];  //Selected measurement
echo "End hour = $end_hour<br>";

$end_minute = $_GET['minute_end'];  //Selected measurement
echo "End minute = $end_minute<br><br>";


$event_string = "";


if (isset($_GET['event_ar'])) 
{
	$active_region = 1;
	$event_string = $event_string . ",ar";}
if (isset($_GET['event_ch'])) 
{
	$coronal_hole = 1;
	$event_string = $event_string . ",ch";}
if (isset($_GET['event_fi'])) 
{
	$filament = 1;
	$event_string = $event_string . ",fi";}
if (isset($_GET['event_fl'])) 
{
	$flare = 1;
	$event_string = $event_string . ",fl";}
if (isset($_GET['event_sg'])) 
{
	$sigmoid = 1;
	$event_string = $event_string . ",sg";}
if (isset($_GET['event_ss'])) 
{
	$sunspot = 1;
	$event_string = $event_string . ",ss";}


$event_string= ltrim ($event_string, ',');

if ($event_string == "")
{
	$event_string = "none";
}

echo "Event String = $event_string<br><br>";




echo "active_region = $active_region<br>";
echo "coronal_hole = $coronal_hole<br>";
echo "filament = $filament<br>";
echo "flare = $flare<br>";
echo "sigmoid = $sigmoid<br>";
echo "sunspot = $sunspot<br>";
																			//193 = 8 seconds
																			//131 = 11 seconds


$selected_channel = $_GET['channel'];  //Selected measurement

if ($selected_channel == 193)
{
$start_hour_min = $start_hour . ":" . $start_minute . ":" . "8";
$end_hour_min = $end_hour . ":" . $end_minute . ":" . "8";			//hour minute second
}
else
{
$start_hour_min = $start_hour . ":" . $start_minute . ":" . "11";
$end_hour_min = $end_hour . ":" . $end_minute . ":" . "11";	
}

echo "Specific Time = $start_hour_min<br><br>";



$final_input = "getVideo " . $start_date . " " . $start_hour_min . " " . $end_date . " " . $end_hour_min . " " . $event_string . " " . $selected_measurement . " " . $channel_number;

echo "final_input = '$final_input'<br><br>";

//bash here

$output = shell_exec ( $final_input );
echo "<pre>$output</pre>";

//






//  $servername = "http://joshatron.ddns.net/";
//  $username = "brendan";
//  $password = "password";
//  $dbname = " solar ";
//  // Create connection
//  $conn = mysqli_connect ( $server , $user , $pass );
//  // Check connection
//  if ( $conn - > connect_error ) {
//  die(" Connection failed : " . $conn - > connect_error );
//								  }
//  
// 


 
//  $sql = " SELECT id , fname , lname FROM EMPLOYEES ";


//SQL Search Between Start Timestamp and End Timestamp
//For sql String, Search for each individual chosen event.. Use if statements then the append the strings together using "1" . "2" for example, (another example above)
//




//  $result = $conn - > query ( $sql );
//  if ( $result - > num_rows > 0) {
//  // output data of each row
//  while ( $row = $result - > fetch_assoc ()) {
//  echo "<br > id: ". $row ["id"].
//  " - Name : ". $row [" firstname "].
//  " " . $row [" lastname "];
//  }
//  } else {
//  echo "0 results ";
//  }
//  $conn - > close ();































//mysqli_close ( $conn );


?>


