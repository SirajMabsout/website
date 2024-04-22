<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="form">
      <header>Login</header>
      <form action="php/login.php" method="POST" id="form">
        <input type="text" placeholder="Enter your username" name="user" id="user">
        <input type="password" placeholder="Enter your password" name="pass" id="pass">
        <input type="button" class="button" value="Login" onclick='login()'>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
          <a href="signup.html"class = "hlink">Sign up</a></i>
        </span>
      </div>
    </div>
  </div>

  <script>
    function login(){
        let user = document.getElementById("user").value;
        let pass = document.getElementById("pass").value;
        if (user==""){
            alert("Username is missing!");
        }
        if (pass==""){
          alert("Password is missing!")
        }
        else{
            document.getElementById("form").submit();
        }
    }
</script>
</body>
</html>

