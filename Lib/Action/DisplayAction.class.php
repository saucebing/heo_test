<?php
class DisplayAction extends Action{
	public function task_list($count,$data)
	{
		echo '<table id="task_list">';
		$Count = $count[0]["count"];
		for($i = 0 ; $i < $Count ; $i ++)
		{
			echo '<tr class="task_tr"><td class="task_td"><div>';
			echo '<p class="task_toggle'.$i.'">Task tile:'.$data[$i]["title"].'</p>';
			echo '<p class="task_info'.$i.'">Task description:'.$data[$i]["description"].'</p>';
			echo '<p class="task_info'.$i.'">Task available time:'.$data[$i]["availabletime"].'</p>';
			echo '<p class="task_info'.$i.'">Task accomplish time:'.$data[$i]["accomplishtime"].'</p>';
			echo '<p class="task_info'.$i.'">Task Poser:'.$data[$i]["poser_name"].'</p>';
			echo '<p class="task_info'.$i.'">Task GPP:'.$data[$i]["taskgpp"].'</p>';
			echo '<p class="task_info'.$i.'">Task Note:'.$data[$i]["note"].'</p>';
			echo '<p class="task_info'.$i.'">Task Status:'.$data[$i]["status"].'</p>';
			if($data[$i]["rid"] != -1)
			{
				echo '<p class="task_info'.$i.'">Task Receiver:'.$data[$i]["receiver_name"].'</p>';
			}
			if($data[$i]["rid"] == -1 && $data[$i]["pid"] != $_SESSION["uid"] && $date[$i]["status"] == "Now Pose")
			{
				echo '<form method="post" action="__ROOT__/index.php/Task/receiveTask">';
				echo '<input type="hidden" class="task_info'.$i.'" name="tid" value="'.$data[$i]["tid"].'"/>';
				echo '<input type="submit" class="task_info'.$i.'" value="Receive This Task"/>';
				echo '</form>';
			}
			else if($data[$i]["pid"] == $_SESSION["uid"] && $data[$i]["rid"] == -1 && $data[$i]["status"] != "Accomplished")
			{
				echo '<form method="post" action="__ROOT__/index.php/Task/deleteTask">';
				echo '<input type="hidden" class="task_info'.$i.'" name="tid" value="'.$data[$i]["tid"].'"/>';
				echo '<input type="submit" class="task_info'.$i.'" value="Delete This Task"/>';
				echo '</form>';
			}
			else if($data[$i]["pid"] == $_SESSION["uid"] && $data[$i]["rid"] != -1 && $data[$i]["status"] == "Received")
			{
				echo '<form method="post" action="__ROOT__/index.php/Message/sendMessage">';
				echo '<input type="hidden" class="task_info'.$i.'" name="content" value="Cancel Posed Task"/>';
				echo '<input type="hidden" class="task_info'.$i.'" name="msid" value="'.$_SESSION["uid"].'"/>';
				echo '<input type="hidden" class="task_info'.$i.'" name="mrid" value="'.$data[$i]["rid"].'"/>';
				echo '<input type="hidden" class="task_info'.$i.'" name="mtid" value="'.$data[$i]["tid"].'"/>';
				echo '<input type="hidden" class="task_info'.$i.'" name="mtype" value="10"/>';
				echo '<input type="submit" class="task_info'.$i.'" value="Cancel Posed Task"/>';
				echo '</form>';

				echo '<form method="post" action="__ROOT__/index.php/Task/accomplishTask">';
				echo '<input type="hidden" class="task_info'.$i.'" name="tid" value="'.$data[$i]["tid"].'"/>';
				echo '<input type="submit" class="task_info'.$i.'" value="Accompish Task"/>';
				echo '</form>';
			}
			else if($data[$i]["rid"] == $_SESSION["uid"] && $data[$i]["status"] == "Received")
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

			echo '<form method="post" action="__ROOT__/index.php/Prosecute/prosecute">';
			echo '<input type="hidden" class="task_info'.$i.'" name="prosid" value="'.$_SESSION["uid"].'"/>';
			echo '<input type="hidden" class="task_info'.$i.'" name="prorid" value="-1"/>';
			echo '<input type="hidden" class="task_info'.$i.'" name="protid" value="'.$data[$i]["tid"].'"/>';
			echo '<input type="text" class="task_info'.$i.'" name="proreason" value=""/>';
			echo '<input type="submit" class="task_info'.$i.'" value="Prosecute This Task"/>';
			echo '</form>';

			echo '</div></td></tr>';
		}
		echo '</table>';
	}

	public function user_list($user_count,$user)
	{
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

			echo '<form method="post" action="__ROOT__/index.php/Prosecute/prosecute">';
			echo '<input type="hidden" class="user_info'.$i.'" name="prosid" value="'.$_SESSION["uid"].'"/>';
			echo '<input type="hidden" class="user_info'.$i.'" name="prorid" value="'.$user[$i]["uid"].'"/>';
			echo '<input type="hidden" class="user_info'.$i.'" name="protid" value="-1"/>';
			echo '<input type="text" class="user_info'.$i.'" name="proreason" value=""/>';
			echo '<input type="submit" class="user_info'.$i.'" value="Prosecute This Task"/>';
			echo '</form>';

			echo '</div></td></tr>';
		}
		echo "</table>";
	}

	public function message_list($message_count,$message)
	{
		echo '<table id="message_list">';
		$MessageCount = $message_count[0]["count"];
		for($i = 0 ; $i < $MessageCount ; $i ++)
		{
			echo '<tr class="message_tr"><td class="message_td"><div>';
			echo '<p class="message_toggle'.$i.'">'.$message[$i]["username"].':'.$message[$i]["content"].'</p>';
			if($message[$i]["mtype"] == "1000" || $message[$i]["mtype"] == "1001")
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
			else if($message[$i]["mtype"] == "10" || $message[$i]["mtype"] == "20")
			{
				$SQL = new Model();
				$sql = 'select title from think_task_info where tid = "'.$message[$i]["mtid"].'"';
				$Data = $SQL->query($sql);
				echo '<p class="message_info'.$i.'">Title: '.$Data[0]["title"].'</p>';
				echo '<form method="post" action="__ROOT__/index.php/Task/agreeCancelTask">';
				echo '<input type="hidden" class="message_info'.$i.'" name="mid" value="'.$message[$i]["mid"].'"/>';
				echo '<input type="hidden" class="message_info'.$i.'" name="mtype" value="'.$message[$i]["mtype"].'"/>';
				echo '<input type="hidden" class="message_info'.$i.'" name="mtid" value="'.$message[$i]["mtid"].'"/>';
				echo '<input type="submit" class="message_info'.$i.'" value="Agree"/>';
				echo '</form>';

				echo '<form method="post" action="__ROOT__/index.php/Task/disagreeCancelTask">';
				echo '<input type="hidden" class="message_info'.$i.'" name="mid" value="'.$message[$i]["mid"].'"/>';
				echo '<input type="hidden" class="message_info'.$i.'" name="msid" value="'.$message[$i]["msid"].'"/>';
				echo '<input type="hidden" class="message_info'.$i.'" name="mtype" value="'.$message[$i]["mtype"].'"/>';
				echo '<input type="hidden" class="message_info'.$i.'" name="mtid" value="'.$message[$i]["mtid"].'"/>';
				echo '<input type="submit" class="message_info'.$i.'" value="Disagree"/>';
				echo '</form>';
			}
			echo '</div></td></tr>';
		}
		echo "</table>";
	}

	public function ranking_list($ranking_count,$ranking)
	{
		echo '<table id="ranking_list">';
		$RankingCount = $ranking_count[0]["count"];
		for($i = 0 ; $i < $RankingCount ; $i ++)
		{
			echo '<tr class="ranking_tr"><td class="ranking_td"><div>';
			echo '<p class="ranking_toggle'.$i.'">Username:'.$ranking[$i]["username"].'</p>';
			echo '<p class="ranking_info'.$i.'">Gender: '.$ranking[$i]["gender"].'</p>';
			echo '<p class="ranking_info'.$i.'">Email:'.$ranking[$i]["email"].'</p>';
			echo '<p class="ranking_info'.$i.'">Area: '.$ranking[$i]["area"].'</p>';
			echo '<p class="ranking_info'.$i.'">GPP: '.$ranking[$i]["gpp"].'</p>';
			if($ranking[$i]["uid"] != $_SESSION["uid"])
			{
				echo '<form method="post" action="__ROOT__/index.php/Message/sendMessage">';
				echo '<input type="text" class="ranking_info'.$i.'" name="content"/>';
				echo '<input type="hidden" class="ranking_info'.$i.'" name="msid" value="'.$_SESSION["uid"].'"/>';
				echo '<input type="hidden" class="ranking_info'.$i.'" name="mrid" value="'.$ranking[$i]["uid"].'"/>';
				echo '<input type="hidden" class="ranking_info'.$i.'" name="mtid" value="-1"/>';
				echo '<input type="hidden" class="ranking_info'.$i.'" name="mtype" value="1000"/>';
				echo '<input type="submit" class="ranking_info'.$i.'" value="send"/>';
				echo '</form>';
			}
			echo '</div></td></tr>';
		}
		echo '</table>';
	}
}
?>
