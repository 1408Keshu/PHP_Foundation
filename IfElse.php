<?php
    $age = 29;
    $adult = false;
    if($age >18 && $age<100){
        // echo "You can enter this site";
        $adult = true;
    }
    else if($age ==0){
        echo "So, you just born";
    }
    else if($age > 100){
        echo "You are too old";
    }
    else{
        echo "you must be 18+ to enter";
    }
    if( $adult ){
        echo "You can enter this site";
    }

     
?>