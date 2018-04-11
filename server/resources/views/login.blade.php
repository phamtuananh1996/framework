<%@page pageEncoding="UTF-8" %>
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <title>Login</title>
       <script type="text/javascript">
            function check(){
              if (document.getElementById("username").value !="" && document.getElementById("password").value !="") {
                 return true; 
                }
                return false;
            };
            function test(){
                if (check()==false) {
    alert('Dang nhap khong thanh cong');
                }
            };
        </script>
    </head>
    <body>
   <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Đăng<span>Nhập</span></div>
		</div>
		<br>
        @if(session('err'))
        {
           <script>alert("đăng nhập không thành công");</script> 
        }
        @endif
        
                <form class="login" action="login" method="POST" onsubmit="return check();">
                {{csrf_field()}}
                    <input type="text" placeholder="Username" name="username" id="username"><br>
                    <input type="password" placeholder="Password" name="password" id="password"><br>
                    <input type="submit" value="Login" onclick="test()" name="sub">   
		</form>
	
    </body>
</html>
