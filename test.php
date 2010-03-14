<?php
define('HOMEDIR', realpath(dirname(__FILE__)).'/');
define('APPPATH', HOMEDIR.'application/');
define('BASEPATH', HOMEDIR.'system/');


define('EXT', '.php');
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('FCPATH', str_replace(SELF, '', __FILE__));

require_once('system/database/bootstrap.php');
$db =& load_database("mysql://root@localhost/voip_development");

//var_dump($db);
print_r($db->query("select * from users limit 1")->result_array());
