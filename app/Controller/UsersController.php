<?php
	App::uses('AppController','Controller');

class UsersController extends AppController{

	public function index() {
    // ユーザアイコンの初期表示
		$this->loadmodel('Icon');
    $user = $this->Auth->user();
    $usersIcon = $this->Icon->findByUserId($user['id']);
    $this->set('hasUsersIcon', isset($usersIcon['Icon']['image']) ? true : false);

		$this->loadmodel('Icon');
		$this->set('a',$usersIcon);

    if (!$this->request->is('post')) {
			return;
		}
		// ユーザアイコンの入力チェック
		if (empty($this->request->data['Icon']['image'])) {
			$this->Flash->error('画像が選択されていません。', array('clear' => true));
		}

		// ユーザアイコンの保存
		$saveData = array();
		if ($usersIcon) {
			$saveData['id'] = $usersIcon['Icon']['id'];
		}
		debug($this->request->data);
		$saveData['user_id'] = $user['id'];
		$saveData['image'] =file_get_contents($this->request->data['Icon']['image']['tmp_name']);
		$this->Icon->save($saveData);

		$this->Flash->success('ユーザアイコンを保存しました。', array('clear' => true));

		// アイコン表示の為リダイレクト
		return $this->redirect($this->referer());
  }


  /**
   * ユーザアイコンの表示
   *
   * @param int $userId
   * @return
   */
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
