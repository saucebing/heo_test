<?php
class LoginAction extends Action{
	public function login(){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$Login = new Model();
		if($Data = $Login->query("select password from think_customer where username=".$username))
		{
			$Password = $Data[0]["password"];
			if($Password == $password)
			{
				session_start();
				$_SESSION["username"] = $username;
				$_SESSION["login"] = 1;
				$this->success("Login successfully","../Index/index");
			}
			else
			{
				$this->error("Password error");
			}
		}
		else
		{
			$this->error("Username ".$username." not found");
		}
	}
}
?>
