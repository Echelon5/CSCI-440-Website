<?php
$active_region = 0; //Active Region booean
$coronal_hole = 0; //Coronal Hole
$filament = 0; //Filament
$flare = 0; //Flare
$sigmoid = 0; //Sigmoid
$sunspot = 0; //Sunspot


$selected_measurement = $_GET['measurement'];  //Selected measurement

echo "Selected measurement = $selected_measurement<br>";


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

?>