<?php
/*
NOTICE OF LICENSE

This source file is subject to the NekloEULA that is bundled with this package in the file ICENSE.txt.

It is also available through the world-wide-web at this URL: http://store.neklo.com/LICENSE.txt

Copyright (c)  Neklo (http://store.neklo.com/)
*/


class Neklo_Twitter_Block_Widget_Timeline extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{
    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig()->isEnabled() && $this->getData('is_enabled') && $this->hasData('widget_html');
    }

    /**
     * @return null|string
     */
    public function getWidgetHtml()
    {
        if (!$this->hasData('widget_html')) {
            return null;
        }
        return $this->getData('widget_html');
    }

    /**
     * @return Neklo_Twitter_Helper_Config
     */
    public function getConfig()
    {
        return Mage::helper('neklo_twitter/config');
    }
}