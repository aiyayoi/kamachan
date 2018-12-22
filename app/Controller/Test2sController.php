<?php
	App::uses('AppController','Controller');

class Test2sController extends AppController{

	public function index(){
		$this->loadModel('Test2');
		$test = $this->Test2->find('all');
		$this->set('tes',$test);
	}

	public function write(){
		$this->loadModel('Test2');
		if($this->request->is('post')){
			$this->Test2->create();
			if($this->Test2->save($this->request->data)){
				$this->Flash->success('かきこ～');
				return $this->redirect(array('action' => 'write'));
			}
			$this->Flash->error('エラー');
		}
	}


}
?>
