<?php
class RankingAction extends Action
{
	public function viewRankingList()
	{
		$SQL = new Model();
		$sql = "select * from think_user_info order by gpp desc,username limit 10";
		$Data = $SQL->query($sql);
		$count[0]["count"] = 10;
		if($Data)
		{
			$this->assign("ranking",$Data);
			$this->assign("ranking_count",$count);
			$this->display("Index:index");
		}
		else
		{
			$this->display("Index:index");
		}
	}
}
?>
