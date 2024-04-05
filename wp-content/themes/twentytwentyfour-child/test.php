<?php
// Load WordPress
require_once('/var/www/html/wordpress/wp-load.php');

// Include necessary function definitions
require_once('/var/www/html/wordpress/wp-content/themes/twentytwentyfour-child/functions.php');

$plantType = "Trees";
$heightRange = "";
$spreadRange = "2 to 5m";
$foliageColour = "";
$flowerColour = "yellow";


$plantTypes = getPlantGroup($plantType);
//print_r($plantTypes);
$attr_botanical_names = get_plant_recommendation_attr($plantTypes, $heightRange, $spreadRange, $foliageColour, $flowerColour);
print_r($attr_botanical_names);
$attr_plant_info = get_plant_info($attr_botanical_names);
$response = json_encode($attr_plant_info);
echo $response;
?>
