<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="电子科技大学，核磁共振，研究中心">
<meta name="/x.copyright" content="作者：木盒设计工作室 版权归电子科技大学校艺术团木盒设计工作室所有">
<meta name="description" content="电子科技大学核磁共振研究中心">
<title>电子科技大学核磁共振研究中心</title>
<link rel="shortcut icon" href="__PUBLIC__/Images/20141203072011410_easyicon_net_128.ico"/>
<link rel="stylesheet" href="__PUBLIC__/Css/Index/base.css"/>

<!--navigation-->

<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Index/jquery.nicenav.js"></script>

<script type="text/javascript">
      $(function(){  
		$(".supnav").mouseover(function(){
			$(this).children("ul").delay(200).slideDown(100);
			
			
			})
		  
		  	
		$(".supnav").mouseleave(function(){
			$(this).children("ul").stop(true,true).slideUp(200);
			
			
			})
				
	
		
		  })

</script>
<!--navigation-->

</head>

<body>
<div id="header">
  <header>
    <!--页首开始-->
    <div id="topline">
    </div>
    <!--导航开始-->
    <div class="topWrap">
    <figure id="logo">
    <img class="logo" src="__PUBLIC__/Images/校徽.jpg" alt="校徽"/>
    </figure>
      <div id="headline">
        <h2>电子科技大学</h2>
        <h1>核磁共振研究中心</h1>
      </div>
    </div>
  <div class="navheader">
	
    <!--导航栏-->
    <div class="menu">
		<ul id="nav">
			<li class="supnav"><a class="cur" href="__URL__/index" style="background:#23a96f;color:#fff;">首页</a></li>
			<li class="supnav"><a href="__URL__/brief">科研团队</a></li>
			<li class="supnav"><a href="__URL__/listpaper">重要论文</a></li>
			<li class="supnav"><a href="#">开放基金</a></li>
			<li class="supnav"><a href="#">Lab年报</a>
               <ul class="subnav">
                   <li><a href="#">二级菜单</a></li>
                   <li><a href="#">二级菜单</a></li>
                   <li><a href="#">二级菜单</a></li>
                   <li><a href="#">二级菜单</a></li>
                </ul>
      
            </li>
			<li class="supnav"><a href="#">成果展示</a>
          	    <ul class="subnav">
                   <li><a href="#">二级菜单</a></li>
                   <li><a href="#">二级菜单</a></li>
                   <li><a href="#">二级菜单</a></li>
                   <li><a href="#">二级菜单</a></li>
                </ul>
      
            </li>
			<li class="supnav"><a href="#">关于实验室</a>
            	<ul class="subnav">
                   <li><a href="#">二级菜单</a></li>
                   <li><a href="#">二级菜单</a></li>
                   <li><a href="#">二级菜单</a></li>
                   <li><a href="#">二级菜单</a></li>
                </ul>
            </li>
		</ul>
		<div id="navLibg"></div>
	</div>
	
	<script type="text/javascript">
	$.nicenav(300);
	</script>
	
    <!--导航栏ends-->
    
</div>


</div>
 
  <!--导航结束-->
  </header>
  </div>
  <!--页首结束-->

<!--主体部分开始-->
<div class="container">
    <h2 style="text-align:left"><?php switch($no["parentid"]): case "1": ?>焦点新闻<?php break; case "2": ?>综合新闻<?php break; case "3": ?>通知公告<?php break; case "4": ?>重要论文<?php break; endswitch;?></h2>
    <div class="lecture">
         <div class="lecture_title">
	<input type='hidden' name='id' value="<?php echo ($no["id"]); ?>"/>
              <h3 class="lecture_detail_title"  style="font-size:25px;"><?php echo ($no["title"]); ?></h3>
              <p  class="lecture_detail_info" ><?php echo ($no["date"]); ?></p><span class="lecture_detail_author"><?php echo ($no["editor"]); ?></span>
          </div>
         <div class="lecture_detail"  style="margin-top:50px;text-align:left;min-height:160px"><?php echo ($no["content"]); ?></div>
     </div>
</div>
<!--页脚开始-->
   
  <footer>
  
  <!--友情链接1-->
  <div id="footerWrap">
  <div class="link">
  <h3>友情链接</h3>
    <ul>
      <li><a href="#">电子科大官网</a></li>
      <li><a href="#">生命学院官网</a></li>
      <li><a href="#">百度百科词条</a></li>
    </ul>
  </div>
  <div class="link">
  <h3>功能模块</h3>
    <ul>
      <li><a href="__ROOT__/default.php/Index/index">预约系统</a></li>
      <li><a href="__ROOT__/admin.php/Index/index">后台管理</a></li>
      <li><a href="#">联系站长</a></li>
    </ul>
  </div>
  <div class="link">
  <h3>关于实验室</h3>
    <ul>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">手机版</a></li>
      <li><a href="#">投诉建议</a></li>
    </ul>
  </div>
  </div>
  <p><small>©  2014  MUHESTUDIO.net    All Rights Reserved.<br/>木盒设计工作室    版权所有</small>
  </p>
  </footer>
</body>
</html>