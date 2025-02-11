<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative array</title>
</head>
<body>
    <form action="AssociativeArray.php" method="get">
        <input type="text" name="country" placeholder="Enter a country">
        <input type="submit" >
    </form>
</body>
</html>

<?php
    //asociative array 
    $capitals = array(
        "USA"=>"Wasington D.C",
        "Japan" => "Tokyo",
        "South Korea" => "Seoul",
        "India" => "New Delhi",
    );
    $country = $_GET["country"];
    $capital = $capitals[$country];
    echo "{$capital}";

    // echo  $capitals["USA"];
    // $capitals["USA"] = "Mumbai";
    // array_pop( $capitals );
    // array_shift( $capitals );
    // $keys = array_keys($capitals);
    // $values = array_values($capitals);
    // $capitals = array_reverse($capitals);
    // $capitals = array_flip($capitals);


    // foreach($capitals as $key => $value){
    //     echo " {$key} = {$value} <br>";
    // }
    // foreach($keys as $key ){
    //     echo " {$key} <br>";
    // }
    // foreach($values as $value ){
    //     echo " {$value} <br>";
    // }
?>