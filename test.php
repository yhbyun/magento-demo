<?php

require_once 'app/Mage.php';

Mage::app();

$product = new TutsPlus_Demo_Model_Product();
$product->sayHello();

$product2 = Mage::getModel('demo/product');
$product2->sayHello();

$helper = Mage::helper('demo/customer');
$helper->sayHi();

$helper2 = Mage::helper('demo');
$helper2->sayHi();

$customer = new Mage_Customer_Model_Session();
$customer2 = Mage::getModel('customer/session');

echo get_class($customer2);

$category = Mage::getModel('catalog/category')->load(2);
var_dump($category->getChildren());

//--------------- CRUD

$product3 = Mage::getModel('catalog/product')->load(231);
//var_dump($product3);
echo $product3->getData('meta_title');
echo $product3->getMetaTitle();

$product3->setData('meta_title', 'updated');
$product3->setMetaTitle('updated');
//$product3->setMetaTitle('updated')->save(); //save databse

echo $product3->getMetaTitle();

// delete databse
//Mage::app('admin');
//echo $product3->delete();

$products = Mage::getModel('catalog/product')->getCollection();

foreach ($products as $product) {
    // getName은 null을 반환한다.
    echo $product->getName();
}

// name은 catalog_product_entity에 존재하지 않는다. EAV
$products = Mage::getModel('catalog/product')->getCollection()
    ->addAttributeToSelect(['name', 'price'])
    ->addFieldToFilter('price', ['gt' => 100]);

foreach ($products as $product) {
    echo $product->getName();
}
