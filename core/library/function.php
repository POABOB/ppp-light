<?php
if ( ! defined('BASEPATH')) exit('非法入口');
// show msg like var_dump
function p($var)
{
	if (is_bool($var)) {
		var_dump($var);
	} else if (is_null($var)) {
		var_dump(NULL);
	} else {
		echo "<pre>".print_r($var, true)."</pre>";
	}
}

//判斷方法
function http_method($method = 'GET')
{
    if (!(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == $method)) {
		show404();
    } 
}

//顯示404
function show404()
{
    header('HTTP/1.1 404 Not Found');
    header("status: 404 Not Found");
    exit();
}

//返回json格式資料
function json($array)
{
    header('Content-Type:application/json; charset=utf-8');
    echo json_encode($array, JSON_UNESCAPED_UNICODE);
    exit();
}

//獲取json
function post_json(){
	$json = file_get_contents('php://input');
	return json_decode($json, true);
}

function redirect($url = '/')
{
    header("Location: $url");
    exit();
}

// 前後端分離不需要使用這些功能
// 賦值給視圖
// 顯示html或是php
function display($file, $name=null, $value=null)
{
    $assign[$name] = $value;
    //原先view
    $file = APP.'/views/'.$file;
    if(is_file($file)) {
        extract($assign);
        include $file;
    }
}