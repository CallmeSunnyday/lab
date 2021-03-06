<?php
// 本类由系统自动生成，仅供测试用途
class ArticleAction extends AdminCommonAction {
    public function index(){
	$this->display();
    }

    public function ListArticle(){
	   	$m=M('Article');
			$arr=$m->where('parentid=4')->select();
			//var_dump($arr);
			$this->assign('data',$arr);
			$this->display();
		}
    

    public function ListArticleEdit(){
	    $this->display();
    }


    public function ListArticleEditadd(){
        $m=M('Article');
	$data['title']=$_POST['title'];
	$data['content']=$_POST['myEditor'];
	$data['editor']=$_POST['editor'];
	$data['metacontent']=$_POST['metacontent'];
	$data['parentid']='4';
	$count=$m->add($data);
		if($count){
			$this->success('上传成功','ListArticle');
		}else{
			$this->error('上传失败','ListArticle');

		}   


    }

    
    public function ListArticleDel(){
        $m=M('Article');
  	$id=$_GET['id'];
	$m->delete($id);
	$this->redirect('ListArticle');
	}
  
 
   
    public function ListArticleView(){
    $m=M('Article');
    $id=$_GET['id'];
    $arr=$m->find($id);
    $this->assign('data',$arr);
    $this->display();

 }



    public function ListArticleUpdate(){
        $m=M('Article');
	$data['id']=$_POST['id'];
	$data['title']=$_POST['title'];
	$data['content']=$_POST['myEditor'];
	$data['editor']=$_POST['editor'];
	$data['metacontent']=$_POST['metacontent'];
	$count=$m->save($data);
		if($count){
			$this->success('修改成功','ListArticle');
		}else{
			$this->error('修改失败','ListArticle');

		}   


    }
    
    

    public function ListBanner(){
	$m=M('Banner');
	$arr=$m->select();
	$this->assign('data',$arr);
	$this->display();
    }

    public function ListBannerupload(){        
            if(!empty($_FILES))
            {
                $this->ListBanner_upload();
	    }
     }

     public function  ListBanner_upload(){
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();
            $upload->maxSize            = 3292200;
            $upload->allowExts          = explode(',', 'jpg,gif,png,jpeg');
            $upload->savePath           = './Public/Images/';
            $upload->imageClassPath     = 'ORG.Util.Image';
            $upload->saveRule           = 'uniqid';
            if (!$upload->upload()) 
            {
                $this->error($upload->getErrorMsg());
            } 
            else 
            {
            $uploadList = $upload->getUploadFileInfo();
            import('ORG.Util.Image');                
            $_POST['imgurl'] = $uploadList[0]['savename'];
            }
	    $b=M('Banner');
	    $data1['imgurl']=$_POST['imgurl'];
	    $data1['metacontent']=$_POST['metacontent'];
            $list=$b->add($data1);
            if ($list !== false) 
            {
		$this->redirect(ListBanner);
	    }else{
		$this->error('上传失败');
	    }
     }        

    public function ListBannerDel(){
    	$m=M('Banner');
  	$id=$_GET['id'];
	$m->delete($id);
	$this->redirect('ListBanner');
    }

    public function ListFocus(){
        $m=M('Article');
	$arr=$m->where('parentid=1')->select();
	$this->assign('data',$arr);
	$this->display();
    }

 public function ListFocusDel(){
        $m=M('Article');
  	$id=$_GET['id'];
	$m->delete($id);
	$this->redirect('ListFocus');
    }

    public function ListFocusIsshow(){
	$id=$_GET['id'];
	$m=M('Article');
	$arr=$m->find($id);
	$this->assign('data2',$arr); 
	$this->display();		
     }
    
     public function ListFocusIsshowCancel(){
        $m=M('Article');
	$id=$_GET['id'];
	$arr=$m->find($id);
        $arr['isshow']='0';
	$count=$m->save($arr);
	if($count>0){
		$this->redirect(ListFocus);
	}else{
		$this->error('失败');
		}   
		
     }

     public function ListFocusIsshowupload(){        
            if(!empty($_FILES))
            {
                $this->ListFocusIsshow_upload();
	    }
     }

     public function  ListFocusIsshow_upload(){
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();
            $upload->maxSize            = 3292200;
            $upload->allowExts          = explode(',', 'jpg,gif,png,jpeg');
            $upload->savePath           = './Public/Images/';
            $upload->thumb              = true;
            $upload->imageClassPath     = 'ORG.Util.Image';
            $upload->thumbPrefix        = 'm_';
            $upload->thumbMaxWidth      = '400,100';
            $upload->thumbMaxHeight     = '400,100';
            $upload->saveRule           = 'uniqid';
            $upload->thumbRemoveOrigin  = true;
            if (!$upload->upload()) 
            {
                $this->error($upload->getErrorMsg());
            } 
            else 
            {
            $uploadList = $upload->getUploadFileInfo();
            import('ORG.Util.Image');                
            $_POST['metaimg'] = $uploadList[0]['savename'];
            }
	    $m=M('Article');
	    $data1['id']=$_POST['id'];
	    $data1['metaimg']=$_POST['metaimg'];
	    $data1['isshow']='1';
            $list=$m->save($data1);
            if ($list !== false) 
            {
		$this->redirect(ListFocus);
	    }else{
		$this->error('失败');
	    }
     }        


    public function ListFocusEdit(){
	$this->display();
    }

    public function ListFocusEditadd(){
        $m=M('Article');
	$data['title']=$_POST['title'];
	$data['content']=$_POST['myEditor'];
	$data['editor']=$_POST['editor'];
	$data['metacontent']=$_POST['metacontent'];
	$data['parentid']='1';
	$count=$m->add($data);
		if($count){
			$this->success('上传成功','ListFocus');
		}else{
			$this->error('上传失败','ListFocus');

		}   


    }



   public function ListFocusView(){
       $m=M('Article');
       $id=$_GET['id'];
       $arr=$m->find($id);
       $this->assign('data',$arr);           
       $this->display();

 }


    public function ListFocusUpdate(){
        $m=M('Article');
	$data['id']=$_POST['id'];
	$data['title']=$_POST['title'];
	$data['content']=$_POST['myEditor'];
	$data['editor']=$_POST['editor'];
	$data['metacontent']=$_POST['metacontent'];
	$count=$m->save($data);
		if($count){
			$this->success('修改成功','ListFocus');
		}else{
			$this->error('修改失败','ListFocus');

		}   


    }




    public function ListNews(){
        $m=M('Article');
	$arr=$m->where('parentid=2')->select();
	$this->assign('data',$arr);
	$this->display();
     
    }

 public function ListNewsDel(){
        $m=M('Article');
  	$id=$_GET['id'];
	$m->delete($id);
	$this->redirect('ListNews');
    }

  public function ListNewsIsshow(){
       $m=M('Article');
       $id=$_GET['id'];
       $arr=$m->find($id);
       $this->assign('data',$arr);           
       $this->display();
  }

   public function ListNewsIsshowupload(){        
            if(!empty($_FILES))
            {
                $this->ListNewsIsshow_upload();
	    }
     }

     public function  ListNewsIsshow_upload(){
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();
            $upload->maxSize            = 3292200;
            $upload->allowExts          = explode(',', 'jpg,gif,png,jpeg');
            $upload->savePath           = './Public/Images/';
            $upload->thumb              = true;
            $upload->imageClassPath     = 'ORG.Util.Image';
            $upload->thumbPrefix        = 'm_';
            $upload->thumbMaxWidth      = '400,100';
            $upload->thumbMaxHeight     = '400,100';
            $upload->saveRule           = 'uniqid';
            $upload->thumbRemoveOrigin  = true;
            if (!$upload->upload()) 
            {
                $this->error($upload->getErrorMsg());
            } 
            else 
            {
            $uploadList = $upload->getUploadFileInfo();
            import('ORG.Util.Image');                
            $_POST['metaimg'] = $uploadList[0]['savename'];
            }
	    $m=M('Article');
	    $data1['id']=$_POST['id'];
	    $data1['metaimg']=$_POST['metaimg'];
	    $data1['isshow']='1';
	    $list=$m->save($data1);
            if ($list !== false) 
        	   {
		$this->redirect(ListNews);
	    }else{
		$this->error('失败');
	    }
     }        

     public function ListNewsIsshowCancel(){
        $m=M('Article');
	$id=$_GET['id'];
	$arr=$m->find($id);
        $arr['isshow'] ='0';
	$count=$m->save($arr);
	if($count>0){
		$this->redirect(ListNews);
	}else{
		$this->error('失败');
		}   
		
 }
    public function ListNewsEdit(){
	$this->display();
    }
    public function ListNewsEditadd(){
        $m=M('Article');
	$data['title']=$_POST['title'];
	$data['content']=$_POST['myEditor'];
	$data['editor']=$_POST['editor']; 
	$data['metacontent']=$_POST['metacontent'];
	$data['parentid']='2';
	$count=$m->add($data);
		if($count){
			$this->success('上传成功','ListNews');
		}else{
			$this->error('上传失败');

		}   


    }



   public function ListNewsView(){
       $m=M('Article');
       $id=$_GET['id'];
       $arr=$m->find($id);
       $this->assign('data',$arr);           
       $this->display();

 }


    public function ListNewsUpdate(){
        $m=M('Article');
	$data['id']=$_POST['id'];
	$data['title']=$_POST['title'];
	$data['content']=$_POST['myEditor'];
	$data['editor']=$_POST['editor'];
	$data['metacontent']=$_POST['metacontent'];
	$count=$m->save($data);
		if($count){
			$this->success('修改成功','ListNews');
		}else{
			$this->error('修改失败','ListNews');

		}   


    } 








    public function ListNotice(){
        	$m=M('Article');
		$arr=$m->where('parentid=3')->select();
		$this->assign('data',$arr);
		$this->display();
         
       
    }   
 
 
 
    public function ListNoticeadd(){            
        $m=M('Article');
	$data['title']=$_POST['title'];
	$data['editor']='电子科技大学核磁共振中心';
	$data['content']=$_POST['myEditor'];
	$data['parentid']='3';
	$data['isshow']='1';
	$count=$m->add($data);
		if($count){
			$this->redirect(ListNotice);
		}else{
			$this->error('上传失败','ListNotice');

		}                             

    }

    public function ListNoticeDel(){
        $m=M('Article');
  	$id=$_GET['id'];
	$m->delete($id);
	$this->redirect('ListNotice');
    }


}
