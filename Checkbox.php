<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Checkbox.php" method="post">
        <input type="checkbox" name="food[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="food[]" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="food[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="food[]" value="Sandwich">
        Sandwich<br>
        <input type="submit" name="order" value="Order">
    </form>
</body>

</html>
<?php
    if(isset($_POST["order"])){
        // if(isset($_POST["pizza"])){
        //     echo " added Pizza to your order <br>";
        // }
        // if(isset($_POST["hamburger"])){
        //     echo " added hampurger to your order <br>";
        // }
        // if(isset($_POST["hotdog"])){
        //     echo " added hotdog to your order <br>";
        // }
        // if(isset($_POST["sandwich"])){
        //     echo " added sandwich to your order <br>";
        // }
        $food = $_POST["food"];
        // echo  $food;
        foreach($food as $food){
            echo $food.'<br>';
        }

    }
?>