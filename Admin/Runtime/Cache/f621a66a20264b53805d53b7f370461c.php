<?php if (!defined('THINK_PATH')) exit();?><!doctype html><html><head><meta charset="utf-8"><title>焦点关注</title></head><body><!doctype html><html><head><meta charset="utf-8"><link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Admin/Edittool.css" /><script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script><!--<script src="__PUBLIC__/ckeditor/ckeditor.js" type="text/javascript"></script><script src="__PUBLIC__/ckfinder/ckfinder.js" type="text/javascript"></script>--><script type="text/javascript" src="__PUBLIC__/ckeditor/ckeditor.js"></script><script type="text/javascript" src="__PUBLIC__/ckfinder/ckfinder.js"></script><title>编辑新闻</title><script type="text/javascript">  $(document).ready(function(){
    $("#s1").click(function(){
      $("#add_to_s").toggle();
    })
  
  })

 
</script><script>$(function(){
				var error=new Array();	
				error[0]=1;
				error[1]=1;
				
			$('#title').blur(function(){
				var t=$('#title').val();
				if(t==0){
					error[0]=1;
					$('#warn1').css("display","inline").css("color","red").css("font-size","12px").text("请填写题目~");
				}
				else
				{
					error[0]=0;
					$('#warn1').css("display","none");
				}
			});
			
			
		
			$('#author').blur(function(){
				var a=$('#author').val();
				if(a==0){
					error[1]=1;
					$('#warn2').css("display","inline").css("color","red").css("font-size","12px").text("请填写作者~");
				}
				else
				{
					error[1]=0;
					$('#warn2').css("display","none");
				}
			});

				$('#summary').blur(function(){
				var a=$('#author').val();
				if(a==0){
					error[1]=1;
					$('#warn3').css("display","inline").css("color","red").css("font-size","12px").text("请填写简介~");
				}
				else
				{
					error[1]=0;
					$('#warn3').css("display","none");
				}
			});
			
			
				$('.submit').click(function(){
				if(error[0]==0 && error[1]==0){
					$('.content').submit();
				}else{
					alert("请完善信息!");return false;
				}
			});
					
			
			});
</script></head><body><!--container begin--><div class="container_wrapper"><!--each edit section begin--><!--section No.1 begin--><h3>编辑新闻</h3><div class="edit_section" ><form class="content" action='__URL__/ListNewsEditadd' method='post' name='content'><div class="art_title" ><p>标题</p><input type="text" class="title" name="title" id="title"/><span id="warn1" class="warm" style="display:none;"></span></div><div class="art_title" ><p>作者</p><input type="text" class="title" name="editor" id="author"/><span id="warn2" class="warm" style="display:none;"></span></div><div class="art_title" ><p>简介</p><input  placeholder="请填写50字以内简介" type="text" class="title" name="metacontent" id="metacontent"/><span id="warn3" class="warm" style="display:none;"></span></div></br></br><div class="new"><textarea name="myEditor" id="myEditor" ></textarea><script>CKEDITOR.replace( 'myEditor',
{
filebrowserBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html',
filebrowserImageBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Flash',
filebrowserUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
</script><input class="submit" type="submit" value="提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交"></div></div><!--<div class="edit_section_describ"><p>新闻内容</p><textarea type="text" class="describ" placeholder="在此编辑新闻内容."></textarea> 对应banner 下面的文字描述内容
       
     </div>--></form><!--section No.1 end--></body></html></body></html>