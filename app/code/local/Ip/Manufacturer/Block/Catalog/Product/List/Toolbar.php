<?php

class Ip_Manufacturer_Block_Catalog_Product_List_Toolbar extends Mage_Catalog_Block_Product_List_Toolbar
{

    /**
     * Render pagination HTML
     *
     * @return string
     */
    public function getPagerHtml()
    {
        $pagerBlock = $this->getLayout()
            ->createBlock('page/html_pager')
            ->setCollection($this->getCollection());
        $this->setChild('product_list_toolbar_pager', $pagerBlock);
        return parent::getPagerHtml();
    }
}