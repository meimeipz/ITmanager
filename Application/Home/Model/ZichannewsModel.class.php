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

class ZichannewsModel extends \Think\Model{

 	/**
 	 * 查询设备信息
 	 */
 	public function getAll(){

 		$model=M('zichannews');
		$result=$model->WHERE("user='郭杰华' OR user='库存'")->select();		
 		return $result;	
 	}

 	public function updateInfo($zichannum,$bumen,$keshi,$roomNum,$status){

 		$model=M('zichannews');
 		$data['bumen']=$bumen;
 		$date['keshi']=$keshi;
 		$data['roomNum']=$roomNum;
 		$data['status']=$status;
 		$model->WHERE("zichannum='$zichannum'")->save($data);

 	}


 	public function insertInfo(){
 		
 	}
}
