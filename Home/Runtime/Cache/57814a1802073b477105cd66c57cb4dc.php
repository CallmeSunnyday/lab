<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>注册</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/reg.css" />
		<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
	<script>
		$(function(){
		
			var error1=new Array();
			$('input[name="username"]').blur(function(){
				var username=$(this).val();
				if(username.length!=0)
				{
				$.get('__URL__/checkName',{'username':username},function(data){
					if(data=='用户名已被注册'){
						error1['username']=1;
						$('#umessage').css("color","red").text('该用户名已经注册');
					}else{
						error1['username']=0;
						$('#umessage').css("color","#999").text('用户名可用');
					}
				});
				}
				else{$('#umessage').css("color","#999").text('仅限阿拉伯数字、下划线和英文大小写');}
			});
			
			
			//检查密码长度
			var error2=new Array();	
			$('input[name="password"]').blur(function(){
				var password=$(this).val();
				if(password.length<6 && password.length>0){
					error2['passowrd1']=1;
					$('#pmessage1').css("color","red").text("密码长度少于6位！");
				}else if(password.length==0){
					error2['password1']=1;
					$('#pmessage1').css("color","#999").text("不少于六位数");
				}else{
					error2['password1']=0;
					$('#pmessage1').css("color","#999").text("密码可用");
				}
			});
			
			//检查密码一致性
			var error3=new Array();	
			$('input[name="repassword"]').blur(function(){
				var password=$('input[name="password"]').val();
				var repassword=$(this).val();
				if(password!==repassword){
					error3['password2']=1;
					$('#pmessage2').css("color","red").text("两次密码输入不一致！");
				}else{
					error3['password2']=0;
					$('#pmessage2').css("color","#999").text("密码输入一致");
				}
			});
			
			
		
		
			//检验手机号码（1开头11位）
			var error4=new Array();
			$(function(){
				
				$('input[name="tel"]').blur(function(){
					var phoneNum=$(this).val();
					var reg=/^1\d{10}$/;
					if(reg.test(phoneNum)){
						error4=0;
						$('#nmessage').css("color","#999").text("Ok!");
					}else{
						error4=1;
						$('#nmessage').css("color","red").text("请输入11位有效手机号码！");
					}
					if(phoneNum.length==0){
						$('#nmessage').css("color","#999").text("请留下11位有效号码");
					}
				})
				
			})
			
			
			
			//提交表单
			$('div.register').click(function(){
				if(error1['username']==1 || error2['password1']==1 || error3['password2']==1 ||error4==1){
					return false;
				}else{
					$('form[name="myForm"]').submit();
				}
			});
		
	
			//重置按钮
			$('div.reset').click(function(){
				$('input').val('');
				var radio=new Array();
				radio=document.getElementsByClassName('radio');
				for(i=0;i<radio.length;i++)
				{
				radio[i].checked=false;
				}
			}
		
			)
		
		
		
	});
	</script>
	
    
    <!--隐藏/显示职业详情填写-->
    <script type="text/javascript">
		function ShowAdmin(){
	 		var s=document.getElementsByName("job");
	  	 	if  (s[1].checked){		
				$('#job_detail').slideDown(300);
			
			}else{
				$('#job_detail').slideUp(300);
				$('#job_detail').children().val("");	
				document.getElementById('DC').checked=false;
				document.getElementById('PG').checked=false;
			}
		}
	</script>
    
	</head>
	<body>
		<form action='__URL__/doReg' method='post' name='myForm'>
		   <span class="title">登录用户名：</span><input type='text' name='username' onkeyup="value=value.replace(/[^\w\.\/]/ig,'')"/> <span id="umessage">仅限阿拉伯数字、下划线和英文大小写</span><br/>
			<span class="title">真实姓名：</span><input type='text' name='truename'/><br/>
			 <span class="title"> 密码：</span><input type='password' name='password' /> <span id="pmessage1">不少于六位数</span><br/>
		<span class="title">确认密码：</span><input type='password' name='repassword' /><span id="pmessage2"></span><br/>
			   <span class="title">性别：</span><input type='radio' name='sex' value='1' class='radio'/>男
			      <input type='radio' name='sex' value='0' class='radio' />女</div><br/>
			    <span class="title">单位：</span><input type='text' name='unit'/><br/>
		   <span class="title">学院（部门)：</span><input type='text' name='department'/><br/>
		 <span class="title">注册身份：：</span><input type='radio' name='job' value='1' class='radio' checked="checked" onclick="ShowAdmin()"/>老师
			      <input type='radio' name='job' value='2' class='radio' onclick="ShowAdmin()" id="student"/>学生
			      <input type='radio' name='job' value='0' class='radio' onclick="ShowAdmin()"/>其它</div><br/>
                  
		          <div id="job_detail" style="display:none"> 
                 	 <span class="title">学历：</span><input type='radio' name='degree' value='2' class='radio' id="DC"/>博士
			      								  <input type='radio' name='degree' value='1' class='radio' id="PG"/>硕士<br/>
					 <span class="title">导师：</span><input type='text' name='tutor'/><br/>
					 <span class="title">年级：</span><input type='text' name='grade'/><br/> 
		     	  </div>
                    
                     <span class="title">课题负责人：</span><input type='text' name='principal'/><br/> 
		      <span class="title">联系电话：</span><input type='text' name='tel' onkeyup="value=this.value.replace(/\D+/g,'')"/> <span id="nmessage">请留下11位有效号码</span><br/>
		        <span class="title"> 邮箱：</span><input type='text' name='mail'/><br/> 
			<span class="title">验 证 码：</span><input type='text' name='code'/><br/>
					 <div style="position:relative;top:-40px;right:-305px;"> <img src='__APP__/Public/code?w=60&h=30' onclick='this.src=this.src+"?"+Math.random()'/>	 </div> 
				      <br/>
            
		</form>
        
        <div class="button">
			<div class='register'>注册</div>
			<div class='reset'>重置</div>
            </div>
	</body>
</html>