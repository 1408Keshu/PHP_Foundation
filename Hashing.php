<?php
    // hashing = transforming sensitive data (password )
    // into letters ,numbers and/or symbols
    // via a mathematical process .(similar to encrypt)
    //  hides the original data from 3rd parties

    $password = "pizza123";
    $hash = password_hash($password,PASSWORD_DEFAULT);
    echo $hash."<br>";
    if(password_verify("pizza123",$hash)){
        echo "you are logged in!";
    }else{
        echo "Incorrect Password";
    }
?>