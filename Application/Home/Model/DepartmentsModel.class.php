<?php
/**
 * Created by PhpStorm.
 * User: gaius
 * Date: 2018/1/27
 * Time: 20:05
 * 资产信息
 */
namespace Home\Model;
use Think\Model;

class DepartmentsModel extends \Think\Model{

 	/**
 	 * 查询设备信息
 	 */
 	public function getBumen(){

 		$model=M('departments');
		//$result=$model->distinct(true)->field('bumen')->select();	
		$result=$model->distinct(true)->getField('bumen',true);
 		return $result;	
 	}
}
