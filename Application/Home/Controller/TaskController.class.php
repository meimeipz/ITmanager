<?php
/**
 * Created by PhpStorm.
 * User: gaius
 * Date: 2018/1/27
 * Time: 20:03
 */

namespace Home\Controller;
use Home\Model\ZichansModel;
use Home\Model\ZichannewsModel;
use Home\Model\DepartmentsModel;
use Home\Model\TaskModel; 
use Think\Controller;

class TaskController extends Controller{

	
	public function createTask(){

		//将资产编号传输到后台
		$model = new DepartmentsModel();

		$result=$model->getBumen();

		$this->assign('result',$result);

		$this->display('task:createTask');
	}

	public function createTask_ajax(){

		$bumen = $_POST['bumen'];
		$keshi = $_POST['keshi'];
		$user = $_POST['user'];
		$user_role = $_POST['user_role'];
		$roomNum = $_POST['roomNum'];
		$phone = $_POST['phone'];
		$taskType = $_POST['taskType'];
		$taskDescription = $_POST['taskDescription'];

		$model = new TaskModel();

		dump($model->createTaskId());


        //$keshiInfo=M("departments")->WHERE("bumen='$bumenInfo'")->getField('keshi',true);
        //$this->ajaxReturn($keshiInfo,"JSON");
	}
	

}