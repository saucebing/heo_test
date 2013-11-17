<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<link rel="stylesheet" type="text/css" href="__ROOT__/Common/css/Login_index.css"/>
<script type="text/javascript" src="__ROOT__/Common/js/jquery-2.0.2.js"></script>
<script type="text/javascript" src="__ROOT__/Common/js/Login_index.js"></script>
</head>
<body id="body1">
<div id="div1">
<h2>Login Form</h2>
<form method="post" action="__URL__/login">
	Username:
	<input type="text" name="username"/><br/>
	Password:
	<input type="password" name="password"/><br/>
	<input type="submit" value="Login"/>
	<button id="register" type="button">Register</button>
</form>
</div>
</body>
</html>