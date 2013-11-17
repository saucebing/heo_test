<?php
class TaskInfoModel extends Model{
	protected $_validate = array(
		array('type','require','No Task Type'),
		array('title','require','No Task Title'),
		array('taskgpp','number','GPP must be a number'),
		array('taskgpp','checkGPP','Your GPP is not enough',0,'function'),
		);
}
function checkGPP()
{
	$GPP = $_POST["taskgpp"];
	$SQL = new Model();
	$Data = $SQL->query('select sum(taskgpp) as taskgpp from think_task_info where pid="'.$_SESSION["uid"].'"');
	$usedGPP = 0;
	if($Data)
		$usedGPP = $Data[0]["taskgpp"];
	$Data = $SQL->query('select gpp from think_user_info where uid="'.$_SESSION["uid"].'"');
	$totalGPP = 0;
	if($Data)
		$totalGPP = $Data[0]["gpp"];
	if($GPP + $usedGPP > $totalGPP)
		return false;
	else
		return true;
}
?>
