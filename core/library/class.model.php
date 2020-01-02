<?php
namespace core\library;
if ( ! defined('BASEPATH')) exit('非法入口');
include_once(CORE.'/library/Medoo/src/Medoo.php');
use Medoo\Medoo;
class model extends Medoo
{
	public function __construct()
	{
        $database = array(
			'database_type' => 'sqlite',
			'database_file' => APP.'/DB/MoSiYoung.db'
		);
		parent::__construct($database);
	}
}