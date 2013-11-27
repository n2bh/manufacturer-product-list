<?php

class Ip_Manufacturer_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        if($manufacturer_id = $this->getRequest()->getParam('manufacturer_id', null)){
            Mage::register('manufacturer_id', $manufacturer_id);
            $this->loadLayout();
            $this->renderLayout();
        } else {
            $this->norouteAction();
        }
    }

}