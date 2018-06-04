<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class CateController extends Controller {
    public function lst(){
        $cate=D('cate');
        $cateres=$cate->select(); //从数据库查询数据，dump可以打印出来看看
      $this->assign('cateres',$cateres); //通过assign来把后台数据在前端展示
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