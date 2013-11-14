<?php
class RegisterAction extends Action{
	public function register(){
		$Register = D('Customer');
		if($Register->create())
		{
			if($Register->add())
			{
				$this->success("Operate successfully","../Login/index");
			}
			else
			{
				$this->error("Operate error");
			}
		}
		else
		{
			$this->error($Register->getError());
		}
	}
}
?>
