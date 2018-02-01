<?php
/**
 * Created by PhpStorm.
 * User: gaius
 * Date: 2018/1/27
 * Time: 20:03
 */

namespace Home\Controller;
use Home\Model\ZichannewsModel;
use Home\Model\DepartmentsModel;
use Think\Controller;

class EquipmentController extends Controller{

	public function grantEquipment(){


		//将资产编号传输到后台
		$model=new ZichannewsModel();

		$result=$model->getAll();

		#dump($result);	
		

		$this->assign('result',$result);
		//$this->result =$result;

		$this->display('equipment:grantEquipment');

		/**
		if($result){
			$this->success('登录成功','index.php?c=index&a=main');
		}else{
			$this->error('用户名及密码错误！');
		}
		**/
		
	}


	//获取发放设备的资产信息及遍历部门信息
	public function grantEquipment_info(){



		$list1['zichanNum']=$_GET['zichanNum'];

		$list1['description']=$_GET['description'];

		$model = new DepartmentsModel();

		$list2=$model->getBumen();

		//dump($list);
		//
		$result=[$list1,$list2];


		$result1=M('departments')->WHERE('')->select();

		//dump($result);

		$this->assign('result',$result);

		$this->display('equipment:grantEquipment_info');

	}

	//科室信息添加ajax下拉菜单二级联动
    public function getkeshi_ajax(){

        $bumenInfo = $_POST['bumen'];

        $keshiInfo=M("departments")->WHERE("bumen='$bumenInfo'")->getField('keshi',true);

        $this->ajaxReturn($keshiInfo,"JSON");
       
    }


    public function grantEquipment_update(){

    	$zichannum = $_POST['zichannum'];
    	$bumen = $_POST['bumen'];
    	$keshi = $_POST['keshi'];
    	$user = $_POST['user'];
    	$roomNum = $_POST['roomNum'];
    	$status = $_POST['status'];

    	$zicchanModel = new ZichansModel();
    	$zichannewModel = new ZichannewsModel();

    	if($zicchanModel->isCheck()==0):
    }


    


}