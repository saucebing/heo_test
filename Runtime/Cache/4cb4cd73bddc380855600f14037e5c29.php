<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/css/Task_poseTaskForm.css"/>
<script src="__ROOT__/Public/js/jquery-2.0.2.js"></script>
<script type="text/javascript" src="__ROOT__/Public/dist/js/bootstrap.js"></script>
<script src="__ROOT__/Public/js/Task_poseTaskForm.js"></script>
</head>
<body id="body1">
<div id="div1" class="container">
<form method="post" action="__URL__/poseTask" class="form-signin">
	<h2 class="form-signin-heading">Pose Task Form</h2>
	<br/>
	<div class="form-control">
	<label class="label-control">Title&nbsp&nbsp</label>
	<input type="text" name="title" require>
	</div>
	<div class="form-control">
	<label class="label-control">Desp</label>
	<input type="text" name="description">
	</div>
	<div class="form-control">
	<label class="label-control">Task Type</label>
	<select name="type"/>
		<option value="Fetch the express">Fetch the express</option>
		<option value="Pack a meal">Pack a meal</option>
	</select>
	</div>
	<div class="form-control">
	<label class="label-control"> Available Time</label>
	<input type="datetime-local" id="availabletime" step="1" name="availabletime"/>
	</div>
	<div class="form-control">
	<label class="label-control"> Accomplish Time</label>
	<input type="datetime-local" id="accomplishtime" step="1" name="accomplishtime"/>
	</div>
	<div class="form-control">
	<label class="label-control">Receiver Gender</label>
	<input type="radio" name="rgender" value="m" checked="checked"/>
	Male
	<input type="radio" name="rgender" value="f" />
	Female
	</div>
	<div class="form-control">
	<label class="label-control">GPP</label>
	<input type="text" name="taskgpp" value="0"/>
	</div>
	<div class="form-control">
	<label class="label-control">Note</label>
	<input type="text" name="note"/>
	</div>
	<?php
 echo '<input type="hidden" name="pid" value="'.$_SESSION["uid"].'"/>'; ?>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Pose Task</button>
	<button class="btn btn-lg btn-primary btn-block" id="cancel" type="button">Cancel</button>
</form>
</div>
</body>
</html>