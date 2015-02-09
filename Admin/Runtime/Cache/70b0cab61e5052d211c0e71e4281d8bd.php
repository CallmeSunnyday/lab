<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head><meta charset="UTF-8">
<title>机时预约界面</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Admin/style.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Admin/animate.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Admin/animate.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Admin/common.css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/index.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js//tableRowCheckboxToggle.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.hDialog.js"></script>
<link rel="shortcut icon" href="__PUBLIC__/Images/logo.ico"/>

<!--拖动选择-->
<script language="JavaScript">
var curObj= null;
var isTrue =false;
function setSelectedBgColor()//设置选定行的背景色
{
	
	
	if(window.event.srcElement.tagName){
		isTrue =true;
 		if(window.event.srcElement.tagName=='TD'){ 
		//如果选中的是单元格
 		       curObj=window.event.srcElement.parentElement.firstChild;
		//获取其父级节点-表格行
 		       curObj.firstChild.checked=true;
		//设置背景色
  		 }
	}
	
	if(window.event.target.tagName){
		isTrue =true;
 		if(window.event.target.tagName=='TD'){ 
		//如果选中的是单元格
		       curObj=window.event.target.parentElement.firstChild;
		//获取其父级节点-表格行
  		      curObj.firstChild.checked=true;
		//设置背景色
 		  }
		  
	
		  
		  
}
	
	
}
</script>


<script type="text/javascript">
    function clearContent(myText){
		if(myText.style.color!="black"){
		myText.value='';
		myText.style.color="black";
		}
	}
</script>

<script type="text/javascript">
    function validateTel(){
		var myTel=document.getElementById("myTel");
		var val=myTel.value;
		if(val.length==0){
			myTel.value='请输入实验名称';
			myTel.style.color="#999";
		}
	}
</script>
<script type="text/javascript">
    function validateTel_s(){
		var myTel=document.getElementById("starttime");
		var val=myTel.value;
		if(val.length==0){
			myTel.value='开始时间';
			myTel.style.color="#999";
		}
	}
</script>
<script type="text/javascript">
    function validateTel_o(){
		var myTel=document.getElementById("overtime");
		var val=myTel.value;
		if(val.length==0){
			myTel.value='结束时间';
			myTel.style.color="#999";
		}
	}
</script>
<!--时间表隐藏-->

<!--页首时间段隐藏显示-->
 <script>setInterval("time.innerHTML=new Date().toLocaleString()+\'   星期\'+\'日一二三四五六\'.charAt(new Date().getDay());",1000);</script>
</head>

<body>
 <h2 style="color:#219E69;margin:0 auto;font-weight:bold;text-align:left;font-size:24px;">当时机时预约</h2>

   		<div id="clender">
   			 <div class="clearfix dome3_box">
             
             
             
             
        <!--日历 begin-->
        <div class="data_box" id="data_box">

 	<input style="display:none" value="<?php echo ($time_disable); ?>" id="to_get_time_disable" />
       
    		<form name="reserveDate" action="__APP__/Appointment/index" method="get" id="reserveDateForm" >
			<input type="text"  class="showDate" name="date" id="showDate" value="<?php echo ($time_date); ?>"  />
	    		<input type="submit"   id="toSubmitSelectedDate" value="查看所选日期可预约时间"/>
    </form>
   	   <div style="width:200px;margin:0 auto;margin-top:5px;">
        <span style="width:10px;height:22px;background:#fae0d7;display:block;float:left"></span><span style="float:left;line-height:22px;padding-left:5px;">已被预约</span>
        <span style="width:10px;height:22px;background:#dad9d9;display:block;float:left;margin-left:20px;"></span><span style="float:left;line-height:22px;padding-left:5px;">过期时间</span>
       </div>
     
         <div style="float:left;position:absoult;margin-left:-420px;margin-top:43px;font-size:16px;">设置不可预约时段:</div>
        
        <form id="myForm" action="__APP__/Appointment/submit" method="get">

     	    
 
            <p id="startTime">起始时间：</p>
            <select id="mySelectStartTime" name="startTime" style="size="5"">
			    <option value ="00:00:00">00:00</option>
 			    <option value ="00:30:00">00:30</option>
                <option value ="01:00:00">01:00</option>
                <option value ="01:30:00">01:30</option>
                <option value ="02:00:00">02:00</option>
 			    <option value ="02:30:00">02:30</option>
                <option value ="03:00:00">03:00</option>
                <option value ="03:30:00">03:30</option>
                <option value ="04:00:00">04:00</option>
 			    <option value ="04:30:00">04:30</option>
                <option value ="05:00:00">05:00</option>
                <option value ="05:30:00">05:30</option>
                <option value ="06:00:00">06:00</option>
 			    <option value ="06:30:00">06:30</option>
                <option value ="07:00:00">07:00</option>
                <option value ="07:30:00">07:30</option>
                <option value ="08:00:00">08:00</option>
                <option value ="08:30:00">08:30</option>
                <option value ="09:00:00">09:00</option>
                <option value ="09:30:00">09:30</option>
                <option value ="10:00:00">10:00</option>
 			    <option value ="10:30:00">10:30</option>
                <option value ="11:00:00">11:00</option>
                <option value ="11:30:00">11:30</option>
                <option value ="12:00:00">12:00</option>
                <option value ="12:30:00">12:30</option>
                <option value ="13:00:00">13:00</option>
 			    <option value ="13:30:00">13:30</option>
                <option value ="14:00:00">14:00</option>
                <option value ="14:30:00">14:30</option>
                <option value ="15:00:00">15:00</option>
 			    <option value ="15:30:00">15:30</option>
                <option value ="16:00:00">16:00</option>
                <option value ="16:30:00">16:30</option>
                <option value ="17:00:00">17:00</option>
 			    <option value ="17:30:00">17:30</option>
                <option value ="18:00:00">18:00</option>
                <option value ="18:30:00">18:30</option>
                <option value ="19:00:00">19:00</option>
                <option value ="19:30:00">19:30</option>
                <option value ="20:00:00">20:00</option>
                <option value ="20:30:00">20:30</option>
                <option value ="21:00:00">21:00</option>
 			    <option value ="21:30:00">21:30</option>
                <option value ="22:00:00">22:00</option>
                <option value ="22:30:00">22:30</option>
                <option value ="23:00:00">23:00</option>
                <option value ="23:30:00">23:30</option>

			</select>    
           
            
             <p id="startTime">结束时间：</p>
            <select id="mySelectEndTime" name="endTime">
				<option value ="00:00:00">00:00</option>
 			    <option value ="00:30:00">00:30</option>
                <option value ="01:00:00">01:00</option>
                <option value ="01:30:00">01:30</option>
                <option value ="02:00:00">02:00</option>
 			    <option value ="02:30:00">02:30</option>
                <option value ="03:00:00">03:00</option>
                <option value ="03:30:00">03:30</option>
                <option value ="04:00:00">04:00</option>
 			    <option value ="04:30:00">04:30</option>
                <option value ="05:00:00">05:00</option>
                <option value ="05:30:00">05:30</option>
                <option value ="06:00:00">06:00</option>
 			    <option value ="06:30:00">06:30</option>
                <option value ="07:00:00">07:00</option>
                <option value ="07:30:00">07:30</option>
                <option value ="08:00:00">08:00</option>
                <option value ="08:30:00">08:30</option>
                <option value ="09:00:00">09:00</option>
                <option value ="09:30:00">09:30</option>
                <option value ="10:00:00">10:00</option>
 			    <option value ="10:30:00">10:30</option>
                <option value ="11:00:00">11:00</option>
                <option value ="11:30:00">11:30</option>
                <option value ="12:00:00">12:00</option>
                <option value ="12:30:00">12:30</option>
                <option value ="13:00:00">13:00</option>
 			    <option value ="13:30:00">13:30</option>
                <option value ="14:00:00">14:00</option>
                <option value ="14:30:00">14:30</option>
                <option value ="15:00:00">15:00</option>
 			    <option value ="15:30:00">15:30</option>
                <option value ="16:00:00">16:00</option>
                <option value ="16:30:00">16:30</option>
                <option value ="17:00:00">17:00</option>
 			    <option value ="17:30:00">17:30</option>
                <option value ="18:00:00">18:00</option>
                <option value ="18:30:00">18:30</option>
                <option value ="19:00:00">19:00</option>
                <option value ="19:30:00">19:30</option>
                <option value ="20:00:00">20:00</option>
                <option value ="20:30:00">20:30</option>
                <option value ="21:00:00">21:00</option>
 			    <option value ="21:30:00">21:30</option>
                <option value ="22:00:00">22:00</option>
                <option value ="22:30:00">22:30</option>
                <option value ="23:00:00">23:00</option>
                <option value ="23:30:00">23:30</option>





			</select>    
            
	    <input id="to_submit_selected_time" name="to_submit_selected_time"  style="display:none"  type="text" />

            <script type="text/javascript">
	$(function(){
		
		
        	var time_disable=document.getElementById("showDate").value;
		document.getElementById("to_submit_selected_time").value=document.getElementById("showDate").value;
	
		
		})            
            </script>
            
            
            
            <div class="demo">
			<input href="#" class="demo3" style="width:90px;background-color:#23a96f;color:#fff;font-family:'微软雅黑';height:32px;line-height:24px;padding-left:6px;margin-left:20px;" type="submit" value="设为不可预约">
       
			
			</div>
               
            
            
       </form>



 
            
            <script type="text/javascript">
            
            //选择“了起始时间”之后，早于起始时间的“结束时间”选项都不可选，还没有实现
          /* $(function(){
         
         $('select[name="startTime"]').blur(function(){
             var Index=getEmlementbyId(mySelectStartTime).selectedIndex;
         
            for(i=0;i<=Index;i++){
          $("#mySelectEndTime")[i].remove();
         }
           
           
           })
       
       })
      */
      
      
            
            </script>
            
            
            
  
               
            
            
       </form>
        
        
            <div class="sel_date dn">
                <div class="clearfix">
                    <span class="prev_y fl">&lt;&lt;</span><span class="prev_m fl">&lt;</span>
                    <span class="next_y fr">&gt;&gt;</span><span class="next_m fr">&gt;</span>
                    <div class="show_mn">
                        <input type="text" class="showDate2 year" value="选择年份" />
                        <span class="ml5 mr5">年</span>
                        <input type="text" class="showDate2 month" value="选择月份" />
                        <span class="ml5">月</span>
                    </div>              
                </div>
                <table class="data_table" style="position:relative;left:-53px;">
                    <thead>
                        <tr >
                            <td>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td>1</td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!--日历 end-->
   		</div>
        
        
        
        
        
        <!--表格-->
   <div id="form">
      <!--表格-->
        <div id="tab1">
   			
		<h2 id="selectedDate"><?php echo ($time_date); ?></h2>
            
			<div class="table" id="tab1_1">
            <div class="table_title" style="margin-left:55px;"><a><00:00~07:00></a></div>
             <table>
                <tr class="odd_row"><td id="00:30" class="time_period">00:00~00:30</td></tr>
                <tr class="even_row"><td id="00:30" class="time_period">00:30~01:00</td></tr>
                <tr class="odd_row"><td id="01:00" class="time_period">01:00~01:30</td></tr>
                <tr class="even_row"><td id="01:30" class="time_period">01:30~02:00</td></tr>
                <tr class="odd_row"><td id="02:00" class="time_period">02:00~02:30</td></tr>
                <tr class="even_row"><td id="02:30" class="time_period">02:30~03:00</td></tr>
                <tr class="odd_row"><td id="03:00" class="time_period">03:00~03:30</td></tr>
                <tr class="even_row"><td id="03:30" class="time_period">03:30~04:00</td></tr>
                <tr class="odd_row"><td id="04:00" class="time_period">04:00~04:30</td></tr>
                <tr class="even_row"><td id="04:30" class="time_period">04:30~05:00</td></tr>
                <tr class="odd_row"><td id="05:00" class="time_period">05:00~05:30</td></tr>
                <tr class="even_row"><td id="05:30" class="time_period">05:30~06:00</td></tr>
                <tr class="odd_row"><td id="06:00" class="time_period">06:00~06:30</td></tr>
                <tr class="even_row"><td id="06:30" class="time_period">06:30~07:00</td></tr>
                <tr class="odd_row_c"><td id="07:00" class="time_period">07:00~07:30</td></tr>
                <tr class="even_row_c"><td id="07:30" class="time_period">07:30~08:00</td></tr>
               
             </table>
            </div>
           
            <div class="table" id="tab1_2">
             <div class="table_title" style="margin-left:10px;"><a style="margin-top:-24px;margin-left:340px;"><07:00~22:00></a></div>
            <table>
   				 <tr class="odd_row"><td id="08:00" class="time_period">08:00~08:30</td></tr>
                <tr class="even_row"><td id="08:30" class="time_period">08:30~09:00</td></tr>
                <tr class="odd_row"><td id="09:00" class="time_period">09:00~09:30</td></tr>
                <tr class="even_row"><td id="09:30" class="time_period">09:30~10:00</td></tr>
                <tr class="odd_row"><td id="10:00" class="time_period">10:00~10:30</td></tr>
                <tr class="even_row"><td id="10:30" class="time_period">10:30~11:00</td></tr>
                <tr class="odd_row"><td id="11:00" class="time_period">11:00~11:30</td></tr>
                <tr class="even_row"><td id="11:30" class="time_period">11:30~12:00</td></tr>
                <tr class="odd_row"><td id="12:00" class="time_period">12:00~12:30</td></tr>
                <tr class="even_row"><td id="12:30" class="time_period">12:30~13:00</td></tr>
                <tr class="odd_row"><td id="13:00" class="time_period">13:00~13:30</td></tr>
                <tr class="even_row"><td id="13:30" class="time_period">13:30~14:00</td></tr>
                <tr class="odd_row"><td id="14:00" class="time_period">14:00~14:30</td></tr>
                <tr class="even_row"><td id="14:30" class="time_period">14:30~15:00</td></tr>
                <tr class="odd_row_b"><td id="15:00" class="time_period">15:00~15:30</td></tr>
                <tr class="even_row_b"><td id="15:30" class="time_period">15:30~16:00</td></tr>
       
       
              </table>
              </div>
             
            <div class="table" id="tab1_3"  for="modeCheckBox">
             <div class="table_title" style="margin-left:-35px;"><a style="margin-top:-24px;margin-left:680px;"><22:00~24:00></a></div>
               <table>
                <tr class="odd_row_b"><td id="16:00" class="time_period">16:00~16:30</td></tr>
                <tr class="even_row_i"><td id="16:30" class="time_period">16:30~17:00</td></tr>
                <tr class="odd_row_i"><td id="17:00" class="time_period">17:00~17:30</td></tr>
                <tr class="even_row_i"><td id="17:30" class="time_period">17:30~18:00</td></tr>
                <tr class="odd_row_s"><td id="18:00" class="time_period">18:00~18:30</td></tr>
                <tr class="even_row_s"><td id="18:30" class="time_period">18:30~19:00</td></tr>
                <tr class="odd_row"><td id="19:00" class="time_period">19:00~19:30</td></tr>
                <tr class="even_row"><td id="19:30" class="time_period">19:30~20:00</td></tr>
                <tr class="odd_row"><td id="20:00" class="time_period">20:00~20:30</td></tr>
                <tr class="even_row"><td id="20:30" class="time_period">20:30~21:00</td></tr>
                <tr class="odd_row"><td id="21:00" class="time_period">21:00~21:30</td></tr>
                <tr class="even_row"><td id="21:30" class="time_period">21:30~22:00</td></tr>
                <tr class="odd_row"><td id="22:00" class="time_period">22:00~22:30</td></tr>
                <tr class="even_row"><td id="22:30" class="time_period">22:30~23:00</td></tr>
                <tr class="odd_row"><td id="23:00" class="time_period">23:00~23:30</td></tr>
                <tr class="even_row"><td id="23:30" class="time_period">23:30~24:00</td></tr>
   			</table>
            </div>
   		</div>
  
  
       
   </div>
        <!--表格结束-->
        </div>
     



<!--这里开始是弹窗-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.hDialog.js"></script>



<script type="text/javascript">

		
	
		
		
		//点击"提交"按钮之后触发函数
	
		
		function timeValid(){
			var selectStartTime1=$('select[name="startTime"]').val().split(":")[0]*2;   
			var selectStartTime2=$('select[name="startTime"]').val().split(":")[1]/30;
			var selectEndTime1=$('select[name="endTime"]').val().split(":")[0]*2;
			var selectEndTime2=$('select[name="endTime"]').val().split(":")[1]/30;
			var selectStartTime=selectStartTime1+selectStartTime2;    //获取用户选择的"起始时间"
			var selectEndTime=selectEndTime1+selectEndTime2;		  //获取用户选择的"结束时间"
		
			  
			var N=time_disable.length/6;
			var i=0;
			for(i=0;i<N;i++){                            //这里也是获取当天的无效时间段
				var start1=time_disable[6*i]/1*2;    
				var start2=time_disable[6*i+1]/30;   
				var end1=time_disable[6*i+3]/1*2;     
				var end2=time_disable[6*i+4]/39;   
				if((selectStartTime>=(start1+start2) && selectStartTime<=(end1+end2)) || (selectEndTime>=(start1+start2) && selectEndTime<=(end1+end2))){return false;} //若用户选择的时间段在无效时间段之内，则返回false
			}
		}
		
</script>
 

<script>


	

	
	
				
	//改变无效时间框颜色	
	
	var time_disable=document.getElementById("to_get_time_disable").value;
							
	if(time_disable==0)
	{
		var obj=document.getElementsByClassName("time_period");
		for(i=0;i<obj.length;i++)
		
		obj[i].style.backgroundColor='#e4dfde';
	}else{
		
		time_disable=time_disable.split(":");  //获取用户选择日期对应的不可选时间段，并进行切割
		var N=time_disable.length/6;
					
		for(i=0;i<N;i++){
			var start1=time_disable[6*i]/1*2;   
			var start2=time_disable[6*i+1]/30;   
			var end1=time_disable[6*i+3]/1*2;     
			var end2=time_disable[6*i+4]/30;   
			var obj1=document.getElementsByClassName("time_period");
			var obj2=document.getElementsByTagName("option");   
			for(j=(start1+start2);j<(end1+end2);j++){    //从"起始时间"开始把框弄灰，直到"结束时间"
							
				obj1[j].style.backgroundColor='#ffd3c3';
				obj2[j].disabled="disabled";      //无效时间对应的option时间段不可选
				obj2[j+48].disabled="disabled";

							
			}
		 }   	
	}
		
			
				


	
</script>
 
 
 
 </body>
  
</html>