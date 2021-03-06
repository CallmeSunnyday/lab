$(function(){

	//iframe获取宽高
	iframeRight($('#right'));
	$(window).resize(function(){
		iframeRight($('#right'));
	});
	
	function iframeRight(obj){
		var width=document.documentElement.clientWidth;
		var height=document.documentElement.clientHeight;
	   	if($('#left').width() == 190){
	   		var new_width=Math.floor(width-200);
	   	}else{
	   		var new_width=Math.floor(width-16);
	   	}
	   	var new_height=Math.floor(height-53);
	   	obj.css({'width':new_width+'px','height':new_height+'px'});
	}

	function fullRight(obj){
		var width=document.documentElement.clientWidth;
		if($('#left').width() == 190){
			var new_width=Math.floor(width-16);
		}else{
			var new_width=Math.floor(width-200);
		}
		return new_width;
	}

	//全屏按钮获取高度 左侧高度自动获取
	fullScreen($('.l_dragbar_mid'));
	$(window).resize(function(){
		fullScreen($('.l_dragbar_mid'));
	});
	function fullScreen(obj){
		var height=document.documentElement.clientHeight
		var new_height=Math.floor((height-53-78)/2);
		var left_height=Math.floor(height-53);
		$('#left').css('height',left_height);
		obj.css({'top':new_height+'px'});
	}

	//导航切换
	$('.t_menu li').click(function(){
		var index = $(this).index();
		$('#left .l_menu').hide().find('a').removeClass('hover');
		$('#left .l_menu').eq(index).find('li:first a').addClass('hover');
		$('#left .l_menu').eq(index).show(0,function(){
			var a = $(this).find('li:first a').attr('href');
			parent.iframe.location=a;//跳转到iframe里面
		});
	});

	//左侧导航效果
	$('.l_menu li,.t_menu li').click(function(){
		$(this).siblings('li').find('a').removeClass('hover');
		$(this).find('a').addClass('hover');
	});

	//右侧全屏
	$('.l_dragbar_mid').toggle(function(){
		$("#left").animate({width:6},150);
		$('#right').animate({
			width:fullRight('#right')
		},150);
	},function(){
		$("#left").animate({width:190},150);
		$('#right').animate({
			width:fullRight('#right')
		},150);
	});


	//去除a链接点击时出现的虚线框
    $('a').focus(function(){
        return $(this).blur();
    });

});
