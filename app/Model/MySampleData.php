<?php
	App::uses('AppModel','Model');

class MySampleData extends AppModel{

	public $validate = array(
		'name'=>array(
			'rule'=>'isUnique',
			'required'=>true,
			'message'=>'かならずユニークな名前'
		),
		'mail'=>array(
			'rule'=>'email',
			'required'=>true,
			'message'=>'メールアドレス'
		),
		'tel'=>array(
			'rule'=>'alphaNumeric',
			'required'=>true,
			'message'=>'半角英数字、-無'
		)
	);


}
?>