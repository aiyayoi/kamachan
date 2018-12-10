<?php
	App::uses('AppController','Controller');

class kamattasController extends AppController{
	
	public function index(){
		$this->set('title_for_layout','かまった～');
		$this->loadModel('Kamatta');
		$kams = $this->Kamatta->find('all');
		$this->set('kams',$kams);
	}
	
	public function write(){
		$this->loadModel('Kamatta');
		if($this->request->is('post')){
			$this->Kamatta->create();
			if($this->Kamatta->save($this->request->data)){
				$this->Flash->success('かきこ～');
				return $this->redirect(array('action' => 'write'));
			}
			$this->Flash->error('エラー');
		}
	}
	
	public function edit($id = null){
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }


}
?>