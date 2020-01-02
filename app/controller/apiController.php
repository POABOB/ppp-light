<?php
namespace app\controller;
include CORE.'/library/class.response.php';
use core\library\response;

class apiController {
    public function index() {
        json(response::Success('成功返回'));
    }
}