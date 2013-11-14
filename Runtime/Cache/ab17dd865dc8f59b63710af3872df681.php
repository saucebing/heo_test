<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<script src="/test/app/Common/js/jquery-2.0.2.js"></script>
		<script src="/test/app/Common/js/Index_index.js"></script>
	</head>
	<body>
		Welcome 
		<?php
 session_start(); if(isset($_SESSION["login"]) && $_SESSION["login"] == 1) echo $_SESSION["username"]; ?>
		<button id="logout" type="button">Logout</button>
	</body>
</html>