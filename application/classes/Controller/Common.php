<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'index';
 
    public function before()
    {
        parent::before();

	$site_config = Kohana::$config->load('site_config');
	$title = $site_config->get('title');
	$description = $site_config->get('description');
	$site_name = $site_config->get('site_name');

	$header = View::factory('header');
	$sidebar = View::factory('sidebar');
	$footer = View::factory('footer');

	View::set_global('title', $title);
	View::set_global('description', $description);
	View::set_global('site_name', $site_name);

        $this->template->content = '';
        $this->template->styles = array('main');
        $this->template->scripts = '';
        $this->template->header = $header;
        $this->template->sidebar = $sidebar;
        $this->template->footer = $footer;
    }
 
} // End Common