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



		$zichanNum=$_GET['zichanNum'];

		//dump($zichanNum);

		$m=new ZichansModel();

		$list=$m->getInfo($zichanNum);

		//dump($list);

		$list1['zichanNum']=$list[0]['zichannum'];

		$list1['description']=$list[0]['description'];

		$list1['serialNum']=$list[0]['serialnum'];

		//dump($list1);

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
    	$description=$_POST['description'];
    	$serialNum=$_POST['serialNum'];
    	$bumen = $_POST['bumen'];
    	$keshi = $_POST['keshi'];
    	$user = $_POST['user'];
    	$roomNum = $_POST['roomNum'];
    	$status = $_POST['status'];

    	$zicchanModel = new ZichansModel();
    	$zichannewModel = new ZichannewsModel();

    	//$result=$zichannewModel->updateInfo($zichannum,$bumen,$keshi,$roomNum,$status);

    	//echo $zichannum,$bumen,$keshi,$roomNum,$status;

    

    	if($zicchanModel->isCheck()==0){

    		dump($zicchanModel->isCheck());
    		$zicchanModel->updateCheck();
    		$zichannewModel->insertInfo($zichanNum,$bumen,$keshi,$user,$roomNum,$description,$serialNum,$status);
    	}else{

    		$zichannewModel->updateInfo($zichannum,$bumen,$keshi,$roomNum,$status);
    	}

    	

    	//$this->redirect('index.php?p=home&c=equipment&a=grantEquipment');
    	$this->grantEquipment();
    		
    	


    }
    	


    


}