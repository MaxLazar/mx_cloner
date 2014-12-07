<?php
if (! defined('MX_CLONER_KEY'))
{
	define('MX_CLONER_NAME', 'MX Cloner');
	define('MX_CLONER_VER',  '1.2.7');
	define('MX_CLONER_KEY', 'mx_cloner');
	define('MX_CLONER_AUTHOR',  'Max Lazar');
	define('MX_CLONER_DOCS',  'http://www.eec.ms/add-on/mx-cloner');
	define('MX_CLONER_DESC',  'Adds the Ability to Clone Entries');
}


/**
 * < EE 2.6.0 backward compat
 */

if ( ! function_exists('ee'))
{
    function ee()
    {
        static $EE;
        if ( ! $EE) $EE = get_instance();
        return $EE;
    }
}