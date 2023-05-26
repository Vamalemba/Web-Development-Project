<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
    
<h3 style="color: green;">Tree planting </h3>

  <form action="login.php" method="POST">
  <h2>Login</h2>
    <fieldset>
      <label for="username">Username: </label><br>
      <input type="text" name="username">
    </fieldset>

    <fieldset>
      <label for="passwrd">Password: </label><br>
      <input type="password" name="passwrd">
    </fieldset>

    <button type="submit">SUBMIT</button>

  </form>
</body>
</html>
