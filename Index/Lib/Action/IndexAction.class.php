<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	public function index(){
		//banner
		$m=M('banner');
		$data=$m->order('id desc')->select();
		$this->assign('banner',$data);
		//jiaodian
		$m=M('article');
		$condition1['parentid']=1;
		$condition1['isshow']=1;
		$data=$m->where($condition1)->order('id desc')->select();
		for($i=0;$i<3;$i++){
			if($data[$i]==NULL){
				$new[$i]['content']='暂无最新焦点新闻的内容';
				$new[$i]['title']='暂无新闻';
				$x=date('Y-m-d',time());
				list($y,$m,$d)=explode('-',$x);
				$new[$i]['time']=$d;
				$date=$y;
				$date.='-';
				$date.=$m;
				$new[$i]['date']=$date;
				$new[$i]['id']=0;
			}
			else{
				$new[$i]['content']=$data[$i]['metacontent'];
				$new[$i]['title']=$data[$i]['title'];
				list($x,$t)=explode(' ',$data[$i]['date']);
				list($y,$m,$d)=explode('-',$x);
				$new[$i]['time']=$d;
				$date=$y;
				$date.='-';
				$date.=$m;
				$new[$i]['date']=$date;
				$new[$i]['id']=$data[$i]['id'];
			}

		}
		$this->assign('list',$new);
		//综合新闻
		$m=M('article');
		$con['parentid']=2;
		$con['isshow']=1;
		$conew=$m->where($con)->order('id desc')->select();
		for($i=0;$i<6;$i++){
			if($conew[$i]==NULL){
				$cnew[$i]['title']=暂无新闻;
				$cnew[$i]['content']=新闻内容也是空;
				$cnew[$i]['metaimg']='444.jpg';
				$cnew[$i]['id']=0;
			
			}	
			else{
				$cnew[$i]['title']=$conew[$i]['title'];
				$cnew[$i]['content']=$conew[$i]['metacontent'];
				$cnew[$i]['metaimg']=$conew[$i]['metaimg'];
				$cnew[$i]['id']=$conew[$i]['id'];
			}
		}
		$this->assign('cnew',$cnew);
		//通知
		$condition2['parentid']=3;
		$condition2['isshow']=1;
		$m=M('article');
		$data2=$m->where($condition2)->order('id desc')->select();
		for($i=0;$i<3;$i++){
		if($data2[$i]==NULL){
			$notice[$i]['content']='暂无通知';
			$x=date('Y-m-d',time());
			list($y,$m,$d)=explode('-',$x);
			$date=$m;
			$date.='-';
			$date.=$d;
			$notice[$i]['date']=$date;
			$notice[$i]['id']=0;
		}
		else{
			$notice[$i]['content']=$data2[$i]['title'];
			list($x,$t)=explode(' ',$data2[$i]['date']);
			list($y,$m,$d)=explode('-',$x);
			$date=$m;
			$date.='-';
			$date.=$d;
			$notice[$i]['date']=$date;
			$notice[$i]['id']=$data2[$i]['id'];
		}
		}
		$n=$i;
		for($i=0;$i<3;$i++){
		if($data2[$n]==NULL){
			$notice2[$i]['content']='暂无通知';
			$x=date('Y-m-d',time());
			list($y,$m,$d)=explode('-',$x);
			$date=$m;
			$date.='-';
			$date.=$d;
			$notice2[$i]['date']=$date;
			$notice2[$i]['id']=0;
		}
		else{
			$notice2[$i]['content']=$data2[$n]['title'];
			list($x,$t)=explode(' ',$data2[$n]['date']);
			list($y,$m,$d)=explode('-',$x);
			$date=$m;
			$date.='-';
			$date.=$d;
			$notice2[$i]['date']=$date;
			$notice2[$i]['id']=$data2[$n]['id'];
		}
		$n++;
		}
	$this->assign('list2',$notice);
	$this->assign('list3',$notice2);	 
	$this->display();
	}

	public function list1(){
		$e=M('Article');
		import('ORG.Util.Page');
		$count=$e->where('parentid=1')->count();
		$page  = new Page($count,10);
		$page->setConfig('header','条记录');
		$show=$page->show();
		$arr=$e->limit($page->firstRow.','.$page->listRows)->where('parentid=1')->select();
		$this->assign('focus_list',$arr);
		$this->assign('show',$show);
		$this->display();
    }
	public function list2(){
		$e=M('Article');
		import('ORG.Util.Page');
		$count=$e->where('parentid=2')->count();
		$page  = new Page($count,10);
		$page->setConfig('header','条记录');
		$show=$page->show();
		$arr=$e->limit($page->firstRow.','.$page->listRows)->where('parentid=2')->select();
		$this->assign('news_list',$arr);
		$this->assign('show',$show);
		$this->display();
    }
	public function list3(){
		$e=M('Article');
		import('ORG.Util.Page');
		$count=$e->where('parentid=3')->count();
		$page  = new Page($count,10);
		$page->setConfig('header','条记录');
		$show=$page->show();
		$arr=$e->limit($page->firstRow.','.$page->listRows)->where('parentid=3')->select();
		$this->assign('notice_list',$arr);
		$this->assign('show',$show);
		$this->display();
    }
	public function listpaper(){
		$e=M('Article');
		import('ORG.Util.Page');
		$count=$e->where('parentid=4')->count();
		$page  = new Page($count,10);
		$page->setConfig('header','条记录');
		$show=$page->show();
		$arr=$e->limit($page->firstRow.','.$page->listRows)->where('parentid=4')->select();
		$this->assign('article_list',$arr);
		$this->assign('show',$show);
		$this->display();
    }
	public function n(){
		$m=M('Article');
		$id=$_GET['id'];
		$arr=$m->find($id);
		$this->assign('no',$arr);
		$this->display();
    }
    public function brief(){
	$this->display();
    }
  
}
