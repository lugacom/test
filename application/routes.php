<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('articles', '<articles>/<id>-<artname>', array('id' => '[0-9]+'), array('artname' => '.+'))
        ->defaults(array(
            'controller' => 'main',
            'action' => 'article',
        ));

Route::set('static', '<action>(/<id>)', array('action' => 'about|contacts'))
        ->defaults(array(
            'controller' => 'static',
        ));

Route::set('admin', 'admin(/<controller>(/<action>(/<id>)))')
        ->defaults(array(
            'directory'  => 'adm',
            'controller' => 'main',
            'action' => 'index',
        ));

Route::set('default', '(<controller>(/<action>(/<id>)))')
        ->defaults(array(
            'controller' => 'main',
            'action' => 'index',
        ));
