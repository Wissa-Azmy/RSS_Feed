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
    }

    public function addAction()
    {

    	 $links = $this->model->getFeeds();
        $form = new Application_Form_Add();

        if ($this->getRequest()->isPost()) {
            if ($form->isValid($this->getRequest()->getParams())) {
                $data = $form->getValues();
                // die(var_dump($data['url']));
                    if ($this->model->addUrl($data['url'])) {
                        $this->redirect('rssfeed/');
                    }
            }
        }
        $this->view->form = $form;
    }


}

