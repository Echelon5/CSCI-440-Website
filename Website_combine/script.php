<?php
$active_region = false; //Active Region booean
$coronal_hole = false; //Coronal Hole
$filament = false; //Filament
$flare = false; //Flare
$sigmoid = false; //Sigmoid
$sunspot = false; //Sunspot
$selected_measurement = $_POST['measurement'];  //Selected measurement


if (isset($_POST['ar'])) 
{$active_region = true;}
if (isset($_POST['ch'])) 
{$coronal_hole = true;}
if (isset($_POST['fi'])) 
{$filament = true;}
if (isset($_POST['fl'])) 
{$flare = true;}
if (isset($_POST['sg'])) 
{$sigmoid = true;}
if (isset($_POST['ss'])) 
{$sunspot = true;}




?>