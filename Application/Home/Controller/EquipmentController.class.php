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

	public function grantEquipment_update(){



		$list1['zichanNum']=$_GET['zichanNum'];

		$list1['description']=$_GET['description'];

		$model = new DepartmentsModel();

		$list2=$model->getBumen();

		//dump($list);
		//
		$result=[$list1,$list2];

		//dump($result);

		$this->assign('result',$result);

		$this->display('equipment:grantEquipment_update');

	}

	//子课程添加ajax下拉菜单二级联动
    public function getkeshi_ajax(){
        $bumenInfo = $_POST['bumen'];

        dump($bumenInfo);
        $keshiInfo=M("departments")->WHERE("bumen=$bumenInfo")->select();

        dump($keshiInfo);
        //$this->ajaxReturn($keshiInfo,"JSON");
        $this->display();
    }//subject_media_add_ajax()end


}