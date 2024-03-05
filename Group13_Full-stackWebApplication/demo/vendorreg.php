<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regstyle.css">
   </head>

   <header>
    
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="nav-list">
        <a href="roleselection.html" class="link">Home</a>
        <a href="#project" class="link">My Account</a>
        <a href="#contact" class="link">Contact</a>
    </ul>
  </header>

<body>


  <div class="wrapper">
    <h2>Registration</h2>
    <form action="#">
      <div class="input-box">
        <input type="text" name ="username" placeholder="Enter your username" required>
      </div>
      <div class="input-box">
        <input type="password" name ="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="text" name="busname" placeholder="Enter your business name" required>
      </div>
      <div class="input-box">
        <input type="text" name="busadd" placeholder="Enter your business address" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="vendorlogin.php">Login now</a></h3>
      </div>
    </form>

    <?php 

    global $password;
    global $busadd;
    global $busname;
    global $username;


    //Password Encryption

    $user = isset ($_POST['username']);
    $user = isset ($_POST['password']);
    $password = isset ($_POST['password']) ? $_POST['password'] : '';
    $hash = password_hash($password, PASSWORD_BCRYPT);
    error_reporting(0); 
    error_reporting (E_ALL ^ E_NOTICE);
    

    extract($_REQUEST);
    $file = fopen("accounts.txt","a");


    
    fwrite($file, "(V) Username:");
    fwrite($file, $username . "\n");
    fwrite($file, "(V) Password:");
    fwrite($file, $hash . "\n");
    fwrite($file, "(V) Business Name:");
    fwrite($file, $busname . "\n");
    fwrite($file, "(V) Business Address:");
    fwrite($file, $busadd . "\n");
    
    fwrite($file, "----------------------------------------" . "\n");
    fclose($file);


    ?>
   
  </div>
</body>
<footer>
  <p>@RMIT &copy; <script>document.write(new Date().getFullYear());</script></p>
</footer>

</main>
        <script src="vendorreg.js"></script>
        <script>
            FormValidator('#register-form', {
                onSubmit: function(data) {}
            });
        </script>
    </body>
</html>


</html>