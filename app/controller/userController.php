<?php
namespace app\controller\api;

class userController{
    public function index() {
        display('index.php', 'assign', array('我是assign過來的！', '你好˙'));
    }
}