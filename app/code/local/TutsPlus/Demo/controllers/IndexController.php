<?php

class TutsPlus_Demo_IndexController extends Mage_Core_Controller_Front_Action
{
    public function sayHelloAction()
    {
        //die(get_class($this));
        //Mage::log(get_class($this), null, 'debug.log');

        /*
        echo "Hello World";
        var_dump($this->getRequest()->getParams());
        var_dump($this->getRequest()->getParam('id'));
        */

        $this->loadLayout();

        //print_r($this->getLayout()->getUpdate()->getHandles());
        //die();

        //header('Content-Type: text-xml');
        //die($this->getLayout()->getNode()->asXML());

        $this->renderLayout();
    }

    public function indexAction()
    {
        echo "Default action";
    }
}
