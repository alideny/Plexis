<?php
/*
| ---------------------------------------------------------------
| Environment
| ---------------------------------------------------------------
|
| This is the error level of which you would like to show when
| viewing the website. This should be set to 2 (all errors + debugging) 
| when developing or testing, and just 1 (only fatal erros, no debugging) 
| for live sites.
|
| Levels:
| 	2 = Development, Set at this level when all errors are to be displayed
|	1 = Production, Enabled when your site is live on the web. Only
|       fatal errors will be shown.
*/

$config['environment'] = 2;


/*
| ---------------------------------------------------------------
| Log_level
| ---------------------------------------------------------------
|
| Logging Level. Error and Info messages are stored in the 
| "/system/logs/system_logs.log" file, and Debug messages are
| stored in the "/system/logs/debug.log" file.
|   0 = Disabled
|   1 = Errors only
|   2 = Debug, and Errors only
|   3 = All including Debug, Errors, and Info logs
|
*/

$config['log_level'] = 2;

/*
| ---------------------------------------------------------------
| Catch_fatal_errors
| ---------------------------------------------------------------
|
| Set to 1 to catch fatal errors and parse errors. Best to disable
| if already using a special debugger such as Xdebug
|
*/

$config['catch_fatal_errors'] = 1;


/*
| ---------------------------------------------------------------
| Core_language
| ---------------------------------------------------------------
|
| The language folder in system/language/ <language> / that you
| wish to use for error reporting
|
*/

$config['core_language'] = 'en';


/*
| ---------------------------------------------------------------
| Default_controller
| ---------------------------------------------------------------
|
| This is the default controller that loads when no path is givin
|
*/

$config['default_controller'] = 'welcome';


/*
| ---------------------------------------------------------------
| Default_action
| ---------------------------------------------------------------
|
| This is the default action that loads when no action is givin
|
*/

$config['default_action'] = 'index';



/// =====[ PlexisCMS Users ] DONOT Edit Below This Line! ===== ///

/*
| ---------------------------------------------------------------
| Qeury Strings
| ---------------------------------------------------------------
|
| 'enable_query_strings' - When enabled, you can use a normal query 
|   string using the set triggers ( example.com/?c=controller&m=function ),
|   addition params in the query string are passed in order to the
|   functions arguments. by default (FALSE), Frostbite will use pretty
|   urls ( example.com/controller/action/param1/param2 ). Servers lacking 
|   mod_rewrite support will need this set to TRUE
|
*/
$config['enable_query_strings'] = FALSE;
$config['controller_param'] = 'c';
$config['action_param'] = 'm';


/*
| ---------------------------------------------------------------
| Auto load Libraries
| ---------------------------------------------------------------
|
| These are the classes located in the core/libraries folder
| or in your application/libraries folder. Use the format below
| to define which librarys are loaded. Donot prefix the classes
| as the prefixed classes will load automatically
|
| Format: array('Session', 'Database', 'Parser');
|
*/

$config['autoload_libraries'] = array('User', 'Template', 'Statistics');


/*
| ---------------------------------------------------------------
| Helpers
| ---------------------------------------------------------------
|
| These are the helper files located in the core/helpers folder
| or in your application/helpers folder.
|
| Format: array('helper_file', 'helper_file');
|
*/

$config['autoload_helpers'] = array(
    'config', 
    'plexis_core', 
    'plexis_language', 
    'plexis_realms', 
    'plexis_modules', 
    'plexis_templates', 
    'url'
);
// EOF