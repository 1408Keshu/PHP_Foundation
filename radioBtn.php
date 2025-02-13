<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radioBtn.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        visa <br>
        <input type="radio" name="credit_card" value="Mastercard">
        Master Card <br>
        <input type="radio" name="credit_card" value="Americanexpress">
        American Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
    if(isset($_POST["confirm"])){
        $credit_card = null;
        if(isset($_POST["credit_card"])){

            $credit_card = $_POST["credit_card"];
            // echo "you have selected ".$credit."";
        }
        // else{
        //     echo "please Select a Card first";
        // }
        switch ($credit_card) {
            case 'Visa':
                echo "You have selected Visa";
                break;
            case 'Mastercard':
                echo "You have selected Mastercard";
                break;
            case 'Americanexpress':
                echo "You have selected American Express";
                break;
            
            default:
                echo "Pls Select Card";
                break;
        }
    }
?>