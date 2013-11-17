<html>
	<head>
		<link rel="stylesheet" type="text/css" href="__ROOT__/Public/css/Index_index.css"/>
		<script src="__ROOT__/Public/js/jquery-2.0.2.js"></script>
		<script src="__ROOT__/Public/js/Index_index.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			<?php
			$Count = $count[0]["count"];
			for($i = 0 ; $i < $Count ; $i ++)
				echo '$(".task_toggle'.$i.'").click(function(){$(".task_info'.$i.'").slideToggle();});';
			?>
			});
		</script>
		<script>
			$(document).ready(function(){
			<?php
			$Count = $count[0]["count"];
			for($i = 0 ; $i < $Count ; $i ++)
				echo '$("#receive_task'.$i.'").click(function(){window.location.href="__ROOT__/index.php/Task/receiveTask/tid/'.$data[$i]["tid"].'";});';
			?>
			});
		</script>
		<script>
			$(document).ready(function(){
			<?php
			$Count = $count[0]["count"];
			for($i = 0 ; $i < $Count ; $i ++)
				echo '$("#delete_task'.$i.'").click(function(){window.location.href="__ROOT__/index.php/Task/deleteTask/tid/'.$data[$i]["tid"].'";});';
			?>
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
			<?php
			$UserCount = $user_count[0]["count"];
			for($i = 0 ; $i < $UserCount ; $i ++)
				echo '$(".user_toggle'.$i.'").click(function(){$(".user_info'.$i.'").slideToggle();});';
			?>
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
			<?php
			$MessageCount = $message_count[0]["count"];
			for($i = 0 ; $i < $MessageCount ; $i ++)
				echo '$(".message_toggle'.$i.'").click(function(){$(".message_info'.$i.'").slideToggle();});';
			?>
			});
		</script>
		<style type="text/css">
			<?php
			$Count = $count[0]["count"];
			for($i = 0 ; $i < $Count ; $i ++)
			echo '.task_info'.$i.'{display:None;}';
			?>
		</style>
		<style type="text/css">
			<?php
			$UserCount = $user_count[0]["count"];
			for($i = 0 ; $i < $UserCount ; $i ++)
			echo '.user_info'.$i.'{display:None;}';
			?>
		</style>
		<style type="text/css">
			<?php
			$MessageCount = $message_count[0]["count"];
			for($i = 0 ; $i < $MessageCount ; $i ++)
			echo '.message_info'.$i.'{display:None;}';
			?>
		</style>
	</head>
	<body>
		<div id="div1">
		<?php
			$SQL = new Model();
			$Data = $SQL->query('select * from think_user_info where uid="'.$_SESSION["uid"].'"');
			if($Data)
			{
				echo '<h3 id="username">user:';
				echo $Data[0]["username"];
				echo "</h3>";
				echo '<h3 id="gpp">GPP:';
				echo $Data[0]["gpp"];
				echo "</h3>";
			}
		?>
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
			echo '<table id="task_list">';
			$Count = $count[0]["count"];
			for($i = 0 ; $i < $Count ; $i ++)
			{
				echo '<tr class="task_tr"><td class="task_td"><div>';
				echo '<p class="task_toggle'.$i.'">Task tile:'.$data[$i]["title"].'</p>';
				echo '<p class="task_info'.$i.'">Task description:'.$data[$i]["description"].'</p>';
				echo '<p class="task_info'.$i.'">Task Poser:'.$data[$i]["poser_name"].'</p>';
				echo '<p class="task_info'.$i.'">Task GPP:'.$data[$i]["taskgpp"].'</p>';
				echo '<p class="task_info'.$i.'">Task Note:'.$data[$i]["note"].'</p>';
				echo '<p class="task_info'.$i.'">Task Status:'.$data[$i]["status"].'</p>';
				if($data[$i]["rid"] != -1)
				{
					echo '<p class="task_info'.$i.'">Task Receiver:'.$data[$i]["receiver_name"].'</p>';
				}
				if($data[$i]["rid"] == -1 && $data[$i]["pid"] != $_SESSION["uid"])
					echo '<button id="receive_task'.$i.'" class="task_info'.$i.'">Receive This Task'.'</button>';
				else if($data[$i]["pid"] == $_SESSION["uid"] && $data[$i]["rid"] == -1)
					echo '<button id="delete_task'.$i.'" class="task_info'.$i.'">Delete This Task'.'</button>';
				else if($data[$i]["pid"] == $_SESSION["uid"] && $data[$i]["rid"] != -1)
				{
					echo '<form method="post" action="__ROOT__/index.php/Message/sendMessage">';
					echo '<input type="hidden" class="task_info'.$i.'" name="content" value="Cancel Posed Task"/>';
					echo '<input type="hidden" class="task_info'.$i.'" name="msid" value="'.$_SESSION["uid"].'"/>';
					echo '<input type="hidden" class="task_info'.$i.'" name="mrid" value="'.$data[$i]["rid"].'"/>';
					echo '<input type="hidden" class="task_info'.$i.'" name="mtid" value="'.$data[$i]["tid"].'"/>';
					echo '<input type="hidden" class="task_info'.$i.'" name="mtype" value="10"/>';
					echo '<input type="submit" class="task_info'.$i.'" value="Cancel Posed Task"/>';
					echo '</form>';
				}
				else if($data[$i]["rid"] == $_SESSION["uid"])
				{
					echo '<form method="post" action="__ROOT__/index.php/Message/sendMessage">';
					echo '<input type="hidden" class="task_info'.$i.'" name="content" value="Cancel Received Task"/>';
					echo '<input type="hidden" class="task_info'.$i.'" name="msid" value="'.$_SESSION["uid"].'"/>';
					echo '<input type="hidden" class="task_info'.$i.'" name="mrid" value="'.$data[$i]["pid"].'"/>';
					echo '<input type="hidden" class="task_info'.$i.'" name="mtid" value="'.$data[$i]["tid"].'"/>';
					echo '<input type="hidden" class="task_info'.$i.'" name="mtype" value="20"/>';
					echo '<input type="submit" class="task_info'.$i.'" value="Cancel Received Task"/>';
					echo '</form>';
				}
				echo '</div></td></tr>';
			}
			echo "</table>";
		?>
		<br/>
		<hr/>
		Search Key:
		<form method="post" action="../Task/searchUser">
			<input type="text" id="user" name="user" value=""/>
			<input type="submit" value="Search User"/>
		</form>
		<?php
			echo '<table id="user_list">';
			$UserCount = $user_count[0]["count"];
			for($i = 0 ; $i < $UserCount ; $i ++)
			{
				echo '<tr class="user_tr"><td class="user_td"><div>';
				echo '<p class="user_toggle'.$i.'">Username:'.$user[$i]["username"].'</p>';
				echo '<p class="user_info'.$i.'">Gender: '.$user[$i]["gender"].'</p>';
				echo '<p class="user_info'.$i.'">Email:'.$user[$i]["email"].'</p>';
				echo '<p class="user_info'.$i.'">Area: '.$user[$i]["area"].'</p>';
				echo '<p class="user_info'.$i.'">GPP: '.$user[$i]["gpp"].'</p>';
				if($user[$i]["uid"] != $_SESSION["uid"])
				{
					echo '<form method="post" action="__ROOT__/index.php/Message/sendMessage">';
					echo '<input type="text" class="user_info'.$i.'" name="content"/>';
					echo '<input type="hidden" class="user_info'.$i.'" name="msid" value="'.$_SESSION["uid"].'"/>';
					echo '<input type="hidden" class="user_info'.$i.'" name="mrid" value="'.$user[$i]["uid"].'"/>';
					echo '<input type="hidden" class="user_info'.$i.'" name="mtid" value="-1"/>';
					echo '<input type="hidden" class="user_info'.$i.'" name="mtype" value="1000"/>';
					echo '<input type="submit" class="user_info'.$i.'" value="send"/>';
					echo '</form>';
				}
				echo '</div></td></tr>';
			}
			echo "</table>";
		?>
		<br/>
		<hr/>
		<button type="button" id="viewMessage">View Message</button>
		<?php
			echo '<table id="message_list">';
			$MessageCount = $message_count[0]["count"];
			for($i = 0 ; $i < $MessageCount ; $i ++)
			{
				echo '<tr class="message_tr"><td class="message_td"><div>';
				echo '<p class="message_toggle'.$i.'">'.$message[$i]["username"].':'.$message[$i]["content"].'</p>';
				if($message[$i]["mtype"] == "1000")
				{
					echo '<form method="post" action="__ROOT__/index.php/Message/sendMessage">';
					echo '<input type="text" class="message_info'.$i.'" name="content"/>';
					echo '<input type="hidden" class="message_info'.$i.'" name="msid" value="'.$_SESSION["uid"].'"/>';
					echo '<input type="hidden" class="message_info'.$i.'" name="mrid" value="'.$message[$i]["msid"].'"/>';
					echo '<input type="hidden" class="message_info'.$i.'" name="mtid" value="-1"/>';
					echo '<input type="hidden" class="message_info'.$i.'" name="mtype" value="1000"/>';
					echo '<input type="submit" class="message_info'.$i.'" value="send"/>';
					echo '</form>';
				}
				else
				{
					echo '<button id="agree_cancel_task'.$i.'" class="message_info'.$i.'">Agree'.'</button>';
					echo '<button id="disagree_cancel_task'.$i.'" class="message_info'.$i.'">Disagree'.'</button>';
				}
				echo '</div></td></tr>';
			}
			echo "</table>";
		?>
		<br/>
	</body>
</html>
