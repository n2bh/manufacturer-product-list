<?php

class Ip_Manufacturer_Block_Browse extends Mage_Core_Block_Template
{

    public function getManufacturers()
    {
        $attribute = Mage::getModel('eav/entity_attribute')
            ->loadByCode('catalog_product', 'manufacturer');
        $collection = Mage::getResourceModel('eav/entity_attribute_option_collection')
            ->setAttributeFilter($attribute->getAttributeId())
            ->setStoreFilter(0, false);
        return $collection;
    }


}