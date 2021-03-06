<?php
namespace models;

class base extends \core\models\base{
	public $tbVersion;
	
	function insertValidate($data=[]){
		if($this->tbVersion){
			$data['version'] = date('YmdHis');
			db($this->tbVersion)->insert($data);
		}
		return parent::insertValidate($data);
	}
	
	function updateValidate($condition=[] , $data=[]){
		if($this->tbVersion){
			$data['version'] = date('YmdHis');
			db($this->tbVersion)->insert($data);
		}
		return parent::updateValidate($condition,$data);
	}
	
	function pager($arr = []){
		$url = $arr['url']?:'admin/posts/index';
		$data = parent::pager([
	 			'url'=>$url,
	 			'size'=>10,
	 			'sort'=>[
	 				'_id'=>-1
	 			],
	 			'condition'=>[
	 				//'status'=>1	
	 			],
	 	]);
	 	return $data;

	}

	
}