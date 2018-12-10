<?php
App::uses('AppController','Controller');
App::uses('Sanitize','Utility');

class SampleController extends AppController{

	public function index(){
		$this->layout="Sample";
		$this->set("title_for_layout","Index PageX");
		$this->set("msg","hello!");
		$this->set("datas",array("One","Two"));
		//$date = new DateTime();
		//$date->setTimeZone(new DateTimeZone('Asia/Tokyo'));
		//$str = $date->format("H&#58;i&#58;s");
		//$this->redirect("./other/" . urlencode($str));
		
		$this->modelClass = null;
		if($this->request->data){
			$result = "[result]";
			$result .="<br>text1:".Sanitize::StripAll($this->request->data['text1']);
			$result .="<br>check1:".$this->request->data['check1'];
			$result .="<br>radio1:".$this->request->data['radio1'];
			$result .="<br>select1:".$this->request->data['select1'];
		}else{
			$result = "no data.";
		}
		$this->set("result",$result);
		
	}

	public function form(){
		$text1=$this->data["text1"];
		$check1=isset($this->data["check1"]) ?
			 "On":"Off";
		$radio1=$this->data["radio1"];
		$this->set("text1",Sanitize::stripAll($text1));
		$this->set("check1",$check1);
		$this->set("radio1",$radio1);
	}
	
	public function other($param){
		$this->autoRender =false;
		$str = urldecode($param);
		echo "<html><head></head><body>";
		echo "<h1>さんぷるぺーじ</h1>";
		echo "<p>これがさんぷるぺーじ</p>";
		echo "<p>おくられた値：".$str."</p>";
		echo "</body></html>";
	}
	
	public function other2(){
		$this->autoRender =false;
		echo "<html><head></head><body>";
		echo "<h1>さんぷるぺーじ</h1>";
		echo "<p>これがさんぷるぺーじ2</p>";
		echo "</body></html>";
	}
}
?>