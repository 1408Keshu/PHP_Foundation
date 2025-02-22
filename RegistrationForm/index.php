<?php 
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration form</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome to FaceBook</h2>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your name"><br>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password"><br>

        <input type="submit" name="submit" value="Register">



    </form>
    
</body>
</html>
<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo "Please enter a username";
        }
        else if(empty($password)){
            echo "Please enter a password";
        }
        else{
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username,password) VALUES ('$username','$hash')";
            try{
                mysqli_query($conn,$sql);
                echo "You are now registered";

            }
            catch(mysqli_sql_exception){
                echo "That username is Taken already";
            }
        }
    }
    mysqli_close($conn);
?>