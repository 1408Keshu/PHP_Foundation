<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="Math.php" method="post">
        <label >X:</label>
        <input type="text" name="x" placeholder="Enter value of x"><br>
        <label >Y:</label>
        <input type="text" name="y" placeholder="Enter value of y"><br>
        <label >Z:</label>
        <input type="text" name="z" placeholder="Enter value of z"><br>
        <input type="submit" value="total">

    </form> -->
    <form action="Math.php" method="post">
        <label >Radius:</label>
        <input type="text" name="radius" placeholder="Enter radius here"><br>
        <select name="measure" id="measure">
            <option value="Circumference">Circumference</option>
            <option value="Area">Area</option>
            <option value="Volume">Volume</option>
        </select>
        <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php
// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];

// $total = null;

// $total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = sqrt($x);
// $total = pow($x,$y);
// $total = max($x,$y,$z);
// $total = min($x,$y,$z);
// $total = rand(1,9);
// $total = pi();


// echo $total;



//calculating area ,circumference,volume;
    $radius = $_POST["radius"];
    $measure = $_POST["measure"];
    $area = null;
    $circumference = null;
    $volume = null;

    $area = pi()*$radius*$radius;
    $circumference = 2*pi()*$radius;
    $volume = 4/3*pi()*pow($radius,3);

    $area = round($area,2);
    $volume = round($volume,2);
    $circumference = round($circumference,2);
    echo "$measure :";
    if($measure =="Volume"){
        echo "{$area}<br>"; 

    }
    else if($measure == "Area"){
        echo "{$volume}<br>"; 

    }else{
        echo "{$circumference}<br>"; 

    }
?>