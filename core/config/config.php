<?php
if ( ! defined('BASEPATH')) exit('非法入口');
// require適合用來引入靜態的內容，而include則適合用來引入動態的程式碼。
date_default_timezone_set("Asia/Taipei");
header('Content-type: text/html;charset=utf-8');
// DEBUG模式
define('DEBUG', 1);
if(1) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    define('URI_FOLDER',2);
    // URI的字段數
    define('URI_NUM',3);
} else {
    //上線後
    ini_set('display_errors', 0);
}
// define('URI_FOLDER',1);
// define('URI_NUM',2);
ini_set("session.cookie_httponly", 1); 
ini_set("memory_limit","128M");
//Session
session_start([
    //session for 3 days
    'cookie_lifetime' => 259200,
]);
