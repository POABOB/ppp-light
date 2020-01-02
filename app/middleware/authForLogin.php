<?php
if ( ! defined('BASEPATH')) exit('非法入口');
function authForLogin() {
    if((isset($_SESSION['user'])))
    {
        redirect('/admin');
    }
}