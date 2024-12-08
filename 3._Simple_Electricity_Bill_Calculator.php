<?php

// My Simple Electricity Bill Calculator

// Slab.1 = 1-100 unit = $5
// Slab.2 = 101-200 unit = $10
// Slab.3 = 201-300 unit = $15
// Slab.4 = 301-500 unit = $20
// Slab.5 = 501-1000 unit = $25
// Slab.6 = 1001-2000 unit = $30
// Slab.7 = 2000 to unlimited unit = $40


echo "Enter units you consumed:  ";
$unit= (int)readline();


    //slab=-1
if($unit <=100){
    $bill = $unit *5;

    // slab -2
}elseif ($unit <=200){
    $bill = 100*5 + ($unit -100) * 10;

        // slab -3
}elseif ($unit<=300){
    $bill = 100*5 + 100*10 + ($unit -200) * 15;

    //slab -4
}elseif ($unit <=500){
    $bill = 100*5 + 100*10 + 100*15 + ($unit-300) * 20;

    //slab -5
}elseif ($unit <=1000){
    $bill= 100*5 + 100*10 + 100*15 + 200*20 + ($unit-500) *25;

    // slab -6
}elseif ($unit <=2000){
    $bill= 100*5 + 100*10 + 100*15 + 200*20 + 500*25 + ($unit-1000) *30;

    //slab -7
}elseif ($unit >2001){
    $bill= 100*5 + 100*10 + 100*15 + 200*20 + 500*25 + 1000*30 + ($unit-2000) *35;
}else {
    echo "Unknown Input";
}
echo "your electricity bill is: $bill/- Taka";