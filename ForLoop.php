<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ForLoop.php" method="post">
        <label >Counter</label>
        <input type="text" placeholder="Enter a number" name="counter">
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
    $counter = $_POST["counter"];
    // for($i =1;$i<=$counter;$i++){
    //     echo $i."<br>";
    // }
    for($i =$counter;$i>0;$i--){
        echo $i."<br>";
    }
    // for($i =1;$i<=10;$i++){
    //     echo $counter*$i."<br>";
    // }
?>