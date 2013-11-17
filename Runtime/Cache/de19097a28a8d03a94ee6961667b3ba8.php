<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/css/Register_registerForm.css"/>
<script src="__ROOT__/Public/js/jquery-2.0.2.js"></script>
<script src="__ROOT__/Public/js/Register_registerForm.js"></script>
</head>
<body id="body1">
<div id="div1">
<h2>Register Form</h2>
<form method="post" action="__URL__/register">
	Username:
	<input type="text" name="username"/>
	<br/>
	Password:
	<input type="password" name="password"/>
	<br/>
	Confirm :
	<input type="password" name="confirm"/>
	<br/>
	Gender:
	Male<input type="radio" name="gender" value="m" checked="checked"/>
	Female<input type="radio" name="gender" value="f" />
	<br/>
	Email:
	<input type="text" name="email"/>
	<br/>
	Area:
	<select name="area">
		<option value="East Campus">East Campus</option>
		<option value="South Campus">South Campus</option>
		<option value="North Campus">North Campus</option>
		<option value="Zhuhai Campus">Zhuhai Campus</option>
	</select>
	<br/>
	<input type="submit" value="Register"/>
	<button id="login" type="button">Login</button>
</form>
</div>
</body>
</html>