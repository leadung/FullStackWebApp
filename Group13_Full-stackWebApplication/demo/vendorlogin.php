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
        <a href="vendorlogin.html" class="link">My Account</a>
        <a href="contact.html" class="link">Contact</a>
    </ul>
  </header>

  <body>
    <div class="wrapper">
      <div class="title">Login</div>
      <form action="#">
        <div class="field">
          <input type="text" name ="username" required>
          <label>Username (Vendor)</label>
        </div>
        <div class="field">
          <input type="password" name ="password" required>
          <label>Password</label>
        </div>
        <br>
        <div class="field">
        <input type="button" value="Login" onclick="location.href = 'viewproduct.html';">
        </div>
        <div class="signup-link">Not a member? <a href="vendorreg.html">Sign up now</a></div>
      </form>
    </div>
  </body>
  <footer>
    <p>@RMIT &copy; <script>document.write(new Date().getFullYear());</script></p>
  </footer>
</html>
