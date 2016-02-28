<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Sidebar extends Controller_Common {

    public function action_widget() {

        $articles = array();

        $widget = View::factory('sidebar')
                ->bind('articles', $articles);

        $articles = Model::factory('Articles')->get_all();

        $this->template->content = $widget;
    }
}
