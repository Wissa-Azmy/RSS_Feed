<?php

class RssController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        $this->model = new Application_Model_DbTable_User();

    }

    public function indexAction()
    {
        // action body
    }

    public function addAction()
    {
        // action body
        $form = new Application_Form_AddUrl();
        if($this->getRequest()->isPost()){
            if($form->isValid($this->getRequest()->getParamas())){
                $data = $form->getValues();
                $url = $data['url'];
                $this->model->addUrl($url);
                $this->render('add');
            }
        }
        $this->view->form = $form;
    }


}



