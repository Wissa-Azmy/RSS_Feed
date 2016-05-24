<?php

class RssfeedController extends Zend_Controller_Action
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
        $this->view->links = $links;
    }

    public function addAction()
    {
    	$links = $this->model->getFeeds();
        $form = new Application_Form_Add();
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($this->getRequest()->getParams())) {
                $data = $form->getValues();
                $is_rss = pathinfo($data['url'],PATHINFO_EXTENSION);
                if ($is_rss != '' && $is_rss == 'rss') {
                    if ($this->model->addUrl($data['url'])) {
                        $this->redirect('rssfeed/');
                    }
                }
                else
                {
                	$this->view->Error = "rss links are permitted only";
                }
            }
        }
        $this->view->form = $form;
    }


}

