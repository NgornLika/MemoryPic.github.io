<?php
    include("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<style>
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
	margin: -20px 0 50px;
}
.register-box{
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 550px;
	max-width: 100%;
	min-height: 510px;
}
.register-box span{
	font-size: 12px;
}
.register-box a{
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}
.register-box button{
	border-radius: 20px;
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
	padding: 0 50px;
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
	margin-right: 90px;
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
            <!-- register -->
            <div class="register-box" id="register-box">
                
                <div class="form-container login-in-container">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h1><img src="https://i.pinimg.com/564x/b0/1a/e3/b01ae32b1d1e940a3c9551a6ff5b99d9.jpg" width="100px">Register</h1>
                        <span>Don't have an account?</span>
                        <input type="text" placeholder="Username " name="username"/>
                        <input type="email" placeholder="Email" name="email"/>
                        <input type="password" placeholder="Password" name="password" />
                        <input type="file" name="profile"/> 
                        <button type="submit" name="btn_register" >Register</button>
                        <span>Already have an account? <a href="login.php" style="color:blue">Login</a></span>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>