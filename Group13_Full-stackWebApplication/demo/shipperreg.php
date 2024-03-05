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
        <a href="contact.html" class="link">Contact</a>
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
      
      <p>Choose your distrubution hub</p>
      <br>

      <div class="custom-select" style="width:200px;">
        <select>
          <option value="0">Select hub:</option>
          <option value="1">Quan 7</option>
          <option value="2">Quan 9</option>
          <option value="3">Quan 3</option>
          
        </select>
      </div>
      
      <script>
      var x, i, j, l, ll, selElmnt, a, b, c;
      x = document.getElementsByClassName("custom-select");
      l = x.length;
      for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
        
          c = document.createElement("DIV");
          c.innerHTML = selElmnt.options[j].innerHTML;
          c.addEventListener("click", function(e) {
              
              var y, i, k, s, h, sl, yl;
              s = this.parentNode.parentNode.getElementsByTagName("select")[0];
              sl = s.length;
              h = this.parentNode.previousSibling;
              for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                  s.selectedIndex = i;
                  h.innerHTML = this.innerHTML;
                  y = this.parentNode.getElementsByClassName("same-as-selected");
                  yl = y.length;
                  for (k = 0; k < yl; k++) {
                    y[k].removeAttribute("class");
                  }
                  this.setAttribute("class", "same-as-selected");
                  break;
                }
              }
              h.click();
          });
          b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
          });
      }
      function closeAllSelect(elmnt) {
       
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
          if (elmnt == y[i]) {
            arrNo.push(i)
          } else {
            y[i].classList.remove("select-arrow-active");
          }
        }
        for (i = 0; i < xl; i++) {
          if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
          }
        }
      }
      
      document.addEventListener("click", closeAllSelect);
      </script>
      <br>

      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="shipperlogin.html">Login now</a></h3>
      </div>
    </form>
    <?php 

    global $password;
    global $dishub;
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

    
    fwrite($file, "(S) Username:");
    fwrite($file, $username . "\n");
    fwrite($file, "(S) Password:");
    fwrite($file, $hash . "\n");
    fwrite($file, "(S) Distribution hub:");
    fwrite($file, $dishub . "\n");
    
    
    fwrite($file, "----------------------------------------" . "\n");
    fclose($file);

  
  


    ?>
  </div>
</body>
<footer>
  <p>@RMIT &copy; <script>document.write(new Date().getFullYear());</script></p>
</footer>
</html>
