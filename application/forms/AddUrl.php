<?php

class Application_Form_AddUrl extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $url = new Zend_Form_Element_Text('url');
        $url -> setLabel('url');
        $sumbit = Zend_Form_Element_Submit('submit');
        $this-> addElements(array($url, $submit));
    }


}

