<?php

require_once('database/bootstrap.php');


$db =& load_database("mysql://root@localhost/my_database");
var_dump($db->query("select * from users where login = ? limit 1", "joshua")->result_array());
