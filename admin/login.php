<?php
    include("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<style>
    
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
* {
	box-sizing: border-box;
}
body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	/* margin: -20px 0 50px; */
}
.login-box {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 550px;
	min-height: 500px;
}
.login-box span {
	font-size: 12px;
}
.login-box a{
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}
.login-box button {
	border-radius: 15px;
	border: 1px solid #2b39ff ;
	background-color: #2b39ff;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
button:active {
	transform: scale(0.95);
}

.form-container form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 60px;
	height: 100%;
	text-align: center;
}
.form-container input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}
.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}
.form-container h1{
	display: flex;
	margin-left: 30px;
	justify-content: center;
	align-items: center;
}
.login-in-container {
	width: 100%;
	z-index: 2;
}

</style>
<body>
    <main>
        <div class="Shadow_box">
            <div class="login-box" id="login-box">
                <div class="form-container login-in-container">
                    <form method="post" >
                        <h1>Login <img src="https://i.pinimg.com/564x/40/87/8f/40878fd41c44dbd9242a7a69b4143e07.jpg" width="100px"></h1>
                        <span>or use your account</span>
                        <input type="text" placeholder="Username or Email" name="name_email"/>
                        <input type="password" placeholder="Password" name="password" />
                        <a href="register.php" style="color:blue">Forgot your password?</a>
                        <button type="submit" name="btn_login">Login </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>