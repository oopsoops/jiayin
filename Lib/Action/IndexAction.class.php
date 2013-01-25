<?php
class IndexAction extends Action {

	public function login() {
		$loginname = $this->_post('loginname');
		$password = $this->_post('password');
		$Model = M('userinfo');
		$rs = $Model->getByLoginname($loginname);
		if($rs)
		{
			if($rs['password']==md5($password))
			{
				$_SESSION['username']=$rs['username'];
				$_SESSION['loginname']=$rs['loginname'];
				$roleModel = M('roletype');
				$role = $roleModel->getByTid($rs['typeid']);
				$_SESSION['rolename']=$role['rolename'];
				$_SESSION['power']=$role['power'];
				$_SESSION['menu']=$role['menu'];
				$this->redirect('__APP__/Index/center');
			} else {
				$this->error('对不起，您的密码有误！');	
			}
		} else {
			$this->error('对不起，您输入的用户名有误！');
		}
	}

	public function logout() {
		unset($_SESSION['username']);
		unset($_SESSION['loginname']);
		unset($_SESSION['rolename']);
		unset($_SESSION['power']);
		unset($_SESSION['menu']);
		$this->redirect('__APP__/Index/index');
    }

    public function index() {
		$this->display();
    }
	
    public function center() {
		$this->display();
    }

	public function fetch_data() {
		//$Model=M('');	
		$data[0]['code']="0";
		$data[0]['name']='<a href="#">name 0</a>';
		$data[0]['price']=0;
		
		$data[1]['code']='0';
		$data[1]['name']='name 0';
		$data[1]['price']=0;
		
		$data[2]['code']='0';
		$data[2]['name']='name 0';
		$data[2]['price']=0;
		
		$data[3]['code']='0';
		$data[3]['name']='name 0';
		$data[3]['price']=0;
		
		$data[4]['code']='0';
		$data[4]['name']='name 0';
		$data[4]['price']=0;
		
		echo dateToJson($data,100);
	}
	
}

?>