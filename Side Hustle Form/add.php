<?php
if (isset($_POST["submit"])) {
  session_start();

$_SESSION["username"] = $_POST["username"];

$_SESSION["password"] = $_POST["password"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    form {
      border : 3px solid #f1f1f1
    }

    .width {
      width: 90%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline block;
      border: 1px solid #ccc;
      box sizing: boarder box;
    }

    button {
      background color: #4CAF5O
      color: white
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    .container {
      padding: 16px;
    }
  </style>
</head>
<body>
    <div class="center">
    <h2 class="center">Regisration Form</h2>
    <form action='home.php' method='POST'>
      
      <div class="container">
          <label>Username</label><br>
          <input class="width" type="text" placeholder="Username" name="username" required><br><br>

          <label>Email</label><br>
          <input class="width" type="email" placeholder="Email" name="e-mail" required><br><br>

          <label>Password</label><br>
          <input class="width" type="password" placeholder="Password" name="password" required><br><br>

          <button type="submit">Sigin-Up</button>
      </div>
    
    </form>
    </div>
  
</body>
</html>