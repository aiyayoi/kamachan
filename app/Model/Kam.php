<?php
	App::uses('AppModel','Model');


class Kam extends AppModel{
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'users_id'
        )
    );
 public $validate = array(
        'users_id' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'ログインが必要'
            )
        ),
        'body' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'なんか書いて'
            )
        )
    );


}

?>
