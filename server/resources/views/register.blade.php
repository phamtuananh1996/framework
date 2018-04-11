
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Đăng Kí Tài Khoản</title>
      <link rel="stylesheet" href="css/styleregister.css">
</head>

<body>
  <div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form action="register" method="POST">
    {{csrf_field()}}
    <input type="text" name="username" placeholder="Username" />
    <input type="text" name="email" placeholder="E-mail" />
    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="password2" placeholder="Retype password" />
     
       
    <input type="submit" name="signupsubmit" value="Register" />
    </form>
  </div>
  
  
</div>
  
  
</body>
</html>
