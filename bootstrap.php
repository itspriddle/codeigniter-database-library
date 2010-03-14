<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2009, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

define('EXT', '.php');
define('BASEPATH', realpath(dirname(__FILE__)).'/');
define('APPPATH', BASEPATH);

// CI Version
define('CI_VERSION',	'1.7.2');

/*
 * ------------------------------------------------------
 *  Load the global functions
 * ------------------------------------------------------
 */
require('codeigniter/Common'.EXT);

/*
 * ------------------------------------------------------
 *  Load the compatibility override functions
 * ------------------------------------------------------
 */
require('codeigniter/Compat'.EXT);

/*
 * ------------------------------------------------------
 *  Load the framework constants
 * ------------------------------------------------------
 */
require('codeigniter/Constants'.EXT);

/*
 * ------------------------------------------------------
 *  Define a custom error handler so we can log PHP errors
 * ------------------------------------------------------
 */
set_error_handler('_exception_handler');

if ( ! is_php('5.3'))
{
	@set_magic_quotes_runtime(0); // Kill magic quotes
}

/*
 * ------------------------------------------------------
 *  Instantiate the base classes
 * ------------------------------------------------------
 */

$CFG =& load_class('Config');
if ( ! is_php('5.0.0'))
{
	load_class('Loader', FALSE);
	require('codeigniter/Base4'.EXT);
}
else
{
	require('codeigniter/Base5'.EXT);
}

require_once(dirname(__FILE__).'/DB.php');

function &load_database($params = '', $active_record_override = FALSE)
{
	$database =& DB($params, $active_record_override);
	return $database;
}


/* End of file CodeIgniter.php */
/* Location: ./system/database/bootstrap.php */