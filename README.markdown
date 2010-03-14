CodeIgniter Database Library
===
This is an abstraction of CodeIgniter's [database](http://codeigniter.com/user_guide/database/index.html) library.
Why? I need a DB library for server side scripts, and I hate ADODB's syntax.
Manually escaping queries and generating results is for n00bs.

Usage
---

    <?php

    define('HOMEDIR', realpath(dirname(__FILE__)).'/');
    define('APPPATH', HOMEDIR.'application/');

    require_once('database/bootstrap.php');


    $db =& load_database("mysql://root@localhost/my_database");
    var_dump($db->query("select * from users where login = ? limit 1", "joshua")->result_array());

