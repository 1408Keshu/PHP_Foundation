<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SanitizeAndValidateInput.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="username" placeholder="Enter username"><br>
        <label for="age">Age:</label>
        <input type="text" name="age" placeholder="Enter age"><br>
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Enter email id"><br>
        <input type="submit" value="login" name="login"><br>

    </form>

</body>
</html>
<?php
if(isset($_POST["login"])){

    // $username = $_POST["username"];
    // $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    // $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
    // $username = filter_input(INPUT_POST,"username",);
    $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    // echo $username;
    IF(empty($email)){
        echo "Invalid ";
    }
    else{
        echo "EMAIL :{$email}";

    }
    // echo "your age is {$age}";
}
?>