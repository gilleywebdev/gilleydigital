<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('America/Chicago');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => '/',
	'index_file' => FALSE,
	//development
	'profile' => Kohana::$environment !== Kohana::PRODUCTION,
	'errors'  => Kohana::$environment !== Kohana::PRODUCTION,
	//production
	'caching' => Kohana::$environment === Kohana::PRODUCTION,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
/** CUSTOM **/
	'admin'			=> MODPATH.'admin',			// Standardized admin section.
	'admin_info'	=> MODPATH.'admin_info',	// Info module for admin
//	'download'		=> MODPATH.'download',		// Easy download headers
	'custom404'		=> MODPATH.'custom404',		// Custom 404
	'forms'			=> MODPATH.'forms',			// Contact form. USES: plugins, email, info
	'assets'		=> MODPATH.'assets',		// Assets for including
	'plugins'		=> MODPATH.'plugins',		// Asset and plugin manager
	'info'			=> MODPATH.'info',			// Site-wide contact info manager
	'static'		=> MODPATH.'static',		// Simple static pages. USES: plugins, helper
	'helper'		=> MODPATH.'helper',

/** INSTALLED **/
	'email'			=> MODPATH.'email',			// Email
		
/** KOHANA **/
	'auth'			=> MODPATH.'auth',			// Basic authentication
//	'cache'			=> MODPATH.'cache',			// Caching with multiple backends
//	'codebench'		=> MODPATH.'codebench',		// Benchmarking tool
	'database'		=> MODPATH.'database',		// Database access
//	'image'			=> MODPATH.'image',			// Image manipulation
	'orm'			=> MODPATH.'orm',			// Object Relationship Mapping
//	'unittest'		=> MODPATH.'unittest',		// Unit testing
	'userguide'		=> MODPATH.'userguide',		// User guide and API documentation
));


if (Kohana::$errors === FALSE)
{
	set_exception_handler(array('Kohana_Exception_Custom', 'handler'));
}

if (Kohana::$environment !== Kohana::PRODUCTION)
{
	Kohana::$config->attach(new Kohana_Config_File('config/development'));
}

// Change this per site
Cookie::$salt = 'change_me';

// Attach database reader/writer for config
Kohana::$config->load('database');
Kohana::$config->attach(new Config_Database);

// You can set this explicitly if SERVER_NAME isn't what you want
define('DOMAIN', 'gilleydigital.com');

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

/*
 * Default route defined in static module
 */