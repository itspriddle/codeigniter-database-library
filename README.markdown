CodeIgniter Database Library
===
This is an abstraction of CodeIgniter's [database](http://codeigniter.com/user_guide/database/index.html) library.
Why? I need a DB library for server side scripts, and I hate ADODB's syntax.
Manually escaping queries and generating results is for n00bs.

Usage
---

    <?php

    require_once('database/bootstrap.php');


    $db =& load_database("mysql://root@localhost/my_database");
    var_dump($db->query("select * from users where login = ? limit 1", "joshua")->result_array());

    array(1) {
      [0]=>
      array(4) {
        ["id"]=>
        string(2) "1"
        ["login"]=>
        string(6) "joshua"
        ["password"]=>
        string(40) "8aa38sad8b5efdcb7946d00e1c7445d154f18462"
        ["created_at"]=>
        string(19) "2010-03-14 11:03:57"
      }
    }

