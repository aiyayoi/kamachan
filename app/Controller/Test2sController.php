<?php
	App::uses('AppController','Controller');

class Test2sController extends AppController{

	public function index(){
		$this->loadModel('Test2');
		$test = $this->Test2->find('all');
		$this->set('tes',$test);
	}


}
?>
