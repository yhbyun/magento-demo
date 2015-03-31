<?php

class TutsPlus_Demo_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function sayHi()
    {
        echo 'hi from data!';
    }

    public function beautifyPrice($price)
    {
        if (! isset($price)) {
            return 'unknown price';
        }

        return number_format($price, 2, '.', ',');
    }
}
