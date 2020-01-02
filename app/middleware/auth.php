<?php
if ( ! defined('BASEPATH')) exit('非法入口');
//check SESSION for admin
function auth() {
    if(!(isset($_SESSION['user'])))
    {
        redirect('/admin/login');
    }
}