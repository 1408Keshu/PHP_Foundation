<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="getAndPost.php" method="post">
        <label >username:</label>
        <input type="text" name="username"><br>
        
        <label >Password:</label>
        <input type="password" name="password"><br>

        <input type="submit" value="log in">

    </form> -->

    <form action="getAndPost.php" method="get">
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" placeholder="Enter Quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>";
    $item= "pizza";
    $price = 2.99;
    $quantity = $_GET["quantity"];
    $total = null;
    $total = $quantity * $price;
    echo "You have ordered {$quantity} x {$item} <br>";
    echo "Your total is : \${$total}";
?>