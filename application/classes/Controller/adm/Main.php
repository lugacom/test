<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Adm_Main extends Controller_Adm_Common {

    public function action_index() {

        $articles = array();

        $content = View::factory('/adm/main')
                ->bind('articles', $articles);

        $articles = Model::factory('Articles')->get_all();

        $this->template->content = $content;
    }

    public function action_article() {
        $id = $this->request->param('id');

        $content = View::factory('/adm/single')
                ->bind('article', $article);
//                        ->bind('comments', $comments);

        $article = Model::factory('Articles')->get_article($id);

//        $comments_url = 'comments/' . $id;
//        $comments = Request::factory($comments_url)->execute();

        $this->template->title = $article['title'];
        $this->template->content = $content;
    }

}

// End Main
