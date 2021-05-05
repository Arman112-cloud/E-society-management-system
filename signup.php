


<?php
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
  

      if(strlen($username)<=3)
      {
        $name_error= 'Please insert more than 3 characters.';
      }
      if(empty($email)){
         $email_error= 'Please insert email address.';
      }
      if(empty($phone)){
         $phone_error= 'Please insert phone number.';
      }
        if(empty($pass)){
         $password_error= 'Please insert password.';
      }
   
      
  }
?>





<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Quantico&family=Satisfy&display=swap" rel="stylesheet">
    <script src="signup.js"></script>
  
</head>
<body>
  <img class="bg" src="login bg.jpg" height="100%">
  <div class="center">
    <div class="container">
    <div class="text">
        <h3>Signup Form</h3></div>
        <br>
        <div id="error_message"></div>
    <form action="signupsql.php" method="POST" onsubmit="return validation()">

          <div class="data">
            <label>Username</label>
            <input type="text" id="name" name="username" required><br>
              <?php if(isset($name_error)) { ?>
              <p><?php echo $name_error ?></p>
              <?php } ?>
          </div>

          <div class="data">
            <label>Email</label>
            <input type="text" id="email" name="email" required><br>
              <?php if(isset($email_error)) { ?>
              <p><?php echo $email_error ?></p>
              <?php } ?>
          </div>

          <div class="data">
            <label>Mobile number</label>
            <input type="phone" id="phone" name="phone" required><br>
              <?php if(isset($phone_error)) { ?>
              <p><?php echo $phone_error ?></p>
              <?php } ?>
          </div>

          <div class="data">
            <label>Password</label>
            <input type="password" id="password" name="pass" required ><br>
              <?php if(isset($password_error)) { ?>
              <p><?php echo $password_error ?></p>
              <?php } ?>
          </div><br>

          <div class="btn">
            <div class="inner">
          </div>
          <button type="submit" name="submit">Signup</button>
          </div>
  
</form>
</div>
</div>

</body>
</html>