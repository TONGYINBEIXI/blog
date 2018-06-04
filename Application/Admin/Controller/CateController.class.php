<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller {
    public function lst(){
        $this->display();
    }

    public function add(){
        //实例化cate模型
        $cate=D('cate');
        if(IS_POST){
            $date['catename']=I('catename');
            if($cate->create($date)){
                if($cate->add()){
                    $this->success("添加栏目成功！",U('lst'));

                }else{
                    $this->error('添加栏目失败!');
                }
            }else{
                $this->error($cate->getError());
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