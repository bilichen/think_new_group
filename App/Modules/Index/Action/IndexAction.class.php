<?php
/*前台控制器
 * */
class IndexAction extends Action{

    public function index(){

        $this->assign('wish',M('wish')->select())->display();
    }

    public function handle(){
        //p(I('post.'));
        if(!IS_AJAX){
            halt('页面不存在');

        }else{
            $data = array(
                'username' => I('username'),
                'content' => I('content'),
                'time' => time(),
            );
           if($id = (M('wish')->data($data)->add())){
               $data['content'] = replace_phiz($data['content']);
               $data['id'] = $id;
               $data['time'] = date('y-m-d H:i',$data['time']);
               $data['status'] = 1;
               $this->ajaxReturn($data,'json');
           }else{
               $this->ajaxReturn(array('status'=>0),'json');//插入失败，反回status=0，接收端进行判断，1为真，0为假
           };
        };
    }
}
