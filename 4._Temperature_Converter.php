<?php

// Temperature Converter

define ("FACTOR", 9/5);
define ("OFFSET", 32);

echo "Input temperature value: ";
$temperature= (float) readline();
echo "Choose a value to convert (1: Celsius, 2: Fahrenheit): ";
$convert_value = (int) readline();

switch($convert_value){
    case 1: 
        $output= ($temperature - OFFSET) / FACTOR;
        echo "Temperature in Celsius is:  $output";
        break;
    
    case 2:
        $output= $temperature * FACTOR + OFFSET;
        echo "Temperature in Fahrenheit is: $output";
        break;
}