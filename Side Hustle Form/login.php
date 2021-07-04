<?php  
session_start();
if (!isset($_SESSION["username"]) && $_SESSION["password"] == true) {
    echo "Login Successful";
} else {
    echo "Incorrect Details";

    header('location: log.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="center">
    <h2 class="center">Login</h2>
    <form action='home.php' method='POST'>
      
      <div class="container">
          <label>Username</label><br>
          <input class="width" type="text" placeholder="Username" name="username" required><br><br>


          <label>Password</label><br>
          <input class="width" type="password" placeholder="Password" name="password" required><br><br>

          <button type="submit">Login</button>
      </div>
    
    </form>
    </div>
</body>
</html>