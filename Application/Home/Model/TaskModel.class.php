<?php

namespace Home\Model;
use Think\Model;

class TaskModel extends \Think\Model{

 	
 	public function createTask(){

 		$model=M('task');
		//$result=$model->distinct(true)->field('bumen')->select();	
		$result=$model->distinct(true)->getField('bumen',true);
 		return $result;	
 	}

 	public function createTaskId(){

 		$date=ChangeDateToString(date('Ymd_'));

 		$model=M('task');

 		$result=$model->WHERE("taskID like '%$date%'")->order('create_at desc')->limit(1)->getField('taskId');
 		//$taskId_old = $result['taskId'];	
 		$id = substr($result,9);
 		$taskId=$date+$id;
 		return $taskId;

 	}

 	public function getId($date){
 		
 		$model=M('task');

 	}
}
