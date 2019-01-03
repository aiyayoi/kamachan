<?php
	App::uses('AppController','Controller');

class kamsController extends AppController{

	public function index(){
		$this->set('title_for_layout','かまった～');
		$this->loadModel('Kam');
		$kams = $this->Kam->find('all', array('order' => array('Kam.id DESC')));
		$this->set('kams',$kams);

		if($this->request->is('post')){
			$this->Kam->create();
			if($this->Kam->save($this->request->data)){
				$this->Flash->success('かきこ～');
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error('エラー');
		}
	}

	public function write(){
		$this->loadModel('Kamatta');
		if($this->request->is('post')){
			$this->Kam->create();
			if($this->Kam->save($this->request->data)){
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

		public function showimage($userid) {
			$this->loadmodel('Icon');
	    $usersIcon = $this->Icon->findByUserId($userid);
			if($usersIcon){
				header('Content-type: image/jpeg');
	    	echo $usersIcon['Icon']['image'];
			}else{
				header('Content-type: image/jpeg');
				readfile('img/defoIcon.png');
			}
	  }

}
?>
