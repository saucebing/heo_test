<html>
<head>
<script src="/test/app/Common/js/jquery-2.0.2.js"></script>
<script src="/test/app/Common/js/Register_index.js"></script>
</head>
<body>
<h2>Register Form</h2>
<form method="post" action="__URL__/register">
	Username:
	<input type="text" name="username"/><br/>
	Password:
	<input type="password" name="password"/><br/>
	Confirm :
	<input type="password" name="confirm"/><br/>
	Gender:
	Male<input type="radio" name="gender" value="m" checked="checked"/>
	Female<input type="radio" name="gender" value="f" /><br/>
	Email:
	<input type="text" name="email"/><br/>
	<input type="submit" value="Register"/>
	<button id="login" type="button">Login</button>
</form>
</body>
</html>
