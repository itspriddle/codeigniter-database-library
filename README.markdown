CodeIgniter Database Library
===
This is an abstraction of CodeIgniter's [database](http://codeigniter.com/user_guide/database/index.html) library.
Why? I need a DB library for server side scripts, and I hate ADODB's syntax.
Manually escaping queries and generating results is for n00bs.

Usage
---

    <?php

    require_once('bootstrap.php');

    $db =& load_database("mysql://root@localhost/my_database");

    $query = $db->query("select * from users where login = ? limit 1", "joshua");

    var_dump($query->row_array());

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


With Active Record
---

    <?php

    require_once('bootstrap.php');

    $db =& load_database("mysql://root@localhost/my_database", TRUE);

    $db->select('*');
    $db->from('users');
    $db->where('login', 'joshua');
    $query = $db->get();

    var_dump($query->row_array());

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

