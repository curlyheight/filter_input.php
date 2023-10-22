<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="real.php" method="post">
        username: <br>
        <input type="text" name="username"> <br>
        Email: <br>
        <input type="email" name="email"> <br>
        Age: <br>
        <input type="text" name="age"> <br>
        <input type="submit" name="login" value="login">

    </form>
    
</body>
</html>


<?php
      if(isset($_POST["login"])){
         $username = filter_input(INPUT_POST, "username",
             FILTER_SANITIZE_SPECIAL_CHARS  );
       // $username = $_POST["username"] ;
        $email = filter_input(INPUT_POST, "email",
                FILTER_SANITIZE_EMAIL);

       $age = filter_input(INPUT_POST, "age",
                FILTER_SANITIZE_NUMBER_INT  ); 

        echo "Hello  {$username} <br>";
        echo "Hello  {$email} <br>";
        echo "You are  {$age} years old";
    }


?>












