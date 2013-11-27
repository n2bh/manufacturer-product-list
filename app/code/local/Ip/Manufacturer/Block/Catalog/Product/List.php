<?php

class Ip_Manufacturer_Block_Catalog_Product_List extends Mage_Catalog_Block_Product_List
{

    /**
     * Default toolbar block name
     *
     * @var string
     */
    protected $_defaultToolbarBlock = 'manufacturer/catalog_product_list_toolbar';

    /**
     * Retrieve loaded category collection
     *
     * @return Mage_Eav_Model_Entity_Collection_Abstract
     */
    protected function _getProductCollection()
    {
        if (is_null($this->_productCollection)) {
            $manufacturer_id = Mage::registry('manufacturer_id');
            $collection = Mage::getModel('catalog/product')->getCollection();
            $collection->addAttributeToFilter('manufacturer', $manufacturer_id);
            $collection->addAttributeToSelect('*');
            Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($collection);
            Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($collection);
            $this->_productCollection = $collection;
        }
        return $this->_productCollection;
    }

}