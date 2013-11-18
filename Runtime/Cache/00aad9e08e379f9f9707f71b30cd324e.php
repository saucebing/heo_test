<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<link rel="stylesheet" type="text/css" href="__ROOT__/Public/css/Index_index.css"/>
		<script src="__ROOT__/Public/js/jquery-2.0.2.js"></script>
		<script src="__ROOT__/Public/js/Index_index.js"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{
				init_list(<?php echo (($count["0"]["count"])?($count["0"]["count"]):0); ?>,<?php echo (($user_count["0"]["count"])?($user_count["0"]["count"]):0); ?>,<?php echo (($message_count["0"]["count"])?($message_count["0"]["count"]):0); ?>,<?php echo (($ranking_count["0"]["count"])?($ranking_count["0"]["count"]):0); ?>);
			});
		</script>
	</head>
	<body>
		<div id="div1">
		<?php
 echo '<h3 id="username">user:'; echo $_SESSION["username"]; echo "</h3>"; echo '<h3 id="gpp">GPP:'; echo $_SESSION["gpp"]; echo "</h3>"; ?>
		</div>
		<br/>
		Welcome!
		<button id="logout" type="button">Log out</button>
		<button id="poseTask" type="button">Pose Task</button>
		<br/>
		<form method="post" action="__ROOT__/index.php/Task/viewTask">
		Type:
		<select name="type">
			<option value="all_type">All Type</option>
			<option value="Fetch the express">Fetch the express</option>
			<option value="Pack a meal">Pack a meal</option>
		</select>
		<br/>
		Search Key:
		<input type="text" name="key"/>
		<br/>
		Status:
		<select name="status">
			<option value="all_status">All Status</option>
			<option value="New Pose">New Pose</option>
			<option value="Received">Received</option>
			<option value="Accomplished">Accomplished</option>
			<option value="Excess Available">ExcessAvailable</option>
			<option value="Excess Accommplish">ExcessAccomplish</option>
		</select>
		<br/>
		<input type="submit" name="viewTask" value="View Task"/>
		<input type="submit" name="viewTask" value="View My Pose Task"/>
		<input type="submit" name="viewTask" value="View My Received Task"/>
		<br/>
		</form>
		<?php
 R('Display/task_list',array($count,$data)); ?>
		<br/>
		<hr/>
		Search Key:
		<form method="post" action="../Task/searchUser">
			<input type="text" id="user" name="user" value=""/>
			<input type="submit" value="Search User"/>
		</form>
		<?php
 R('Display/user_list',array($user_count,$user)); ?>
		<br/>
		<hr/>
		<p id="p_new_message">You have new message</p>
		<button type="button" id="viewMessage">View Message</button>
		<?php
 R('Display/message_list',array($message_count,$message)); ?>
		<br/>
		<hr/>
		<button type="button" id="viewRankingList">View Ranking List</button>
		<?php
 R('Display/ranking_list',array($ranking_count,$ranking)); ?>
		<br/>
		<hr/>
		<form method="post" action="../Feedback/feedback">
			Please input your advice:
			<input type="text" name="content"/>
			<input type="submit" value="Feed Back"/>
		</form>
		<br/>
		<hr/>
	</body>
</html>