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



if (isset($_GET['event_ar'])) {$active_region = 1;}
if (isset($_GET['event_ch'])) {$coronal_hole = 1;}
if (isset($_GET['event_fi'])) {$filament = 1;}
if (isset($_GET['event_fl'])) {$flare = 1;}
if (isset($_GET['event_sg'])) {$sigmoid = 1;}
if (isset($_GET['event_ss'])) {$sunspot = 1;}

echo "active_region = $active_region<br>";
echo "coronal_hole = $coronal_hole<br>";
echo "filament = $filament<br>";
echo "flare = $flare<br>";
echo "sigmoid = $sigmoid<br>";
echo "sunspot = $sunspot<br>";
																			//193 = 8 seconds
																			//131 = 11 seconds
//$start_hour_string		= (string)$start_hour;																	
//$start_minute_string	= (string)$start_minute;																
$start_hour_min = $start_hour . ":" . $start_minute . ":" . "8";			//hour minute second
echo "Specific Time = $start_hour_min<br><br>";


?>