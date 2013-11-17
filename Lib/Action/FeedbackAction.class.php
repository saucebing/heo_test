<?php
class FeedbackAction extends Action
{
	public function feedback()
	{
		$SQL = new Model();
		$sql = 'select username from think_user_info where uid = "'.$_SESSION["uid"].'"';
		$Data = $SQL->query($sql);
		$USERNAME = $Data[0]["username"];
		$CONTENT = $_POST["content"];
		if($CONTENT != "")
		{
			$sql2 = 'insert into think_feedback(uid,username,content) values("'.$_SESSION["uid"].'","'.$USERNAME.'","'.$CONTENT.'")';
			$Data = $SQL->execute($sql2);
			if($Data)
			{
				$this->success("Feed back successfully.Thank you!","__ROOT__/index.php/Index/index");
			}
			else
			{
				$this->error("error","__ROOT__/index.php/Index/index");
			}
		}
		else
			$this->error("Please input the feedback content","__ROOT__/index.php/Index/index");
	}
}
?>
