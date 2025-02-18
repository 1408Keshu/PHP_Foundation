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
    This is the home Page <br>
    <!-- <a href="index.php">This goes to the login</a> -->
     <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
     </form>
</body>
</html>
<?php
    //  $_SESSION["username"] = "Keshav";
    //  $_SESSION["password"] = "Pass123";

     echo $_SESSION["username"]."<br>";
     echo $_SESSION["password"]."<br>";

     if(isset($_POST["logout"])){
        session_destroy();
        header("location:index.php");
     }
?>