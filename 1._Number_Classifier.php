<?php

// This Is my number classifier

echo "Enter Number: ";

$number= (int)readline();

if($number<0){
    echo "Negative Number";
}
elseif ($number>0){
    echo "Positive Number";
}
else {
    echo "Number Is zero";
}

?>