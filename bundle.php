<?php

/**
 * Twitter for Laravel
 * 
 * The beginings of Twitter support in Laravel, starting with Bootstrap.
 * 
 * @package     Bundles
 * @subpackage  Twitter
 * @author      Phill Sparks <me@phills.me.uk>
 * 
 * @see  http://github.com/sparksp/laravel-twitter
 * @see  http://twitter.github.com/bootstrap/
 */

Autoloader::map(array(
	'Twitter\\Bootstrap\\Form' => __DIR__.DIRECTORY_SEPARATOR.'bootstrap'.DIRECTORY_SEPARATOR.'form'.EXT,
));
