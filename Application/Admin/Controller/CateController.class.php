<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller {
    public function lst(){
        $this->display();
    }

    public function add(){
        $cate=D('cate');
        if(IS_POST){
            $date['catename']=I('catename');
            if($cate->add($date)){
                $this->success('添加栏目成功！',U('lst'));
            }else{
                $this->error('添加栏目失败！');
            }
            return;
        }

        $this->display();
    }
    public  function  edit(){
        $this->display();
    }
    public function del(){

    }
}