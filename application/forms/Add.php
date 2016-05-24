<?php

class Application_Form_Add extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $url = new Zend_Form_Element_Text('url');
        $url -> setLabel('url');
        $url->setAttrib('class', 'form-control');

        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttrib('class', 'btn btn-primary');
        $this-> addElements(array($url, $submit));
    }


}

