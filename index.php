<?php
//基本目錄常量
define('BASEPATH', dirname(__FILE__));
define('APP', BASEPATH.'/app');
define('CORE', BASEPATH.'/core');

//直接返回請求文件
if (preg_match('/\.(?:png|jpg|jpeg|gif|min.css|css|js|json)$/', $_SERVER["REQUEST_URI"])) {
}
else { 
    //引入配置
    //常量配置
    require(CORE.'/config/config.php');
    //路由引入
    require(APP.'/routes/fronted.php');
    //引入常用function
    include CORE.'/library/function.php';
    
    // 擷取URL
    $request_uri = explode('/', parse_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])['path'], URI_NUM);
    
    //路由判斷
    front('/'.$request_uri[URI_FOLDER]);
    
    //no match
    show404();
}