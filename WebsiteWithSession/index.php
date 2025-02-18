<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- This is the login Page <br>
    <a href="home.php">This goes to the home</a> -->
    <form action="index.php" method="post">
        <label >Username:</label>
        <input type="text" name="username" placeholder="Enter your name"><br>
        <label >Password:</label>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){

        if(!empty($_POST["username"]) && !empty($_POST["password"])){

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            echo $_SESSION["username"]."<br>";
            echo $_SESSION["password"]."<br>";

            header("location: home.php");

        }else{
            echo "Missing username/password <br>";
        }
        
    }
?>