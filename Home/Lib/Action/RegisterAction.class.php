<?php
	class RegisterAction extends Action{
		public function reg(){
			$this->display();
		}
		//检查用户是否注册过
		public function checkName(){
			$username=$_GET['username'];
			$user=M('User');
			$where['username']=$username;
			$count=$user->where($where)->count();
			if($count){
				echo '用户名已被注册';
			}else{
				echo '可以注册';
			}
		}
		//注册
		public function doReg(){
			$username=$_POST['username'];
			$truename=$_POST['truename'];
			$password=md5($_POST['password']);
			$repassword=$_POST['repassword'];
			$sex=$_POST['sex'];
			$unit=$_POST['unit'];
			$department=$_POST['department'];
			$job=$_POST['job'];
			$degree=$_POST['degree'];
			$tutor=$_POST['tutor'];
			$grade=$_POST['grade'];
			$principal=$_POST['principal'];
			$tel=$_POST['tel'];
			$mail=$_POST['mail'];
			
			$user=M('User');
			$data['username']=$username;
			$data['truename']=$truename;
			$data['password']=$password;
			$data['truename']=$truename;
			$data['sex']=$sex;
			$data['unit']=$unit;
			$data['department']=$department;
			$data['job']=$job;
			$data['degree']=$degree;
			$data['tutor']=$tutor;
			$data['grade']=$grade;
			$data['principal']=$principal;
			$data['tel']=$tel;
			$data['mail']=$mail;
			$lastId=$user->add($data);
			if($lastId){
				$this->success('注册成功','__APP__/Index/index');
			}else{
				$this->error('注册失败');
			}

		}
	}
?>
