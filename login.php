<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<div class="login-container">
    <h1>Login</h1>

    <form action="" method="POST">
        <label for="username"><i class="fas fa-envelope"> </i> Email:</label>
        <input type="text" name="username" id="username" required class="input-field"  placeholder="Enter your email address">

        <label for="password"><i class="fas fa-lock"> </i> Password:</label>
        <input type="password" name="password" id="password" required class="input-field" placeholder="Enter your password">

        <button type="submit" class="login-btn">Login</button>
    </form>
       <p class="or">
  <span>or sign in with</span>
</p>

    <div class="social-login">
        
     
<a href="google-login.php" class="social-btn google-btn">
    <i class="fab fa-google"></i> 
</a>


<a href="facebook-login.php" class="social-btn facebook-btn">
    <i class="fab fa-facebook-f"></i> 
</a>
    </div>
</div>

</body>
</html>
