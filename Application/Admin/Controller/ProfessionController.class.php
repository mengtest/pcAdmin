<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class ProfessionController extends CommonController{


    #add方法，展示模版文件
    public function add(){
        #展示模版
        $this -> display();
    }

    #addOk方法，接收数据保存数据
    public function addOk(){
        #接收数据
        $post = I('post.');
//		dump($post);die;
        #获取文件的数据
        $file = $_FILES['picurl'];
        #配置上传信息
        $cfg = array(
            //保存根路径
            'rootPath'      =>  WORKING_PATH . UPLOAD_ROOT_PATH,
        );
        #实例化上传类
        $uplaod = new \Think\Upload($cfg);
        #上传操作
        if($file['size'] > 0){
            $info = $uplaod -> uploadOne($file);//一维数组
            #判断返回结果
            if($info){
                #hasfile字段
                $post['hasfile'] = 1;
                #filename字段
                $post['filename'] = $info['savename'];
                #filepath字段
                $post['picurl'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
            }
        }
//		dump($post);die;
        #转换比赛时间和加入时间为时间戳
        $time1 = strtotime($post['race_start_time']);
        $time2 = strtotime($post['race_end_time']);
        if($time2){
            $post['race_time'] = $time1 . "-" . $time2;
        }else{
            $post['race_time'] = $time1;
        }

        $time3 = strtotime($post['join_start_time']);
        $time4 = strtotime($post['join_end_time']);
        if($time4){
            $post['join_time'] = $time3 . "-" . $time4;
        }else{
            $post['join_time'] = $time3;
        }


        dump($post);die;
        #添加addtime字段
        $post['ctime'] = time();
        #写入数据表
        $model = M('Race');
        $rst = $model -> add($post);
        #判断返回值
        if($rst){
            #成功
            $this -> success('添加赛事成功',U('showList'),3);
        }else{
            #失败
            $this -> error('添加赛事失败',U('add'),3);
        }
    }

    #showList方法，获取数据展示数据
    public function showList(){
        #获取数据
        $model = M('Race');
        #查询
        $data = $model -> where('statu = 1 && types = 1') -> select();
        foreach($data as $index=>$item){
            $data[$index]['str'] =  substr($item['picurl'], 0, 4);
        }
        #传递变量给模版
        $this -> assign('data',$data);
        #展示模版
        $this -> display();
    }

    #del方法，实现删除
    public function del(){
        #接收参数
        $id = I('get.id');
        #实例化模型
        $model = M('Race');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'rid'   =>  $id,
            'statu'  => '0'
        );
        $rst =$model -> save($data);
        #判断返回值
        if($rst){
            #删除成功
            $this -> success('删除成功',U('showList'),3);
        }else{
            #删除失败
            $this -> error('删除失败',U('showList'),3);
        }
    }


    #edit方法
    public function edit(){
        #接收数据
        $id = I('get.id');

        #实例化模型
        $model = M('Race');
        #查询操作
        $data = $model -> find($id);
        $racetime = explode('-',$data['race_time']);
        #传递给模版
        $this -> assign('data',$data);
        $this -> assign('racetime',$racetime);
        #展示模版
        $this -> display();
    }

    #editOk方法
    public function editOk(){
        #接收post数据
        $post = I('post.');
        #转换比赛时间和加入时间为时间戳
        $time1 = strtotime($post['race_start_time']);
        $time2 = strtotime($post['race_end_time']);
        if($time2){
            $post['race_time'] = $time1 . "-" . $time2;
        }else{
            $post['race_time'] = $time1;
        }

        $time3 = strtotime($post['join_start_time']);
        $time4 = strtotime($post['join_end_time']);
        if($time4){
            $post['join_time'] = $time3 . "-" . $time4;
        }else{
            $post['join_time'] = $time3;
        }
        #判断是否有附件上传
        if($_FILES['picurl']['size'] > 0){
            #配置
            $cfg = array(
                'rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH
            );
            #实例化
            $upload = new \Think\Upload($cfg);
            #上传操作
            $info = $upload -> uploadOne($_FILES['picurl']);
            #判断上传结果
            if($info){
                #上传成功
                #filepath字段
                $post['picurl'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
                #filename字段
                $post['filename'] = $info['savename'];
                #hasfile字段
                $post['hasfile'] = 1;
            }
        }
        $post['mtime'] = time();
        $post['contact'] = substr($post['contact'],3);
        #写入到数据表
        $model = M('Race');
        $rst = $model -> save($post);
        #判断返回结果
        if($rst){
            #成功
            $this -> success('编辑成功',U('showList'),1);
        }else{
            #失败
            $this -> error('编辑失败',U('edit',array('id' => $post['id'])),1);
        }
    }
}