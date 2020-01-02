<?php
if ( ! defined('BASEPATH')) exit('非法入口');
function front($url){
    switch ($url) {
        //前台
        //index
        //藉由Controller調用視圖
        case '/':
            require(APP.'/controller/userController.php');
            $user = new app\controller\api\userController();
            $user->index();
            exit();
        //單純調用視圖
        case '/views':
            display('index.php', 'assign', array('我是assign過來的！', '你好˙'));
            exit();   
        //藉由Controller調用Api
        case '/api':
            require(APP.'/controller/apiController.php');
            $user = new app\controller\api\userController();
            $user->API();
            exit();
    }
}