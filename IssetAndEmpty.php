<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="IssetAndEmpty.php" method="post">
        <label for="username">Name:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username"><br>
        
        <label for="password">password:</label>
        <input type="password" id="password"  name="password" placeholder="Enter your password"><br>

        <input type="submit" name="login" value="log in">

    </form>
</body>
</html>
<?php 

if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username) ){
            echo "Your name is missing <br>";
            
        }
        if(empty($password) ){
            echo "password is also missing <br> what are you doing";
        }
        else{
                // echo "your username $username <br>";
                // echo "your password $password ";
                // foreach($_POST as $key => $value){
                    //     echo $key." = ".$value."<br>";
                    // }
    }
    }




    // $user = "Keshav";
    $user = null;

    //isset
    // if(isset($user)){
    //     echo "Variable is set <br>";
    // }
    // else{
    //     echo "not set";
    // }

    //empty
    // if(empty($user)){
    //     echo "Variable is empty";
    // }
    // else{
    //     echo "not empty";
    // }
?>