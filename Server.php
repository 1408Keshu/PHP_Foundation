
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?> " method="post">
        <!-- <form > -->
        <input type="text" name="username" placeholder="Enter your name">
        <input type="submit" value="Enter">
    </form>
</body>
</html>
<?php

    // $SERVER = SGB THAT CONTAINS HEADERS,PATH,AND SCRIPT LOCATIONS.
    //           THE ENTRIES IN THIS ARRAY ARE CREATED ARE CREATED BY WEB SERVER .
    //           SHOWS NEARLY EVERYTHING YOU NEED TO KNOW ABOUT THE CURRENT WEB PAGE ENV.
    // like  PHP_SELF
    // foreach($_SERVER as $key => $value ){
    //     echo "${key} = ${value} <br>";
    // }
    //REQUEST_METHOD
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Hello";
    }
?>