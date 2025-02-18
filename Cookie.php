<?php
    //cookie = information about a user stored in a  user's a web-browser
    //          targeted advertisement,browsing preferences and other advertisement ,browsing preference and 
    //          other non-sensitive to view cookies

    setcookie("fav_food","pizza",time() + (8600* 2),"/");
    setcookie("fav_drink","coffee",time() + (8600* 3),"/");
    setcookie("fav_dessert","ice cream",time() + (8600* 4),"/");

    foreach($_COOKIE as $key =>$value){
        echo"{$key} = {$value} <br>";
    }
    if(isset($_COOKIE["fav_food"])){
        echo "BUY SOME {$_COOKIE["fav_food"]} !!!" ;

    }
    else{
    echo "I don't know your favourite food" ;
    }



?>