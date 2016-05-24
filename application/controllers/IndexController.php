<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
         $this->model = new Application_Model_DbTable_Rss();
    }

    public function indexAction()
    {
        // action body
        $links = $this->model->getFeeds();
        $feed = [];
        foreach ($links as $value) {
        	$news = new Zend_Feed_Rss($value['url']);
            foreach ($news as $pieceOfNews) {
                array_push($feed, array('title' => $pieceOfNews->title(), 'description' => $pieceOfNews->description(),'pubDate' => $pieceOfNews->pubDate(),'cat' => $pieceOfNews->author()));
            }
        }
        $this->view->feed = $feed;
    }
}

