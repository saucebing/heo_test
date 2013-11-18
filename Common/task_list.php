<?php
function task_list($count,$data)
{
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
		{
			echo '<form method="post" action="__ROOT__/index.php/Task/receiveTask">';
			echo '<input type="hidden" class="task_info'.$i.'" name="tid" value="'.$data[$i]["tid"].'"/>';
			echo '<input type="submit" class="task_info'.$i.'" value="Receive This Task"/>';
			echo '</form>';
		}
		else if($data[$i]["pid"] == $_SESSION["uid"] && $data[$i]["rid"] == -1)
		{
			echo '<form method="post" action="__ROOT__/index.php/Task/deleteTask">';
			echo '<input type="hidden" class="task_info'.$i.'" name="tid" value="'.$data[$i]["tid"].'"/>';
			echo '<input type="submit" class="task_info'.$i.'" value="Delete This Task"/>';
			echo '</form>';
		}
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
}
?>
