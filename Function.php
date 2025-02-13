<?php
$name = "keshav";
function wish($name){
    echo "Happy Birthday to you <br>";
    echo "Happy Birthday to you <br>";
    echo "Happy Birthday dear $name <br>";
}
// wish($name);

function isEven($number){
    if($number%2==0){
        // return true;
        echo "Even";
    }
    // return false;
    else{
        echo "Odd";

    }
}
//  echo isEven(5);
//  isEven(5);

 function hypotenuse($a,$b){
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
 }
//  echo hypotenuse(6,9);
 echo hypotenuse("pizza",9);

?>