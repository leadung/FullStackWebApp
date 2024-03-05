<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="loginstyle.css">
  </head>

  <header>
    
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="nav-list">
        <a href="roleselection.html" class="link">Home</a>
        <a href="cuslogin.html" class="link">My Account</a>
        <a href="contact.html" class="link">Contact</a>
    </ul>
  </header>

  <body>
    <div class="wrapper">
      <div class="title">Login</div>
      <form action="#">
        <div class="field">
          <input type="text" name="username" required>
          <label>Username (Customer)</label>
        </div>
        <div class="field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <br>
        <div class="field">
          <input type="submit" value="Login" onClick="myFunction()">
          <script>
            function myFunction() {
              window.location.href="customerpage.html";
            }
          </script>

        </div>
        <div class="signup-link">Not a member? <a href="cusreg.php">Sign up now</a></div>
      </form>

      <?php
      global $username;
      global $password;
      global $parts;
      
      $user = isset ($_POST['username']);
      $user = isset ($_POST['password']);
      $userList = file('accounts.txt');
      $userList = file ('accounts.txt');
      $password = isset ($_POST['password']) ? $_POST['password'] : '';
      $hash = password_hash($password, PASSWORD_BCRYPT);
     
     
      error_reporting(0); 
      error_reporting (E_ALL ^ E_NOTICE);


     
      ?>
    </div>
  </body>

  <footer>
    <p>@RMIT &copy; <script>document.write(new Date().getFullYear());</script></p>
  </footer>
</html>
