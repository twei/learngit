<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
         $this->show('产品页');
    }

	public function add(){
		 $this->show('添加产品页');
	}

	public function edit(){
		 $this->show('修改产品页');
	}
}
?>