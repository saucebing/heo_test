<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<script type="text/javascript" src="__ROOT__/Public/js/jquery-2.0.2.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
					alert(1);
					mydate = new Date();
					$("#input1")[0].value = mydate.toString();
					});
	</script>
</head>
<body>
	<input type="datetime-local" id="input1"/>
</body>
</html>