<?php
class Multidots_Helloworld_Block_Hello extends Mage_Core_Block_Template
{
    /**
     * @return string
     */
    protected function _toHtml()
    {
        return "Hello World";
    }
}