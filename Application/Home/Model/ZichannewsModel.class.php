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
		//$result=$model->WHERE("user='郭杰华' OR user='库存'")->select();
		$result=$model->select();		
 		return $result;	
 	}

 	public function updateInfo($zichanNum,$bumen,$keshi,$user,$roomNum,$status){

 		$model=M('zichannews');
 		$data['bumen']=$bumen;
 		$date['keshi']=$keshi;
 		$data['user']=$user;
 		$data['roomNum']=$roomNum;
 		$data['status']=$status;
 		$result=$model->WHERE("zichanNum='$zichanNum'")->save($data);

 		return $result;

 	}


 	public function insertInfo($zichanNum,$bumen,$keshi,$user,$roomNum,$description,$serialNum,$status){

 		$model=M('zichannews');
 		$data['zichanNum']=$zichanNum;
 		$data['bumen']=$bumen;
 		$data['keshi']=$keshi;
 		$data['user']=$user;
 		$data['roomNum']=$roomNum;
 		$data['description']=$description;
 		$data['serialNum']=$serialNum;
 		$data['status']=$status;
 		$time=time();
 		$changeFlag=1;
 		$data['create_at']=$time;
 		$data['update_at']=$time;
 		$data['changeFlag']=$changeFlag;

 		$result=$model->add($data);
 		return $result;

 		

 		
 	}


}
