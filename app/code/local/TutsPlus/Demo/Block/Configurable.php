<?php

class TutsPlus_Demo_Block_Configurable extends Mage_Core_Block_Template
{
    public function getConfigurableProducts()
    {
        //return 'it works';

        $products = Mage::getMOdel('catalog/product')
            ->getCollection()
            ->addAttributeToSelect(['name', 'price', 'url_key'])
            ->addAttributeToFilter('type_id', ['eq' => 'configurable']);

        return $products;
    }
}
