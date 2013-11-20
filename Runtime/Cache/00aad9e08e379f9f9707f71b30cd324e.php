<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<link rel="stylesheet" type="text/css" href="__ROOT__/Public/dist/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="__ROOT__/Public/css/Index_index.css"/>
		<script src="__ROOT__/Public/js/jquery-2.0.2.js"></script>
		<script type="text/javascript" src="__ROOT__/Public/dist/js/bootstrap.js"></script>
		<script src="__ROOT__/Public/js/Index_index.js"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{
				init_list(<?php echo (($count["0"]["count"])?($count["0"]["count"]):0); ?>,<?php echo (($user_count["0"]["count"])?($user_count["0"]["count"]):0); ?>,<?php echo (($message_count["0"]["count"])?($message_count["0"]["count"]):0); ?>,<?php echo (($ranking_count["0"]["count"])?($ranking_count["0"]["count"]):0); ?>);
			});
		</script>
	</head>
	<body>
		<div>
			<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">SYSU HEO</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<li class="active"><a href="../Index/index">Home</a></li>
			<li><a href="#">User Center</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Function<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="#">Pose Task</a></li>
			<li><a href="#">View Task</a></li>
			<li><a href="#">Delete Task</a></li>
			<li class="divider"></li>
			<li><a href="#">Search User</a></li>
			<li class="divider"></li>
			<li><a href="#">Prosecute</a></li>
			</ul>
			</li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><?php echo ($_SESSION["username"]); ?></a></li>
			<li><a href="#"><?php echo ($_SESSION["gpp"]); ?></a></li>
			<li><a id="logout" href="#">Logout</a></li>
			</ul>
			</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<div class="sidebar-nav">
					<ul class="nav nav-pills nav-stacked">
					<li class="nav-li"><a id="displayPoseTaskForm" href="#">Pose Task</a></li>
					<li class="nav-li"><a id="displayViewTaskForm" href="#">View Task</a></li>
					<li class="nav-li"><a id="displaySearchUserForm" href="#">Search User</a></li>
					<li class="nav-li"><a id="displayMessageForm" href="#">View Message</a></li>
					<li class="nav-li"><a id="displayRankingForm" href="#">View Ranking</a></li>
					<li class="nav-li"><a id="displaySubmissForm" href="#">Submiss</a></li>
					<li class="nav-li"><a id="displayFeedbackForm" href="#">Feedback Us</a></li>
					</ul>
					</div>
				</div>
				<div id="div1" class="col-lg-6">
					Welcome
					<div id="poseTask_div" class="list_div">
						<div>
						<form method="post" action="__URL__/poseTask" class="form-signin">
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
						</form>
						</div>
					</div>
					<div id="task_div" class="list_div">
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
					</div>
					<div id="user_div" class="list_div">
					<br/>
					<hr/>
					<h4>Search User Form:</h4>
					Search Key:
					<form method="post" action="../Task/searchUser">
						<input type="text" id="user" name="user" value=""/>
						<input type="submit" value="Search User"/>
					</form>
					<?php
 R('Display/user_list',array($user_count,$user)); ?>
					</div>
					<div id="message_div" class="list_div">
					<br/>
					<hr/>
					<h4>View Message Form:</h4>
					<p id="p_new_message">You have new message</p>
					<button type="button" id="viewMessage">View Message</button>
					<?php
 R('Display/message_list',array($message_count,$message)); ?>
					</div>
					<div id="ranking_div" class="list_div">
					<br/>
					<hr/>
					<h4>View Ranking List Form:</h4>
					<button type="button" id="viewRankingList">View Ranking List</button>
					<?php
 R('Display/ranking_list',array($ranking_count,$ranking)); ?>
					</div>
					<div id="feedback_div" class="list_div">
					<br/>
					<hr/>
					<h4>Feedback Form:</h4>
					<form method="post" action="../Feedback/feedback">
						Please input your advice:
						<input type="text" name="content"/>
						<input type="submit" value="Feed Back"/>
					</form>
					</div>
					<div id="submiss_div" class="list_div">
						Submiss Form
						<form method="post" action="__URL__/submiss">
							<textarea shape="rect" name="subcontent" cols="60" rows="40"/></textarea>
							<input type="submit" value="Submiss"/>
						</form>
				</div>
				<div class="col-lg-4">
					Welcome to SYSU
				</div>
			</div>
		</div>
	</body>
</html>