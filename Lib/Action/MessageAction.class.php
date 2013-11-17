<?php
class MessageAction extends Action
{
	public function sendMessage()
	{
		$Data = D('Message');
		if($Data->create())
		{
			if($Data->add())
			{
				$MTYPE = $_POST["mtype"];
				if($MTYPE == "1000")
					$this->success("Send Message Successfully","__ROOT__/index.php/Index/index");
				else if($MTYPE == "10" || $MTYPE == "20")	//cancel posed task
					$this->success("Send Request Successfully","__ROOT__/index.php/Index/index");
			}
			else
			{
				$this->error("Operate error");
			}
		}
		else
		{
			$this->error($Data->getError());
		}
	}

	public function viewMessage()
	{
		$SQL = new Model();
		$where = 'from think_message,think_user_info where think_message.msid = think_user_info.uid and mrid = "'.$_SESSION["uid"].'"';
		$sql = 'select * '.$where;
		$sql2 = 'select count(*) as count '.$where;
		$Data = $SQL->query($sql);
		$count = $SQL->query($sql2);
		if($Data)
		{
			$this->assign('message',$Data);
			$this->assign('message_count',$count);
			$this->display('Index:index');
		}
		else
		{
			$this->error("error");
			//$this->display('Index:index');
		}
	}
}
?>
