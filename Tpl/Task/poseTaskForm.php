<html>
<head>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/css/Task_poseTaskForm.css"/>
<script src="__ROOT__/Public/js/jquery-2.0.2.js"></script>
<script src="__ROOT__/Public/js/Task_poseTaskForm.js"></script>
</head>
<body id="body1">
<div id="div1">
<h2>Pose Task Form</h2>
<form method="post" action="__URL__/poseTask">
	Task Type:
	<select name="type"/>
		<option value="Fetch the express">Fetch the express</option>
		<option value="Pack a meal">Pack a meal</option>
	</select>
	<br/>
	Task Title:
	<input type="text" name="title"/>
	<br/>
	Description:
	<input type="text" name="description"/>
	<br/>
	Task Available Time:
	<input type="datetime-local" id="availabletime" step="1" name="availabletime"/>
	<br/>
	Task Accomplish Time:
	<input type="datetime-local" id="accomplishtime" step="1" name="accomplishtime"/>
	<br/>
	Receiver Gender:
	Male<input type="radio" name="rgender" value="m" checked="checked"/>
	Female<input type="radio" name="rgender" value="f" />
	<br/>
	GPP:
	<input type="text" name="taskgpp" value="0"/>
	<br/>
	Note:
	<input type="text" name="note"/>
	<br/>
	<?php
		echo '<input type="hidden" name="pid" value="'.$_SESSION["uid"].'"/>';
	?>
	<input type="submit" value="Pose Task"/>
	<button id="cancel" type="button">Cancel</button>
</form>
</div>
</body>
</html>
