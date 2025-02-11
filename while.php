<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="while.php" method="post">
    <!-- <input type="text" name="number" placeholder="Enter a number"> -->
    <input type="submit" name="stop" value="stop">
</form>
<body>
    
</body>
</html>
<?php
    
    // $number = $_POST["number"];
    // $counter = 0;
    // while($counter <$number){
    //     $counter++;
    //     echo $number*$counter."<br>";
    // }

    $running =true;
    $counter = 0;
    while($running){
        if(isset($_POST["stop"])){ // if stop clicked
            $running = false;
        }
        else{

            $counter++;
            echo $counter."<br>";
        }
    }

?>