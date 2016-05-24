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
        foreach ($links as $value) {
        	# code...
        }
    }


}

