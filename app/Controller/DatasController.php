<?php
App::uses('AppController','Controller');

class DatasController extends AppController{

	public function index(){
		$this->set('message','Hello');
		$this->autoLayout = false;
	}
	
	public function posts($name){
		//WHERE name = $nameに対応
		$options = array('conditions' => array('name' => $name));
		//SELECT * FROM datas に対応
		$datas = $this->Data->find('all',$options);

		$this->set('datas',$datas);
		$this->set('name',$name);
	}
}

?>
