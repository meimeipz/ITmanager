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

class ZichansModel extends \Think\Model{

 	/**
 	 * 查询设备信息
 	 */
 	
 	public function getAll(){

 		$model=M('zichans');
		//$result=$model->WHERE("user='郭杰华' OR user='库存'")->select();
		$result=$model->select();		
 		return $result;	
 	}

 	public function isCheck($zichannum){
 		$model=M('zichans');
 		$result=$model->WHERE("zichannum='$zichannum'")->select();

 		if(!empty($result)){
 			return true;		
 		}else{
 			return false;
		}

 	}

 	public function updateCheck($zichannum){
 		
 		$model=M('zichans');

 		$data['hasCheck']=1;


 		$model->WHERE("zichannum='$zichannum'")->save($data);

 	}

 	public function getInfo($zichannum){

 		$model=M('zichans');

 		$result = $model->WHERE("zichannum='$zichannum'")->limit(1)->select();

 		return $result;

 	}


}
