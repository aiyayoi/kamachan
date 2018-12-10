<?php
	App::uses('AppController','Controller');

class UsersController extends AppController{
	
	public function index(){
	
	}
	
	public function singup(){
		if($this->request->is('post')){
			$this->User->create();
			if($this->User->save($this->request->data)){
				$this->Flash->success('登録成功');
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error('エラー');
		}
	}
	
	public function login(){
		if($this->request->is('post')) {
			if($this->Auth->login()){
				return $this->redirect('index');
			}else{
				$this->Flash->error('エラー');
			}
		}
	}
	
	public function logout(){
		$this->Auth->logout();
		$this->redirect('login');
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