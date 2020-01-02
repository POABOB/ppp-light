<?php
namespace core\library;
if ( ! defined('BASEPATH')) exit('非法入口');

class response {
	public $data;
	public $message;
	public $errno;

	public function init($data, $message) {
		if(gettype($data) === 'string') {
			$this->message = $data;
			$data = null;
			$message = null;
		}

		if($data) {
			$this->data = $data;
		}

		if($message) {
			$this->message = $message;
		}
	}

	public static function Success($data, $message = null) {
   		$res = new response();
		$res->init($data, $message);

		$res->errno = 0;
		return $res;
	}
	public static function Error($data, $message = null) {
		$res = new response();
		$res->init($data, $message);
		// $this->init($data, $message);
		$res->errno = -1;
		return $res;
	}
}