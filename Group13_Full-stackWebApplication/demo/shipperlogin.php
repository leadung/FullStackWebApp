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
        <a href="shipperlogin.html" class="link">My Account</a>
        <a href="#contact" class="link">Contact</a>
    </ul>
  </header>

  <body>
    <div class="wrapper">
      <div class="title">Login</div>
      <form action="#">
        <div class="field">
          <input type="text" name = "username" required>
          <label>Username (Shipper)</label>
        </div>
        <div class="field">
          <input type="password" name ="password" required>
          <label>Password</label>
        </div>
        <br>
        <div class="field">
          <input type="button" value="Login" onclick="location.href = 'shipperhomepage.html';">
        </div>
      
      <div class="signup-link">Not a member? <a href="shipperreg.html">Sign up now</a> </div>
      </form>
    </div>
  </body>
  <footer>
    <p>@RMIT &copy; <script>document.write(new Date().getFullYear());</script></p>
  </footer>
</html>
