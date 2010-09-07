# CodeIgniter Database Library

This is an abstraction of CodeIgniter's [database](http://codeigniter.com/user_guide/database/index.html) library.
Why? I need a DB library for server side scripts, and I hate ADODB's syntax.
Manually escaping queries and generating results is for n00bs.

## Installation

    cd my_project
    mkdir includes
    cd includes
    git clone git://github.com/itspriddle/codeigniter-database-library.git database

## Usage

    <?php // ~/code/my_project/test.php

    require_once(dirname(__FILE__).'/includes/database/init.php');

    $db =& load_database("mysql://root@127.0.0.1/my_database");

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


## With Active Record

    <?php // ~/code/my_project/test.php

    require_once(dirname(__FILE__).'/includes/database/init.php');

    $db =& load_database("mysql://root@127.0.0.1/my_database", TRUE);

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


## Notes

See the notes under example 3 for PHP's 
[mysql_connect](http://php.net/manual/en/function.mysql-connect.php) function
regarding sockets. If you have a non-standard MySQL installation, (eg: you are
using OS X and [homebrew](http://github.com/mxcl/homebrew)) it's probably
easier to use `127.0.0.1` rather than `localhost` as your host.

