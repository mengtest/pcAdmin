<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class TaskController extends CommonController{


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

		// dump($post);die;
		#添加addtime字段
		 $post['ctime'] = time();
		#写入数据表
		$model = M('Task');
		$rst = $model -> add($post);
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加任务成功',U('showList'),3);
		}else{
			#失败
			$this -> error('添加任务失败',U('add'),3);
		}
	}

	#showList方法，获取数据展示数据
	public function showList(){
		#获取数据
		$model = M('Task');
		#查询
		$data = $model -> where('statu = 1') -> select();
//		dump($data);die;
		#传递变量给模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#download方法，实现附件的下载
	// public function download(){
	// 	#接收id
	// 	$id = I('get.id');
	// 	#实例化
	// 	$model = M('Doc');
	// 	#查询
	// 	$data = $model -> find($id);
	// 	$file = WORKING_PATH . $data['filepath'];
	// 	header("Content-type: application/octet-stream");
	// 	header('Content-Disposition: attachment; filename="' . basename($file) . '"');
	// 	header("Content-Length: ". filesize($file));
	// 	readfile($file);
	// }

	// #getContent方法，输出指定公文的内容
	// public function getContent(){
	// 	#接收id
	// 	$id = I('get.id');
	// 	#实例化
	// 	$model = M('Doc');
	// 	#查询
	// 	$data = $model -> find($id);
	// 	#输出内容
	// 	echo htmlspecialchars_decode($data['content']);
	// }

    #del方法，实现删除
    public function del(){
        #接收参数
        $id = I('get.id');
//        dump($id);die;
        #实例化模型
        $model = M('Task');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'id'   =>  $id,
            'statu'  => '0'
        );
        $rst =$model -> save($data);
//        dump($rst);die;
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
	 	$model = M('Task');

	 	#查询操作
	 	$data = $model -> find($id);
//		 dump($data);die;
	 	#传递给模版
	 	$this -> assign('data',$data);
	 	#展示模版
	 	$this -> display();
	 }

	 #editOk方法
	 public function editOk(){
	 	#接收post数据
	 	$post = I('post.');
//	 	dump($post);die;

		 $post['mtime'] = time();
	 	#写入到数据表
//		 dump($post);die;
	 	$model = M('Task');
		 if($post['id']){
			 $rst = $model -> save($post);
		 }else{
			 echo '123';
			 die();
		 }
	 	#判断返回结果
	 	if($rst){
	 		#成功
	 		$this -> success('编辑成功',U('showList'),3);
	 	}else{
	 		#失败
	 		$this -> error('编辑失败',U('edit',array('id' => $post['id'])),3);
	 	}
	 }
}