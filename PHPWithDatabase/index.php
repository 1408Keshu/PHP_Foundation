<?php
    include("database.php");

    $username = "keshava";
    $password = "keshava1231";
    $hash = password_hash($password,PASSWORD_DEFAULT);
    // $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
    $sql = "INSERT INTO users (username ,password) VALUES ('$username','$hash')";
    // $sql = "INSERT INTO users (username, password ) VALUES ('shubham','shubhu121')";
    try{
        // mysqli_query($conn,$sql);
        echo "<br>"."User is now registered";
    }
    catch(mysqli_sql_exception){
        echo "Could not registered user";
    }
    // mysqli_close($conn);
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>Hello 
</body>
</html> -->