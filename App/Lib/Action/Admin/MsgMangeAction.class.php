<?php

class MsgMangeAction extends CommonAction{

    public function index(){
        //thinkPHP分页
        //1.引入thinkPHP分页类
        import('ORG.Util.Page');
        //2.获取一共有几条数据
        $count = M('wish')->count();
        //创建thinkPHP类对面，传进参数1.总记录，2.每页要显示多少记录)
        $page = new Page($count,5);
        //创建limit语句，要传入数据库从而获取记录，语句＝0,5
        $limit=$page->firstRow.','.$page->listRows;
        //从数据库中获取相应的数据
        $wish = M('wish')->order('time DESC')->limit($limit)->select();
//        $this->wish = $wish;
        //定义参数，以便传进html页面
        $this->page = $page->show();
        //assign也是定义参数，同上面
        $this->assign('wish',$wish)->display();
    }

    public function delete(){
        //删除记录,如果删除条件是主键，直接传主键值就可以删除
       if( M('wish')->delete(I('id'))){
           $this->success('删除成功',U('Admin/MsgMange/index'));
       }else{
           $this->error('删除失败');
       }

    }
}
?>
